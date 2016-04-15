<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site
    $title='Treatment Search' ;

    //include the code within 'header.php' on this page
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
    //include the database config file and class_calendar file
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php");
    
    if ((isset($_SESSION['clients_id']))){
        $clients_username = $_SESSION['clients_username'];
        $clients_id = $_SESSION['clients_id'];
    } else {
       // header("refresh:0; url=../login/redirect.php");
    }

    if(isset($_POST['bus_btn1'])) {
        $_SESSION['b_id'] = $_POST['bus_btn1'];
    } else {$businessID = "";}

    if(isset($_POST['bus_btn2'])) {
        $_SESSION['b_name'] = $_POST['bus_btn2'];
    } else {$businessNAME = "";}

    if(isset($_POST['bus_btn3'])) {
        $_SESSION['b_address'] = $_POST['bus_btn3'];
    } else {$businessADDRESS = "";}

    if(isset($_POST['bus_btn4'])) {
        $_SESSION['b_email'] = $_POST['bus_btn4'];
    } else {$businessEMAIL = "";}
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">

    <h1>BUSINESS DETAILS</h1>
    
    <?php     
        //if there is a clients username set, then use it in the greeting
        if (isset($clients_username)){
            echo '<p>Hi, ' . $clients_username . '</p>';
        }
    
        echo 
            "<p>BUSINESS ID: " . $_SESSION['b_id'] . "</p>" .
            "<p>BUSINESS NAME: " . $_SESSION['b_name'] . "</p>" .
            "<p>BUSINESS ADDRESS: " . $_SESSION['b_address'] . "</p>" .
            "<p>BUSINESS EMAIL: " . $_SESSION['b_email'] . "</p>";
    
    ?>

    <!-- treatment search form -->
    <form action="client_treatment_search.php" method="post">
    <label>
        <input type="type" name="treatment" autocomplete="off" class="textbox" placeholder="enter part of the treatment name">
    </label>

    <input type="submit" value="Search" class="small_button">
    </form>
    
</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php 
    //include the code within 'footer.php' on this page.
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>