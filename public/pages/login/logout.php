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
    //header('Refresh: 3; URL=../index.php');
    //set the variable 'title' to be the following:
    $title='Redirecting...' ;
    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

    $output_top ="  <h2>Logging you out...</h2>
                    <p>You are being automatically redirected to the home page.</p>
                    <br>If your browser does not redirect you";
    $output_btm="or you do not wish to wait, <a href='../index.php'>click here</a>.</p>";

    $redirecting = '../index.php';
?>
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            
        <?php echo $output_top;?>
        
        <span id="timer">
            <script type="text/javascript">
                countDown();
                var redirect = "<?php echo($redirecting);?>";
            </script>
        </span>
            
        <?php echo $output_btm;?>

      </div>
    </div>
</div>
<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>