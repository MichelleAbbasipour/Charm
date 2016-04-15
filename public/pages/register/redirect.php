<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Redirecting...' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Registration Successful!</h2>
            <h3>Redirecting you to the login page.</h3>
            <?php header('Refresh: 3; URL='.$navPath.'/pages/login/index.php'); ?>
        
        </div>
    </div>
</div>

    <?php
    $to         = $_SESSION['client_email'];
    $subject    = 'Welcome to Charm Management System';
    $headers    = 'From: Charm Management System <info@charm-management-system.com>' . "\r\n";
    $headers    .= 'Content-type: text/html';
    $message    = '<h4>You have used the following details to sign up to the Charm Management system website: </h4>';
    $message    .= 'Client\'s name: ' . $_SESSION['client_name'] . "<br>";
    $message    .= 'Client\'s phone number: ' .  $_SESSION['client_mobile'] . "<br>";
    $message    .= 'Client\'s email address: ' . $_SESSION['client_email'] . "<br>";
    $message    .= 'Client\'s username: ' . $_SESSION['client_username'] . "<br>";
    $message    .= 'Client\'s password: ' . $_SESSION['client_password'] . "<br>";

    if (mail($to, $subject, $message, $headers)) {
        //echo 'email sent';
    } else {
        echo 'Unable to send email. Please try again.';
    }
    ?>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>