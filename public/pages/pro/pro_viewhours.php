<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site

    // *** HEADER ***

    //set the variable 'title' to be the following:
    $title='View Working Hours' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!--- *** MAIN CONTENT *** -->
<div class="row" id="main_content">
    <div class="container-fluid centered">
       
        <h1>View Working Hours</h1>

        <h3>This page is in development</h3>

        <div class="col-xs-8 col-xs-offset-2">
            <a href="<?php echo $navPath . '/pages/index.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Home</button>
            </a>
        </div>
    </div>
</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>