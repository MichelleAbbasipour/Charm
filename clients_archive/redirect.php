<?php
    session_start();
    header('Refresh: 3; URL=../clients/index.php');
?>

<html>
    <head>

        <!-- includes the global php variables -->
        <?php
            $global = $_SERVER['DOCUMENT_ROOT']."/charm/includes/global.php";
            include ($global);
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
            <h1>You are signed in as a client.</h1>
            
            <p>You are being automatically redirected to the CLIENTS home page.</p>
            <p>If your browser does not redirect you in three seconds, or you do
            not wish to wait, <a href="../index.php">click here</a>. </p>
        </div>
    </body>
</html>