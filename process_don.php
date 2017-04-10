<html>
<body>
<style>
 body {
   text-family:verdana;
  text-size:22px;
 }
a {
   font-family:verdana;
  font-size: 20px;
  color: black;
}
 </style>

<?php
 
require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$donid   = $_POST['donid'];
$sex     = $conn->real_escape_string($_POST['sex']);
$dob     = $_POST['dob'];
$address = $conn->real_escape_string($_POST['address']);
$db      = "donreg";
$query   = "INSERT into $db (name,donid,sex,dob,address) VALUES('" . $name . "','" . $donid . "','" . $sex . "','" . $dob . "','" . $address . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Registering! We will be contacting you shortly <br>";
echo "<a href='index.html'>Return to main page</a>"; 
header('Refresh: 5; URL=dontmind.html');
$conn->close();
die();
?>

</body>
</html>
