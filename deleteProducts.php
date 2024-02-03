<?php
require_once('products.php');

  $dhena=new products();
  if(isset($_GET['id'])){
    $myID=$_GET['id'];
    $dhena->deleteProducts($myID);
  }

?>