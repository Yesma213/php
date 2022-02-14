<?php include "header.php"; ?>

<?php
// Connecter à la BD

bd();
require_once "Article.php";

// recuperer l ensemble des données des utilisateurs
$entry = Article::all();
foreach($entry as $monarticle){
    echo "<a href='unutilisateur.php?id=".$monarticle->id."'> $monarticle->titre $monarticle->description $monarticle->image </a>
    
    
    
  -   <a href='modifier.php?id=".$monarticle->id."'>Modifier</a>-
    
    
    <a href='supprimer.php?id=".$monarticle->id."'>Supprimer</a><hr>";
    
    
    //<a href='unutilisateur.php?id=".$monutilisateur->id."'>$monutilisateur->prenom."  ".$monutilisateur->nom."</a> <hr>";
}

// Recuperer l'ensemble des donnes de la tables utilisateurs
?>
<?php include "footer.php"; ?>