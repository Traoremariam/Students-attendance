<?php  
$servername = "localhost";
$database = "students_part2";
$username = "root";
$password = "";
$datepost = date("Y-m-d");

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>