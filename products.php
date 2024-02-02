<?php 
   require_once('connection.php');

   class products extends dbConnect { 
     private $id;
     private $name;
     private $price;
     private $details;
     protected $dbconn;

     public function __construct($id='', $name='', 
      $price='', $details='')
      {
         $this->id=$id;
         $this->name=$name;
         $this->price=$price;
         $this->details=$details;

         $this->dbconn=$this->connectDB();

      }
   
      public function setId($id){ 
         $this->id=$id;
      }
      public function getId(){ 
        return $this->id;
      }
      public function setName($name){ 
         $this->name=$name;
      }
      public function getName(){ 
        return $this->name;
      }
      public function setPrice($price){ 
        $this->price=$price;
      }
      public function getPrice(){ 
        return $this->price;
      }
      public function setDetails($details){ 
         $this->details=$details;
      }
      public function getDetails(){ 
         return $this->details;
      }

      public function insertProducts(){ 

        $sql="INSERT INTO products (name,price,details) VALUES (?,?,?)";

        $stm=$this->dbconn->prepare($sql);

        $stm->execute([$this->name,$this->price,$this->details]);
         
          echo "<script>
                  alert('your product has been saved successfully');
                  document.location='displayProducts.php';
                </script>";
      }

      public function readProducts(){ 
         $sql='SELECT * FROM products';

         $stm=$this->dbconn->prepare($sql);
         $stm->execute();
         $rezultati=$stm->fetchAll(PDO::FETCH_ASSOC);
         return $rezultati;
      }

    public function readProductsFromId($id){ 
       $sql='SELECT * FROM products where id=:id';

       $stm=$this->dbconn->prepare($sql);
       $stm->execute([':id'=>$this->id=$id]);
       $rezultati =$stm->fetch(PDO::FETCH_ASSOC);
          return $rezultati;
    }


    public function updateProducts(){ 
      $sql= 'UPDATE products SET name=?, price=?, details=? where id=?';

      $stm=$this->dbconn->prepare($sql);
      $stm->execute([$this->name, $this->price,$this->details, $this->id]);
    }

    public function deleteProducts($id){ 
       $sql="DELETE FROM products WHERE id=:id";

       $stm=$this->dbconn->prepare($sql);
       $stm->bindParam(':id',$id);
       $stm->execute();
       if ($stm==true){ 
         echo "<script> 
            alert('your product has been deleted successfully');
            document.location='displayProducts.php';
            </script>";
       }
       else { 
         return false;
       }
    }
  }
?>  