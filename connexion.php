<?php
session_start();
include'connect.php';
//  if (isset($_POST['logout'])){
    // session_destroy();
$message="";
  if(isset($_POST['submit'])){
    $login =htmlspecialchars($_POST['login']);
    $password =htmlspecialchars($_POST['password']);
      if(isset($login) && isset($password)){
            $message = "Veuillez remplir tout les champs";

            $query =mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE login= '$login'");
            $result =mysqli_fetch_assoc($query);
            // verifie si mdp est bon
            $check_pwd = $result['password'];
            if(password_verify($password, $check_pwd)){
                if ($_SESSION['user'] = $result){
                    // si mot de passe utilisateurs ok alors direction profil
                    header('location: profil.php');
                }
            
            }else{
                $message= 'erreur mdp';
            }
    }        
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
    <h1>Connexion</h1>
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
               <td><input type="submit" value="Connexion" name="submit"></td>
            </tr>
         </table>
         <?php echo '<p>'.$message.'</p>';?>    
      </form>
   </div>
</div>
<?php require ('footer.php') ?>
</body>
</html>
