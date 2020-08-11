<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
	header('location: login.php');
}
?>





<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<style>
header {
    
    background-color: white;
    clear: left;
    text-align: center;    
}
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color:#FFFFFF;
  top: 20;
  width: 60%;
}

.navbar a {
  float: right;
  display: block;
  color: #FF7575;
  text-align: center;
  padding: 17px 16px;
  text-decoration: none;
  font-size: 17px;
}
a:hover {
    background-color:#FFCECE;
    color: FF7575;
}






body {
    font-family: "Lato", sans-serif;
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
    left: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;} 
}



/*    CART 
.cartnav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #FF7575;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.cartnav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;
    transition: 0.3s;
}

.cartnav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.cartnav .closeCrt {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-right: 50px;
}

@media screen and (max-height: 450px) {
  .cartnav {padding-top: px;}
  .cartnav a {font-size: 18px;} 
}


*/


</style>
</head>
<body>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<img src="logicon.png" alt="menu" style="float:right;width:px;height:42px;" onclick="openNav()">

<div class="container">
<header>
   <img  src="head5.jpg" alt="" width="50%" height="auto"/>
</header>
</div>

<div class="navbar">
  <a href="aboutus.php">About Us</a>
  <a href="faq1.php">FAQ</a>
  <a href="multi_tab_shopping_cart.php">Catalog</a>
  <a class="active" href="home.php ">Home</a>  
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
</div>




<!-- SIDEBAR MENU -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>  
  <a href="login.php">Log In</a>    
 <a href="logout.php">Log out</a>  
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



<!--    CART BAR 
<div id="myCartnav" class="cartnav">
  <a href="javascript:void(0)" class="closeCrt" onclick="closeCart()">&times;</a>  
  <a href="#">Your Cart</a>  

</div>
<script>
function openNav() {
    document.getElementById("myCartnav").style.width = "250px";
}

function closeNav() {
    document.getElementById("myCartnav").style.width = "0";
}
</script>
-->


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




</body>
</html>
		