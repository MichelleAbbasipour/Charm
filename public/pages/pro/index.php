<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='Professional Home Page';

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

if (isset($_SESSION['pro_username'])) {
    $pro_username = $_SESSION['pro_username'];
    $pro_firstname = $_SESSION['pro_name'];
    //check for matching client username or email
    $pro_query     = "SELECT * FROM professionals WHERE pro_username = '$pro_username'";
    $pro_result    = mysqli_query($conn, $pro_query);

    //if there is a matching username or email then do this...
    if (mysqli_num_rows($pro_result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($pro_result)) {
            $_SESSION['pro_id'] = $row["pro_id"];
            $_SESSION['b_id'] = $row["b_id"];
        }
    }
} elseif (isset($_SESSION['client_id'])) {
    header('Refresh: 0; URL='.$navPath.'/pages/clients/index.php');
    exit();
} else {
    $pro_username = "";
    header('Refresh: 0; URL='.$navPath.'/pages/purchase/index.php');
    exit();
}
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
        
        <h4>Professional Home Page</h4>
            
        <div class="col-xs-12 centered">
            <h2>Hi, 
                <?php echo
                $pro_firstname .
                "<br><h4> ID: " .
                $_SESSION['pro_id'] .
                "<br>Business ID: " .
                $_SESSION['b_id'] .
                "</h4>"
                ?>
            </h2>
        </div>
            
        <div class="col-xs-10 col-xs-offset-1">
            
            <!-- register -->
           <!-- <a href="<?php echo $navPath . '/pages/pro/pro_reg.php'?>">
             <button type="button" class="btn btn-primary btn-lg btn-block">Register</button>
            </a>
            <br>-->
            
            <!-- profile -->
            <a href="<?php echo $navPath . '/pages/pro/pro_businessprofile.php'?>">
             <button type="button" class="btn btn-primary btn-lg btn-block">Business Profile</button>
            </a>
            <br>
            
            <!-- treatments -->
            <a href="<?php echo $navPath . '/pages/pro/pro_treatments.php'?>">
             <button type="button" class="btn btn-primary btn-lg btn-block">Treatments</button>
            </a>
            <br>
            
            <!-- clients -->
            <a href="<?php echo $navPath . '/pages/pro/pro_clients.php'?>">
             <button type="button" class="btn btn-primary btn-lg btn-block">Clients</button>
            </a>
            <br>
            
            <!-- employees -->
            <a href="<?php echo $navPath . '/pages/pro/pro_employees.php'?>">
             <button type="button" class="btn btn-primary btn-lg btn-block">Employees</button>
            </a>
            <br>
            
            <!-- working hours -->
            <a href="<?php echo $navPath . '/pages/pro/pro_hours.php'?>">
             <button type="button" class="btn btn-primary btn-lg btn-block">Working Hours</button>
            </a>
            <br>
            
            <!-- reports -->
            <a href="<?php echo $navPath . '/pages/pro/pro_reports.php'?>">
             <button type="button" class="btn btn-primary btn-lg btn-block">Reports</button>
            </a>
            <br>
            
            <!-- logout -->
            <a href="<?php echo $navPath . '/pages/login/logout.php'?>">
             <button type="button" class="btn btn-primary btn-lg btn-block">Logout</button>
            </a>
        </div>
            
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>