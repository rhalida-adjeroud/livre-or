<?php
//connecté a la base de donnée
include'connect.php';
$message = "";
if(isset($_POST['submit'])){
    if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password_retype'])){
     $login =htmlspecialchars($_POST['login']);
     $password =htmlspecialchars($_POST['password']);
     $password_retype =htmlspecialchars($_POST['password_retype']);
     
        //   compte lengeur
        $login_len = strlen($login);
        $password_len = strlen($password);
        $password_retype_len = strlen($password_retype);

        //  recherche pour s'avoir si il ya un utilisateur avec ce login existant
        $requete =mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE login = '$login'");
        $result =mysqli_fetch_all($requete);
        //  si la requete me reretourne 1 (c'est que l'utilisateur avec se login est  déjà existant
     if(count($result) == 1){
         $message='erreur compt existant';
    }else if($password==$password_retype){
        $password=password_hash($password, PASSWORD_BCRYPT);
        // inserer dans la base de donnée le nouvel utilisateur
        $requete =mysqli_query($bdd , "INSERT INTO utilisateurs(login, password) VALUES ('$login','$password')");
        header('location:connexion.php');
    }else {
        $message='les mot de passe sont diférent';
    }
    }else {$message='remplir tous les champs'; 
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or</title>
</head>
<body>
<?php require('header.php'); ?>
    <form method="POST" action="">
      <table>
          <tr>
              <td><label for="login">pseudo</label></td>
              <td><input type="text" name="login" id="login"></td>
          </tr>
          <tr>
              <td><label for="password">password</label></td>   
              <td><input type="password" name="password" id="password"></td>
          </tr>
          <tr>  
              <td><label for="password_retype">confirm password</label></td>    
              <td><input type="password" name="password_retype" id="password__retype"></td>     
        </tr>
        <tr>
              <td><input type="submit" value="S'inscrire" name="submit">
        </tr>

      </table> 
      <?php echo '<p>'.$message.'</p>';?> 
    </form>
    
</body>
</html>