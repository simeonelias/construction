<?php 

  require 'lib/database.php';

$id= $_GET['id'];

   $bdd = Database::connect();
 $req= $bdd->prepare("DELETE FROM `client` WHERE id=$id");
 $req->execute(array($id));
 header("location:admin.php")

 ?>