<?php
	$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '';
	$db = 'laviosaa';
	
	$conn = mysqli_connect("$dbhost" , "$username", "$password");
	//echo"Connected";
	
	mysqli_select_db($conn , $db);
	//echo "Connected to db";
?>