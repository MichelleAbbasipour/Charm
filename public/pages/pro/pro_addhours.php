<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='Add Hours' ;

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

if (isset($_POST['pro_hours'])) {
    //get input values from registration form and assign them to local variables
    $input_date = ($_POST['input_date']);
    $input_time = ($_POST['input_time']);

    //SQL statement to insert the variables into the database
    $query = "INSERT INTO apps_available (available_date, available_time) VALUES ('$input_date', '$input_time')";

    //run the query, assinging the results to a variable
    $resultinsert = mysqli_query($conn, $query);

    if ($resultinsert) {
        //if the query is successful
        //header('Refresh: 0; URL='.$navPath.'/pages/pro/pro_trtredirect.php');
        $message = "<br>Hours added";
    } else {
        //if the query fails
        $message = "<br>Hours failed to be added";
    }
}

?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Add Working Hours</h2>
            
                <form
                      id="hours_form"
                      class="form-horizontal"
                      role="form"
                      method="post"
                      action="pro_addhours.php"
                      data-toggle="validator">
                
                <p>get business attached to professional user</p>

                <!-- Available Date (required) -->
               <div class="form-group has-feedback">
                    <input
                           type="text"
                           class="form-control"
                           id="input_date"
                           placeholder="Available Date(required)"
                           required
                           name="input_treatmentname"
                           data-error="Please enter a valid date"
                           maxlength="30"
                           pattern="^[_A-z ]{1,}$">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                    
                <!-- Available Time (required) -->
                <div class="form-group has-feedback">
                    <input
                           type="type"
                           class="form-control"
                           id="input_time"
                           placeholder="Available Time (required)"
                           required
                           name="input_treatmentduration"
                           autocomplete="off"
                           maxlength="12"
                           data-error="Please enter a valid time">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
                
                <button type="submit" class="btn btn-primary" name="pro_hours">Add Hours</button>
            </form>
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>