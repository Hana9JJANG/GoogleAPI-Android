<?php

include('headeradmin.php');
?>

<br>
<br>
<br>
<br>
<div>


   <center> <h1><p style="padding-left: 30px; text-align: center;"><span style="color: #999999;"> Customer List </p></h1>
  
    <div style="text-align: center;"><span style="color: #FF7575;">________________________________________________________________________</span></div>
<div>
<?php
				$connect = mysqli_connect("localhost", "root", "", "laviosaa");
				$customer_details = '';
				$query = '
				SELECT * FROM tbl_customer WHERE type="Customer"
				';
				
				$result = mysqli_query($connect, $query);
				while($row = mysqli_fetch_array($result))
				{
						$customer_details .="
						<tr>
							<td>".$row["CustomerName"]."</td>
							<td>".$row["phone"]."</td>
							<td>".$row["email"]."</td>
							<td>".$row["address"]."</td>
							<td>".$row["phone"]."</td>
							<td><a href='delete.php?del=". $row['CustomerID']."'>Delete</a></td>
						</tr>
                   
					";
				}
				echo '
				<h3 align="center" style="color:white;">List of Customer Registered</h3>
				<div class="container">
									<center><table class="table table-condensed">
										<tr>
											<th width="30%">Name</th>
											<th width="10%">Phone</th>
											<th width="15%">Email</th>
											<th width="20%">Address</th>
											<th width="15%">Country</th>
											<th width="10%">Delete</th>
										</tr>
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