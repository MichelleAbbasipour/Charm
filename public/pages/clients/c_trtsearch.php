<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Treatment Search' ;

    //include the code within 'header.php' on this page
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php");

    if(isset($_POST['bus_btn1'])) {
        $_SESSION['b_id'] = $_POST['bus_btn1'];
    } else {$businessID = "";}

    if(isset($_POST['bus_btn2'])) {
        $_SESSION['b_name'] = $_POST['bus_btn2'];
    } else {$businessNAME = "";}

    if(isset($_POST['bus_btn3'])) {
        $_SESSION['b_address'] = $_POST['bus_btn3'];
    } else {$businessADDRESS = "";}

    if(isset($_POST['bus_btn4'])) {
        $_SESSION['b_email'] = $_POST['bus_btn4'];
    } else {$businessEMAIL = "";}
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Search for Treatment</h2>
            
                <a href="<?php echo $navPath . '/pages/clients/c_makeappt.php'?>">
                <button type="button" class="btn btn-secondary">Search for Another Business</button>
                </a>
            
            <p><span class="strong">Business ID: </span><?php echo $_SESSION['b_id']?></p>
            <p><span class="strong">Business Name: </span><?php echo $_SESSION['b_name']?></p>
            <p><span class="strong">Business Address: </span><?php echo $_SESSION['b_address']?></p>
            <p><span class="strong">Business Email: </span><?php echo $_SESSION['b_email']?></p>
        </div>
        
        <div class="row">
            <div class="col-xs-12 centered">
                <form class="form-horizontal" role="form" method="post" action="c_trtresults.php">
            
                <div class="input row">
                    <span class="input">
                        <button class="btn btn-secondary" name="trt_search_all" type="submit" value="search">Show All Treatments for <?php echo $_SESSION['b_name']?> </button>
                    </span>
                </div><br>
                    
                <p>or search for a specific treatment offered by <?php echo $_SESSION['b_name']?> </p>
                <div class="input-group">
                    <input type="type" class="form-control" placeholder="Enter part of a treatment" name="trt_search" autocomplete="off">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit" value="search">Go!</button>
                    </span>
                </div><!-- /input-group -->
                
                    
                </form>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        
    </div> <!--- end of container-fluid -->
</div> <!-- end of main content -->

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>