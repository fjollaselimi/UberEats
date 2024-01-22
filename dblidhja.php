<?php
class dblidhja{

private $host = 'localhost';
private $dbname = 'loginusers';
private $username = 'root';
private $password = '';
private $conn;




public function connectDB(){ try {
   $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username, $this->password);
   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "<br/>";
   $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC) . "<br/>";
  
   } catch (PDOException $pdoe) {
   die("Lidhja me {$this->dbname} ka deshtuar :" . $pdoe->getMessage());
   }
   return $this->conn;
}



}   
