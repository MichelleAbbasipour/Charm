<?php
    //check if the server is local or remote
    $ip=$_SERVER['REMOTE_ADDR'];
    //echo $ip . "    ";

    // the server is local use this settings
if ($ip == "::1") {
    $servername = "localhost";
    $username = "Michelle";
    $password = "Password";
    $db_name = "charm_test";

    $conn = mysqli_connect($servername, $username, $password, $db_name);

    //echo "<br> db connection local";

} else {//else use these remote database settings
    $servername2 = "79.170.44.133";
    $username2 = "cl30-charm";
    $password2 = "password";
    $db_name2 = "cl30-charm";

    $conn = mysqli_connect($servername2, $username2, $password2, $db_name2);

    //echo "db connection server";
}
