<html>
	<title>result</title>
<body>
	<style>
	html {
	font-family: 'Open Sans', sans-serif;
	}
	body
	{
		
		background-image: url("https://www.google.co.in/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwia06as--LSAhVEPI8KHac2C98QjRwIBw&url=http%3A%2F%2Fwww.zingerbug.com%2FBackgrounds%2Findex_pages%2Fsmiley_faces_page1.htm&psig=AFQjCNFl5KY1Co00qI-RVB8GiyMbd2D68Q&ust=1490026402468197");
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
	img:hover 
	{
		box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
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
	
	blockquote {
  background: #f9f9f9;
  border-left: 10px solid #ccc;
  margin: 1.5em 10px;
  padding: 0.5em 10px;
  quotes: "\201C""\201D""\2018""\2019";
}
blockquote:before {
  color: #ccc;
  content: open-quote;
  font-size: 4em;
  line-height: 0.1em;
  margin-right: 0.25em;
  vertical-align: -0.4em;
}
blockquote p {
  display: inline;
}
	</style>
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

