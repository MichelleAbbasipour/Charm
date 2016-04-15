<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Calendar' ;

    //include the code within 'header.php' on this page
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

    if(isset($_POST['trt_btn1'])) {
        $_SESSION['t_id'] = $_POST['trt_btn1'];
    }

    if(isset($_POST['trt_btn2'])) {
        $_SESSION['t_name'] = $_POST['trt_btn2'];
    } 

    if(isset($_POST['trt_btn3'])) {
        $_SESSION['t_desc'] = $_POST['trt_btn3'];
    } 

    if(isset($_POST['trt_btn4'])) {
        $_SESSION['t_duration'] = $_POST['trt_btn4'];
    } 

    if(isset($_POST['trt_btn5'])) {
        $_SESSION['t_price'] = $_POST['trt_btn5'];
    } 

    if(isset($_SESSION['c_id'])) {
        $c_id = $_SESSION['c_id'] ;
    }else $c_id='0';

    if(isset($_SESSION['e_id'])) {
        $c_id = $_SESSION['e_id'] ;
    }else $e_id='0';

    $message = "";

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
            
        </div>
    
<!--- *** MAIN CONTENT *** -->
<div class="main_content">
    
    <?php    
        //check if a variable has been passed into 'day'
        if (isset($_GET['day'])) {
            $day = $_GET['day'];
        } else {
            $day = date("j");
        }

        //check if a variable has been passed into 'month'
        if (isset($_GET['month'])) {
            $month = $_GET['month'];
        } else {
            $month = date("n");
        }

        //check if a variable has been passed into 'year'
        if (isset($_GET['year'])) {
            $year = $_GET['year'];
        } else {
            $year = date("Y");
        }

        //calendar variable
        $currentTimeStamp = strtotime("$day-$month-$year");

        //get current month name
        $monthName = date("F", $currentTimeStamp);

        //get how many days are in the current month
        $numDays = date("t", $currentTimeStamp);

        //set counter variable
        $counter = 0;

        //if 'add' is being passed from the URL then...
        if(isset($_GET['add'])){
            $_SESSION['c_firstname'] = $_POST['txtFName'];
            $_SESSION['c_lastname'] = $_POST['txtLName'];
            $_SESSION['c_email'] = $_POST['txtEmail'];
            $_SESSION['c_phone'] = $_POST['txtPhone'];

            $booked_date = $month."/".$day."/".$year;

            $sqlinsert = 
                "INSERT into appointments 
                (first_name, last_name, email, phone, appts_date, treatments_id, businesses_id, clients_id, employees_id, booked_date) values 
                ('".$_SESSION['c_firstname']."','".$_SESSION['c_lastname']."','".$_SESSION['c_email']."','".$_SESSION['c_phone']."','".$booked_date."','".$_SESSION['t_id']."','".$_SESSION['b_id']."','".$c_id."','".$e_id."',now())";
            
            $resultinsert = mysqli_query($conn, $sqlinsert);

            if($resultinsert){
                header('Refresh: 0; URL='.$navPath.'/pages/clients/c_redirectappt.php');
            }else {
                $message = "Event failed to be added";
            }
        }
    ?>
        
    <div class="row">
    <div class="col-xs-12">
    <!-- CALENDAR TABLE -->
    <div class="col-xs-12 centered">
        <a href=""><button type='submit' class='btn btn-primary' name=''>Go to Today</button></a>
    </div>
        
    <table class="table table-responsive table-borderless" id="cal_jump">
        <!-- next and previous month buttons -->
        <tr>
            <td>
                <button 
                    class="glyphicon glyphicon-chevron-left" 
                    aria-hidden="true"
                    type="button" 
                    name="PreviousMonth" 
                    
                    onclick="goLastMonth(<?php echo $month . ',' . $year; ?>);">
                </button>
            </td>
            <td colspan='5' id="monthTitle"><h4><?php echo $monthName.", " . $year; ?></h4></td>
            <td> 
                <button 
                    class="glyphicon glyphicon-chevron-right" 
                    aria-hidden="true" 
                    name="nextMonth" 
                    onclick="goNextMonth(<?php echo $month . ',' . $year; ?>);">
                    </button>
                </td>
        </tr>

        <!-- days of the week header -->
        <tr>
            <td width='50px'>Sun</td>
            <td width='50px'>Mon</td>
            <td width='50px'>Tue</td>
            <td width='50px'>Wed</td>
            <td width='50px'>Thu</td>
            <td width='50px'>Fri</td>
            <td width='50px'>Sat</td>
        </tr>

        <?php
            echo "<tr>";

                //loop through each of the days in the month
                for($i = 1; $i < $numDays+1; $i++, $counter++){

                    //make a timeStamp for each day in the loop
                    $timeStamp = strtotime("$year-$month-$i");

                    //if the day is 'day 1'...
                    if($i == 1){
                        //allocate the first day to the $firstDay variable
                        $firstDay = date("w", $timeStamp);

                        //make a blank cell in the table if that cell is not the first day
                        for ($j = 0; $j < $firstDay; $j++, $counter++){
                            echo "<td>&nbsp;</td>";
                        }
                    }

                    //make a new row if the day is in the last column
                    if($counter % 7 == 0){
                        echo "</tr><tr>";
                    }

                    //store variable in variable
                    $monthstring = $month;

                    //store length of variable in variable
                    $monthlength = strlen($monthstring);

                    //store variable as another variable
                    $daystring = $i;

                    //store length of variable in variable
                    $daylength = strlen($daystring);

                    //if the length of the string is equal or less than 1, add a zero to the month
                    if($monthlength <= 1){
                        $monthstring = "0".$monthstring;
                    }

                    //if the length of the string is equal or less than 1, add a zero to the month
                    if($daylength <= 1){
                        $daystring = "0".$daystring;
                    }
                    $todaysDate = date("m/d/Y");
                    $dateToCompare = $monthstring . '/' . $daystring . '/' . $year;

                    echo "<td align='center' ";

                    //if today's date is the same as the date to compare then set the class of that cell to 'today' > styling
                    if ($todaysDate == $dateToCompare) {
                        echo "class='info'";
                    } else {
                        $sqlCount = "SELECT * FROM appointments WHERE appts_date = '".$dateToCompare."'";
                        $noOfAppts = mysqli_num_rows(mysqli_query($conn, $sqlCount));

                        if($noOfAppts >= 1){
                            echo "class='success'";
                        }
                    }

                    echo ">
                        <a href='".$_SERVER['PHP_SELF'].
                        "?month=".$monthstring.
                        "&day=".$daystring.
                        "&year=".$year.
                        "&v=true#cal_jump'>".
                        $i."
                        </a></td>";
                }
            echo "</tr>";
        ?>
    </table>
    </div>
    </div>
        
    <?php
        if(isset($_GET['v'])){
            
            echo "<a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true#cal_jump'>
            
            <br>
                <div class='col-xs-12 centered'>
                    <button id='hidden' type='button' class='btn btn-primary'>Request Appointment for " . $day . " " . $month . " " . $year. "</button>
                </div>
            
            </a>";
            if(isset($_GET['f'])){
                include("c_apptdetails.php");
            }
            
            $sqlAppts = "SELECT * FROM appointments WHERE appts_date='".$month."/".$day."/".$year."'";
            $resultAppts = mysqli_query($conn, $sqlAppts);
        
            while($appts = mysqli_fetch_array($resultAppts)){
                echo 
                    "<div class='row'><br>
                    <div class='col-xs-12 centered'>
                    <span class='strong'>Name: </span>" . $appts['first_name'] . $appts['last_name'] . "<br>" .
                    "<span class='strong'>Phone: </span>" . $appts['phone']. "<br>" .  
                    "<span class='strong'>Email: </span>" . $appts['email']. "<br>" .
                    "<hr>".
                    "</div></div>";
            }
        }
    
    echo "<div class='row'> <div class='col-xs-12 centered'><h4>" . $message . " </h4> </div> </div>";
    ?>
        
</div><!-- end of .main content -->
</div><!-- end of container fluid -->
</div><!-- end of #main content -->

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>