<?php
session_start();
require_once("fonctions/connexion_db.php");
if ($_SESSION['superuser'] != 1) {
  header('Location: index.php');
} else {
?>
<!DOCTYPE html>
<html>
<head>
  <title>Houkago - Administration</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style-admin.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div id="wrapper">
      <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                Houkago-fansub
            </a>
        </li>
        <li>
          <a href="administration-dashboard.php">Statistiques</a>
      </li>
      <li>
          <a href="administration-article.php">Article</a>
        </li>
        <li class="active">
            <a href="administration-projet.php">Projet</a>
        </li>
        <li>
            <a href="administration-staff.php">Staff</a>
        </li>
        <li>
            <a href="administration-avancement.php">Avancement</a>
        </li>
      </ul>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <h1>Gestion des projets</h1>
                <br><br>
                <div class="col-lg-6">
                  <h3>Liste des projets</h3>
                  <?php

                  $connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);

                  echo '<ul class="list-group">';
                  $requete = "SELECT * FROM `projet` WHERE 1 ORDER BY `nom`";
                  $resultat = $connexion->query($requete);
                  while ($projet = mysqli_fetch_array($resultat)) {
                      echo "<li class=\"list-group-item\"><div class=\"nom-projet\">".$projet['nom']."</div>";
                      echo "<a id=\"".$projet['id']."\" class=\"supprimer btn btn-danger\">Supprimer</a>";
                      echo "<a href=\"#\" data-toggle=\"collapse\" data-target=\"#liste".$projet['id']."\" class=\"btn btn-success\">Épisodes</a>";
                      echo "<a href=\"#\" data-toggle=\"collapse\" data-target=\"#edit".$projet['id']."\" class=\"btn btn-warning\">Éditer</a>";

                      echo "<div id=\"edit".$projet['id']."\" class=\"collapse\">";


                      ?>
                      <br>
                      <form id="edit-form<?php echo $projet['id']?>" role="form" class="form-horizontal" method="post" action="fonctions/maj_projet.php?id=<?php echo $projet['id'] ?>">
                       <div class="form-group">
                         <label class="control-label col-sm-2">Genres</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" value="<?php echo $projet['genre'] ?>" name="genre" id="genre">
                         </div>
                       </div>
                       <div class="form-group">
                         <label class="control-label col-sm-2">Studio</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" value="<?php echo $projet['studio'] ?>" name="studio" id="studio">
                         </div>
                       </div>
                       <div class="form-group">
                         <label class="control-label col-sm-2">Nombre d'épisodes</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" value="<?php echo $projet['nbep'] ?>" name="nbep" id="nbep">
                         </div>
                       </div>
                       <div class="form-group">
                         <label class="control-label col-sm-2">Synopsis</label>
                         <div class="col-sm-10">
                           <textarea class="form-control" name="synopsis" id="synopsis"><?php echo $projet['synopsis'] ?></textarea>
                         </div>
                       </div>
                       <div class="form-group">
                         <label class="control-label col-sm-2">Bluray</label>
                         <input type="checkbox" name="br" id="br" <?php if ($projet['bluray'] == 1) { echo "checked"; }?>>
                       </div>
                       <button id="maj-proj<?php echo $projet['id']?>" type="submit" class="btn btn-primary">valider</button>
                    </form>


                      <?php
                      echo "</div>";
                      echo "<div id=\"liste".$projet['id']."\" class=\"collapse\">";
                      echo "<a href=\"#\" class=\"ajouter\" id=\"".$projet['id']."\">Ajouter épisode</a><br>";
                      $requete = 'SELECT * FROM `episode` WHERE projet ='.$projet['id'].' ORDER BY `projet`';
                      $resultat2 = $connexion->query($requete);
                      while ($episode = mysqli_fetch_array($resultat2)) {
                          echo "<a href=\"#\" data-toggle=\"collapse\" data-target=\"#episode".$episode['numero']."-".$episode['projet']."\">Épisode ".$episode['numero']."</a><br>";
                          echo "<div id=\"episode".$episode['numero']."-".$episode['projet']."\" class=\"collapse\">";
                      ?>
                          <form id="mon-form<?php echo $episode['projet']."-".$episode['numero']?>" role="form" class="form-horizontal" method="post" action="fonctions/maj_episode.php?n=<?php echo $episode['numero'] ?>&p=<?php echo $episode['projet'] ?>">
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
                           <button id="maj-ep<?php echo $episode['projet']."-".$episode['numero']?>" type="submit" class="btn btn-primary">valider</button>

                        </form>
                      <?php
                          echo "</div>";


                      }
                      echo "</div>";
                      echo "</li>";

                  }
                    echo '</ul>';

                  mysqli_close($connexion);

                   ?>
                </div>
                <div class="col-lg-6">
                  <h3>Ajout projet</h3>
                    <div id="titreVide" class="alert alert-warning" style="display: none;" >
                      <strong>Attention :</strong> Vous devez au moins saisir le titre.
                    </div>
                    <form role="form" enctype="multipart/form-data" method="post" action="fonctions/insert_projet.php">
                     <div class="form-group">
                       <label>Titre :</label>
                       <input type="text" class="form-control" name="titre" id="titre">
                     </div>
                     <div class="form-group">
                       <label>Type :</label>
                       <select class="form-control" name="type" id="type">
                         <option>TV</option>
                         <option>OAV</option>
                         <option>Film</option>
                       </select>
                       <br>
                       <label><input type="checkbox" name="br" id="br"> Bluray</label>
                     </div>
                     <div class="form-group">
                       <label>Genres :</label>
                       <input type="text" class="form-control" name="genre" id="genre">
                     </div>
                     <div class="form-group">
                       <label>Studio :</label>
                       <input type="text" class="form-control" name="studio" id="studio">
                     </div>
                     <div class="form-group">
                       <label>Nombre d'épisodes :</label>
                       <input type="text" class="form-control" name="nbep" id="nbep">
                     </div>
                     <div class="form-group">
                       <label>Synopsis :</label>
                       <textarea class="form-control" name="syn" id="syn"></textarea>
                     </div>

                     <div class="form-group">
                       <label>Image :</label>
                       <div class="alert alert-info">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          Prenez une image au format de celles de MyAnimeList par exemple.
                        </div>
                       <input type="file" class="form-control" name="image" id="image" />
                     </div>
                     <button type="submit" class="btn btn-primary">Ajouter</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>

