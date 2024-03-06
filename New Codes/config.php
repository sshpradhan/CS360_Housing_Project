<?php
session_start();
$conn = mysqli_connect("localhost", "root", "root");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Select your database
mysqli_select_db($conn, "Housing_Demo1");
