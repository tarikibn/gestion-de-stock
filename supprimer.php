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
<div id="container">
<form name="formdelet" class="formulaire">
<p><a href="accueil.php" class="submit">Tableau de bord</a></p> 
</div>
<?php
if(isset($_GET['supproduct']))
{
    $sup=$_GET['supproduct'];
    $reqDelete="DELETE FROM myproduct WHERE id='$sup'";
    $resultat=mysqli_query($cnpstock,$reqDelete);
}
     if($resultat)
     {
         echo "<label style='text-align: center; color:#960406;'>la supprission a validé";
     }else{
         echo "<label style='text-align: center; color:#960406;'>la supprission a échouée";
     }
?>
</form>

</body>
</html>