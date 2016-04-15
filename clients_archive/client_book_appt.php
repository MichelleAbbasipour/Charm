<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site
    $title='Book Apppointment' ;

    //include the code within 'header.php' on this page
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
    //include the database config file and class_calendar file
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php");
    include ($_SERVER['DOCUMENT_ROOT']."/charm/public/classes/class_calendar.php");

    //CALENDAR: cache settings
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    //CALENDAR: set the variable $calendar as a new instance of the 'booking_diary' class
    $calendar = new booking_diary($conn);

    //CALENDAR: if the variables listed are set then get the values, otherwise list them as default value
    if(isset($_GET['month'])) $month = $_GET['month']; else $month = date("m");
    if(isset($_GET['year'])) $year = $_GET['year']; else $year = date("Y");
    if(isset($_GET['day'])) $day = $_GET['day']; else $day = 0;

    // Unix Timestamp of the date a user has clicked on
    $selected_date = mktime(0, 0, 0, $month, 01, $year); 

    // Unix Timestamp of the previous month which is used to give the back arrow the correct month and year 
    $back = strtotime("-1 month", $selected_date); 

    // Unix Timestamp of the next month which is used to give the forward arrow the correct month and year 
    $forward = strtotime("+1 month", $selected_date);

    if ((isset($_SESSION['clients_id']))){
        $clients_username = $_SESSION['clients_username'];
        $clients_id = $_SESSION['clients_id'];
    } else {
       // header("refresh:0; url=../login/redirect.php");
    }

    if(isset($_POST['trt_btn1'])) {
        $_SESSION['t_id'] = $_POST['trt_btn1'];
    } else {$_SESSION['t_id'] = "";}
    if(isset($_POST['trt_btn2'])) {
        $_SESSION['t_name'] = $_POST['trt_btn2'];
    } else {$_SESSION['t_name'] = "";}
    if(isset($_POST['trt_btn3'])) {
        $_SESSION['t_desc'] = $_POST['trt_btn3'];
    } else {$_SESSION['t_desc'] = "";}
    if(isset($_POST['trt_btn4'])) {
        $_SESSION['t_duration'] = $_POST['trt_btn4'];
    } else {$_SESSION['t_duration'] = "";}
    if(isset($_POST['trt_btn5'])) {
        $_SESSION['t_price'] = $_POST['trt_btn5'];
    } else {$_SESSION['t_price'] = "";}

?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">

    <h1>NEW APPOINTMENT</h1>
    
    <?php     
        //if there is a clients username set, then use it in the greeting
        if (isset($clients_username)){
            echo '<p>Hi, ' . $clients_username . '</p>';
        }
        echo 
            "<p>TREATMENT ID: " . $_SESSION['t_id'] . "</p>" .
            "<p>TREATMENT NAME: " . $_SESSION['t_name'] . "</p>" .
            "<p>TREATMENT DESC: " . $_SESSION['t_desc'] . "</p>" .
            "<p>TREATMENT DURATION: " . $_SESSION['t_duration'] . "</p>" .
            "<p>TREATMENT PRICE: £" . $_SESSION['t_price'] . "</p>" .
            "<p>BUSINESS ID: " . $_SESSION['b_id'] . "</p>" .
            "<p>BUSINESS NAME: " . $_SESSION['b_name'] . "</p>" .
            "<p>BUSINESS ADDRESS: " . $_SESSION['b_address'] . "</p>" .
            "<p>BUSINESS EMAIL: " . $_SESSION['b_email'] . "</p>";
    
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $calendar->after_post($month, $day, $year);  
        }  

        // Call calendar function
        $calendar->make_calendar($selected_date, $back, $forward, $day, $month, $year);
    ?>

</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php 
    //include the code within 'footer.php' on this page.
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>