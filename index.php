<?php require_once('connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Projets</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div id="container">
        <form action="" method="POST" class="formulaire">
            <h1>Connexion</h1>
            <label><b>Nom d'utilisateur :</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="txtlogin" required class="zonetext">
            <label><b>Mot de Pass :</b></label>
            <input type="password" placeholder="Entrer le Mot de Pass" name="txtpw" required class="zonetext">
            <input type="submit" name="btlogin" value="LOGIN" id="submit" class="submit">
             <?php
             if(isset($_POST['btlogin']))
             {
                 $req="select * from utilisateurs where username='".$_POST['txtlogin']."' and password='".$_POST['txtpw']."'"; 
                if($resultat=mysqli_query($cnpstock,$req))
                {
                   $ligne = mysqli_fetch_assoc($resultat);
                   if($ligne!=0){
                       session_start();
                       $_SESSION['monlogin']=$_POST['txtlogin'];
                       header("location:list.php");    
              
                 }
                    } else{
                        echo "<font color='#F0001D'>Login ou mot de passe est invalid</font>";
                    } 
                }       
        
             
             ?>
    </div>
     
</body>
</html>