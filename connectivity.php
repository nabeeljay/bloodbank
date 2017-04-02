<?php
require 'connection.php';
function signin()
{
	$conn = Connect();   //starting the session for user profile page
	if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
	{
		$query = mysqli_query($conn,"SELECT *  FROM donreg where name = '$_POST[user]' AND donid = '$_POST[pass]'") or die(mysql_error());
		$row = mysqli_fetch_array($query) or die(mysqli_error());
		if(!empty($row['name']) AND !empty($row['donid']))
		{
			//$conn['username'] = $row['pass'];
			echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
			header('Refresh: 0; URL=result.php');
		}
		else
		{
			echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
		}
	}
}
if(isset($_POST['submit']))
{
	signin();
}

?>