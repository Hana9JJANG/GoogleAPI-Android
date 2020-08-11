<?php
//input validation start
$page_title = 'Register';
include ('header.html');

if (isset($_POST['submitted'])) {

$errors = array();

if(empty($_POST['user'])) {
$errors[] = 'You forgot to enter your username.';
} else {
$user = trim($_POST['user']);
}

if(!empty($_POST['password1'])) {
if ($_POST['password1'] != $_POST['password2']) {
$errors[] = 'Your password did not match the confirmed password.';
} else {
$pass = trim($_POST['password1']);
$pass = md5($pass);
}
} else {
$errors[] = 'You forgot to enter your password.';
}


/*
if(!empty($_POST['password'])) {
$password = trim($_POST['password']);
}elseif(strlen($password) < 4){
$errors[] = 'Your password must be at least 4 character.';
} else {
$errors[] = 'You forgot to enter your password.';
}
*/

if(!empty(!filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL))) {
$errors[] = 'You forgot to enter your email.';
} else {
$email = trim($_POST['email']);
}

if(empty($_POST['name'])) {
$errors[] = 'You forgot to enter your name.';
} else {
$name = trim($_POST['name']);
}

if(empty($_POST['hp'])) {
$errors[] = 'You forgot to enter your phone number.';
} else {
$hp = trim($_POST['hp']);
}

if(empty($_POST['ic'])) {
$errors[] = 'You forgot to enter your phone number.';
} else {
$ic = trim($_POST['ic']);
}

if (empty($_POST['address'])) {
$errors[] = 'You forgot to select your address.';
} else {
$address = $_POST['address'];
}


if (empty($errors)) { 

 //Register the user in the database.
  require_once ('mysql_connect.php'); //Connect to the db
  

  $query = "INSERT INTO tbl_customer(username,password,CustomerName,ic,phone,address,email) 
		VALUES ('$user', '$pass', '$name', '$ic', '$hp', '$address', '$email')";
  $result = mysqli_query ($conn , $query);
  if ($result) {
   
  echo '<center><h1 id="mainhead">Thank You!</h1></center>';
  echo "<center><fieldset style=\"background:#FF7575; border:2px solid black; margin: 0% 30%\"><legend style=\"background:#66d9ff; border:2px solid #007399;\">Your Receipt</legend><p><br /></p>
Below are your result:
<br /><b>Username: </b>$user
<br /><b>Name: </b>$name
<br /><b>IC Number: </b>$ic
<br /><b>Phone Number: </b>$hp
<br /><b>Address: </b>$address
<br /><b>Email: </b>$email
"
  ?>
  </br><center><a href="login.php" target="_blank" >LOGIN</a></center><br>
  <br>
  <?php
  echo"</fieldset>"; 
   
include ('footer.html');
  exit();

  } else {
      echo '<h1 id="mainhead">System Error</h1>
      <p class="error">You could not be registered due to a system error. We apologize for any incovenience.</p>';
      echo'<p>' . mysqli_error($conn) . '<br /><br />Query: '. $query .'</p>';
      include ('footer.html');
      exit();
  }

  mysql_close();

 } else {

   echo '<h1 id="mainhead">Error!</h1>
   <p class="error">The following error(s) occurred:<br />';
   foreach ($errors as $msg) {
      echo "- $msg<br />\n";
   }
   echo '</p><p>Please try again.</p><p><br /></p>';
 }
 } 

?>

<br>
<br>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div id="form">
<center> <h1><p style="padding-left: 30px; text-align: center;"><span style="color: #999999;"> Register </p></h1>
<div style="text-align: center;"><span style="color: #FF7575;">________________________________________________________________________</span></div>
<div></div>
<br>
<br>
<form action="register.php" method="post">
<div class="form-group">
<label class="label-control">Username</label> &nbsp; &nbsp; &nbsp;&nbsp; 
<input type="text" name="user" placeholder="Your username.." class="form-control" autocomplete="off" 
value="<?php if (isset($_POST['user'])) echo $_POST['user']; ?>">
</div>

<div class="form-group">
<label for="password" class="label-control">Password</label>&nbsp; &nbsp; &nbsp;&nbsp; 
<input type="password" name="password1" placeholder="New Password.." class="form-control" autocomplete="off"
value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
</div>

<div class="form-group">
<label for="password" class="label-control">Confirm Pass</label>&nbsp; &nbsp; 
<input type="password" name="password2" placeholder="Confirmation password.." class="form-control" autocomplete="off"
value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
</div>

<div class="form-group">
<label for="email" class="label-control">Email</label>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<input type="email" name="email" placeholder="Your email.." class="form-control" autocomplete="off"
value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
</div>

<div class="form-group">
<label for="fullname" class="label-control">Name</label>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<input type="text" name="name" placeholder="Full name.." class="form-control" autocomplete="off"
value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
</div>
<div class="form-group">
<label for="ic" class="label-control">IC Number</label>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<input type="text" name="ic"placeholder="Identity card number...."  class="form-control" autocomplete="off"
value="<?php if (isset($_POST['ic'])) echo $_POST['ic']; ?>">
</div>
<div class="form-group">
<label for="hp" class="label-control">Phone Number</label>&nbsp; &nbsp; 
<input type="text" name="hp" placeholder="Your contact number.." class="form-control" autocomplete="off"
value="<?php if (isset($_POST['hp'])) echo $_POST['hp']; ?>">
</div>
<div class="form-group">
<label for="address" class="label-control">Address</label>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<input type="text" name="address" placeholder="Full address.." class="form-control" autocomplete="off"
value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>">
</div>
<div class="form-group">
  <p><input type="submit" name="submit" value="Register" /></p>
  <input type="hidden" name="submitted" value="TRUE" />
</div>
</form>
</div>


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
input[type=email], select {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 8%;
    background-color: #FF7575;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #f1f1f1;
}


</style>





<?php
include ('footer.html');
?>