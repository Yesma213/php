<?php include "header.php"; ?>

<?php
var_dump($_GET); // on est sur de l'information non confidentiel pas sur un formulaire


$id=$_GET['id'];

bd(); 
require_once "Article.php";

// recuperer l ensemble des données des utilisateurs
$entry = Article::retrieveByPK($_GET['id']);
  
?>


<form method="POST" action="modification.php">
<input type="hidden"  name="id" value =<?=$entry->id ?> >
    <input type="text" placeholder="Veuillez entrez le titre" name="titre" value=<?=$entry->titre?> /> <br />
    <input type="text" placeholder="Veuillez entrez la description" name="description" value=<?=$entry->description?> /> <br />
    <input type="text" placeholder="Veuillez entrez le prix" name="prix" value=<?=$entry->prix?> /> <br />
    <input type="text" placeholder="Veuillez entrez le prix" name="image" value=<?=$entry->image?> /> <br />
    <input type="submit" value="Modification !" />
</form>  


<?php include "footer.php"; ?>