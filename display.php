<html>
<body>
<?php 
 require 'connection.php';
 $conn    = Connect();
 $db = "donreg";
 $sql = SELECT * FROM donreg;
 $result = $conn->query($sql); 
 $num = mysqli_num_rows($result);
 ?>
 <table border=1>
		<tr>
			<td>Name</td>
			<td>Aadhar Number</td>
			<td>Date of Birth</td>
			<td>Blood Group</td>
			<td>Rhesus</td>
			<td>Sex</td>
			<td>Address</td>
		</tr>
		<tr>
 <?php 
 if ($num > 0) {
	while($row = $result->fetch_assoc()) {
		<td>echo  $row["name"];</td>
		<td>echo  $row["donid"];</td>
		<td>echo  $row["dob"];</td>
		<td>echo  $row["bgroup"];</td>
		<td>echo  $row["rh"];</td>
		<td>echo  $row["sex"];</td>
		<td>echo  $row["address"];</td>
	}
	else {
		echo "0 results";
	}
conn->close();
?>
		</tr>
</table>
</body>
</html>
		
