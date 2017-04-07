<?php
 
require 'connection.php';
$conn	= Connect();
$name	= $conn->real_escape_string($_POST['name']);
$addr	= $conn->real_escape_string($_POST['addr']);
$phone	= $_POST['phone'];
$bgroup = $conn->real_escape_string($_POST['bgroup']);
$rh		= $conn->real_escape_string($_POST['rh']);
$db 	= "bankreg";
$query	= "INSERT into $db (name,addr,phone,bgroup,rh) VALUES ('" . $name . "','" . $addr . "','" . $phone . "','" . $bgroup . "','" . $rh . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
echo "Thank You For Registering! We will be contacting you shortly <br>";