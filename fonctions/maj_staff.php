<?php
require_once("connexion_db.php");
$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
$id = $_GET['id'];
$postes = $_POST['postes'];
$fav = $_POST['fav'];

$connexion->query(' UPDATE `staff`
                    SET `postes`="'.$postes.'",`fav`="'.$fav.'"
                    WHERE `id`='.$id.'
                    ');

mysqli_close($connexion);
header('Location: ../administration-staff.php');
?>
