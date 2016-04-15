<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='Login';
$output = "";
$confirm_username = "";
$confirm_password = "";

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

if (isset($_SESSION['pro_username'])) {
    header('Refresh: 0; URL='.$navPath.'/pages/pro/index.php');
    exit();
}

if (isset($_SESSION['client_username'])) {
    header('Refresh: 0; URL='.$navPath.'/pages/clients/index.php');
    exit();
}

if (isset($_POST['login'])) {
        
        //get input values from registration form and assign them to local variables
        $input_login = ($_POST['input_login']);
        $input_password = ($_POST['input_password']);
        
        //check for matching client username or email
        $clientlogin_query     =
            "SELECT * FROM clients WHERE clients_username = '$input_login' OR clients_email = '$input_login'";
        $clientlogin_result    = mysqli_query($conn, $clientlogin_query);
        
    //if there is a matching username or email then do this...
    if (mysqli_num_rows($clientlogin_result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($clientlogin_result)) {
            $db_password = $row["clients_password"];

            if ($db_password == $input_password) {
                $_SESSION['client_username']=$row["clients_username"];
                $_SESSION['client_name']=$row["clients_first_name"];
                $_SESSION['client_id']=$row["clients_id"];
                header('Refresh: 0; URL='.$navPath.'/pages/login/login_success.php');
                exit();
            } else {
                $output .= "<br>Client password incorrect. Please try again.";
                $output = $input_login. " " . $input_password. " " .$db_password;
            }
        }
    } else {  //check for matching professionals username or email
        $prologin_query     =
            "SELECT * FROM professionals WHERE pro_username = '$input_login' OR pro_email = '$input_login'";
        $prologin_result    = mysqli_query($conn, $prologin_query);

            //if there is a matching username or email then do this...
        if (mysqli_num_rows($prologin_result) > 0) {
                // output data of each row
            while ($row = mysqli_fetch_assoc($prologin_result)) {
                    $db_password = $row["pro_password"];
                if ($db_password == $input_password) {
                        $_SESSION['pro_username']=$row["pro_username"];
                        $_SESSION['pro_name']=$row["pro_first_name"];
                        header('Refresh: 0; URL='.$navPath.'/pages/login/login_success.php');
                        exit();
                } else {
                        $output .= "<br>Professional password incorrect. Please try again.";
                }
            }
        } else {
            if (strpos($input_login, "@") == true) {
                $output .= "No such email address. Please try again.";
            } else {
                $output .= "No such username. Please try again.";
            }
        }
    }
}
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 col-sm-10 col-md-9 centered">
            <h2>Login</h2>
            
            <form
                  id="registration_form"
                  class="form-horizontal"
                  role="form"
                  method="post"
                  action="index.php"
                  data-toggle="validator">
                
                <!-- Email/username input -->
                <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           id="input_login"
                           placeholder="Please enter your email address or username"
                           data-error="Please enter a valid email address or username"
                           required
                           name="input_login">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <!--<small class="text-muted">We'll never share your email with anyone else.</small>-->
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Password input -->
                <div class="form-group">
                    <div class="form-group col-sm-6">
                    <input
                           type="text"
                           class="form-control"
                           id="input_password"
                           name="input_password"
                           placeholder="Please enter your password"
                           required>
                    <span class="help-block">Minimum of 6 characters and case sensitive</span>
                    </div>
                </div>
                
                 <div><a href="forgot_password.php"><p>Forgot password?</p></a></div>
            
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
            
            <!-- Output message button -->
            <?php echo $output; ?>
            
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>