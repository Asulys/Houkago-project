<?php
require_once("connexion_db.php");
$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
$numero = $_GET['n'];
$projet = $_GET['p'];
$l720d = $_POST['lien720dedie'];
$l1080d = $_POST['lien1080dedie'];
$l720n = $_POST['lien720nya'];
$l1080n = $_POST['lien1080nya'];

$connexion->query(' UPDATE `episode`
                    SET `lien720dedie`="'.$l720d.'",`lien1080dedie`="'.$l1080d.'",`lien720nya`="'.$l720n.'",`lien1080nya`="'.$l1080n.'"
                    WHERE `numero`="'.$numero.'" AND `projet`= "'.$projet.'"
                    ');

mysqli_close($connexion);
header('Location: ../administration-projet.php');
?>
