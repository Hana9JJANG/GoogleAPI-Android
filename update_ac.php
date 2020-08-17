<?php
// Connect to server and select database.
mysql_connect("localhost", "root", "")or die("cannot connect"); 
mysql_select_db("laviosaa")or die("cannot select DB");

$order_id = $_GET['order_id'];
// update data in mysql database 
$sql="UPDATE tbl_order SET customer_id='".$_POST['customerid']."', order_status='".$_POST['orderstatus']."' WHERE order_id='".$_POST['order_id']."'" or die ("this stuffed up");
$result=mysql_query($sql) or die ("this stuffedup");


// if successfully updated. 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='oderlist.php'>View result</a>";
}

else {
echo "ERROR";
}

?>