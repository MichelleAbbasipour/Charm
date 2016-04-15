<?php 
session_start();
header("Refresh:3; url=../login/login_pro.php"); 
?>

<!-- *** HEADER *** -->
<?php
$title='Success' ;
$headerPath = $_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php";
include ($headerPath);
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">
       

<h1>Thank you.</h1>
<h2>Your registration was successful. Redirecting you to the login page.</h2>

</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php 
$pathFooter = $_SERVER['DOCUMENT_ROOT'];
$pathFooter .= "/charm/includes/footer.php";
include ($pathFooter);
?>