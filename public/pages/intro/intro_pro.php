<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site

    // *** HEADER ***

    //set the variable 'title' to be the following:
    $title='title' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">
       
<h1>INTRO > PROFESSIONALS</h1>
   
<div id="home_buttons">
    <a href="<?php echo $navPath . '/pages/login/login_pro.php'?>">
        <button class="button">Login</button>
    </a>
    <a href="<?php echo $navPath . '/pages/register/index.php'?>">
        <button class="button">Register</button>
    </a>
    <a href="<?php echo $navPath . '/pages/purchase/index.php'?>">
        <button class="button">Buy Now!</button>
    </a>
    <a href="<?php echo $navPath . '/pages/contact/index.php'?>">
        <button class="button">Get in Touch</button>
    </a>
    <a href="<?php echo $navPath . '/pages/support/index.php'?>">
        <button class="button">Help and Support</button>
    </a>
</div>

</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>