<?php
require_once("connexion_db.php");
$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
$projet = $_POST['projet'];

$connexion->query(' INSERT INTO encours (projet, numep, avancement)
                    VALUES('.$projet.', 1, 0)');
mysqli_close($connexion);
header('Location: ../administration-avancement.php');

?>
