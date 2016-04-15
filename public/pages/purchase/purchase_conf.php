<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Purchase Coonfirmation' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Purchase Confirmation</h2>
        </div>

        <div class="col-xs-10 col-xs-offset-1">
            
            <br><hr>
            <a href="<?php echo $navPath . '/pages/pro/pro_reg.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Register</button>
            </a>
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>