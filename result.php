<html>
	<title>result</title>
<body>
	<style>
	html {
	font-family: 'Open Sans', sans-serif;
	}
	body
	{
		
		background-image: url("http://www.freebiesgallery.com/wp-content/uploads/2014/02/blurred-background-10.jpg");
		background-attachement:center;
		background-size:cover;
	 }
	img
	{
		border: 1px solid #ddd;
	    	border-radius: 2px;
	    	padding: 5px;
	    	width: 150px;
	}
	h1
	{
		color:red;
		text-decoration: underline;
	}
	p {
    		color:white;
	}
	a:link {
    color: white;
	}
	a:visited {
    color: white;
	}
	table {
		color: #333;
		font-family: Helvetica, Arial, sans-serif;
		width: 640px;
		border-collapse:
		collapse; border-spacing: 0;
		}

	td, th {
		border: 1px solid transparent; /* No more visible border */
		height: 30px;
		transition: all 0.3s; /* Simple transition for hover effect */
			}

	th {
		background: #DFDFDF; /* Darken header a bit */
		font-weight: bold;
	}

	td {
	background: #FAFAFA;
	text-align: center;
	}

	/* Cells in even rows (2,4,6...) are one color */
	tr:nth-child(even) td { background: #F1F1F1; }

	/* Cells in odd rows (1,3,5...) are another (excludes header cells) */
	tr:nth-child(odd) td { background: #FEFEFE; }

	tr td:hover { background: #666; color: #FFF; } /* Hover cell effect! *
	</style>
<table border="1">
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

