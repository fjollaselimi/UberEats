<?php 
require_once('products.php');
$dhenat= new products();
$myId=$_GET['id'];
$record=$dhenat->readProductsFromId($myId);
 
  if(isset($_POST['edit'])){ 
     if($myId==$dhenat->getId()){ 
       $dhenat->setName($_POST['name']);
       $dhenat->setPrice($_POST['price']);
       $dhenat->setDetails($_POST['details']);
       echo $dhenat->updateProducts();
      echo 
       "<script> 
          alert('your product has been updated successfully');
          document.location='displayProducts.php'
        </script>"; 
       
     }
  }
?>

<!DOCTYPE html>
<html>
<head>
   <title> Edit Products </title>
</head>
<body>
  <div>
    <h3>Edit your products here </h3>
    <form class="forma1" action='' method="POST">
      <label style="margin-right:38px;" >Name</label>
      <input type="text" name="name" placeholder="enter product's name" 
      value="<?php echo $record['name']?>"/>
      <br>
      <label style="margin-right:38px;">Price</label>
      <input type="text" name="price" placeholder="enter product's price"
      value="<?php echo $record['price']?>" />
      <br>
      <label style="margin-right:38px;" >Details</label>
      <textarea name="details" placeholder="enter product's details">
        <?php echo $record['details']?></textarea>
      <br>
      <button name='edit' class="save"> EDIT </button>
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
      font-family:Salina-Trial Medium;
    }
    .forma1 textarea{ 
      border-radius: 20px;
      border: 0;
      margin-bottom: 5px;
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