<?php 
   require_once('products.php');
   $dhenat=new products();
   $all=$dhenat->readProducts();
?>
<!DOCTYPE html>
<html>
<head>
   <title> Display products </title>
   <meta name="viewport" content="width=device-width, initial-scale = 1.0 ">
</head>
<body>
   <div> 
     <header> 
       <h3 class="h3"> Add your products here </h3>
       <a class="a" href="insertProducts.php"><button> Add Product </Button></a>
     </header>
     <table  class="kontenti" style="margin-left:50px; margin-right:50px;">
     <thead>
          <tr>
             <th>Name</th>
             <th>Price</th>
             <th>Details</th>
             <th>Actions</th>
           </tr>  
     </thead>
     <tbody>
          <tr> 
               <?php 
                  foreach($all as $key=>$value){ 
                ?>
                <td><?php echo $value['name']?> </td>
                <td><?php echo $value['price']?> </td>
                <td><?php echo $value['details']?> </td>
                <td><a href="deleteProducts.php?id=<?php echo $value['id']?>"> 
                <button style="border: none;
                          border-radius: 20px;
                          padding: 5px;
                          padding-left: 10px;
                          padding-right: 10px;
                          cursor: pointer;
                          background-color: rgb(57, 121, 57);
                          color: white;"> DELETE </button> </a>
                    <a href="editProducts.php?id=<?php echo $value['id']?>"><button
                     style="margin-top:5px;
                          margin-left:10px;
                          border: none;
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