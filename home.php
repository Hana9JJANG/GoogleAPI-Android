<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
	header('location: login.php');
}
?>



<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/slide.css">



<style>


li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: down;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}



</style>


<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color:#FF7575;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
a:hover {
    background-color:#FFCECE;
    color: white;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
.mySlides {
  display:none;  
  text-align: center;
  max-width: 100%;
  max-height: 100%;
 
}





body {
    font-family: "Lato", sans-serif;    
    background-image: url("lavioSaa.jpg");    
height:100;
background-position: center;
background-repeat:no-repeat;
background-size: cover;
background-attachment: fixed;
background-position: center;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #FF7575;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

<body>

<div class="navbar">
<img src="menu.png" alt="menu" style="float:left;width:42px;height:42px;" onclick="openNav()">
<img src="logicon.png" alt="menu" style="float:left;width:px;height:42px;" onclick="openNav()">

  <a class="active" href="home.php">Home</a>
  <a href="multi_tab_shopping_cart.php">Catalog</a>
  <a href="faq1.php">FAQ</a>
  <a href="aboutus.php">About Us</a>      


<?php
if($_SESSION['type']=='Admin'){
?>

<div class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Admin</a>
    <div class="dropdown-content">
      <a href="oderlist.php">Order List</a>
      <a href="customerlist.php">Customer List</a>
      <a href="productlist.php">Product List</a>
</div>
</div>



<?php
} else{
?>
<?php
}
?>


 
 <div style="text-align:right;"> <h3>Hello pretty ! <?php echo $_SESSION['username'] ?> :D </h3></div>

</div>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>  
  <a href="login.php">Log In</a>    
 <a href="logout.php">Log Out</a>  
  <a href="register.php">Register</a>
  <a href="multi_tab_shopping_cart.php">Catalog</a>
  <a href="aboutus.php">About Us</a>
  <a href="faq1.php">FAQ</a>  
   
  </div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <center>
	<div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="f.jpg" alt="New York" width="1000" height="1000">
        <div class="carousel-caption">
          <h3>Coming Soon</h3>
          <p>Love yourself</p>
        </div>      
      </div>

      <div class="item">
        <img src="g.jpg" alt="Chicago" width="1000" height="1000">
        <div class="carousel-caption">
          <h3>Fine</h3>
        
        </div>      
      </div>
    
      <div class="item">
        <img src="h.jpg" alt="Los Angeles" width="1000" height="1000">
        <div class="carousel-caption">
          <h3>Coming soon 2018</h3>
          <p>Exclusive for our customer.</p>
        </div>      
      </div>
    </div>    
</center>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>



<div class="jumbotron text-center">  
  <p>You are beauty</p> 
  <form class="form-inline">
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
      background-color: #FF7575;
      color: #fff;
  }
  </style>







</body>
</html>
   
   
<?php
include ('footer.html');
?>   
		