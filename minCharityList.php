
<br>
<br>
<div>
   <center> <h1><p style="padding-left: 30px; text-align: center;"><span style="color: #999999;"> Charity List </p></h1>
  
    <div style="text-align: center;"><span style="color: #FF7575;">________________________________________________________________________</span></div>
<div>

	<?php		
				$connect = mysqli_connect("localhost", "root", "", "share4hope");
				$associationList = '';
				$query = '
				SELECT * FROM tbl_association 
				';
				
				$result = mysqli_query($connect, $query);
				while($row = mysqli_fetch_array($result))
				{
						$associationList .="
						<tr>
							<td>".$row["as_name"]."</td>
							<td>".$row["as_email"]."</td>
							<td>".$row["as_phone"]."</td>
							<td>".$row["as_address"]."</td>
					<td><a href='update.php?edit=". $row['as_id']."'>Update</a></td>
					<td><a href='mindeleteCharityList.php?edit=". $row['as_id']."'>Delete</a></td>
	                      
						</tr>
					";
				}
				echo '
				<h3 align="center" style="color:white;">Order List</h3>
				<div class="container">
									<center><table class="table table-condensed">
                                    <thead>
										<tr>
											<th width="5%">Name</th>
											<th width="5%">Email</th>
											<th width="15%">Phone</th>
											<th width="10%">Address</th>
											<th width="5%">FUND</th>
                                        
										</tr>
                                        </thead>
										'.$associationList.'
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

