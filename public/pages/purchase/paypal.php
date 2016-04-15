<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Paypal' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Paypal</h2>
        </div>

        <div class="col-xs-10 col-xs-offset-1">
            
            <br><hr>
            <a href="<?php echo $navPath . '/pages/purchase/purchase_conf.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Buy...</button>
            </a>
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>