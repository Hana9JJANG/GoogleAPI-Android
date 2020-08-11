<?php
$connect = mysqli_connect("localhost", "root", "", "laviosaa");
				
if(isset($_GET['del']))
{
	$id = $_GET['del'];
	$sql = "DELETE FROM tbl_customer WHERE CustomerID='$id'";
	$res = mysqli_query($connect , $sql) or die("Failed".mysql_error());
	echo "<meta http-equiv='refresh' content='0;url=customerlist.php'>";
}

?>