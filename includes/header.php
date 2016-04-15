<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site
    error_reporting(E_ALL | E_STRICT);
    ini_set('display_errors', true);
    ini_set('auto_detect_line_endings', true);
?>

<!DOCTYPE HTML>
<html>
	<head>
        
        <!-- includes the global php variables -->
        <?php
            include $_SERVER['DOCUMENT_ROOT']."/charm/includes/global.php";
            include $_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php";
        ?>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; 
        any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        
        <!-- use php to generate the title for each page from the page code -->
		<title>
            <?php echo $title; ?>
        </title> 
        
        <!-- meta tags -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="charm management software" />
        
        <!-- stylesheets -->
        <link rel="stylesheet" href="<?php echo $navPath2 . 'css/sanitize.css'?>">
        <link rel="stylesheet" href="<?php echo $navPath2 . 'css/bootstrap.min.css'?>">
        <link rel="stylesheet" href="<?php echo $navPath2 . 'css/bootstrap-social.css'?>">
        <link rel="stylesheet" href="<?php echo $navPath2 . 'css/font-awesome.min.css'?>">
        <link rel="stylesheet" href="<?php echo $navPath2 . 'css/style.css'?>">
        <link rel="stylesheet" href="<?php echo $navPath2 . 'css/bootstrap-editable.css'?>">

        <!-- javascripts -->
        <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
        <script src="<?php echo $navPath2 . 'js/script.js'?>"></script>
        <script src="<?php echo $navPath2 . 'js/bootstrap.js'?>"></script>
        <script src="<?php echo $navPath2 . 'js/validator.js'?>"></script>
        <script src="<?php echo $navPath2 . 'js/bootstrap-editable.js'?>"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    
    <body>

    <!-- ********* navigation ********* -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="<?php echo $navPath2 . '/pages/index.php'?>">Charm Business Manager</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo $navPath2 . '/pages/index.php'?>">Home</a></li>
        <li><a href="<?php echo $navPath2 . '/pages/login/index.php'?>">Login</a></li>
        <li><a href="<?php echo $navPath2 . '/pages/register/index.php'?>">Register</a></li> 
        <li><a href="<?php echo $navPath2 . '/pages/purchase/index.php'?>">Purchase</a></li>
        <li><a href="<?php echo $navPath2 . '/pages/about/index.php'?>">About</a></li>
        <li><a href="<?php echo $navPath2 . '/pages/contact/index.php'?>">Contact</a></li> 
        <li><a href="<?php echo $navPath2 . '/pages/support/index.php'?>">Support</a></li>
        <li><a href="<?php echo $navPath2 . '/pages/clients/index.php'?>">Clients</a></li> 
        <li><a href="<?php echo $navPath2 . '/pages/pro/index.php'?>">Professionals</a></li> 
        <li><a href="<?php echo $navPath2 . '/pages/clients/c_makeappt.php'?>">MAKE AN APPOINTMENT</a></li> 
        <li><a href="<?php echo $navPath2 . '/pages/login/logout.php'?>">Logout</a></li> 
      </ul>
    </div>
  </div>
</nav>
        
    <!-- ********* main content ********* -->
    <div class="container-fluid" id="page_wrapper">