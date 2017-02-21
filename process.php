<?php
 
require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$donid   = $conn->real_escape_string($_POST['donid']);
$sex    = $conn->real_escape_string($_POST['sex']);
$dob = $conn->real_escape_string($_POST['dob']);
$query   = "INSERT into donreg (name,donid,sex,dob) VALUES('" . $name . "','" . $donid . "','" . $sex . "','" . $dob . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Registering! We will be contacting you shortly <br>";
echo "<a href='index.html'>Return to main page</a>"; 
 
$conn->close();
 
?>