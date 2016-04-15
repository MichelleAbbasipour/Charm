<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Business Profile' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            
            <!-- *** Return to Professional Home Page button *** -->
            <div class="btn_container">
                <a href="<?php echo $navPath . '/pages/pro/index.php'?>">
                    <button type="button" class="btn btn-secondary">Return to Professional Home Page</button>
                </a>                 
            </div>
            
            <h2>Business Profile</h2>
            
            <div class="col-xs-12">
                
            <!-- add new treatment -->
            <a href="<?php echo $navPath . '/pages/pro/pro_addprofile.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Add new business profile</button>
            </a>
            <br>
            <!-- view all treatments -->
            <a href="<?php echo $navPath . '/pages/pro/pro_viewprofile.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">View business profile</button>
            </a>
            <br>
            <!-- search treatments -->
            <a href="<?php echo $navPath . '/pages/pro/pro_clientview.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">View profile as client</button>
            </a>
            
        </div>
            
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>