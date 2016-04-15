<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='Business Profile' ;
$output = "";

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

if ($_SESSION['b_id'] != 0) {
    header('Refresh: 0; URL='.$navPath.'/pages/pro/pro_duplicatebusinessprofile.php');
    exit();
}

$pro_id = $_SESSION['pro_id'];

if (isset($_POST['pro_businessprofile'])) {
    //get input values from registration form and assign them to local variables
    $input_businessname = ($_POST['input_businessname']);
    $input_businessaddress = ($_POST['input_businessaddress']);
    $input_businesspostcode = ($_POST['input_businesspostcode']);
    $input_businessemail = ($_POST['input_businessemail']);
    $input_businessmobile = ($_POST['input_businessmobile']);
    $pro_id = $_SESSION['pro_id'];

    if (empty($_POST['input_businessphone'])) {
        $input_businessphone = 'no phone number';
    } else {
        $input_businessphone = ($_POST['input_businessphone']);
    }
    if (empty($_POST['input_businessbio'])) {
        $input_businessbio = 'no business bio';
    } else {
        $input_businessbio = ($_POST['input_businessbio']);
    }
    if (empty($_POST['input_businessurl'])) {
        $input_businessurl = 'no business website';
    } else {
        $input_businessurl = ($_POST['input_businessurl']);
    }

    $compare_query = "SELECT * FROM businesses WHERE pro_id = '$pro_id'";
    $result_compare = mysqli_query($conn, $compare_query);
    $rowSelected   = mysqli_num_rows($result_compare);

    if ($rowSelected) {
        header('Refresh: 0; URL='.$navPath.'/pages/pro/pro_duplicatebusinessprofile.php');
        exit();
    } else {

        //SQL statement to insert the variables into the database
        $query =
            "INSERT INTO businesses
            (businesses_name, businesses_address, businesses_postcode, businesses_email,
            businesses_mobile, businesses_phone, businesses_bio, businesses_url, pro_id)
            VALUES('$input_businessname','$input_businessaddress','$input_businesspostcode',
            '$input_businessemail','$input_businessmobile','$input_businessphone',
            '$input_businessbio','$input_businessurl', '$pro_id');
        ";

        //run the query, assinging the results to a variable
        $resultinsert = mysqli_query($conn, $query);

        if ($resultinsert) {

            $pro_id_query = "SELECT * FROM businesses WHERE pro_id = '$pro_id'";
            $pro_id_result = mysqli_query($conn, $pro_id_query);

            //if there is a matching username or email then do this...
            if (mysqli_num_rows($pro_id_result)) {
                while ($row = mysqli_fetch_assoc($pro_id_result)) {
                    $business_id = $row["businesses_id"];

                    $update_pro_id = "UPDATE professionals SET b_id='$business_id' WHERE pro_id='$pro_id'";
                    $update_query = mysqli_query($conn, $update_pro_id);

                    header('Refresh: 0; URL='.$navPath.'/pages/pro/pro_busredirect.php');
                    exit();
                }
            } else {
                //if the query fails
                $output = "<br>Business failed to be added";
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
        <div class="col-xs-12 centered">
            <h2>Business Profile</h2>
            
            <form
                  id="registration_form"
                  class="form-horizontal"
                  role="form"
                  method="post"
                  action="pro_addprofile.php"
                  data-toggle="validator">
                
                <div>
                    <?php echo "Your professional user ID is " . $pro_id?>
                   
                </div>

                <!-- Business name input (required)-->
                <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           id="input_businessname"
                           placeholder="Business name (required)"
                           required
                           name="input_businessname"
                           data-error="Please enter a valid name"
                           maxlength="30"
                           pattern="^[_A-z ]{1,}$">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Business address input (required)-->
                <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           id="input_businessaddress"
                           placeholder="Business address (required)"
                           required
                           name="input_businessaddress"
                           data-error="Please enter a valid name"
                           maxlength="30">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>

                <!-- Business postcode input (required)-->
                <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           id="input_businesspostcode"
                           placeholder="Business postcode (required)"
                           data-error="Please enter a valid postcode"
                           required
                           name="input_businesspostcode">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Business email input (required)-->
                <div class="form-group has-feedback">
                    <input
                           type="email"
                           class="form-control"
                           id="input_businessemail"
                           placeholder="Business email (required)"
                           data-error="Please enter a valid email address"
                           required
                           name="input_businessemail">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <small class="text-muted">We'll never share your email with anyone else.</small>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Business mobile input (required)-->
                <div class="form-group has-feedback">
                    <input
                           type="type"
                           class="form-control"
                           id="input_businessmobile"
                           placeholder="Business mobile number (required)"
                           name="input_businessmobile"
                           autocomplete="off"
                           pattern="^[ 0-9]{1,}$"
                           required
                           data-minlength="12"
                           maxlength="12"
                           data-error="Please enter a valid phone number">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <small class="text-muted">We'll never share your mobile number with anyone else.</small>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Business phone input -->
                <div class="form-group has-feedback">
                    <input
                           type="type"
                           class="form-control"
                           id="input_businessphone"
                           placeholder="Business phone number"
                           name="input_businessphone"
                           autocomplete="off"
                           pattern="^[ 0-9]{1,}$"
                           data-minlength="12"
                           maxlength="12"
                           data-error="Please enter a valid phone number">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <small class="text-muted">We'll never share your phone number with anyone else.</small>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Business url input -->
                <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           id="input_businessurl"
                           placeholder="Business URL web address"
                           data-error="Please enter a valid web address"
                           name="input_businessurl">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Business bio input -->
                <div class="form-group has-feedback">
                    <input
                           type="textarea"
                           class="form-control"
                           id="input_businessbio"
                           placeholder="Business bio"
                           data-error="Please enter a valid bio"
                           name="input_businessbio">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                
                <button type="submit" class="btn btn-primary" name="pro_businessprofile">Submit</button>
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