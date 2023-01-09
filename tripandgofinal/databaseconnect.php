<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tripandgo_db";
$db = mysqli_connect($servername, $username, $password, $database);

// Create connection
//$db = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$db ) {
  die("gagal konek ke database: " . mysqli_connect_error());
}
echo "Berhasil Connect";

?>