<?php
require_once("connexion_db.php");
$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
$titre = $_POST['titre'];
$type = $_POST['type'];
$br = 1;
if(empty($_POST['br'])) {
  $br = 0;
}
$genre = $_POST['genre'];
if(empty($_POST['genre'])) {
  $genre = " ";
}

$studio = $_POST['studio'];
if(empty($_POST['studio'])) {
  $studio = " ";
}
$nbep = $_POST['nbep'];
if(empty($_POST['nbep'])) {
  $nbep = 0;
}
$syn = $_POST['syn'];
if(empty($_POST['syn'])) {
  $syn = " ";
}


$carac = array(" ", "?", "/", "\\", ":", "\"", "<", ">", "|");

$extension  = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
$nomImage = str_replace($carac, "", $titre);
$nomImage = $nomImage.".".$extension;
move_uploaded_file($_FILES['image']['tmp_name'], "../image/".$nomImage);

//echo ' INSERT INTO projet (nom, type, image, bluray, genre, studio, nbep, synopsis)
//                    VALUES("'.$titre.'","'.$type.'","'.$nomImage.'",'.$br.',"'.$genre.'","'.$studio.'",'.$nbep.',"'.$syn.'")';

$connexion->query(' INSERT INTO projet (nom, type, image, bluray, genre, studio, nbep, synopsis)
                    VALUES("'.$titre.'","'.$type.'","'.$nomImage.'",'.$br.',"'.$genre.'","'.$studio.'",'.$nbep.',"'.$syn.'")');
mysqli_close($connexion);
header('Location: ../administration-projet.php');

?>
