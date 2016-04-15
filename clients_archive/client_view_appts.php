<!-- *** HEADER *** -->
<?php
$title='Home' ;
$headerPath = $_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php";
include ($headerPath);
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">
       
<h1>CLIENTS > VIEW APPOINTMENTS</h1>
   
<div id="home_buttons">
    <a href="<?php echo $navPath . '/pages/clients/index.php'?>"><button class="button"></button></a>
    <a href="<?php echo $navPath . '/pages/professionals/index.php'?>"><button class="button"></button></a>
</div>

</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php 
$pathFooter = $_SERVER['DOCUMENT_ROOT'];
$pathFooter .= "/charm/includes/footer.php";
include ($pathFooter);
?>