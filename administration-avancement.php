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
        <li>
          <a href="administration-projet.php">Projet</a>
      </li>
      <li>
          <a href="administration-staff.php">Staff</a>
      </li>
      <li class="active">
          <a href="administration-avancement.php">Avancement</a>
      </li>
      </ul>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <h1>Gestion des Avancements</h1>
                <br><br>
                <div class="col-lg-6">
                  <h3>Liste des projets en cours</h3>
                  <?php

                  $connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);

                  echo '<ul class="list-group">';
                  $requete = "SELECT encours.id, nom, numep, avancement FROM `encours`, `projet` WHERE encours.projet = projet.id  ORDER BY `nom`";
                  $resultat = $connexion->query($requete);
                  while ($encours = mysqli_fetch_array($resultat)) {

                      echo "<li class=\"list-group-item\"><div class=\"nom-projet\">".$encours['nom']."</div>";
                      echo "<a id=\"".$encours['id']."\" class=\"supprimer btn btn-danger\">Supprimer</a>";

                      ?>
                      <br>
                      <br>
                      <form role="form" class="form-horizontal" method="post" action="fonctions/maj_avancement.php?id=<?php echo $encours['id'] ?>">
                        <div class="form-group">
                          <label class="control-label col-sm-2">Épisode</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $encours['numep'] ?>" name="numep" id="numep">
                          </div>
                        </div>
                       <div class="form-group">
                         <label class="control-label col-sm-2">Avancement</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" value="<?php echo $encours['avancement'] ?>" name="avancement" id="avancement">
                         </div>
                       </div>
                       <button id="maj-av" type="submit" class="btn btn-primary">valider</button>

                      </form>
                    </li>
                      <?php

                  }
                    echo '</ul>';

                   ?>
                </div>
                <div class="col-lg-6">
                  <h3>Ajout projet en cours</h3>
                  <form role="form" method="post" action="fonctions/insert_avancement.php">
                   <div class="form-group">
                     <label>Projet :</label>
                     <select class="form-control" name="projet" id="projet">
                       <?php
                       $requete = "SELECT `id`,`nom` FROM `projet` WHERE 1 ORDER BY `nom`";
                       $resultat = $connexion->query($requete);
                       while ($projet = mysqli_fetch_array($resultat)) {
                         echo "<option value=\"".$projet['id']."\">".$projet['nom']."</option>";
                       }

                        mysqli_close($connexion);
                       ?>
                     </select>
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

  if (confirm("Êtes-vous sûr de vouloir supprimer cet avancement ?")) {
    var id = $(this).attr("id");
    $.post("fonctions/delete_avancement.php", { id: id},
    function(result){
      if(result == 0){
        window.location.href="administration-avancement.php";
      }
    });
  }
});
</script>
</html>
<?php
}
?>
