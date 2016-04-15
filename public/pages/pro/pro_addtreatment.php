<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='Treatments' ;
$message = "";
$output = "";
$duration_name = "";
$duration_value = "";

$_SESSION['b_id'];

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

if (isset($_POST['pro_treatments'])) {

    //get input values from registration form and assign them to local variables
    $input_treatmentname = ($_POST['input_treatmentname']);
    $input_treatmentprice = ($_POST['input_treatmentprice']);
    $input_treatmentdescription = ($_POST['input_treatmentdescription']);

    $duration_name = $_POST['duration_name'];
    $duration_value = $_POST['duration_value'];

    $input_treatmentduration = $duration_value . " " . $duration_name;

    //SQL statement to check for username duplicates
    $compare_query = "
    SELECT * FROM treatments WHERE treatments_name LIKE '%$input_treatmentname%' 
    AND businesses_id = $_SESSION[b_id]";
    $result_compare = mysqli_query($conn, $compare_query);
    $rowSelected   = mysqli_num_rows($result_compare);

    if ($rowSelected) {
             $output = "<h2>A similar treatment is already in place - please check and try again.</h2>";
    } else {

        //SQL statement to insert the variables into the database
        $query =
            "INSERT INTO treatments 
            (treatments_name, treatments_desc, treatments_duration,
            treatments_price, businesses_id)
            VALUES
            ('$input_treatmentname', '$input_treatmentdescription',
            '$input_treatmentduration','$input_treatmentprice', $_SESSION[b_id])";

        //run the query, assinging the results to a variable
        $resultinsert = mysqli_query($conn, $query);

        if ($resultinsert) {
            //if the query is successful
            header('Refresh: 0; URL='.$navPath.'/pages/pro/pro_trtredirect.php');
            exit();
        } else {
            //if the query fails
            $message = "<br>Treatment failed to be added";
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
            
            <!-- *** Return to Professional Home Page button *** -->
            <div class="btn_container">
                <a href="<?php echo $navPath . '/pages/pro/index.php'?>">
                    <button type="button" class="btn btn-secondary">Return to Professional Home Page</button>
                </a>                 
            </div>
            
            <h2>Add Treatment</h2>
            
            <form
                  id="registration_form"
                  class="form-horizontal"
                  role="form"
                  method="post"
                  action="pro_addtreatment.php"
                  data-toggle="validator">
                
                <p>Add a treatment for 'business name' <br>(Business ID: <?php echo $_SESSION['b_id'] ?>)</p>

                <!-- Treatment name input (required)-->
                <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           id="input_treatmentname"
                           placeholder="Treatment name (required)"
                           name="input_treatmentname"
                           data-error="Please enter a valid name"
                           maxlength="30" >
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Treatment description input -->
                <div class="form-group has-feedback">
                    <input
                           type="textarea"
                           class="form-control"
                           id="input_treatmentdescription"
                           placeholder="Treatment description (required)"
                           data-error="Please enter a valid bio"
                           name="input_treatmentdescription">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <small class="text-muted">Use keywords to enable users to find this treatment easily.</small>
                    <div class="help-block with-errors"></div>
                </div>
                
                <!-- Treatment duration input -->
                <div class="form-inline duration row">
                  
                    <div class="col-xs-4" class="duration">
                        <select class="form-control" name="duration_value">
                            <option value="1">1</option>
                            <option value="1.5">1.5</option>
                            <option value="2">2</option>
                            <option value="2.5">2.5</option>
                            <option value="3">3</option>
                            <option value="3.5">3.5</option>
                            <option value="4">4</option>
                            <option value="4.5">4.5</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="45">45</option>
                            <option value="50">50</option>
                        </select>
                    </div>
                  
                    <div class="col-xs-8" class="duration">
                        <select class="form-control" name="duration_name">
                            <option value="minutes">minutes</option>
                            <option value="hour">hour</option>
                            <option value="hours">hours</option>
                        </select>
                    </div>
                </div>
                
                <!-- Treatment price input -->
                <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           id="input_treatmentprice"
                           placeholder="£XX.XX Treatment price (required)"
                           required
                           data-error="Please enter a valid treatment price"
                           name="input_treatmentprice"
                           pattern="[0-9]+([,\.][0-9]+)?">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                
                <button type="submit" class="btn btn-primary" name="pro_treatments">Submit</button>
            </form>
            
             <!-- Output message button -->
            <?php echo $message; ?>
            <?php echo $output; ?>
            
        </div>
    </div>
    

    
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>