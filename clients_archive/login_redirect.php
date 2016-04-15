<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site
    header('Refresh: 3; URL=../login/index.php');
?>

<html>
    <head>
        <!-- includes the global php variables -->
        <?php
            include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/global.php");
        ?>
        
		<title>Redirecting...</title> 
        
        <!-- meta tags -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="charm management software" />
        
        <!-- stylesheets -->
        <link rel="stylesheet" href="<?php echo $navPath2 . 'css/sanitize.css'?>">
        <link rel="stylesheet" href="<?php echo $navPath2 . 'css/font-awesome.min.css'?>">
        <link rel="stylesheet" href="<?php echo $navPath2 . 'css/style.css'?>">
        <link rel="stylesheet" href="<?php echo $navPath2 . 'css/responsive.css'?>">
    </head>
    
    <body>
        <div id="redirect_wrapper">
            <!-- message displayed while page is redirecting -->
            <h1>You cannot access this page.</h1>
            <h1>You are not signed in</h1>
            
            <p>You are being automatically redirected to the LOGIN  home page.</p>
            <p>If your browser does not redirect you in 3 seconds, or you do
            not wish to wait, <a href="../index.php">click here</a>. </p>
        </div>
    </body>
</html>