<?php
	session_start();
	$conn= mysqli_connect('peicloud.ca','u118','u118','db118') or die(mysqli_error());
	$db_select=mysqli_select_db($conn,'db118')or die(mysqli_error());

	$sql="SELECT * FROM users";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$n="bitcoin";
	echo "Yesss";


?>
