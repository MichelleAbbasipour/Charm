<?php /* *************** HEADER *************** */

    //set the variable 'title' to be the following:
    $title='Request Confirmation' ;

    //include the code within 'header.php' on this page
    include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Thanks, <?php echo $_SESSION['first_name'] ?></h2>
            <h3>Your appointment is not confirmed until you receive an email <strong>from your consultant.</strong></h3>
            <h3>Please allow up to 24 hours for this email to arrive.</h3>
        </div>
        
         <div class="col-xs-12 centered">
             <h4>The details of your appointment are as follows:</h4>
             <div class="row">
                <h4>CLIENT</h4>
                <p>Client Name: <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']?></p>
                <p>Client Phone Number: <?php echo $_SESSION['phone']?></p>
                <p>Client Email Address: <?php echo $_SESSION['email']?></p>
                <p>Client Notes: <?php echo $_SESSION['notes']?></p>
            </div>
            <div class="row">
                <h4>BUSINESS</h4>
                <p>Business ID: <?php echo $_SESSION['b_id']?></p>
                <p>Business Name: <?php echo $_SESSION['b_name']?></p>
                <p>Business Address: <?php echo $_SESSION['b_address']?></p>
                <p>Business Email: <?php echo $_SESSION['b_email']?></p>
            </div>
            
            <div class="row">
                <h4>TREATMENT</h4>
                <p>Treatment ID: <?php echo $_SESSION['t_id']?></p>
                <p>Treatment Name: <?php echo $_SESSION['t_name']?></p>
                <p>Treatment Description: <?php echo $_SESSION['t_desc']?></p>
                <p>Treatment Duration: <?php echo $_SESSION['t_duration']?></p>
                <p>Treatment Price: £<?php echo $_SESSION['t_price']?></p>
            </div>
             
             <div class="row">
                <h4>APPOINTMENT</h4>
                <p>Appointment Unique ID: <?php echo $_SESSION['unique'] ?></p>
                <p>Appointment ID: <?php echo $_SESSION['appts_id']?></p>
                <p>Appointment Date: <?php echo  $_SESSION['dateAsString']?></p>
                <p>Appointment Time: <?php echo $_SESSION['appt_timeslot']?></p>
                <p>Date Booked: <?php echo $_SESSION['todaysDateString']?></p>
            </div>
           
        <a href="<?php echo $navPath . '/pages/index.php'?>">     
            <button class='btn btn-primary'>Return to Home Page</button>
        </a>
                
        </div>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>