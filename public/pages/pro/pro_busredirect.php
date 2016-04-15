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
            <h2>Business Profile Successful!</h2>
            <h3>Redirecting you to the professional home page.</h3>
                <?php header('Refresh: 3; URL='.$navPath.'/pages/pro/index.php');?>
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>