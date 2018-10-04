<?php
$conn = mysqli_connect('localhost','root','','biryanipot');
if(!$conn){
    die("Connection failed: " . $conn->connect_error);
}
?>