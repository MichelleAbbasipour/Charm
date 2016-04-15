<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Treatments' ;

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
            
            <h2>Treatments</h2>
            
            <div class="col-xs-10 col-xs-offset-1">
                
            <!-- add new treatment -->
            <a href="<?php echo $navPath . '/pages/pro/pro_addtreatment.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Add new treatment</button>
            </a>
            <br>
            <!-- view all treatments -->
            <a href="<?php echo $navPath . '/pages/pro/pro_viewtreatment.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">View all treatments</button>
            </a>
            <br>
            <!-- search treatments -->
            <a href="<?php echo $navPath . '/pages/pro/pro_searchtreatment.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Search treatments</button>
            </a>
            
        </div>
            
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>