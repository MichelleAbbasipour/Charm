<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='Business Profile' ;
$output = "";

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

$pro_id = $_SESSION['pro_id'];
$b_id = $_SESSION['b_id'];

if (isset($_POST['pro_editbusinessprofile'])) {
    //get input values from registration form and assign them to local variables
    $edit_businessname = ($_POST['edit_businessname']);

    $update_query   = "SELECT * FROM businesses WHERE businesses_id = '$b_id'";
    $result         = mysqli_query($conn, $update_query);

    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= "<br>" . $row["businesses_id"];
            $output .= "<br>" . $row["businesses_name"];
            $output .= "<br>" . $row["pro_id"];
            $output .= "<br>" . $edit_businessname;

            if (isset($edit_businessname)) {
                $update_profile =
                    "UPDATE businesses SET businesses_name='$edit_businessname' WHERE businesses_id = '$b_id'";
                $update_query = mysqli_query($conn, $update_profile);
            }

        //header('Refresh: 0; URL='.$navPath.'/pages/pro/pro_busredirect.php');
        //exit();
        }
    } else {
        //if the query fails
        $output = "<br>Business failed to be added";
    }
}
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Edit Business Profile</h2>
            
            <form
                  id="edit_business_form"
                  class="form-horizontal"
                  role="form"
                  method="post"
                  action="pro_editprofile.php"
                  data-toggle="validator">
                
                <div>
                    <?php echo "Your professional user ID is " . $pro_id?>
                    <br>
                    <?php echo "Your business user ID is " . $b_id?>
                </div>
                
                <div>
                    <p>
                        <button
                                class="btn btn-primary"
                                type="button"
                                data-toggle="collapse"
                                data-target="#collapseExample"
                                aria-expanded="false"
                                aria-controls="collapseExample">
                            Edit Business Name
                        </button>
                    </p>
                    <br>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-block">
                        <!-- Business name input (required)-->
                        <div class="form-group has-feedback">
                            <input
                                   type="text"
                                   class="form-control"
                                   id="edit_businessname"
                                   placeholder="Edit business name"
                                   name="edit_businessname"
                                   data-error="Please enter a valid name"
                                   maxlength="30" pattern="^[_A-z ]{1,}$">
                            <span class="glyphicon form-control-feedback"
                                  aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                            
                            <button type="submit" class="btn btn-primary" name="pro_editbusinessprofile">Submit</button>
                        </div>
                        </div>
                    </div>
                </div>
                
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