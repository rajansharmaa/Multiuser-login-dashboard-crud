<?php 

$server = "localhost";
$user = "user";
$pass = "password";
$database = "flippappx";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>