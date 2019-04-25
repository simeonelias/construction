
<?php 
require 'lib/database.php';
   

  $bdd = Database::connect();
 $req= $bdd->prepare("SELECT `id`, `nom`, `prenom`, `contact`, `email`, `message` FROM `client`");
 $req->execute(array());
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
      <section id="admin">
        <div class="container">
            <div class="row">
                <h3 style="padding-top:32px"><strong>Mes enregistrements</strong></h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php while ($enregistrements=$req->fetch()) {
                    
                    ?>
                    <tbody>
                       <tr>
                            <td><?php echo $enregistrements['nom']; ?> </td>
                            <td><?php echo $enregistrements['prenom']; ?></td>
                            <td><?php echo $enregistrements['contact']; ?></td>
                            <td><?php echo $enregistrements['email']; ?></td>
                            <td><?php echo $enregistrements['message']; ?></td>
                            <td width=200>        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">modifier</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">mdification des enregistrements</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="adminM.php?id=<?php echo $enregistrements['id'];?>">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Contact</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="telephone" name="contact">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="E-mail" name="email" >
          </div>
           <div class="modal-footer">
              <button type="submit" class="btn btn-primary">modifier</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
                                
<button type="button" class="btn btn-danger"  style="paddind:20px"><a href="adminS.php?id=<?php echo $enregistrements['id'];?>" method="GET"><span class="glyphicon ghyphicon-remove">supprimer</span></a></button>

        </td>
    </tr>

   </tbody>
 <?php  } ?>
</table>
</div>
</section>
</body> 
</html> 
        </div>
    </section>