<?php
require_once("connexion_db.php");
$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];
$sujet = $_POST['sujet'];
$auteur = $_POST['auteur'];



$connexion->query(' INSERT INTO article (sujet, titre, contenu, auteur, date)
                    VALUES('.$sujet.',"'.$titre.'","'.$contenu.'","'.$auteur.'",NOW())');
mysqli_close($connexion);
header('Location: ../administration-article.php');

?>
