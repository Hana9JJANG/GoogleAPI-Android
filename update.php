<?php
$connect = mysqli_connect("localhost", "root", "", "laviosaa");
				
if(isset($_GET['edit']))
{
$id = $_GET['edit'];
$sql= "SELECT * FROM tbl_order WHERE order_id = '$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
}

if(isset($_POST['status']))
{
$status   = $_POST['status'];
$id         = $_POST['order_id'];
$sql        = "UPDATE tbl_order SET order_status='$status' WHERE order_id='$id'";
$res       = mysqli_query($connect , $sql) or die("Could not update".mysql_error());
echo "<meta http-equiv='refresh' content='0;url=oderlist.php'>";
}
?>
<form action="update.php" method="POST">
Order Status <input type="text" name="status" value="<?php echo $row['order_status']; ?>"><br/>
<input type="hidden" name="order_id" value="<?php echo $row[0]; ?>">
<input type="submit" value=" Update ">

</form>





