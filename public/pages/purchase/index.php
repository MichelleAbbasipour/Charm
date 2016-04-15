<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Purchase' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Purchase Page</h2>
        </div>

        <div class="col-xs-10 col-xs-offset-1">
            <a href="<?php echo $navPath . '/pages/purchase/package_one.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Package 1</button>
            </a>
            <br>
            <a href="<?php echo $navPath . '/pages/purchase/package_two.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Package 2</button>
            </a>
            <br>
            <a href="<?php echo $navPath . '/pages/purchase/package_three.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Package 3</button>
            </a>
            <br><hr>
            <a href="<?php echo $navPath . '/pages/login/index.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Login</button>
            </a>
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>