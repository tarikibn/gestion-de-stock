<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Ajouter</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
   <div id="container">
       <form name="formAdd" action="" method="POST" class="formulaire" enctype="multipart/form-data">
           <h2 align="center">Ajouter Nouvelle Produit</h2>
           <label><b>Id :</b></label>
           <input type="text" name="txtId" class="zonetext" placeholder="Entrer Id" required>

           <label><b>Nom :</b></label>
           <input type="text" name="txtnom" class="zonetext" placeholder="Entrer Le Nom" required>

           <label><b>Prix :</b></label>
           <input type="number" name="txtprix" class="zonetext" placeholder="Entrer Prix" required>

           <label><b>Quantité minimale :</b></label>
           <input type="number" name="txtqmin" class="zonetext" placeholder="Entrer Quantité minimale" required>

           <label><b>Quantité maximale :</b></label>
           <input type="number" name="txtqmax" class="zonetext" placeholder="Entrer Quantité maximale" required>

           <label><b>Catégory :</b></label>
           <input type="text" name="txtcatg" class="zonetext" placeholder="Entrer Catégory" required>


           <label><b>Photo :</b></label>
           <input type="file" name="txtphoto" class="zonetext" placeholder="Choisir Photo" required>

           <input type="submit" name="btadd" value="Ajouter" class="submit">

           <p><a href="accueil.php" class="submit">Tableau de bord</a></p>
           <label style="text-align:center;color:#960406">
                <?php
                if(isset($_POST['btadd']))
                {
                    $id=$_POST['txtId'];
                    $nom=$_POST['txtnom'];
                    $prix=$_POST['txtprix'];
                    $min=$_POST['txtqmin'];
                    $max=$_POST['txtqmax'];
                    $ctg=$_POST['txtcatg'];
                    $image=$_FILES['txtphoto']['tmp_name'];
                    $traget="Pstock/".$_FILES['txtphoto']['name'];
                    move_uploaded_file($image,$traget);
                    $reqAdd="INSERT INTO myproduct(`id`, `nom`, `prix`, `qmin`, `qmax`, `category`, `photo`) 
                    VALUES ('$id','$nom','$prix','$min','$max','$ctg','$traget')";
                
              $resultat=mysqli_query($cnpstock,$reqAdd);
              if($resultat){
                  echo "Insertion des données validés";
              }else{
                  echo "Echec d Insertion des données";
              }
  
                     
                }
                ?>
                

           </label>
       </form>
   </div> 
</body>
</html>