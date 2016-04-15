<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='Forgot Password' ;
$output = "";

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

if (isset($_POST['forgot_input'])) {

    $input = $_POST['forgot_input'];

    //run SQL query with one or more conditions
    $forgotten_query     = "SELECT * FROM clients WHERE clients_email = '$input'";
    $forgotten_result    = mysqli_query($conn, $forgotten_query);

    //if there is a matching username or email then do this...
    while (mysqli_num_rows($forgotten_result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($forgotten_result)) {
            $db_password = $row["clients_password"];
            $output = 'button clicked - client profile found '  . $db_password;

            $to        = $input;
            //$to         = 'michelleabbasipour@outlook.com';
            $subject    = 'Forgotten password reminder';
            $headers    = 'From: Charm Management System <info@charm-management-system.com>' . "\r\n";
            $headers    .= 'Content-type: text/html';
            $message    = '<h4>You forgot your password: </h4>';
            $message    .= 'Your password is: ' . $db_password;

            mail($to, $subject, $message, $headers);
            $output = "An email has been sent to you with your password. Redirecting back to the login page...";
            header('Refresh: 2; URL='.$navPath.'/pages/login/index.php');
        }
    }

    if (mysqli_num_rows($forgotten_result) == 0) {
            $pforgotten_query     = "SELECT * FROM professionals WHERE pro_email = '$input'";
        $pforgotten_result    = mysqli_query($conn, $pforgotten_query);
        
        if (mysqli_num_rows($pforgotten_result) > 0) {
            while ($row = mysqli_fetch_assoc($pforgotten_result)) {
                $db_password = $row["pro_password"];
                $output = 'button clicked - pro profile found ' . $db_password;

                //$to        = $input;
                $to         = 'michelleabbasipour@outlook.com';
                $subject    = 'Forgotten password reminder';
                $headers    = 'From: Charm Management System <info@charm-management-system.com>' . "\r\n";
                $headers    .= 'Content-type: text/html';
                $message    = '<h4>You forgot your password: </h4>';
                $message    .= 'Your password is: ' . $db_password;

                mail($to, $subject, $message, $headers);
                $output = "An email has been sent to you with your password. Redirecting back to the login page...";
                header('Refresh: 3; URL='.$navPath.'/pages/login/index.php');
            }
        }
    }

    if (mysqli_num_rows($forgotten_result) == 0 &&  mysqli_num_rows($pforgotten_result) == 0) {
        $output = 'No such user found';
    }
}
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            
           <p>Enter your email address</p> 
            
            <form
                  id="registration_form"
                  class="form-horizontal"
                  role="form"
                  method="post"
                  action="forgot_password.php"
                  data-toggle="validator">
                
                <!-- Email/username input -->
                <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           id="forgot_input"
                           required
                           placeholder="Please enter your email address"
                           data-error="Please enter a valid email address or username"
                           name="forgot_input">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                       
                <button type="submit" class="btn btn-primary" name="send_password">Send Password</button>
            </form>
            
            <?php echo $output; ?>
            
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>