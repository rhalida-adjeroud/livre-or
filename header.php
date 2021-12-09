<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Blog</title>
</head>
<body>
  <header>
    <nav>
      <ul class="liste-items">
      <?php
        if (isset($_SESSION['user']) || isset($_SESSION['admin']))
        {
        echo (' 
        <form action="" method="post"><input type="submit" name="logout" value="Déconnexion"></form>
        ');
        }
        ?>
      <?php
        if(!isset($_SESSION['user'])){ 
        echo ('<li class="items"><a class="lien", href="inscription.php">inscription</a></li>');
        }else{ echo "";
        }?>
        <?php
        if(!isset($_SESSION['user'])){ 
        echo ('<li class="items"><a class="lien", href="connexion.php">connexion</a></li>');
        }else{ echo "";}?>
        <?php
        if(isset($_SESSION['user'])){
            echo ('<li class="items"><a class="lien", href="profil.php">profil</a></li>');
        }else{ echo "";}?>
        <li class="items-liste"><a class="lien", href="commentaire.php">Commentaires </a></li>
        <li class="items-liste"><a class="lien", href="livre-or.php">Livre d'or </a></li> 
      </ul>  
     </nav>             
  </header>
</body>
</html>