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
        <li class="active">
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
                  <h1>Gestion du staff</h1>
                  <br><br>
                  <div class="col-lg-6">
                    <h3>Liste des membres</h3>
                    <?php

                    $connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);

                  	echo '<ul class="list-group">';
                  	$requete = "SELECT * FROM `staff` WHERE 1 ";
                  	$resultat = $connexion->query($requete);
                  	while ($membre = mysqli_fetch_array($resultat)) {
                  			echo "<li class=\"list-group-item\"><div class=\"nom-projet\">".$membre['pseudo']."</div>";
                        echo "<a id=\"".$membre['id']."\" class=\"supprimer btn btn-danger\">Supprimer</a>";
                        echo "<a href=\"#\" data-toggle=\"collapse\" data-target=\"#membre".$membre['pseudo']."\" class=\"btn btn-success\">Modifier</a>";
                        echo "<div id=\"membre".$membre['pseudo']."\" class=\"collapse\">";
                        ?>
                        <br>
                        <form id="mon-form<?php echo $membre['id']?>" role="form" class="form-horizontal" method="post" action="fonctions/maj_staff.php?id=<?php echo $membre['id'] ?>">
                          <div class="form-group">
                            <label class="control-label col-sm-2">Poste(s)</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="<?php echo $membre['postes'] ?>" name="postes" id="postes">
                            </div>
                          </div>
                         <div class="form-group">
                           <label class="control-label col-sm-2">Animes favoris</label>
                           <div class="col-sm-10">
                             <input type="text" class="form-control" value="<?php echo $membre['fav'] ?>" name="fav" id="fav">
                           </div>
                         </div>
                         <button id="maj-staff<?php echo $membre['pseudo']?>" type="submit" class="btn btn-primary">valider</button>

                        </form>
                        <?php
                        echo "</div></li>";
                    }
                      echo '</ul>';

                  mysqli_close($connexion);

                     ?>

                  </div>
                  <div class="col-lg-6">
                    <h3>Ajout membre</h3>
                      <div id="pseudoDouble" class="alert alert-danger" style="display: none;">
                        <strong>Erreur :</strong> Ce pseudo existe déjà.
                      </div>
                      <div id="pseudoVide" class="alert alert-warning" style="display: none;" >
                        <strong>Attention :</strong> Vous devez au moins saisir un pseudo.
                      </div>
                      <form role="form" method="post" action="fonctions/insert_staff.php">
                       <div class="form-group">
                         <label>Pseudo :</label>
                         <input type="text" class="form-control" id="pseudo" name="pseudo">
                       </div>
                       <div class="form-group">
                         <label>Poste(s) :</label>
                         <input type="text" class="form-control" id="postes" name="postes">
                       </div>
                       <div class="form-group">
                         <label>Animes favoris :</label>
                         <input type="text" class="form-control" id="fav" name="fav">
                       </div>
                       <button type="submit" id="ajout-staff" class="btn btn-primary">Ajouter</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

</body>

<script>
$(document.body).on('click','a.supprimer', function(){

  if (confirm("Êtes-vous sûr de vouloir supprimer ce membre ?")) {
    var id = $(this).attr("id");
    $.post("fonctions/delete_staff.php", { id: id},
    function(result){
      if(result == 0){
        window.location.href="administration-staff.php";
      }
    });
  }
});

</script>

</html>
<?php
}
?>
