<?php 
require_once('users.php');
$dhenat= new user_form();
$myId=$_GET['id'];
$record=$dhenat->readRecordsFromId($myId);
 
  if(isset($_POST['edit'])){ 
     if($myId==$dhenat->getId()){ 
       $dhenat->setName($_POST['name']);
       $dhenat->setEmail($_POST['email']);
       $dhenat->setPassword($_POST['password']);
       $dhenat->setUserType($_POST['user_type']);
       echo $dhenat->updateRecords();
      echo 
       "<script> 
          alert('your information has been updated successfully');
          document.location='displayRecords.php'
        </script>"; 
       
     }
  }
?>

<!DOCTYPE html>
<html>
<head>
   
   <title> Register Form </title>
</head>
<body>
  <div>
    <h3>Add your information in the register form </h3>
    <form class="forma1" action='' method="POST">
      <label style="margin-right:38px;">Name</label>
      <input type="text" name="name" placeholder="enter your name" 
      value="<?php echo $record['name']?>"/>
      <br>
      <label style="margin-right:38px;">Email</label>
      <input type="email" name="email" placeholder="enter your email"
      value="<?php echo $record['email']?>" />
      <br>
      <label style="margin-right:15px;">Password</label>
      <input type="password" name="password" placeholder="enter your password"
      value="<?php echo $record['password']?>"/>
      <br>
      <label style="margin-right:15px;">UserType</label>
      <input type="text" name="user_type" placeholder="i am user/admin" 
      value="<?php echo $record['user_type']?>" /> 
      <br>
      <button class="save"> EDIT </button>
    </form>
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
      font-family:Salina-Trial Medium;


    }
    .forma1{
      display: flex; 
      flex-wrap: wrap;
      justify-content: center; 
      align-items: center; 
      margin-left: 550px;
      width: 300px;
      height: 500px; 
      font-family:Salina-Trial Medium;
    }
    .forma1 input{
    
      border-radius: 20px;
      border: 0;
      margin-bottom: 5px;
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
      margin-left: 15px;
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