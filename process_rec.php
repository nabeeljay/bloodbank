<html>
<body background="http://www.clker.com/cliparts/c/1/3/3/12930883391149431275blood-scarlet-red-splash.jpg">
<center>
<style>
body {
	font-family:verdana;
	font-size:25px;
}
table {
	opacity:0.8;
}
a {
   font-family:verdana;
  font-size: 20px;
  color: black;
}
</style>
<table bgcolor="white" frame="vside" rules="all" cellspacing="100px"cellpadding="15px">
<tr>
	<td>Name</td>
	<td>Sex</td>
	<td>Date of Birth</td>
	<td>Blood Group</td>
	<td>Rhesus</td>
	<td>Address</td>
</tr>
<tr>
<?php
 
require 'connection.php';
$conn	= Connect();
$name	= $conn->real_escape_string($_POST['name']);
$empid	= $_POST['empid'];
$hospid	= $_POST['hospid'];
$addr	= $conn->real_escape_string($_POST['addr']);
$phone	= $_POST['phone'];
$bgroup = $conn->real_escape_string($_POST['bgroup']);
$rh		= $conn->real_escape_string($_POST['rh']);
$db 	= "recreg";
$query	= "INSERT into $db (name,empid,hospid,addr,phone,bgroup,rh) VALUES ('" . $name . "','" . $empid . "','" . $hospid . "','" . $addr . "','" . $phone . "','" . $bgroup . "','" . $rh . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
echo "Thank You For Registering! We will be contacting you shortly <br>";
echo "Here is the list of available donors matching your blood type! <br><br>"; 
 $sql 	="SELECT * FROM donreg where bgroup='" . $bgroup . "' and rh='" . $rh . "' ";
 $result= mysqli_query($conn,$sql);
 $num 	= mysqli_num_rows($result);
 if ($num > 0) {
	while($num > 0) {
	$row	= mysqli_fetch_array($result);
	$name	=$row["name"];
	$sex	=$row["sex"];
	$dob	=$row["dob"];
	$bgroup	=$row["bgroup"];
	$rh		=$row["rh"];
	$address=$row["address"];
	echo "<tr>
		<td>$name</td>
		<td>$sex</td>
		<td>$dob</td>
		<td>$bgroup</td>
		<td>$rh</td>
		<td>$address</td>
	</tr>";
	$num=$num - 1;
	}
 }
else {
		echo "0 results";
	}
$conn->close();
die();
?>
</tr>
</table>
<a href='dontmind.html'>Return to main page</a>
</center>
</body>
</html>
