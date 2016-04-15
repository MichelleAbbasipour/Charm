<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='Clients Home' ;

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

if (isset($_SESSION['client_id'])) {
    $client_id = "<h3>ID: " . $_SESSION['client_id'] . "</h3>";
} else {
    $client_id = " ";
}

if (isset($_SESSION['client_username'])) {
    $client_name = $_SESSION['client_name'];
} elseif (isset($_SESSION['pro_id'])) {
    header('Refresh: 0; URL='.$navPath.'/pages/pro/index.php');
    exit();
} else {
    header('Refresh: 0; URL='.$navPath.'/pages/register/index.php');
    exit();
}
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        
        <div class="col-xs-12 centered">
            <h2>Clients Home Page</h2>
        
            <h2>Hi, <?php echo $client_name ?> </h2>
            <?php $client_output ?>
        </div>

        <div class="col-xs-10 col-xs-offset-1">
            <a href="<?php echo $navPath . '/pages/clients/c_makeappt.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Make New Appointment</button>
            </a>
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>