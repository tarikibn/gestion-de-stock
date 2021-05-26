<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Supprimer</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<p><a href="accueil.php" class="submit">Tableau de bord</a></p>
<table width="100%" border="1" style="text-align:center;">
      <tr>
          <th>Id</th>
          <th>Nom</th>
          <th>Prix</th>
          <th>Catégory</th>
          <th>Q min</th>
          <th>Q max</th>
          <th>Photo</th>
      </tr>
<?php
if(isset($_GET['nomcat']))
{
    $cat=$_GET['nomcat'];
    $reqCat="SELECT * FROM myproduct WHERE category='$cat'";
    $resultat=mysqli_query($cnpstock,$reqCat);
}
    
while($ligne=mysqli_fetch_assoc($resultat))
      {
      ?>
      <tr>
          <td><?php echo $ligne['id'];?></td>
          <td><?php echo $ligne['nom'];?></td>
          <td><?php echo $ligne['prix'];?></td>
          <td><?php echo $ligne['category'];?></td>
          <td><?php echo $ligne['qmin'];?></td>
          <td><?php echo $ligne['qmax'];?></td>
          <td><img src='<?php echo $ligne['photo'];?>' class="photopro"></td>
      </tr>
      <?php
      }
      ?>
</form>

</body>
</html>