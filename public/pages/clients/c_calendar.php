<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Calendar' ;
    $output = "";
<<<<<<< HEAD
    $dateSelected = "";
    $TDclass="";
    $dateSelectedString = "";
    $result = "";
    $appt_timeslot = "";
    $first_name = "";
    $last_name = "";
    $email = "";
    $phone = "";
    $testingDate = "";
    $test = "";
=======

    //<button type='button' value='Submit' class='btn day_btn'>$dayNumber</a>

>>>>>>> origin/master

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

    //set session variables from variables retrieved from previous page
<<<<<<< HEAD
if (isset($_POST['trt_btn1'])) {
        $_SESSION['t_id'] = $_POST['trt_btn1'];
}
if (isset($_POST['trt_btn2'])) {
    $_SESSION['t_name'] = $_POST['trt_btn2'];
}
if (isset($_POST['trt_btn3'])) {
    $_SESSION['t_desc'] = $_POST['trt_btn3'];
}
if (isset($_POST['trt_btn4'])) {
    $_SESSION['t_duration'] = $_POST['trt_btn4'];
}
if (isset($_POST['trt_btn5'])) {
    $_SESSION['t_price'] = $_POST['trt_btn5'];
}
if (isset($_SESSION['c_id'])) {
    $c_id = $_SESSION['c_id'] ;
} else {
    $c_id='0';
}
if (isset($_SESSION['e_id'])) {
    $c_id = $_SESSION['e_id'] ;
} else {
    $e_id='0';
}

    //*** CALENDAR VARIABLES ***
    $date = (!isset($_GET['month']) && !isset($_GET['year'])) ? time() :
            strtotime($_GET['month'] . '/1/' . $_GET['year']);

    $todaysDate = date("Y-m-d");
    $_SESSION['booked_date'] = $todaysDate;
    $todaysDay = date('d');
    $todaysMonth = date("F");
    $todaysMonthShort = date("m");
    $todaysYear = date("Y");
    $todaysDayLong = date('S');

    //set variables for day, month and year using the $date variable
    $day = date('d', $date);
    $dayLong = date('S', $date);
=======
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
    $todaysMonth = date("m");
    $todaysYear = date("Y");

    //set variables for day, month and year using the $date variable
    $day = date('d', $date);
>>>>>>> origin/master
    $month = date('m', $date);
    $year = date('Y', $date);

    //set first day of the month
<<<<<<< HEAD
    $firstDay = mktime(0, 0, 0, $month, 1, $year);
=======
    $firstDay = mktime(0,0,0,$month,1,$year);
>>>>>>> origin/master

    //get the name of the month from the $firstDay variable
    $title = date('F', $firstDay);

<<<<<<< HEAD
    $todaysDateString = $todaysDay . $todaysDayLong . " ". $todaysMonth . " " . $todaysYear;
    $showToday = "Today's date: " . $todaysDateString;
    $_SESSION['todaysDateString'] = $todaysDateString;

    //determine what day of the week the first day falls on
    $dayOfWeek = date('D', $firstDay);

//determine how many blank cells needed as per the day of the week
switch ($dayOfWeek) {
    case "Sun":
        $blank = 0;
        break;
    case "Mon":
        $blank = 1;
        break;
    case "Tue":
        $blank = 2;
        break;
    case "Wed":
        $blank = 3;
        break;
    case "Thu":
        $blank = 4;
        break;
    case "Fri":
        $blank = 5;
        break;
    case "Sat":
        $blank = 6;
        break;
}
=======
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
>>>>>>> origin/master

    //find out how many days are in the month
    $daysInMonth = cal_days_in_month(0, $month, $year);

    $dayCount = 1;

    $dayNumber = 1;

    $previousMonth = $month-1;
    $nextMonth = $month+1;

<<<<<<< HEAD
if ($nextMonth==13) {
    $nextMonth=1;
    $nextYear=$year+1;
} else {
    $nextYear=$year;
}

