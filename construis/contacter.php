<?php

require 'lib/database.php';

if(!empty($_POST)){

   $nom = $_POST['nom'];
   $prenom = $_POST['prenom'];


   $contact= $_POST['contact'];

   $email = $_POST['email'];

    $message = $_POST['message'];

    $valid =true;

     if (empty($nom)) {
        $valid =false;
     }
   if (empty($prenom)) {
        $valid =false;
     }
      if (empty($contact)) {
        $valid =false;
     }
     
     if (empty($email)) {
        $valid =false;
     }
      if (empty($message)) {
        $valid =false;
     } 
     if ($valid) {
      
      $bdd = Database::connect();
   $req=$bdd->prepare('INSERT INTO `client`( `nom`, `prenom`, `contact`, `email`, `message`) VALUES (?,?,?,?,?)');
      $req->execute(array($nom,$prenom,$contact,$email,$message ));

     }
   

   
};
?>


<!DOCTYPE html>
<html>   
    <head>
        <title>Construction</title>
         <meta charset="utf-8"/>
        <meta name="viewport" content="wight=device-wight, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
        
    </head>
     <body>
<section id="rose">
    <div class="container">
        <div class="row" >
             <div class="col-md-3 texte">
                <p><span class="glyphicon glyphicon-earphone"></span>  49631264</p>  
             </div>
               <div class="col-md-3 texte"> 
                 <p><span class="glyphicon glyphicon-phone-alt"></span>  (+225)22446655</p> 
             </div>
               <div class="col-md-3 texte">
                 <p><span class="glyphicon glyphicon-envelope"></span><a href="#">  kampconst@gmail.com</a></p>  
             </div>
               <div class="col-md-3 texte">
                 <a href="index.php" class="button4" style="font-size:20px;">Acceuil</a>  
             </div>
        </div>
    </div>
</section>

<section>
    <img src="images/contact.png" style="margin-left:17%;">
</section>

<section id="contact">
    <p style="font-size:17px; margin-left:10%; margin-bottom:30px; margin-top:120px;">n'hesitez pas à nous contacter en remplissant <br>le formulaire !</p>
</section>

<section>
<form id="contact-form" method="POST" action="contacter.php" role="form" class="col-lg-4">
    
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom"  placeholder="votre nom" name="nom" required>
  </div>
    
  <div class="form-group">
    <label for="prenom">Prenom</label>
   <input type="text" class="form-control" id="prenom" placeholder="votre prenom" name="prenom" required>
  </div>
    
  <div class="form-group">
    <label for="contact">Contact</label>
  <input type="text" class="form-control" id="contact" placeholder="votre numero" name="contact" required>
  </div>
    
  <div class="form-group">
    <label for="email">Email</label>
  <input type="email" class="form-control" id="email" placeholder="votre E-mail" name="email" required>
   </div> 
    
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" rows="3" name="message" required></textarea>
  </div>
    
  <div class="form-group">
    <input type="submit" class="button3" value="Envoyer">
  </div>
    
</form>
    
    <div class="ima">
      <img src="images/equi.jpg" style="margin-left:11%; margin-top:9%; width:38%;">
    </div>
</section>

                     