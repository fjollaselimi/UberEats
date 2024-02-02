<?php 
   require_once('connection.php');

   class user_form extends dbConnect { 
     private $id;
     private $name;
     private $email;
     private $password;
     private $user_type;
     protected $dbconn;

     public function __construct($id='', $name='', 
      $email='', $password='',$user_type='')
      {
         $this->id=$id;
         $this->name=$name;
         $this->email=$email;
         $this->password=$password;
         $this->user_type=$user_type;

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
      public function getEmri(){ 
        return $this->name;
      }
      public function setEmail($email){ 
        $this->email=$email;
      }
      public function getEmail(){ 
        return $this->email;
      }
      public function setPassword($password){ 
         $this->password=$password;
      }
      public function getPassword(){ 
         return $this->password;
      }
      public function setUserType($user_type){ 
         $this->user_type=$user_type;
      }
      public function getUserType(){ 
         return $this->user_type;
      }

      public function insertRecords(){ 

        $sql="INSERT INTO user_form (name,email,password,user_type) VALUES (?,?,?,?)";

        $stm=$this->dbconn->prepare($sql);

        $stm->execute([$this->name,$this->email,$this->password,$this->user_type]);
         
          echo "<script>
                  alert('your information has been saved successfully');
                  document.location='displayRecords.php';
                </script>";
      }

      public function readRecords(){ 
         $sql='SELECT * FROM user_form';

         $stm=$this->dbconn->prepare($sql);
         $stm->execute();
         $rezultati=$stm->fetchAll(PDO::FETCH_ASSOC);
         return $rezultati;
      }

    public function readRecordsFromId($id){ 
       $sql='SELECT * FROM user_form where id=:id';

       $stm=$this->dbconn->prepare($sql);
       $stm->execute([':id'=>$this->id=$id]);
       $rezultati =$stm->fetch(PDO::FETCH_ASSOC);
          return $rezultati;
    }


    public function updateRecords(){ 
      $sql= 'UPDATE user_form SET name=?, email=?, password=?, user_type=? where id=?';

      $stm=$this->dbconn->prepare($sql);
      $stm->execute([$this->name, $this->email,$this->password,$this->user_type,$this->id]);
    }

    public function deleteRecords($id){ 
       $sql="DELETE FROM user_form WHERE id=:id";

       $stm=$this->dbconn->prepare($sql);
       $stm->bindParam(':id',$id);
       $stm->execute();
       if ($stm==true){ 
         echo "<script> 
            alert('your information has been deleted successfully');
            document.location='displayRecords.php';
            </script>";
       }
       else { 
         return false;
       }
    }
  }
?>  