if (isset($_POST['appointment_details'])) {
    $_SESSION['appt_timeslot'] = $_POST['appt_timeslot'];
    $_SESSION['first_name'] = $_POST['txtFName'];
    $_SESSION['last_name'] = $_POST['txtLName'];
    $_SESSION['email'] = $_POST['txtEmail'];
    $_SESSION['phone'] = $_POST['txtPhone'];
    $_SESSION['notes'] = $_POST['txtNotes'];

    header('Refresh: 0; URL='.$navPath.'/pages/clients/c_redirectappt.php');

    $result =
        "Timeslot: " . $_SESSION['appt_timeslot'] .
        "<br> Name: " . $_SESSION['first_name'] . " ". $_SESSION['last_name'] .
        "<br> Email: " . $_SESSION['email'] .
        "<br> Phone: " . $_SESSION['phone'] ;
}
=======
    if ($month == 12){
        $nextMonth = 1;
    }
    if ($month == 0){
        $previousMonth = 1;
    }
>>>>>>> origin/master
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
<<<<<<< HEAD
            
    <!-- refresh button -->
    <a name='cal_jump'></a>
    <button onclick='goToToday(<?php echo $todaysMonthShort . "," . $todaysYear ?>)' 
            type="button" class="btn btn-secondary">
        Refresh Calendar</button>
    <br>     
    
    <?php echo $showToday ?>
            
    <div class="row">
  
=======
    <div class="row">
    <div class="">
    <div>
>>>>>>> origin/master
    <table class="table table-bordered">
    <tbody>
        <tr>
            <th colspan="1"> 
