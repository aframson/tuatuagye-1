<?php 

$con = mysqli_connect('localhost','root','','PassBook');



// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 