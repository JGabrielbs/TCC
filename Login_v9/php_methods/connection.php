<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sel = mysqli_select_db($conn, $dbname);
if ($conn->connect_error) {
    echo("deu ruim");
  die("Connection failed: " . $conn->connect_error);
}



?>