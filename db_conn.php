<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$sonn){
    die("connection feiled " . mysqli_connect_error();)
}
echo "connected successfully";