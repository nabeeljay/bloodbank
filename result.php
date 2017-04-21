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
		font-family: 'Open Sans', sans-serif;
	 }
	h1
	{
		color:#800060;
		text-decoration: underline;
	}
		h11
	{
		color:rgb(0, 0, 102);
		font-size: 250%;
		
	}
	h12
	{
		color:rgb(255, 102, 102);
		font-size: 250%;
		
	}
	h13
	{
		color:rgb(51, 51, 204);
		font-size: 250%;
		
	}
	a:link {
    color: white;
	}
	a:visited {
    color: white;
		}
		ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 12px 16px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}
	table {
		color: #333;
		font-family: Helvetica, Arial, sans-serif;
		width: 640px;
		border-collapse:
		collapse; border-spacing: 0;
		}

	td, th {
		border: 1px solid #e6ccff; /* No more visible border */
		height: 30px;
		transition: all 0.3s; /* Simple transition for hover effect */
			}

	th {
		background: #cc99ff; /* Darken header a bit */
		font-weight: bold;
		text-align: center;		
	}

	td {
	background: #FAFAFA;
	text-align: center;
	}

	/* Cells in even rows (2,4,6...) are one color */
	tr:nth-child(even) td { background: #b3b3ff; }

	/* Cells in odd rows (1,3,5...) are another (excludes header cells) */
	tr:nth-child(odd) td { background: #ffb3b3; }

	tr td:hover { background: #660033; color: #ffccff; } /* Hover cell effect! *
	
	</style>
	<center>
		<center><h11>ONLINE</h11><h12> BLOOD </h12><h13>BANK</h13></center>
<br>
	<ul>
	<li><a href='index.html'>Home</a></li>
		<li><a href='donor_registration.html'>Donor Registration</a></li>
  	<li><a href='recipient_registration.html'>Recipient Registration</a></li>
  	<li><a href='bank_registration.html'>Blood Bank Registration</a></li>
 	<li><a href='result.php'>Registered Donors</a></li>
		<li><a class="active" href="#home">Registered Donors</a></li>
	<li><a href='eligibility.html'>Eligibility</a></li>
	<li><a href='login.html'>Login</a></li>
	<li><a href='contactus.html'>About Us</a></li>
	</ul>
	<br>
	<center><h1> DONOR'S LIST </h1></center>
<table border="1">
<tr>
	<th>Name</th>
	<th>Aadhar Number</th>
	<th>Sex</th>
	<th>Date of Birth</th>
	<th>Blood Group</th>
	<th>Rhesus</th>
	<th>Address</th>
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
	</center>
	
</body>
</html>

