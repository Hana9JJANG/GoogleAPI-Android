<?php
include('header.php');
?>
<br>
<br>
<div>
   <center> <h1><p style="padding-left: 30px; text-align: center;"><span style="color: #999999;"> Order List </p></h1>
  
    <div style="text-align: center;"><span style="color: #FF7575;">________________________________________________________________________</span></div>
<div>

	<?php		
				$connect = mysqli_connect("localhost", "root", "", "laviosaa");
				$customer_details = '';
				$query = '
				SELECT * FROM tbl_order 
				';
				
				$result = mysqli_query($connect, $query);
				while($row = mysqli_fetch_array($result))
				{
						$customer_details .="
						<tr>
							<td>".$row["order_id"]."</td>
							<td>".$row["customer_id"]."</td>
							<td>".$row["creation_date"]."</td>
							<td>".$row["order_status"]."</td>
							<td><a href='update.php?edit=". $row['order_id']."'>Update</a></td>
	                      
						</tr>
					";
				}
				echo '
				<h3 align="center" style="color:white;">Order List</h3>
				<div class="container">
									<center><table class="table table-condensed">
                                    <thead>
										<tr>
											<th width="5%">Order ID</th>
											<th width="5%">Customer ID</th>
											<th width="15%">Creation Date</th>
											<th width="10%">Order Status</th>
											<th width="5%">Update</th>
                                         	<th width="5%">Delete</th>
										</tr>
                                        </thead>
										'.$customer_details.'
									</table></center>
				</div>
				';

?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>






<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php
include('footer.html');
?>