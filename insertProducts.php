<?php 
require_once('products.php');

 if(isset($_POST['save'])){
   $regj=new products();
   $regj->setName($_POST['name']);
   $regj->setPrice($_POST['price']);
   $regj->setDetails($_POST['details']); 
   
   $regj->insertProducts();

 }
?>
<!DOCTYPE html>
<html>
<head>
   <title> Insert Products </title>
</head>
<body>
  <div>
    <h3>Add your products here </h3>
    <div class="forma1">
    <form class="forma" action='' method="POST">
      <label style="margin-left:88px;">Name</label>
      <input type="text" name="name" placeholder="enter product's name"/>
      <label style="margin-left:88px;">Price</label>
      <input type="text" name="price" placeholder="enter product's price"/>
      <label style="margin-left:83px;"> Details </label>
      <textarea name="details" placeholder="enter product's details"></textarea> 
      <button class="save" name='save'> SAVE </button>
    </form>
  </div>
 </div>
 <style>
    body{
    background-image: url(backgroundfood.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    font-family:Salina-Trial Medium;
  }
    h3{
      display: flex;
      justify-content: center;
      margin-top: 50px;
      font-size: 30px;
      color: white;
      background-color: rgba(128, 128, 128, 0.594);
      padding: 0;
      border-radius: 20px;
      padding-top: 10px;
      padding-bottom: 10px;


    }
    .forma1{
      display: flex; 
      justify-content: center; 
      align-items: center; 
      height: 500px; 
    
    }
    .forma1 input{
      display:flex;
      border-radius: 20px;
      border: 0;
      margin-left: 15px;
      margin-bottom: 10px;
      padding-left: 30px;
      padding-top: 10px;
      padding-bottom: 10px;
      font-family:Salina-Trial Medium;
    }
    
    textarea{ 
      display:flex;
      flex-direction:column;
      border-radius: 20px;
      border: 0;
      margin-bottom: 10px;
      padding-left: 30px;
      padding-top: 10px;
      padding-bottom: 10px;
      font-family:Salina-Trial Medium;
    }

    .forma1 label{
      color: white;
      font-size: 20px;
    }
    .save{
      display:flex;
      flex-direction:column;
      border: none;
      margin-top: 10px;
      margin-left: 85px;
      border-radius: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 20px;
      padding-right: 20px;
      cursor: pointer;
      background-color: rgb(57, 121, 57);
      color: white;
      font-family:Salina-Trial Medium;
    }

  </style>
</body>
</html>