<?php
session_start();

include'connect.php';
?>
<?php require('header.php'); ?>
<?php

if (isset($_POST['logout'])){
    session_destroy();
}
    // je join les deux tableau pour prendre les information sur les tables utilisateurs et commentaires
    $requete = mysqli_query($bdd, "SELECT commentaires.commentaire, utilisateurs.login, date FROM commentaires INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id ORDER BY date DESC LIMIT 10");
    $result= mysqli_fetch_all($requete, MYSQLI_ASSOC);   
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
   <table border="1px">
        <tr> 
            <th>pseudo</th>
            <th>commentaires</th>
            <th>dates-heures</th>
        
        </tr>
        <?php foreach($result as $value){
        echo '
         <tr>
            <td>'. $value['login'].'</td>
            <td>'. $value['commentaire'].'</td> 
            <td>'. $value['date'].'</td>
        </tr>'; 
    }
        if (count($result) == 0) {
            echo "Aucun message n'a été publié";
        }
    ?> 
    </table>   
</body>
<?php require ('footer.php') ?>  
</html>