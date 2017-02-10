<?php 
require_once("connexion_db.php");

$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
  
//get the username  
$pseudo = $_POST['pseudo'];  
  
//mysql query to select field username if it's equal to the username that we check '  
$resultat = $connexion->query('select count(*) as nb from staff where pseudo = "'. $pseudo .'"');  
//if number of rows fields is bigger them 0 that means it's NOT available '  
$membre = mysqli_fetch_array($resultat);
if($membre['nb'] == "0"){  
	//and we send 0 to the ajax request  
	echo 0;  
}else{  
	//else if it's not bigger then 0, then it's available '  
	//and we send 1 to the ajax request  
	echo 1;  
}  
mysqli_close($connexion);
?>