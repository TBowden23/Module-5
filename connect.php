<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Create connection
$con = mysqli_connect("localhost", "root", "root", "Dragginthrudungeons");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$select_db = mysqli_select_db($con, 'Dragginthrudungeons');
if (!$select_db) {
    die("Database Selection Failed" . mysqli_error($con));
}
?>