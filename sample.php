<?php
$db=mysqli_connect('localhost','nabeel','nabeel','bloodbank') or die('Error Connecting to Mysql server.');
?>
<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>

<?php
$query = "SELECT * FROM table_name";
mysqli_query($db, $query) or die('Error querying database.');
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['name'] . ' ' . $row['age'] . ' ' . $row['Gender'] . ' ' . $row['fathers_name'] .' ' . $row[blood_group] .' ' . $row[aadhar] . '<br />';
}
?>
?>

</body>
</html>