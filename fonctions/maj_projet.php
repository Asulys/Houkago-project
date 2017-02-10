<?php
require_once("connexion_db.php");
$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
$id = $_GET['id'];
$genre = $_POST['genre'];
$studio = $_POST['studio'];
$nbep = $_POST['nbep'];
$synopsis = $_POST['synopsis'];
$br = 1;
if(empty($_POST['br'])) {
  $br = 0;
}

$connexion->query(' UPDATE `projet`
                    SET `genre`="'.$genre.'",`studio`="'.$studio.'",`nbep`="'.$nbep.'",`synopsis`="'.$synopsis.'", `bluray`="'.$br.'"
                    WHERE `id`='.$id.'
                    ');

mysqli_close($connexion);
header('Location: ../administration-projet.php');
?>
