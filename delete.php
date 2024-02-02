<?php
require_once('users.php');

  $dhena=new user_form();
  if(isset($_GET['id'])){
    $myID=$_GET['id'];
    $dhena->deleteRecords($myID);
  }

?>