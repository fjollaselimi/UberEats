<?php
require_once('dblidhja.php');
class Klienti extends dblidhja{
    private $id;
    private $Numri;
    private $Password; 

    public function __construct($id='', $Numri='',
    $Password='')
    {
    $this->id=$id;
    $this->Numri=$Numri;
    $this->Password=$Password;
    $this->dbconn=$this->connectDB();
}
    public function setId($id){
    $this->id=$id;
    }
    public function getId(){
    return $this->id;
    }
    public function setNumri($Numri){
    $this->Numri=$Numri;
    }
    public function getNumri(){
    return $this->Numri;
    }
    public function setPassword($Password) {
      $this->Password = password_hash($Password, PASSWORD_DEFAULT); 
    }
    public function getPassword(){
    return $this->Password;
    }
    
    public function insertoDhenat(){
        $sql="INSERT INTO Klienti (Numri,Password) VALUES (?,?)";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([$this->Numri,$this->Password]);
        echo "<script>
        alert('Te dhenat jane regjistruar');
        document.location='display.php';
        </script>";
        }
        public function lexoDhenat(){
        $sql='SELECT * FROM Klienti';
        $stm=$this->dbconn->prepare($sql);
        $stm->execute();
        $rezultati =$stm->fetchAll(PDO::FETCH_ASSOC);
        return $rezultati;
        }

      public function updateDhenat(){
        $sql='UPDATE Klienti SET Numri="(123)123-1234", Password="viona123" where id=5';
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([$this->Numri, $this->Password]);
      }
      public function deleteDhenat($id){
        $sql="DELETE FROM Klienti WHERE id=2";
        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam(':id',$id);
        $stm->execute();
            if ($stm==true){
            echo "<script>
            alert('Te dhenat jane bere delete');
            document.location='display.php';
            </script>";
            }
            else {
            return false;
            }
            }
    }
            
        
