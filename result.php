<html>
<body>
	
<table border="1" bordercolor="green"bgcolor="yellow">
<tr>
	<td>Name</td>
	<td>Aadhar Number</td>
	<td>Sex</td>
	<td>Date of Birth</td>
	<td>Blood Group</td>
	<td>Rhesus</td>
	<td>Address</td>
</tr>
<tr>
<?php 
 require 'connection.php';
 $conn    = Connect();
 $db = "donreg";
 $sql ="SELECT * FROM donreg";
 $result = mysqli_query($conn,$sql);
 $num = mysqli_num_rows($result);
 if ($num > 0) {
	while($num > 0) {
	$row = mysqli_fetch_array($result);
	$name=$row["name"];
	$donid=$row["donid"];
	$sex=$row["sex"];
	$dob=$row["dob"];
	$bgroup=$row["bgroup"];
	$rh=$row["rh"];
	$address=$row["address"];
	echo "<tr>
		<td>$name</td>
		<td>$donid</td>
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
?>
</table>
<a href="mailto:kg9810@gmail.com?subject=query&body=message">
	DROP YOUR REQUEST
	</a>
	<center><a href="index.html"> BACK TO TOP</a>
	</center>
	
</body>
</html>

