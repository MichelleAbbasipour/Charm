<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Calendar' ;
    $output = "";

    //<button type='button' value='Submit' class='btn day_btn'>$dayNumber</a>


    //include the code within 'header.php' on this page
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

    //set session variables from variables retrieved from previous page
    if(isset($_POST['trt_btn1'])) {$_SESSION['t_id'] = $_POST['trt_btn1'];}
    if(isset($_POST['trt_btn2'])) {$_SESSION['t_name'] = $_POST['trt_btn2'];} 
    if(isset($_POST['trt_btn3'])) {$_SESSION['t_desc'] = $_POST['trt_btn3'];} 
    if(isset($_POST['trt_btn4'])) {$_SESSION['t_duration'] = $_POST['trt_btn4'];} 
    if(isset($_POST['trt_btn5'])) {$_SESSION['t_price'] = $_POST['trt_btn5'];} 
    if(isset($_SESSION['c_id'])) {$c_id = $_SESSION['c_id'] ;}else $c_id='0';
    if(isset($_SESSION['e_id'])) {$c_id = $_SESSION['e_id'] ;}else $e_id='0';

    //*** CALENDAR VARIABLES ***
    $date = (!isset($_GET['month']) && !isset($_GET['year'])) ? time() : strtotime($_GET['month'] . '/1/' . $_GET['year']);

    $todaysDate = date("Y-m-d");
    $output = $todaysDate;

    //set variables for day, month and year using the $date variable
    $day = date('d', $date);
    $month = date('m', $date);
    $year = date('Y', $date);

    //set first day of the month
    $firstDay = mktime(0,0,0,$month,1,$year);

    //get the name of the month from the $firstDay variable
    $title = date('F', $firstDay);

    //determine what day of the week the first day falls on
    $dayOfWeek = date('D', $firstDay);

    //determine how many blank cells needed as per the day of the week
    switch($dayOfWeek){
        case "Sun": $blank = 0; break;
        case "Mon": $blank = 1; break;
        case "Tue": $blank = 2; break;
        case "Wed": $blank = 3; break;
        case "Thu": $blank = 4; break;
        case "Fri": $blank = 5; break;
        case "Sat": $blank = 6; break; 
    }

    //find out how many days are in the month
    $daysInMonth = cal_days_in_month(0, $month, $year);

    $dayCount = 1;

    $dayNumber = 1;

    $previousMonth = $month-1;
    $nextMonth = $month+1;

    if ($month == 12){
        $nextMonth = 1;
    }
    if ($month == 0){
        $previousMonth = 1;
    }

?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Calendar</h2>
            
            <a href="<?php echo $navPath . '/pages/clients/c_makeappt.php'?>">
                <button type="button" class="btn btn-secondary">Start Search Again</button>
            </a>
            
            <div class="row">
                <h4>BUSINESS</h4>
                <p>Business ID: <?php echo $_SESSION['b_id']?></p>
                <p>Business Name: <?php echo $_SESSION['b_name']?></p>
                <p>Business Address: <?php echo $_SESSION['b_address']?></p>
                <p>Business Email: <?php echo $_SESSION['b_email']?></p>
            </div>
            
            <div class="row">
                <h4>TREATMENT</h4>
                <p>Treatment ID: <?php echo $_SESSION['t_id']?></p>
                <p>Treatment Name: <?php echo $_SESSION['t_name']?></p>
                <p>Treatment Description: <?php echo $_SESSION['t_desc']?></p>
                <p>Treatment Duration: <?php echo $_SESSION['t_duration']?></p>
                <p>Treatment Price: £<?php echo $_SESSION['t_price']?></p>
            </div>
            
    <!-- *** calendar *** -->
    <div class="row">
    <div class="">
    <div>
    <table class="table table-bordered">
    <tbody>
        <tr>
            <th colspan="1"> 
                <form method="POST" action="" id="previousMonth" name="previousMonth">
                    <input name="previousMonth" id="previousMonth" type="hidden" />
                    <button type="button" onclick="document.previousMonth.submit()" value="Submit">
                    <a href="?month=<?php echo $previousMonth ?>&year=<?php if($month == 0)$year--; echo $year?>#cal_jump">
                        <span class="glyphicon glyphicon-chevron-left icon" aria-hidden="true"></span>
                    </a>
                    </button>
                </form>
            </th>
            
            <th colspan=4 id="tableHeader"><a name="cal_jump"><?php echo $title . " " . $year ?></a></th>
            <th colspan=1><div><button class="btn today_btn">today</button></div></th>
            <th colspan="1">  
                <form method="POST" action="" id="nextMonth" name="nextMonth">
                    <input name="nextMonth" id="nextMonth" type="hidden" />
                    <button type="button" onclick="document.nextMonth.submit()" value="Submit">
                        <a href="?month=<?php echo $nextMonth?>&year=<?php if($month == 12)$year++; echo $year?>#cal_jump">
                            <span class="glyphicon glyphicon-chevron-right icon" aria-hidden="true"></span>
                        </a>
                    </button>
                </form>
            </th>
        </tr>
        <tr>
            <td>S</td>
            <td>M</td>
            <td>T</td>
            <td>W</td>
            <td>T</td>
            <td>F</td>
            <td>S</td>
        </tr>
        
        <?php
        
        echo "<tr>";
        
        while ($blank > 0){
            echo "<td></td>";
            $blank = $blank-1;
            $dayCount++;
        }

        while($dayNumber <= $daysInMonth){
            $dateToCompare = "";
            echo "<td>
                    <button type='button' value='Submit' class='btn day_btn'>$dayNumber
                    </button>
                </td>";
            if ($todaysDate == $dateToCompare) {
                $output .= $dateToCompare;
            }
            $dayNumber++;
            $dayCount++;
        
            if ($dayCount>7){
                echo "</tr><tr>";
                $dayCount = 1;
            }   
        }

        while($dayCount>1 && $dayCount <=7){
            echo "<td></td>";
            $dayCount++;
        }
        
        echo "</tr></tbody></table>";
    
        ?>
    </div>
    </div>
        </div>
          
    <?php echo $output; ?>

</div><!-- end of .main content -->
</div><!-- end of container fluid -->
</div><!-- end of #main content -->

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>