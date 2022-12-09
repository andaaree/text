<?php 
$con = mysqli_connect("localhost","root","","text");
session_start();
// Check connection
if (mysqli_connect_errno()) {
  unset($_SESSION['success']);
  unset($_SESSION['error']);
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>