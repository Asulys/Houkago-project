<?php
require_once("connexion_db.php");
$connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
$projet = $_POST['id'];

//nombre d'ep pour le projet
$requete = 'SELECT count(*) as nb FROM `episode` WHERE projet ='.$projet.' ';
$resultat = $connexion->query($requete);
$bite = mysqli_fetch_array($resultat);
$numero = $bite['nb'] + 1;

$connexion->query(' INSERT INTO episode (numero, projet, lien720dedie, lien1080dedie, lien720nya, lien1080nya)
                    VALUES('.$numero.','.$projet.', "", "", "", "")');


$requete = 'SELECT * FROM `episode` WHERE projet ='.$projet.' ORDER BY `projet`';
$resultat = $connexion->query($requete);
echo "<a href=\"#\" class=\"ajouter\" id=\"".$projet."\">Ajouter épisode</a><br>";
while ($episode = mysqli_fetch_array($resultat)) {
    echo "<a href=\"#\" data-toggle=\"collapse\" data-target=\"#episode".$episode['numero']."-".$episode['projet']."\">Épisode ".$episode['numero']."</a> <br>";
    echo "<div id=\"episode".$episode['numero']."-".$episode['projet']."\" class=\"collapse\">";
?>
<form role="form" class="form-horizontal" method="post" action="fonctions/maj_episode.php?n=<?php echo $episode['numero'] ?>&p=<?php echo $episode['projet'] ?>">
  <div class="form-group">
    <label class="control-label col-sm-2">Dédié 720p</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo $episode['lien720dedie'] ?>" name="lien720dedie" id="lien720dedie">
    </div>
  </div>
 <div class="form-group">
   <label class="control-label col-sm-2">Dédié 1080p</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" value="<?php echo $episode['lien1080dedie'] ?>" name="lien1080dedie" id="lien1080dedie">
   </div>
 </div>
 <div class="form-group">
   <label class="control-label col-sm-2">Nyaa 720p</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" value="<?php echo $episode['lien720nya'] ?>" name="lien720nya" id="lien720nya">
   </div>
 </div>
 <div class="form-group">
   <label class="control-label col-sm-2">Nyaa 1080p</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" value="<?php echo $episode['lien1080nya'] ?>" name="lien1080nya" id="lien1080nya">
   </div>
 </div>
 <button id="maj-ep" type="submit" class="btn btn-primary">valider</button>

</form>
<?php
    echo "</div>";


}


mysqli_close($connexion);
?>
