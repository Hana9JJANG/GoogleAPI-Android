<?php

include('headeradmin.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Add Paintings</title>
</head>
<body>
<?php #  - add_product.php


if (isset($_POST['submit'])) { // Handle the form.
	
	// Validate the print_name, image, artist (existing or first_name, last_name), size, price, and description.

	// Check for a print name.
	if (!empty($_POST['name'])) {
		$pn = addslashes($_POST['name']);
	} else {
		$pn = FALSE;
		echo '<p><font color="red">Please enter the print\'s name!</font></p>';
	}
	
	// Check for an image (not required).
	if (is_uploaded_file ($image = $_FILES['image']['tmp_name'])) {
		if (move_uploaded_file($_FILES['image']['tmp_name'], "uploads/{$_FILES['image']['name']}")) { // Move the file over.

			echo '<p>The file has been uploaded!</p>';

		} else { // Couldn't move the file over.
			echo '<p><font color="red">The file could not be moved.</font></p>';
			$i = '';
		}
		$i = $_FILES['image']['name'];
	} else {
		$i = '';
	}
	
	
	
	// Check for a price.
	if (is_numeric($_POST['price'])) {
		$p = $_POST['price'];
	} else {
		$p = FALSE;
		echo '<p><font color="red">Please enter the painting\'s price!</font></p>';
	}
	
	if ($pn && $p) {
	
		// Add the print to the database.
		$query = "INSERT INTO tbl_product (name, price, image) VALUES ('$pn', $p,'$i')";
		if ($result = @mysql_query ($query)) { // Worked.
			echo '<p>The print has been added.</p>';
		} else { // If the query did not run OK.
			echo '<p><font color="red">Your submission could not be processed due to a system error.</font></p>'; 
		}
		
	} else { // Failed a test.
			echo '<p><font color="red">Please click "back" and try again.</font></p>';
	}
	
} else { // Display the form.



?>

<br>
<br>
<br>  
<br>


<center>	
<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="524288">
<legend>Fill out the form to add a product to the catalog:</legend>
<p><b>Product Name:</b> <input type="text" name="name" size="30" maxlength="60" /></p>
<p><b>Image:</b> <input type="file" name="image" /></p>
<p><b>Price:</b> <input type="text" name="price" size="10" maxlength="10" /><br /><small>Do not include the dollar sign or commas.</small></p>
<center>
<div align="center"><input type="submit" name="submit" value="Submit" /></div>

</form><!-- End of Form -->
<?php
} // End of main conditional.
?>





<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


</body>
</html>