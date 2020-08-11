<html>
<head>
</head>
<body>
<div>
<?php
include ('header.html');
?>
</div>


<div class="container">
<div class="row">
<div class="panel-body">

<!-- LOG IN -->

<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
	include "config.php";
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$result = $db->prepare("SELECT * FROM tbl_customer WHERE username=? AND password=? ");
	$result -> bindParam(1, $username);
	$result -> bindParam(2, $password);
	$result -> execute();
	$row = $result->fetch();
	$user = $row['username'];
	$pass = $row['password'];
	$CustomerID = $row['CustomerID'];
	$type = $row['type'];
	if($username == $user && $pass == $password) {
		session_start();
		$_SESSION['username'] = $user;
		$_SESSION['password'] = $pass;
		$_SESSION['CustomerID'] = $CustomerID;
		$_SESSION['type'] = $type;
		?>
		<script>window.location.href='home.php'</script>
		<?php
	} else {
		?>
		<div class="alert" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Ah! Sorry!</strong>Wrong Username and Password!
		</div>
		<?php
	}
}	
?>
<br>
<br>
<br>


<div>
<center>
<form method="post">
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control" placeholder="Enter username...." name="username"/>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" placeholder="Enter password...." name="password"/>
</div>
<div>
<button type="submit" value="Login" class="btn btn-default">Log in</button>&nbsp;&nbsp;<a href="register.php">Register</a>
</div>
<div>

</div>
</form>
</center>
</div>

<br>
<br>
<br>
<br>


<style>
input[type=text], select {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit], select {
    background-color:#FF7575;     
}
	input[type=submit]:hover {
    background-color: #f1f1f1;
}   
</style>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<br>
<br>
<br>
<br>



<?php
include ('footer.html');
?>
</body>
</html>