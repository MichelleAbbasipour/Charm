<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='charm | home' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    
    <div class="row" id="home_btns">
      
            <div class="col-xs-8 col-xs-offset-2">
                <a href="<?php echo $navPath . '/pages/clients/c_makeappt.php'?>">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Make an Appointment</button>
                </a>
            </div>
        
            <div class="col-xs-8 col-xs-offset-2">
                <a href="<?php echo $navPath . '/pages/clients/index.php'?>">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Clients</button>
                </a>
            </div>
      
            <div class="col-xs-8 col-xs-offset-2">
                <a href="<?php echo $navPath . '/pages/pro/index.php'?>">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Professionals</button>
                </a>
            </div>   
                
            <div class="col-xs-4 col-xs-offset-2">
                <a href="<?php echo $navPath . '/pages/login/index.php'?>">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Login</button>
                </a>
            </div>  
                
            <div class="col-xs-4">
                <a href="<?php echo $navPath . '/pages/login/logout.php'?>">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Logout</button>
                </a>
            </div>  
                
    </div>
    
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>