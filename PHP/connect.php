<?php
$db_host = "localhost";
$user_name="root";
$password="";
$db_name="cms";


$conn = mysqli_connect($db_host, $user_name, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>