<?php
//input validation start
$page_title = 'Register';
include ('header.html');


if(empty($_POST['name'])) {
$errors[] = 'You forgot to enter your name.';
} else {
$n= trim($_POST['name']);
}

if(empty($_POST['price'])) {
$errors[] = 'You forgot to enter your price.';
} else {
$p = trim($_POST['price']);
}

if(empty($_POST['image'])) {
$errors[] = 'You forgot to enter your image.';
} else {
$i = trim($_POST['image']);
}

if (empty($errors)) { 

 //Register the user in the database.
  require_once ('mysql_connect.php'); //Connect to the db
  

  $query = "INSERT INTO tbl_product(name,price,image) 
		VALUES ('$n', '$p', '$i')";
  $result = mysqli_query ($conn , $query);
  if ($result) {
   
  echo '<center><h1 id="mainhead">Thank You!</h1></center>';
  echo "<center><fieldset style=\"background:#FFFFFF; border:2px solid black; margin: 0% 30%\"><legend style=\"background:#66d9ff; border:2px solid #007399;\">Your Receipt</legend><p><br /></p>
Below are your result:
<br /><b>Product name: </b>$n
<br /><b>Price: </b>$p
<br /><b>Image: </b>$i
"
  ?>
  </br><center><a href="catalog.php" target="_blank" >Add product</a></center>
  <?php
  echo"</fieldset>";    
include ('footer.html');
  exit();

  } else {
      echo '<h1 id="mainhead">System Error</h1>
      <p class="error">system error. We apologize for any incovenience.</p>';
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
<form action="addprod.php" method="post">

<div class="form-group">
<label for="name" class="label-control">Product Name</label>&nbsp; &nbsp; 
<input type="text" name="name" class="form-control" autocomplete="off"
value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
</div>
<div class="form-group">
<label for="price" class="label-control">Price</label>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<input type="text" name="ic" class="form-control" autocomplete="off"
value="<?php if (isset($_POST['price'])) echo $_POST['price']; ?>">
</div>
<div class="form-group">
<label for="image" class="label-control">Image</label>&nbsp; &nbsp; 
<input type="file" name="hp" class="form-control" autocomplete="off"
value="<?php if (isset($_POST['image'])) echo $_POST['image']; ?>">
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