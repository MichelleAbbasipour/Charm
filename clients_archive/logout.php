<?php
    ob_start(); 
    //used to ensure that the header() function will work
    session_start();
    //unsets all variable sessions
    unset($_SESSION);
    //destroys the sessions
    session_destroy();
    //End the current session and store session data
    session_write_close();
    //sends a raw HTTP header to the client - in this case, the main index.php page
    header('Refresh: 3; URL=../index.php');
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
            <p>You are being automatically redirected to a new location.</p>
            <p>If your browser does not redirect you in 3 seconds, or you do
            not wish to wait, <a href="../index.php">click here</a>. </p>
        </div>
    </body>
</html>