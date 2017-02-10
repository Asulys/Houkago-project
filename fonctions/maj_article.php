<?php
require_once("connexion_db.php");
$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
$id = $_GET['id'];
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];

$connexion->query(' UPDATE `article`
                    SET `titre`="'.$titre.'",`contenu`="'.$contenu.'"
                    WHERE `id`='.$id.'
                    ');

mysqli_close($connexion);
header('Location: ../administration-article.php');
?>
