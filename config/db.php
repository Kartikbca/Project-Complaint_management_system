<?php
$conn = mysqli_connect("localhost", "root", "", "complaint_system");
if (!$conn) {
    die("Database connection failed");
}
session_start();
?>