</body>
<script>
$(document.body).on('click','a.supprimer', function(){

  if (confirm("Êtes-vous sûr de vouloir supprimer ce projet ?")) {
    var id = $(this).attr("id");
    $.post("fonctions/delete_projet.php", { id: id},
    function(result){
      if(result == 0){
        window.location.href="administration-projet.php";
      }
    });
  }
});

$(document.body).on('click','a.ajouter', function(){
        var id = $(this).attr("id");
        $.post("fonctions/ajouter_episode.php", { id: id},
        function(result){
          if(result != 0){
            $('#liste'+id).html(result);
          }
        });
});

/*
$(document).ready(function() {
    $('#mon-form').on('submit', function(e) {
        e.preventDefault();
        var lien720dedie = $('#monForm').$('#lien720dedie').val();
        var lien1080dedie = $('#lien1080dedie').val();
        var lien720nya = $('#lien720nya').val();
        var lien1080nya = $('#lien1080nya').val();
        var $this = $(this);
  			$.post($this.attr('action'), { lien720dedie: lien720dedie, lien1080dedie: lien1080dedie, lien720nya: lien720nya, lien1080nya: lien1080nya},
        function(result){
          if(result == 0){
            alert("Modifications enregistrées");
          }
        });
    });
});
*/
</script>
</html>
<?php
}
?>
