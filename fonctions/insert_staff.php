<?php
require_once("connexion_db.php");
$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
$pseudo = $_POST['pseudo'];
$postes = $_POST['postes'];
$fav = $_POST['fav'];

$connexion->query(' INSERT INTO staff (pseudo, postes, fav)
                    VALUES("'.$pseudo.'","'.$postes.'","'.$fav.'")');


mysqli_close($connexion);
header('Location: ../administration-staff.php');

?>
