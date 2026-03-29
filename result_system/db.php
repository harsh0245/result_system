<?php
$conn = new mysqli("localhost", "root", "", "ResultManagement");

if ($conn->connect_error) {
    die("Connection failed "); 
}
?>