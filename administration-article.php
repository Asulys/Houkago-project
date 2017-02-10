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
        <li class="active">
            <a href="administration-article.php">Article</a>
        </li>
        <li>
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
                <h1>Gestion des articles</h1>
                <br><br>
                <div class="col-lg-7">
                  <h3>Liste des articles</h3>
                  <?php

                  $connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);

                  echo '<ul class="list-group">';
                  $requete = "SELECT * FROM `article` ORDER BY `date` DESC";
                  $resultat = $connexion->query($requete);
                  while ($article = mysqli_fetch_array($resultat)) {
                      echo "<li class=\"list-group-item\"><div class=\"nom-projet\">".$article['titre']."</div>";
                      echo "<a id=\"".$article['id']."\" class=\"supprimer btn btn-danger\">Supprimer</a>";
                      echo "<a href=\"#\" data-toggle=\"collapse\" data-target=\"#article".$article['id']."\" class=\"btn btn-success\">Modifier</a>";
                      echo "<div id=\"article".$article['id']."\" class=\"collapse\">";
                      ?>
                      <br>
                      <form id="mon-form<?php echo $article['id']?>" role="form" class="form-horizontal" method="post" action="fonctions/maj_article.php?id=<?php echo $article['id'] ?>">
                        <div class="form-group">
                          <label class="control-label col-sm-2">Titre</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $article['titre'] ?>" name="titre" id="titre">
                          </div>
                        </div>
                       <div class="form-group">
                         <label class="control-label col-sm-2">Contenu</label>
                         <div class="col-sm-10">
                           <textarea class="form-control" name="contenu" id="contenu"><?php echo $article['contenu'] ?></textarea>
                         </div>
                       </div>
                       <button id="maj-ar<?php echo $article['id']?>" type="submit" class="btn btn-primary">valider</button>

                    </form>
                      <?php
                      echo "</div></li>";

                  }

                    echo '</ul>';

                   ?>

                </div>
                <div class="col-lg-5">
                  <h3>Ajout article</h3>
                  <form role="form" method="post" action="fonctions/insert_article.php">
                   <div class="form-group">
                     <label>Titre :</label>
                     <input type="text" class="form-control" name="titre" id="titre">
                   </div>

                   <div class="form-group">
                     <label>Contenu :</label>
                     <div class="alert alert-info">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>&#60;br&#62;</strong> Pour retourner à la ligne.<br>
                        <strong>&#60;a href=\"lien\"&#62;Texte&#60;/a&#62;</strong> Pour les liens.
                      </div>
                     <textarea class="form-control" name="contenu" id="contenu"></textarea>
                   </div>
                   <div class="form-group">
                     <label>Auteur :</label>
                     <select class="form-control" name="auteur" id="auteur">
                       <?php
                       $requete = "SELECT `pseudo` FROM `staff` WHERE 1 ORDER BY `pseudo`";
                       $resultat = $connexion->query($requete);
                       while ($membre = mysqli_fetch_array($resultat)) {
                         echo "<option>".$membre['pseudo']."</option>";
                       }
                       ?>
                     </select>
                   </div>
                   <div class="form-group">
                     <label>Sujet :</label>
                     <select class="form-control" name="sujet" id="sujet">
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

  if (confirm("Êtes-vous sûr de vouloir supprimer cet article ?")) {
    var id = $(this).attr("id");
    $.post("fonctions/delete_article.php", { id: id},
    function(result){
      if(result == 0){
        window.location.href="administration-article.php";
      }
    });
  }
});
</script>
</html>
<?php
}
?>
