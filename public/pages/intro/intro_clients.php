<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site
?>

<!-- *** HEADER *** -->
<?php
    //set the variable 'title' to be the following:
    $title='Clients Introduction' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">
       
    <h1>INTRO > CLIENTS</h1>

    <div id="home_buttons">
        <a href="<?php echo $navPath . '/pages/login/login_client.php'?>">
            <button class="button">Login</button>
        </a>
        <a href="<?php echo $navPath . '/pages/register/index.php'?>">
            <button class="button">Register</button>
        </a>
        <a href="<?php echo $navPath . '/pages/clients/client_newbooking.php'?>">
            <button class="button">Make An Appointment</button>
        </a>
        <a href="<?php echo $navPath . '/pages/contact/index.php'?>">
            <button class="button">Get in Touch</button>
        </a>
        <a href="<?php echo $navPath . '/pages/support/index.php'?>">
            <button class="button">Help and Support</button>
        </a>
    </div>

</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>