<?php 
   require_once('users.php');
   $dhenat=new user_form();
   $all=$dhenat->readRecords();
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="displayRecords.css"> 
   <title> Display Records </title>
   <meta name="viewport" content="width=device-width, initial-scale = 1.0 ">
</head>
<body>
   <div> 
     <header> 
       <h3 class="h3"> Register down below!</h3>
       <a class="a" href="insert.php"><button> Register </Button></a>
     </header>
     <hr>

     <table class="kontenti" style="margin-left:350px;">
      <thead>
          <tr>
             <th>Name</th>
             <th>Email</th>
             <th>Password</th>
             <th>User_Type</th>
             <th></th>
           </tr>  
      </thead>
      <tbody>
          <tr> 
               <?php 
                  foreach($all as $key=>$value){ 
                ?>
                <td class="emri" style="color:white;"><?php echo $value['name']?> </td>
                <td class="email" style="color:white;"><?php echo $value['email']?> </td>
                <td class="password" style="color:white;"><?php echo $value['password']?> </td>
                <td class="type" style="color:white;"><?php echo $value['user_type']?> </td>
                <td class="del" style="color:white;"><a href="delete.php?id=<?php echo $value['id']?>"> <button 
                style="   border: none;
                          border-radius: 20px;
                          padding: 5px;
                          padding-left: 10px;
                          padding-right: 10px;
                          cursor: pointer;
                          background-color: rgb(57, 121, 57);
                          color: white;"> DELETE </button> </a>
                    <a href="edit.php?id=<?php echo $value['id']?>"><button 
                style="   border: none;
                          border-radius: 20px;
                          padding: 5px;
                          padding-left: 10px;
                          padding-right: 10px;
                          cursor: pointer;
                          background-color: rgb(57, 121, 57);
                          color: white;"> EDIT </button> </td></a>
          </tr>    
      </tbody>
    
          <?php      
                } 
          ?>
        </table>
      </div>
      <style>
body{
    background-image: url(backgroundfood.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    font-family:Salina-Trial Medium;
  }
header{
  background-color:rgba(128, 128, 128, 0.594); 
  border-radius: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  margin-top: 40px;
  margin-bottom: 40px;
}

.h3{
    display: flex;
    justify-content: center;
    font-size: 20px;
    align-items: center;
    color: white;
  }
  .a{
    display: flex;
    justify-content: center;
    text-decoration: none;
  }
  .a button{
    border: none;
    border-radius: 20px;
    padding: 5px;
    padding-left: 10px;
    padding-right: 10px;
    cursor: pointer;
    background-color: rgb(57, 121, 57);
    color: white;
  }
  .kontenti{
    border-collapse: collapse;
    
    background-color: rgba(128, 128, 128, 0.594);
    margin: 25px 0;
    min-width: 400px;
  }
  .kontenti thead tr{
    background-color: rgb(57, 121, 57);
    color: white;
    text-align: left;
    padding-right: 15px;
    border-radius: 25px;
  }
  .kontenti tbody tr{
    border-bottom: 2px solid white ;

  }
  .kontenti th{
    padding: 10px 15px;
  }
  .kontenti td{
    padding: 10px 15px;
  }

      </style>
  </body>
</html>    