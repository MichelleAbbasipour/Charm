<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Reports' ;

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
            
            <h2>Reports</h2>
            
            <div class="col-xs-10 col-xs-offset-1">
                
            <!-- add new client -->
            <a href="<?php echo $navPath . '/pages/pro/pro_reportone.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Report 1</button>
            </a>
            <br>
            <!-- view all clients -->
            <a href="<?php echo $navPath . '/pages/pro/pro_reporttwo.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Report 2</button>
            </a>
            <br>
            <!-- search clients -->
            <a href="<?php echo $navPath . '/pages/pro/pro_reportthree.php'?>">
                <button type="button" class="btn btn-primary btn-lg btn-block">Report 3</button>
            </a>
            
        </div>
            
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>