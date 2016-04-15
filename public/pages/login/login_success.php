<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='Login Successful' ;
$output = "";

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

if (isset($_SESSION['pro_username'])) {
    $output .="
    <br>Welcome " . $_SESSION['pro_name'] . ", you are now logged in! <br> Redirecting to the Professionals Home Page";
    $redirecting = '../pro/index.php';
}

if (isset($_SESSION['client_username'])) {
    $output .="
    <br>Welcome " . $_SESSION['client_username'] . ", you are now logged in! <br> Redirecting to the Clients Home Page";
    $redirecting = '../clients/index.php';
}
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Login Successful!</h2>
            
            <?php echo $output; ?>

            <span id="timer">
                <script type="text/javascript">
                    countDown();
                    var redirect = "<?php echo($redirecting); ?>";
                </script>
            </span>
            
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>