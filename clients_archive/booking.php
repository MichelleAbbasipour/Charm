<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site

    // *** HEADER *** 

    //set the variable 'title' to be the following:
    $title='title' ;

    //include the code within 'header.php' on this page
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">

    <h1>PAGE TITLE</h1>
    
    <script type="text/javascript" src="http://localhost:8888/charm/public/booking_system/index.php?controller=GzFront&action=load" > </script>    

</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php 
    //include the code within 'footer.php' on this page.
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>