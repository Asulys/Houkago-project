<?php
require_once("connexion_db.php");
$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
$id = $_GET['id'];
$numep = $_POST['numep'];
$avancement = $_POST['avancement'];

$connexion->query(' UPDATE `encours`
                    SET `numep`='.$numep.',`avancement`='.$avancement.'
                    WHERE `id`="'.$id.'"
                    ');

mysqli_close($connexion);
header('Location: ../administration-avancement.php');
?>
