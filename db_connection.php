<?php

//declare variable
$server = "localhost";
$username = "root";
$password = "";
$database = "atrs_db";
 
//create connection with database
$connection = mysqli_connect($server, $username, $password, $database);

//connection check
if(!$connection) {
    die("Connection failed! Due to" . mysqli_connect_error());
}
echo "Connected successfully";

?>
