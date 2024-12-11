<?php
$connect = new mysqli("localhost", "root", "", "lawagenc");

// Check for connection errors
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>
