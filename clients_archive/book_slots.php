<?php
    ob_start(); //used to ensure that the header() function will work
    session_start(); //used to transfer session variables through the site
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php");

    // *** HEADER *** 

    //set the variable 'title' to be the following:
    $title='title' ;

    //include the code within 'header.php' on this page
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php");

    if(isset($_POST['slots_booked'])) $slots_booked = mysqli_real_escape_string($conn, $_POST['slots_booked']);
    if(isset($_POST['name'])) $name = mysqli_real_escape_string($conn, $_POST['name']);
    if(isset($_POST['email'])) $email = mysqli_real_escape_string($conn, $_POST['email']);
    if(isset($_POST['phone'])) $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    if(isset($_POST['booking_date'])) $booking_date = mysqli_real_escape_string($conn, $_POST['booking_date']);
    if(isset($_POST['cost_per_slot'])) $cost_per_slot = mysqli_real_escape_string($conn, $_POST['cost_per_slot']);

    $booking_array = array(
        "slots_booked" => $slots_booked,	
        "booking_date" => $booking_date,
        "cost_per_slot" => number_format($cost_per_slot, 2),
        "name" => $name,
        "email" => $email,
        "phone" => $phone
    );

    $explode = explode('|', $slots_booked);
    $current_date = date("Y-m-d");

    foreach($explode as $slot) {

        if(strlen($slot) > 0) {

            $stmt = $conn->prepare("INSERT INTO appointments (appts_date, appts_time, name, email, phone, clients_id, booked_date) VALUES (?, ?, ?, ?, ?, '$clients_id', '$current_date')"); 
            $stmt->bind_param('sssss', $booking_date, $slot, $name, $email, $phone);
            $stmt->execute();

        } // Close if

    } // Close foreach
?>
    <div class='success'>The booking has been made into the database.</div>

    <?php 
        echo "<div id='booking_details'>";
        echo "<p>This is the appointment date: " . $booking_date . "</p>";
        echo "<p>This is the clients id: " . $clients_id . "</p>";
        echo "<p>This is the time slot booked: " . $slots_booked . "</p>";
        echo "<p>This is the client's name: " . $name . "</p>";
        echo "<p>This is the client's email: " . $email . "</p>";
        echo "<p>This is the client's phone number: " . $phone . "</p>";
        echo "<p>This is the cost: " . $cost_per_slot . "</p>";
        echo "<p>Date booked: " . $current_date . "</p>";
        echo "</div>"
    ?>

<!-- *** FOOTER *** -->
<?php 
    //include the code within 'footer.php' on this page.
    include ($_SERVER['DOCUMENT_ROOT'] . "/charm/includes/footer.php");
?>