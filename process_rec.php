<?php
 
require 'connection.php';
$conn	= Connect();
$name	= $conn->real_escape_string($_POST['name']);
$empid	= $_POST['empid'];
$hid	= $_POST['hid'];
$addr	= $_POST['address'];
$phone	= $_POST['phno'];
