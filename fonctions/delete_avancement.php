<?php
require_once("connexion_db.php");
$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
$id = $_POST['id'];

$connexion->query(' DELETE FROM encours
										WHERE id = '.$id);

mysqli_close($connexion);
?>
