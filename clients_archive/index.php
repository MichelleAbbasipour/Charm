<?php
    session_start();
    include ($_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php");    
    //if the session user id is not set then the user cannot access this page and is redirected to the login page
    if(isset($_SESSION['id'])){
        header ("refresh:2; url=../index.php");
        $message = "<h1>You are already logged in! Redirecting to home page.</h1>";
    }else {
        $message = " ";
    } 

    // ** CLIENTS REGISTRATION**
    if(isset($_POST['client'])) {
        
            //get the content of the inputs and assign them to variables
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];    
            $email = $_POST['email'];    
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            //strip any tags from the content
            $first_name = strip_tags($first_name);
            $last_name = strip_tags($last_name);
            $email = strip_tags($email);
            $username = strip_tags($username);
            $password = strip_tags($password);
            $confirm_password = strip_tags($confirm_password);
    
            //strip any slashes from the content
            $first_name = stripslashes($first_name);
            $last_name = stripslashes($last_name);
            $email = stripslashes($email);
            $username = stripslashes($username);
            $password = stripslashes($password);
            $confirm_password = stripslashes($confirm_password);
            //escapes special characters in a string 
            $first_name = mysqli_real_escape_string($conn, $first_name);
            $last_name = mysqli_real_escape_string($conn, $last_name);
            $email = mysqli_real_escape_string($conn, $email);
            $username = mysqli_real_escape_string($conn, $username);
            $password = mysqli_real_escape_string($conn, $password);
            $confirm_password = mysqli_real_escape_string($conn, $confirm_password);
        
            //basic encryption on the password (entered into the database using the same encryption)
            $password = md5($password);
            $confirm_password = md5($confirm_password);
        
            $user_type = 'client';
        
            $sql_store = "INSERT into clients (clients_type, clients_first_name, clients_last_name, clients_username, clients_email, clients_password,  clients_confirm_password) VALUES ('$user_type', '$first_name', '$last_name', '$username', '$email', '$password',  '$confirm_password')";
        
            $sql_fetch_username = "SELECT clients_username FROM clients WHERE clients_username = '$username'";
        
            $sql_fetch_email = "SELECT clients_email FROM clients WHERE clients_email = '$email'";
        
            $query_username = mysqli_query($conn, $sql_fetch_username);
            $query_email = mysqli_query($conn, $sql_fetch_email);
        
            //if the query specified returns anything, it means that the statement is true 
            if(mysqli_num_rows($query_username)){
                echo "There is already a user with that name";   
                //stops the query
                return;
            }
        
            if($_POST['password'] == "" || $confirm_password == "") {
                echo "Please insert a password";
                return; 
            }
        
            if($username == "") {
                echo "Please insert a username";
                return; 
            }
            //check that password match
            if($password != $confirm_password) {
                echo "Passwords do not match!";
                return;
            }
            
            //validate email for format and something input
            if(!filter_var($email, FILTER_VALIDATE_EMAIL) || $email == ""){
                echo "This email is not valid!";
                return;
            }
        
            //check for duplicate email entry
            if(mysqli_num_rows($query_email)){
                echo "That email address is already in use!";   
                return;
            }
             
            mysqli_query($conn, $sql_store); 

            header("refresh:0; url=../register/success_client.php"); 
    }
    // ** PROFESSIONALS REGISTRATION**
    if(isset($_POST['professional'])) {
        
            //get the content of the inputs and assign them to variables
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];    
            $email = $_POST['email'];    
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            //strip any tags from the content
            $first_name = strip_tags($first_name);
            $last_name = strip_tags($last_name);
            $email = strip_tags($email);
            $username = strip_tags($username);
            $password = strip_tags($password);
            $confirm_password = strip_tags($confirm_password);
    
            //strip any slashes from the content
            $first_name = stripslashes($first_name);
            $last_name = stripslashes($last_name);
            $email = stripslashes($email);
            $username = stripslashes($username);
            $password = stripslashes($password);
            $confirm_password = stripslashes($confirm_password);
            //escapes special characters in a string 
            $first_name = mysqli_real_escape_string($conn, $first_name);
            $last_name = mysqli_real_escape_string($conn, $last_name);
            $email = mysqli_real_escape_string($conn, $email);
            $username = mysqli_real_escape_string($conn, $username);
            $password = mysqli_real_escape_string($conn, $password);
            $confirm_password = mysqli_real_escape_string($conn, $confirm_password);
        
            //basic encryption on the password (entered into the database using the same encryption)
            $password = md5($password);
            $confirm_password = md5($confirm_password);
        
            $user_type = 'professional';
        
            $sql_store = "INSERT into professionals (pro_type, pro_first_name, pro_last_name, pro_email, pro_username, pro_password,  pro_confirm_password) VALUES ('$user_type', '$first_name', '$last_name', '$email', '$username', '$password', '$confirm_password')";
            $sql_fetch_username = "SELECT pro_username FROM professionals WHERE pro_username = '$username'";
            $sql_fetch_email = "SELECT pro_email FROM professionals WHERE pro_email = '$email'";
        
            $query_username = mysqli_query($conn, $sql_fetch_username);
            $query_email = mysqli_query($conn, $sql_fetch_email);
        
            //if the query specified returns anything, it means that the statement is true 
            if(mysqli_num_rows($query_username)){
                echo "There is already a user with that name";   
                //stops the query
                return;
            }
        
            if($_POST['password'] == "" || $confirm_password == "") {
                echo "Please insert a password";
                return; 
            }
        
            if($username == "") {
                echo "Please insert a username";
                return; 
            }
            //check that password match
            if($password != $confirm_password) {
                echo "Passwords do not match!";
                return;
            }
            
            //validate email for format and something input
            if(!filter_var($email, FILTER_VALIDATE_EMAIL) || $email == ""){
                echo "This email is not valid!";
                return;
            }
        
            //check for duplicate email entry
            if(mysqli_num_rows($query_email)){
                echo "That email address is already in use!";   
                return;
            }
             
            mysqli_query($conn, $sql_store);  
            header("refresh:0; url=../register/success_pro.php");
    }



    $title='Register' ;
    $headerPath = $_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php";
    include ($headerPath);
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">
       
<h1>REGISTER</h1>
    
<!-- message shown if user is logged in -->
<?php echo $message; ?>
   
<!-- login form -->
    <div class="form">
        <form action="index.php" method="post" enctype="multipart/form-data">
            
            <!-- input: first name -->
            <h2>First Name</h2>
            <input class="form_style" name="first_name" type="text" autofocus>
            
            <!-- input: last name -->
            <h2>Last Name</h2>
            <input class="form_style" name="last_name" type="text" >
            
            <!-- input: email -->
            <h2>Email</h2>
            <input class="form_style" name="email" type="text" >
            
            <!-- input: username -->
            <h2>Username</h2>
            <input class="form_style" name="username" type="text">
            
            <!-- input: password -->
            <h2>Password</h2>
            <input class="form_style" name="password" type="password">
            
            <!-- input: confirm password -->
            <h2>Confirm Password</h2>
            <input class="form_style" name="confirm_password" type="password">
            
            <!-- input: registration buttons -->
            <div id="reg_btns">
                <input class="btn button" name="client" type="submit" value="Client">
                <input class="btn button" name="professional" type="submit" value="Professional">
            </div>
        </form>
    </div>
    
</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php 
    $pathFooter = $_SERVER['DOCUMENT_ROOT'];
    $pathFooter .= "/charm/includes/footer.php";
    include ($pathFooter);
?>