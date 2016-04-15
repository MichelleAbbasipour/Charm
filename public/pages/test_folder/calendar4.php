<?php /* *************** HEADER *************** */
    $title='Calendar' ;
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
    $output = "";
    $message = "";

    //<th colspan="5" id="tableHeader"><?php echo $title . " " . $year;></th>
 
    //set treatment session variables from buttons clicked and static variables set
    if(isset($_POST['trt_btn1'])) {$_SESSION['t_id'] = $_POST['trt_btn1'];}
    if(isset($_POST['trt_btn2'])) {$_SESSION['t_name'] = $_POST['trt_btn2'];} 
    if(isset($_POST['trt_btn3'])) {$_SESSION['t_desc'] = $_POST['trt_btn3'];} 
    if(isset($_POST['trt_btn4'])) {$_SESSION['t_duration'] = $_POST['trt_btn4'];} 
    if(isset($_POST['trt_btn5'])) {$_SESSION['t_price'] = $_POST['trt_btn5'];} 
    if(isset($_SESSION['c_id'])) {$c_id = $_SESSION['c_id'] ;}else $c_id='0';
    if(isset($_SESSION['e_id'])) {$c_id = $_SESSION['e_id'] ;}else $e_id='0';

        //today's date set to today
        //$date = time();

        $date = (!isset($_GET['month']) && !isset($_GET['year'])) ? time() : strtotime($_GET['month'] . '/1/' . $_GET['year']);

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

<!--- *** MAIN CONTENT *** -->
<div class="row" id="main_content">
<div class="container-fluid">
<div class="col-xs-12 centered">
    
    <h2>Calendar</h2>
    
    <div class="row">
        <a href="<?php echo $navPath . '/pages/test_folder/calendar4.php'?>">
            <button type="button" class="btn">REFRESH</button>
        </a>
    </div>  
    
    <div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th colspan="1"> 
                <form method="POST" action="" id="previousMonth" name="previousMonth">
                    <input name="previousMonth" id="previousMonth" type="hidden" />
                    <button type="button" onclick="document.previousMonth.submit()" value="Submit">
                    <a href="?month=<?php echo $previousMonth ?>&year=<?php if($month == 0)$year--; echo $year?>">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </a>
                    </button>
                </form>
            </th>
            
            <th colspan=5><?php echo $title . " " . $year ?></th>
            
            <th colspan="1">  
                <form method="POST" action="" id="nextMonth" name="nextMonth">
                    <input name="nextMonth" id="nextMonth" type="hidden" />
                    <button type="button" onclick="document.nextMonth.submit()" value="Submit">
                        <a href="?month=<?php echo $nextMonth?>&year=<?php if($month == 12)$year++; echo $year?>">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </a>
                    </button>
                </form>
            </th>
        </tr>
        <tr>
            <td width=40>S</td>
            <td width=40>M</td>
            <td width=40>T</td>
            <td width=40>W</td>
            <td width=40>T</td>
            <td width=40>F</td>
            <td width=40>S</td>
        </tr>
        
        <?php
        
        echo "<tr>";
        
        while ($blank > 0){
            echo "<td></td>";
            $blank = $blank-1;
            $dayCount++;
        }

        while($dayNumber <= $daysInMonth){
            echo "<td> <a href='general-courses/?day=$dayNumber $title $year'>$dayNumber</a></td>";
            //echo "<td>$dayNumber</td>";
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
        
        echo "</tr></table>";
    
        ?>
    </div>
          
    <?php echo $output; ?>
    <?php echo $message; ?>
        
</div><!-- end of .main content -->
</div><!-- end of container fluid -->
</div><!-- end of #main content -->

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>