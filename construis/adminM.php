<?php 
 $id= $_GET['id'];
  require 'lib/database.php';

 if (!empty ($_POST)) {
   

$contact= $_POST['contact'];

$email= $_POST['email'];

   $bdd = Database::connect();
 $req= $bdd->prepare("UPDATE `client` SET `contact` = ? ,`email` = ? WHERE id= ?");
 $req->execute(array($contact, $email, $id));

 header("location:admin.php");
 }
 ?>