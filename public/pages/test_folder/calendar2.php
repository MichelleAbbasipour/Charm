<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site

    // *** HEADER *** 

    //set the variable 'title' to be the following:
    $title='title' ;

    //include the code within 'header.php' on this page
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>
<?php
    //local server database settings
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $db_name = "charm_test";

    $error = "Cannot connect to database - please try again later...";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db_name) or die ($error);

?>
    
        <script>
            
            //function for previous month button taking month and year as parameters from the onclick function on the button 
            function goLastMonth(month, year){
                
                //make sure the month variable is between 1 and 12
                
                if(month == 1) {
                    --year;
                    month = 13;
                }
                //decrement the variable, month
                --month;
                
                //store variable month in a string
                var monthstring = ""+month+"";
                
                //store length of monthstring
                var monthlength = monthstring.length;
                
                //if the monthstring has a value less than 1, then add a zero before the length
                if(monthlength <= 1) {
                    monthstring = "0"+monthstring;
                }
                
                //add the following to the current php file which changes the calendar
                document.location.href =" <?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;

            }
            
            //function for next month button
            function goNextMonth(month,year){
                
                if(month == 13) {
                    ++year;
                    month = 0;
                }
                
                ++month
                var monthstring= ""+month+"";
                var monthlength = monthstring.length;
                
                if(monthlength <=1){
                    monthstring = "0" + monthstring;
                }
                
                document.location.href = "<?php $_SERVER['PHP_SELF']; ?>?month="+monthstring+"&year="+year;
            }
        </script>
    
        
    </head>
    
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
    
        ?>
        
        <?php
        
            //if 'add' is being passed from the URL then...
            if(isset($_GET['add'])){
                $title = $_POST['txttitle'];
                $detail = $_POST['txtdetail'];
                
                $eventdate = $month."/".$day."/".$year;
                
                $sqlinsert = 
                    "INSERT into eventcalendar 
                    (Title, Detail, eventDate, dateAdded) values 
                    ('".$title."','".$detail."','".$eventdate."',now())";
                $resultinsert = mysqli_query($conn, $sqlinsert);
                
                if($resultinsert){
                    echo "Event was successully added";
                }else {
                    echo "Event failed to be added";
                }
            }
        ?>
        
            <table border='1'>
                <tr>
                    <td>
                        <input 
                            style="width:50px;" 
                            type="button" 
                            value="<<" 
                            name="PreviousMonth" 
                            onclick="goLastMonth(<?php echo $month . ',' . $year; ?>);">
                    </td>
                    <td colspan='5'><?php echo $monthName.", " . $year; ?></td>
                    <td> 
                        <input 
                            style="width:50px;" 
                            type="button" 
                            value=">>" 
                            name="nextMonth" 
                            onclick="goNextMonth(<?php echo $month . ',' . $year; ?>);">
                        </td>
                </tr>

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
                                echo "class='today'";
                            }else {
                                $sqlCount = "SELECT * FROM eventcalendar WHERE eventDate = '".$dateToCompare."'";
                                $noOfEvent = mysqli_num_rows(mysqli_query($conn, $sqlCount));
                                
                                if($noOfEvent >= 1){
                                    echo "class='event'";
                                }
                            }
                            
                            echo ">
                                <a href='".$_SERVER['PHP_SELF'].
                                "?month=".$monthstring.
                                "&day=".$daystring.
                                "&year=".$year.
                                "&v=true'>".
                                $i."
                                </a></td>";
                        }
                    echo "</tr>";
                ?>
            </table>
        
            <?php
                if(isset($_GET['v'])){
                    echo "<a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true'>Add Event</a>";
                    if(isset($_GET['f'])){
                        include("eventform.php");
                    }
                    $sqlEvent = "SELECT * FROM eventcalendar WHERE eventDate='".$month."/".$day."/".$year."'";
                    $resultEvents = mysqli_query($conn, $sqlEvent);
                    echo "<hr>";
                    while($events = mysqli_fetch_array($resultEvents)){
                        echo "Title: " . $events['Title'] . "<br>";
                        echo "Detail: " . $events['Detail']. "<br>";
                    }
                }
            ?>
            
</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php 
    //include the code within 'footer.php' on this page.
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>