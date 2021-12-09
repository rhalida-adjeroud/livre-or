<?php
session_start();
include'connect.php';
if (isset($_POST['logout'])){
    session_destroy();
    if(!isset($login)){
        header('Location:index.php');
    }
}
$erreur="";
    // je verifi si utilisateur est logué si il n'est pas logué redirection vers page inscription
if(isset($_SESSION['user'])){
    echo 'Bienvenue';
    if(isset($_POST['submit'])){
        // si commentaire est remplit donc je crée ma variable
        $commentaire =htmlspecialchars($_POST['commentaire']);
        $id= $_SESSION['user']['id'];
        // $date= date('d/m/y');
        // je met le resultat de ma requette dans une variable

        $requeteinsert =mysqli_query($bdd, "INSERT INTO commentaires (commentaire, id_utilisateur, date) VALUES('$commentaire', '$id' ,NOW())");  
        header('location: livre-or.php');
    }
    else{
         $erreur='veuiller vous connecter';
    }
}
    // si pas logué redirection inscription:
  else{ 
     header('location:inscription.php.');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require('header.php') ;?> 
<div class="je">
  <div align="center">       
    <h1><strong>poster un commentaire</strong></h1>
         <form method="POST" action="">
         <table>
            <tr>
               <td><label for="commentaire">Votre message :</label></td> 
               <td><textarea name="commentaire"id="message" rows="10" cols="40"></textarea></td>  
            </tr>
            <tr>
               <td><input type="submit" value="poster" name="submit"></td>
            </tr>
         </table>
           
      </form>
   </div>
</div>
<?php require ('footer.php') ?>
</body>
</html>