<<<<<<< HEAD
                    <button type="button"  value="Submit">
                        <a href="?month=<?php echo $previousMonth ?>&year=<?php echo $year?>#cal_jump">
                            <span class="glyphicon glyphicon-chevron-left icon" aria-hidden="true"></span>
                        </a>
                    </button>
            </th>
            
            <th colspan=4 id="tableHeader"><?php echo $title . " " . $year ?></th>
            
            <th colspan=1><div>
                <button class="btn today_btn"
                        onclick='goToToday(<?php echo $todaysMonthShort . "," . $year ?>)'>today</button>
            </div></th>

            <th colspan="1">  
                   <button type="button"  value="Submit">
                        <a href="?month=<?php echo $nextMonth ?>&year=<?php echo $nextYear?>#cal_jump">
                            <span class="glyphicon glyphicon-chevron-right icon" aria-hidden="true"></span>
                        </a>
                    </button>
            </th>
        </tr>
        <tr>
            <td>SUN</td>
            <td>MON</td>
            <td>TUE</td>
            <td>WED</td>
            <td>THU</td>
            <td>FRI</td>
            <td>SAT</td>
        </tr>
        
        <?php
        echo "<tr>";

        while ($blank > 0) {
                echo "<td></td>";
                $blank = $blank-1;
                $dayCount++;
        }

        while ($dayNumber <= $daysInMonth) {
            $dateToCompare= $year . "-" . $month . "-" . $dayNumber;

            $date2 = strtotime($dateToCompare);
            $Date = date("Y-m-d", $date2);

            if ($todaysDate == $Date) {
                $TDclass = "today";
            } elseif ($todaysDate > $Date) {
                $TDclass = "beforeToday";
            } else {
                $TDclass = "afterToday";
            }

            echo "<td class='".$TDclass."'> " ;
            if ($TDclass == "today" || $TDclass == "afterToday") {
                echo "<form method='POST' action='c_calendar.php#cal_jump'>
                <input class='btn' value='" . $dayNumber . "' type='submit' onclick=''>
                <input name='selectedDate' type='hidden' value= '" . $dateToCompare . "'>
                </form>
                </td>";
            } else {
                echo "<input class='btn' disabled value='" . $dayNumber . "' type='button'>";
            }

            $dayNumber++;
            $dayCount++;

            if ($dayCount>7) {
                echo "</tr><tr>";
                $dayCount = 1;
            }
        }

        while ($dayCount>1 && $dayCount <=7) {
            echo "<td></td>";
            $dayCount++;
        }

        echo "</tr></tbody></table>";
             
        ?>  
        
    </div><!-- end of calendar -->
    
    <?php echo $output . " " . $test; ?>
    
    <?php
    if (isset($_POST['selectedDate'])) {
        $selectedDate = strtotime($_POST['selectedDate']);
        $dateSelected = date("Y-m-d", $selectedDate);

        $day2 = date('d', $selectedDate);
        $dayLong2 = date('S', $selectedDate);
        $month2 = date('F', $selectedDate);
        $monthShort2 = date('m', $selectedDate);
        $year2 = date('Y', $selectedDate);
        $dayName= date('l', $selectedDate);

        $dateSelectedString = $dayName . " " .$day2 . $dayLong2 . " " . $month2 . " " . $year2;
        $_SESSION['appt_date'] = $year2.$monthShort2.$day2;
        $_SESSION['dateAsString'] = $dateSelectedString;

    } else {
        $hiddenDiv = "hidden";
    }
    ?>
        
    <div class="row <?php echo $hiddenDiv ?>" id="dateSelected">
        <div class="btn_container">
            <button 
                    type="button"
                    class="btn btn-primary"
                    data-toggle='collapse'
                    data-target='#appointmentDetails'
                    aria-expanded='false'
                    aria-controls='appointmentDetails'>
                        Request Appointment for <br>
                    <?php echo $dateSelectedString ?>
            </button>
        </div>
    </div>    
 
        <!-- collapse div which is shown when 'Request Appointment' button is clicked. -->
        <div class="collapse" id="appointmentDetails">

            <div class="card card-block">
                <div class="row">
                    <form form method='POST' action='c_calendar.php' data-toggle="validator">
                        <form>
                            <label for="appt_timeslot">Select preferred appointment time slot:</label>
                            <div class="form-group">

                            <select name="appt_timeslot" class="form-control" id="appt_timeslot">
                                <option value="Morning Appointment">Morning Appointment</option>
                                <option value="Afternoon Appointment">Afternoon Appointment</option>
                                <option value="Evening Appointment">Evening Appointment</option>
                            </select><br>
                            
                            <!-- input first name -->
                            <div class="form-group has-feedback">
                                <input 
                                       type="text"
                                       class="form-control"
                                       placeholder="First name"
                                       required name="txtFName"
                                       data-error="Please enter a valid name"
                                       maxlength="30"
                                       pattern="^[_A-z]{1,}$">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>

                            <!-- Last name input -->
                            <div class="form-group has-feedback">
                                <input
                                       type="text"
                                       maxlength="30"
                                       class="form-control"
                                       id="inputName"
                                       placeholder="Last name"
                                       required name="txtLName"
                                       data-error="Please enter a valid name"
                                       pattern="^[_A-z]{1,}$">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>

                            <!-- Email input -->
                            <div class="form-group has-feedback">
                                <input
                                       type="email"
                                       class="form-control"
                                       id="inputEmail"
                                       placeholder="Email"
                                       data-error="Please enter a valid email address"
                                       required
                                       name="txtEmail"
                                       pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>

                            <!-- Phone number input -->
                            <div class="form-group has-feedback">
                                <input
                                       type="type"
                                       class="form-control"
                                       id="inputName"
                                       placeholder="Phone (XXXXX XXXXXX)"
                                       name="txtPhone"
                                       autocomplete="off"
                                       pattern="^[ 0-9]{1,}$"
                                       required
                                       data-minlength="11"
                                       maxlength="15"
                                       data-error="Please enter a valid phone number">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                                
                            <!-- Notes input -->
                            <div class="form-group has-feedback">
                                <textarea 
                                          class="form-control"
                                          rows="5"
                                          id="inputNotes"
                                          placeholder="Write a message to your selected beauty business here" 
                                          name="txtNotes"
                                          autocomplete="off"
                                          maxlength="400"
                                          data-error="Too many characters (limit 400)">
                                </textarea>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                                
                            <input class='btn btn-default' value='Go' name="appointment_details" type='submit'>
                                
                            </div>
                        </form>
                    </form>
                </div>
            </div>
            
        </div><!-- end of collapse div -->
        
        <?php echo $result ?>
   
=======
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
            
            <th colspan=1><div><button class="btn today_btn" onclick='goToToday(<?php echo $todaysMonth . "," . $todaysYear ?>)'>today</button></div></th>
            
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
                    <button type='button' onclick='selectedDate(". $dayNumber . ',' . $month . ',' . $year .")' value='Submit' class='btn day_btn'>$dayNumber
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
    <div id="testOutput"></div>

>>>>>>> origin/master
</div><!-- end of .main content -->
</div><!-- end of container fluid -->
</div><!-- end of #main content -->

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
        echo "<a name='end_jump'></a>";
?>