<?php

@include 'connection1.php';

session_start();

if(!isset($_SESSION['admin_name'])){ 
  header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>UberEats | Dashboard</title>
   <link rel="stylesheet" href="adminpage.css">
</head>
<body>
  <div class="content"> 
    <div class="button"> 
      <button><a href="logout.php"> Log out </a></button>
    </div>
    <div class="first-sentence"> 
    <p>Welcome <span> <?php  echo $_SESSION['admin_name'] ?></span> ,</p>
    </div>
    <div class="second-sentence"> 
    <p> THIS IS THE ADMIN DASHBOARD </p>
    </div>
    <div class="boards"> 
      <button><a href="displayProducts.php"> YOUR PRODUCTS </a></button>
      <button><a href="displayRecords.php"> YOUR CLIENTS </a> </button> 
    </div>
</div>
</body>
</html>