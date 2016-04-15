<?php
session_start();
?>

<!-- *** HEADER *** -->
<?php
    $title='Home' ;
    $headerPath = $_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php";
    include ($headerPath);
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">
       
    <h1>LOGIN</h1>

    <div id="home_buttons">
        <a href="<?php echo $navPath . '/pages/login/login_client.php'?>"><button class="button">Client Login</button></a>
        <a href="<?php echo $navPath . '/pages/login/login_pro.php'?>"><button class="button">Professional Login</button></a>
    </div>

</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php 
    $pathFooter = $_SERVER['DOCUMENT_ROOT'];
    $pathFooter .= "/charm/includes/footer.php";
    include ($pathFooter);
?>