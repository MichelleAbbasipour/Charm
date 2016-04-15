<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Duplicate Business Profile' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            
            <h4>You already have a business profile</h4>
            
            <div class="btn_container">
            <a href="<?php echo $navPath . '/pages/pro/pro_viewprofile.php'?>">
                <button type="button" class="btn btn-primary">View/Edit Business Profile</button>
            </a>
            </div>
            
            <div class="btn_container">
            <a href="<?php echo $navPath . '/pages/pro/index.php'?>">
                <button type="button" class="btn btn-primary">Professional Home Page</button>
            </a>
            </div>
            
            <div class="btn_container">
            <a href="<?php echo $navPath . '/pages/index.php'?>">
                <button type="button" class="btn btn-primary">Main Home Page</button>
            </a>
            </div>
    
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>