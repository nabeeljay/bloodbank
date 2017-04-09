<?php
 require 'connection.php';
 $conn	= Connect();
 $uname = $conn->real_escape_string($_POST['uname']);
 $psw	= $conn->real_escape_string($_POST['psw']);
 $db 	= "admin";
 $sql 	= "SELECT * FROM admin where uname='" . $uname . "' and psw='" . $psw . "' ";
 $result= mysqli_query($conn,$sql);
 $num 	= mysqli_num_rows($result);
 if ($num > 0) {
	 echo "Successful LOGIN! Welcome " . $uname . " ";
	 header('Refresh: 5; URL:result.php');
 }
 else {
	 echo "Wrong username/password";
 }
 $conn->close();
 
?>