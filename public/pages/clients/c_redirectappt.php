<?php /* *************** HEADER *************** */

//set the variable 'title' to be the following:
$title='Redirecting...' ;
$output="";

//include the code within 'header.php' on this page
include($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

if (isset($_SESSION['c_id'])) {
    $c_id = $_SESSION['c_id'] ;
} else {
    $c_id='0';
}
if (isset($_SESSION['e_id'])) {
    $c_id = $_SESSION['e_id'] ;
} else {
    $e_id='0';
}

$_SESSION['unique'] = uniqid();
$uniqueIdentifier = $_SESSION['unique'];

$clients_email = $_SESSION['email'];

//SQL statement to insert the variables into the database
$query ="
    INSERT INTO appointments 
    (appts_unique,
    clients_id, 
    businesses_id, 
    employees_id,
    treatments_id,
    appt_timeslot,
    appts_date,
    first_name,
    last_name,
    phone,
    email,
    client_notes,
    booked_date) 
    VALUES (
    '" .$_SESSION['unique']. "',
    $c_id, 
    $_SESSION[b_id],
    $e_id,
    $_SESSION[t_id],
    '" .$_SESSION['appt_timeslot']. "',
    $_SESSION[appt_date],
    '" .$_SESSION['first_name']. "',
    '" .$_SESSION['last_name']. "',
    '" .$_SESSION['phone']. "',
    '" .$_SESSION['email']. "',
    '" .$_SESSION['notes']. "',
    now())";

//run the query, assinging the results to a variable
$resultinsert = mysqli_query($conn, $query);

//check for matching client username or email
$appts_query     = "SELECT * FROM appointments WHERE appts_unique = '$uniqueIdentifier'";
$appts_result    = mysqli_query($conn, $appts_query);

//if there is a matching username or email then do this...
if (mysqli_num_rows($appts_result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($appts_result)) {
        $_SESSION['appts_id']=$row["appts_id"];
        $_SESSION['appt_date']=$row["appts_date"];
        $_SESSION['appt_timeslot']=$row["appt_timeslot"];
        $_SESSION['booked_date']=$row["booked_date"];
    }
}

if ($resultinsert) {
    //if the query is successful
    header('Refresh: 3; URL='.$navPath.'/pages/clients/c_confirmappt.php');
} else {
    //if the query fails
    $message = "<br>Appointment failed to be added";
}
?>

<!-- ************************************** -->
<!-- ***          MAIN CONTENT          *** -->
<!-- ************************************** -->
<div class="row" id="main_content">
    <div class="container-fluid">
        <div class="col-xs-12 centered">
            <h2>Your appointment request is being confirmed. Please wait.</h2>
        </div>
        
        <?php
        //$to         = 'michelleabbasipour@outlook.com';
        $to         = $clients_email;
        $subject    = 'Appointment Request';
        $headers    = 'From: Charm Management System <info@charm-management-system.com>' . "\r\n";
        $headers    .= 'Content-type: text/html';
        $message    = '<h4>CLIENT DETAILS</h4>';
        $message    .= 'Client\'s name: ' . $_SESSION['first_name'] . " " . $_SESSION['last_name'] . "<br>";
        $message    .= 'Client\'s phone number: ' .  $_SESSION['phone'] . "<br>";
        $message    .= 'Client\'s email address: ' . $_SESSION['email'] . "<br><br>";
        $message    .= 'Client\'s notes: ' . $_SESSION['notes'] . "<br><br>";
        $message    .= '<h4>TREATMENT DETAILS</h4>';
        $message    .= 'Treatment ID: ' . $_SESSION['t_id'] . "<br>";
        $message    .= 'Treatment Name: ' . $_SESSION['t_name'] . "<br>";
        $message    .= 'Treatment Duration: ' . $_SESSION['t_duration'] . "<br>";
        $message    .= 'Treatment Price: ' . $_SESSION['t_price'] . "<br>";
        $message    .= '<h4>APPOINTMENT DETAILS</h4>';
        $message    .= 'Appointment ID: ' . $_SESSION['appts_id'] . "<br>";
        $message    .= 'Appointment Date: ' . $_SESSION['dateAsString'] . "<br>";
        $message    .= 'Appointment Time: ' . $_SESSION['appt_timeslot'] . "<br>";
        $message    .= 'Date Booked: ' .  $_SESSION['todaysDateString'] . "<br>";

        if (mail($to, $subject, $message, $headers)) {
            //echo 'email sent';
        } else {
            echo 'Unable to send email. Please try again.';
        }
        ?>
        
        <?php echo $output; ?>
    </div>
</div>

<?php /* *************** FOOTER *************** */
    //include the code within 'footer.php' on this page.
    include($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>