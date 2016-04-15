<?php
    ob_start();
    session_start();
    $db_config = $_SERVER['DOCUMENT_ROOT']."/charm/includes/db_config.php";
    include ($db_config);
?>

<!-- *** HEADER *** -->
<?php
    $title='Clients Login';
    $headerPath = $_SERVER['DOCUMENT_ROOT']."/charm/includes/header.php";
    include ($headerPath);
?>

<!--- *** MAIN CONTENT *** -->
<div class="main_content">
       
    <h1>CLIENTS LOGIN</h1>
    
    <!-- login form -->
    <div>
        <form action="login_client.php" method="post" enctype="multipart/form-data">
            <h2>Username</h2>
            <input class="form_style" placeholder="Username" name="username" type="text" autofocus>
            
            <h2>Password</h2>
            <input class="form_style" placeholder="Password" name="password" type="password">
            
            <input class="login_btn button" name="login" type="submit" value="Login">
        </form>
    </div>
    
    <?php
        //if the login button is clicked
        if(isset($_POST['login'])) {
            
            //get the content of the inputs and assign them to variables
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            //strip any tags from the content
            $username = strip_tags($username);
            $password = strip_tags($password);
            
            //strip any slashes from the content
            $username = stripslashes($username);
            $password = stripslashes($password);
            
            //escapes special characters in a string 
            $username = mysqli_real_escape_string($conn, $username);
            $password = mysqli_real_escape_string($conn, $password);
            
            //basic encryption on the password (entered into the database using the same encryption)
            $password = md5($password);
            
            // SQL query
            //select the username which is the same as the one input on the form (restricted to 1 result)
            $sql = "SELECT * FROM clients WHERE clients.clients_username = '$username' LIMIT 1";
            
            //run query
            $query = mysqli_query($conn, $sql);
            
            //fetch the array and put it into $row
            $row = mysqli_fetch_array($query);
            
            $id = $row['clients_id'];
            $db_password = $row['clients_password'];
            $pro_first_name = $row['clients_first_name'];
            $user_type = $row['clients_type'];
        
            if ($password == $db_password) {
                $_SESSION['clients_username'] = $username;
                $_SESSION['clients_id'] = $id;
                $_SESSION['clients_first_name'] = $pro_first_name;
                $_SESSION['user_type'] = 'client';
                header("refresh:0; url=../clients/index.php");
            } else {
                echo '<p>username or password is not correct<p>';
            }
        }
    ?>
    
</div><!-- end of main_content-->

<!-- *** FOOTER *** -->
<?php 
$pathFooter = $_SERVER['DOCUMENT_ROOT'];
$pathFooter .= "/charm/includes/footer.php";
include ($pathFooter);
?>