<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='Register' ;
$message = "";
$output = "";

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php");

if (isset($_POST['register'])) {

    //get input values from registration form and assign them to local variables
    $input_firstname = ($_POST['input_firstname']);
    $input_lastname = ($_POST['input_lastname']);
    $input_email = ($_POST['input_email']);
    $input_mobile = ($_POST['input_mobile']);
    $input_password = ($_POST['input_password']);
    $input_passwordconfirm = ($_POST['input_passwordconfirm']);
    $input_username = ($_POST['input_username']);

    $_SESSION['client_email'] = $input_email;
    $_SESSION['client_name'] = $input_firstname . " " . $input_lastname;
    $_SESSION['client_mobile'] = $input_mobile;
    $_SESSION['client_password'] = $input_password;
    $_SESSION['client_username'] = $input_username;

    //testing script to ensure values are put into the right variables
    //$output =
    //"Registration button clicked <br>" . "Name: " . $input_firstname . " " . $input_lastname .
    //"<br>" . $input_username . "<br>" . $input_email . "<br>" . $input_mobile . "<br>" . $input_password ;

    //SQL statement to check for username duplicates
    $compare_query = "SELECT * FROM clients WHERE clients_username = '$input_username'";
    $result_compare = mysqli_query($conn, $compare_query);
    $rowSelected   = mysqli_num_rows($result_compare);

    if ($rowSelected) {
         $output = "<h2>That username is already in use - please use a different username.</h2>";

    } else {
        $output = 1;
    }

    if ($output == 1) {
        //SQL statement to check for email duplicates
        $compare_query2 = "SELECT * FROM clients WHERE clients_email = '$input_email'";
        $result_compare2 = mysqli_query($conn, $compare_query2);
        $rowSelected2   = mysqli_num_rows($result_compare2);

        if ($rowSelected2) {
            $output = "<h2>That email is already in use - please login or request it to be sent to you.</h2>";
        } else {
           //SQL statement to insert the variables into the database
                $query = "
                INSERT INTO 
                clients
                (clients_type, clients_first_name, clients_last_name, clients_username,
                clients_email, clients_mobile, clients_password, clients_confirm_password) 
                VALUES 
                ('client', '$input_firstname','$input_lastname','$input_username','$input_email',
                '$input_mobile','$input_password','$input_passwordconfirm')";

                //run the query, assinging the results to a variable
                $resultinsert = mysqli_query($conn, $query);

            if ($resultinsert) {
                //if the query is successful
                //header('Refresh: 0; URL='.$navPath.'/pages/register/redirect.php');
            } else {
                //if the query fails
                $message = "<br>Client failed to be added";
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
            <h2>Client Registration</h2>
            
            <form
                  id="registration_form"
                  class="form-horizontal"
                  role="form"
                  method="post"
                  action="index.php"
                  data-toggle="validator">
                
                <!-- First name input -->
                <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           id="input_firstname"
                           placeholder="First name"
                           required name="input_firstname"
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
                           class="form-control"
                           id="input_lastname"
                           placeholder="Last name"
                           required
                           name="input_lastname"
                           data-error="Please enter a valid name"
                           maxlength="30"
                           pattern="^[_A-z]{1,}$">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <!-- Email input -->
                <div class="form-group has-feedback">
                    <input
                           type="email"
                           class="form-control"
                           id="input_email"
                           placeholder="Email"
                           data-error="Please enter a valid email address"
                           required
                           name="input_email">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <small class="text-muted">We'll never share your email with anyone else.</small>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Phone number input -->
                <div class="form-group has-feedback">
                    <input
                           type="type"
                           class="form-control"
                           id="input_mobile"
                           placeholder="Phone (XXXXX XXXXXX)"
                           name="input_mobile"
                           autocomplete="off"
                           pattern="^[ 0-9]{1,}$"
                           required
                           data-minlength="11"
                           maxlength="15"
                           data-error="Please enter a valid phone number">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <small class="text-muted">We'll never share your mobile number with anyone else.</small>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Username input -->
                <div class="form-group has-feedback">
                    <label for="input_username" class="control-label">Username</label>
                    <input
                           type="text"
                           class="form-control"
                           id="input_username"
                           placeholder="Username"
                           required
                           name="input_username"
                           data-error="Please enter a valid name"
                           maxlength="30">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Password input -->
                <div class="form-group">
                    <label for="input_password" class="control-label">Password</label>
                    <div class="form-group col-sm-6">
                    <input
                           type="password"
                           data-minlength="6"
                           class="form-control"
                           id="input_password"
                           name="input_password"
                           placeholder="Password"
                           required>
                    <span class="help-block">Minimum of 6 characters and case sensitive</span>
                    </div>
                    <div class="form-group col-sm-6">
                    <input
                           type="password"
                           class="form-control"
                           id="input_passwordconfirm"
                           data-match="#input_password"
                           name="input_passwordconfirm"
                           data-match-error="Whoops, these don't match"
                           placeholder="Confirm the password"
                           required>
                    <div class="help-block with-errors"></div>
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary" name="register">Register</button>
            </form>
            
            <h4>or</h4>
            
            <div class="col-xs-8 col-xs-offset-2">
                <a href="<?php echo $navPath . '/pages/login/index.php'?>">
                    <button type="button" class="btn btn-primary">Login</button>
                </a>
            </div>
        
            <!-- Output message button -->
            <?php echo $output; ?>
            <?php echo $message; ?>
            
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>