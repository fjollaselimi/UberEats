<?php 
require_once('users.php');

 if(isset($_POST['save'])){
   $regj=new user_form();
   $regj->setName($_POST['name']);
   $regj->setEmail($_POST['email']);
   $regj->setPassword($_POST['password']); 
   $regj->setUserType($_POST['user_type']);
   
   $regj->insertRecords();

 }
?> 
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="insert.css"/>
   <title> Register Form </title>
</head>
<body>
  <div>
    <h3>Add your information in the register form </h3>
    <div class="forma1">
    <form class="forma" action='' method="POST">
      <label style="margin-right:28px;">Name</label>
      <input type="text" name="name" placeholder="enter your name"/>
      <br>
      <label style="margin-right:28px;">Email</label>
      <input type="email" name="email" placeholder="enter your email"/>
      <br>
      <label>Password</label>
      <input type="password" name="password" placeholder="enter your password"/>
      <br>
      <label>UserType</label>
      <input type="text" name="user_type" placeholder="i am user/admin" /> 
      <br>
      <button class="save"> SAVE </button>
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
      border-radius: 20px;
      border: 0;
      margin-bottom: 10px;
      padding-left: 30px;
      padding-top: 10px;
      padding-bottom: 10px;
    }
    .forma1 label{
      color: white;
      font-size: 20px;
    }
    .save{
      border: none;
      margin-top: 10px;
      margin-left: 90px;
      border-radius: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 20px;
      padding-right: 20px;
      cursor: pointer;
      background-color: rgb(57, 121, 57);
      color: white;"
    }

  </style>
</body>
</html>