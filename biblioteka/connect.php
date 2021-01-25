<?php
$servername = "mysql-olgaszulc.alwaysdata.net";
$username = "olgaszulc";
$password = "GSeDfKG.5!QZfk3";
$dbname = "olgaszulc_pbd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
