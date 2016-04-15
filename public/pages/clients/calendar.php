<?php /* *************** HEADER *************** */
    $title='Calendar' ;
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
   /* $output = "";
 
    //set treatment session variables from buttons clicked and static variables set
    if(isset($_POST['trt_btn1'])) {$_SESSION['t_id'] = $_POST['trt_btn1'];}
    if(isset($_POST['trt_btn2'])) {$_SESSION['t_name'] = $_POST['trt_btn2'];} 
    if(isset($_POST['trt_btn3'])) {$_SESSION['t_desc'] = $_POST['trt_btn3'];} 
    if(isset($_POST['trt_btn4'])) {$_SESSION['t_duration'] = $_POST['trt_btn4'];} 
    if(isset($_POST['trt_btn5'])) {$_SESSION['t_price'] = $_POST['trt_btn5'];} 
    if(isset($_SESSION['c_id'])) {$c_id = $_SESSION['c_id'] ;}else $c_id='0';
    if(isset($_SESSION['e_id'])) {$c_id = $_SESSION['e_id'] ;}else $e_id='0';*/

?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->

<!--- *** MAIN CONTENT *** -->
<div class="row" id="main_content">
<div class="container-fluid">
<div class="col-xs-12 centered">
    
    <h2>Calendar</h2>
         
</div><!-- end of .main content -->
</div><!-- end of container fluid -->
</div><!-- end of #main content -->

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>