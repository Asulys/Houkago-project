<?php
require_once("fonctions/connexion_db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title> Houkago-fansub </title>
  <link rel="shortcut icon" href="image/favicon.ico">
  <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css"  href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>



</head>
<body>
	<div class="container">

    <!-- Menu -->
    <nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="0">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Houkago Fansub</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="index.php">Accueil</a></li>
          <li class="active"><a href="projets.php">Projets</a></li>
          <li><a href="staff.php">Staff</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="karaoke.php">Karaoké</a></li>
        </ul>
    </nav>
    <!-- Bannière -->
    <div class="jumbotron"></div>
    <!-- Caroussel projetEnCourss en cours -->
    <div class="autoplay">
      <?php
      $connexion = mysqli_connect(SERVEUR,NOM,PASSE,BASE);
      $requete = "SELECT nom, numep, avancement, image FROM `encours`, `projet` WHERE encours.projet = projet.id  ORDER BY `nom`";
      $resultat = $connexion->query($requete);
      while ($projet = mysqli_fetch_array($resultat)) {
        echo "<div class=\"projetEnCours\">";
        echo "<a href=\"#\"> </a>";
        echo "<div class=\"titre\"><span>".$projet['nom']."<br><small>- Épisode ".$projet['numep']." -</small></span></div>";
        echo "<img src=\"image/".$projet['image']."\"/>";
        echo "<div class=\"avancement\">";
        echo "<div class=\"fondavancement\"></div>";
        $avancement = $projet['avancement'] * 2.4;
        echo "<div class=\"barreavancement\" style=\"width: ".$avancement."px\"></div>";
        echo "</div>";
        echo "</div>";

      }
      ?>


    </div>

    <!-- Projets + chatbox -->
    <div class="row middle-style">

      <!-- Les projets -->
      <div class="col-sm-9 content-wrapper">
          <div class="projet-container">
            <ul class="simplefilter ">
                <li class="filtre active" data-filter="all">Tous</li>
                <li class="filtre" data-filter="1">TV</li>
                <li class="filtre" data-filter="2">OAV</li>
                <li class="filtre" data-filter="3">Film</li>
                <li class="" data-filter="4">BluRay</li>
            </ul>

        <!-- Search control -->
        <div class="search">
          <img src="image/search-icon.png"/>
          <input type="text" class="filtr-search" name="filtr-search" data-search>
        </div>

            <!-- 1:TV 2:OAV 3:film  4:bluray-->
            <div class="filtr-container">


              <?php

              $requete = "SELECT * FROM `projet` ORDER BY `nom`";
              $resultat = $connexion->query($requete);
              while ($projet = mysqli_fetch_array($resultat)) {
                echo "<div class=\"col-sm-4 filtr-item\" data-category=\"";
                switch ($projet['type']) {
                    case "TV":
                        echo "1";
                        break;
                    case "OAV":
                        echo "2";
                        break;
                    case "Film":
                        echo "3";
                        break;
                }
                if ($projet['bluray'] == 1) {
                  echo ", 4";
                }
                echo "\"";
                echo " data-sort=\"".$projet['nom']."\">";
                echo "<div class=\"projet\">";
                echo "<a href=\"#\" data-toggle=\"modal\" data-target=\"#modal".$projet['id']."\"></a>";
                echo "<div class=\"nom-projet\"><span>".$projet['nom']."</span></div>";
                echo "<div class=\"image-projet\"> </div>";
                echo "<img src=\"image/".$projet['image']."\"/>";
                echo "</div>";
                echo "</div>";

              }

              ?>


            </div>
          </div>
        </div>

        <!-- génération des Modal -->
        <?php

        $requete = "SELECT * FROM `projet` ORDER BY `nom`";
        $resultat = $connexion->query($requete);
        while ($projet = mysqli_fetch_array($resultat)) {
          echo "<div class=\"modal fade\" id=\"modal".$projet['id']."\" role=\"dialog\">";
          echo "<div class=\"modal-dialog modal-lg\">";
          echo "<div class=\"modal-content\">";
          echo "<div class=\"modal-header\">";
          echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
          echo "<h4 class=\"modal-title\">".$projet['nom']."</h4>";
          echo "</div>";
          echo "<div class=\"modal-body\">";
          echo "<div class=\"project\">";
          echo "<img src=\"image/".$projet['image']."\">";
          echo "<div class=\"infotext\">";
          echo "<strong>Genres : </strong>".$projet['genre']."<br>";
          echo "<strong>Studio : </strong>".$projet['studio']."<br>";
          echo "<strong>Épisodes : </strong>".$projet['nbep']."<br>";
          echo "<strong>Synopsis : </strong>".$projet['synopsis']."<br>";
          echo "</div>";
          ?>
          <table>
            <tbody>
              <tr class="table-header1">
                <th rowspan="2">Épisode</th>
                <th colspan="2">Dédié</th>
                <th colspan="2">Nyaa</th>
              </tr>
              <tr class="table-header2">
                <th class="sub">720p</th>
                <th class="sub">1080p</th>
                <th class="sub">720p</th>
                <th class="sub">1080p</th>
              </tr>

          <?php
          $requete2 = "SELECT * FROM `episode` WHERE projet= ".$projet['id']." ORDER BY `numero`";
          $resultat2 = $connexion->query($requete2);
          while ($episode = mysqli_fetch_array($resultat2)) {
          echo "<tr>";
          echo "<td class=\"ep\">".$projet['nom']." ";
          if ($episode['numero'] <= 9) {
            echo "0".$episode['numero'];
          } else {
            echo $episode['numero'];
          }
          echo "</td>";

          echo "<td class=\"link\">";
          if ($episode['lien720dedie'] == "") {
             echo "<a class=\"episode-link no-link\" target=\"_blank\"><img class=\"lienep\" src=\"image/cross.png\"></a>";
          } else {
            echo "<a class=\"episode-link\" href=\"".$episode['lien720dedie']."\" target=\"_blank.\"><img class=\"lienep\" src=\"image/tick.png\"></a>";
          }
          echo "</td>";
          echo "<td class=\"link\">";
          if ($episode['lien1080dedie'] == "") {
             echo "<a class=\"episode-link no-link\" target=\"_blank\"><img class=\"lienep\" src=\"image/cross.png\"></a>";
          } else {
            echo "<a class=\"episode-link\" href=\"".$episode['lien1080dedie']."\" target=\"_blank.\"><img class=\"lienep\" src=\"image/tick.png\"></a>";
          }
          echo "</td>";
          echo "<td class=\"link\">";
          if ($episode['lien720nya'] == "") {
             echo "<a class=\"episode-link no-link\" target=\"_blank\"><img class=\"lienep\" src=\"image/cross.png\"></a>";
          } else {
            echo "<a class=\"episode-link\" href=\"".$episode['lien720nya']."\" target=\"_blank.\"><img class=\"lienep\" src=\"image/tick.png\"></a>";
          }
          echo "</td>";
          echo "<td class=\"link\">";
          if ($episode['lien1080nya'] == "") {
             echo "<a class=\"episode-link no-link\" target=\"_blank\"><img class=\"lienep\" src=\"image/cross.png\"></a>";
          } else {
            echo "<a class=\"episode-link\" href=\"".$episode['lien1080nya']."\" target=\"_blank.\"><img class=\"lienep\" src=\"image/tick.png\"></a>";
          }
          echo "</td>";
          echo "</tr>";
        }
        ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

        </div>
        </div>
        <?php
        }
        ?>


      <!-- Chatbox -->
      <div class="col-sm-3">
        <div class="recherche-article">
          <div class="recherche-titre">Recherche d'articles</div>
          <form name="Choix">
            <select class="selection" name="Liste" onChange="lanceRecherche()">
              <option value="">Sujet
              <?php
              $requete = "SELECT id, nom FROM `projet` ORDER BY nom";
              $resultat = $connexion->query($requete);
              while ($projet = mysqli_fetch_array($resultat)) {
                echo "<option value=\"recherche.php?p=".$projet['id']."\">".$projet['nom']."";
              }
              mysqli_close($connexion);
              ?>
            </select>
          </form>
        </div>
      </div>
    </div>
 </div>
    <!-- Bottom -->
    <div class="row bottom">
      <div class="col-sm-4 ">
        <h4>La Houkago</h4>
      </div>
      <div class="col-sm-4 partenaire">
        <h4>Partenaires</h4>
        <a href="http://natsumi-no-sekai-fansub.blogspot.fr/">
          <img src="image/partners/natsumi.png">
        </a>
        <a href="http://www.sky-animes.com/">
          <img src="image/partners/sky.png">
        </a>
        <a href="http://www.bloody-no-yume.com/">
          <img src="image/partners/bloody.gif">
        </a>
        <a href="https://covernim.com/">
          <img src="image/partners/covernim.gif">
        </a>
        <a href="http://sekai-no-nyuusu.net/">
          <img src="image/partners/sekai.png">
        </a>
        <a href="http://waifu-fansub.blogspot.fr/">
          <img src="image/partners/waifu.png">
        </a>
        <a href="http://wakfustreaming.fr/">
          <img src="image/partners/wakfu.gif">
        </a>
        <a href="http://imaginary-fansub.fr.nf/">
          <img src="image/partners/imaginary.png">
        </a>
        <a href="http://www.derniers-animes.fr/">
          <img src="image/partners/dernier.png">
        </a>

      </div>
      <div class="col-sm-4 ">
        <h4>Dons</h4>
      </div>
   </div>


 <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
 <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
 <script type="text/javascript" src="slick/slick.min.js"></script>


 <script src="filterizr/jquery.filterizr.js"></script>
 <script src="js/controls.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('.autoplay').slick({
    dots: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
  });
});


$(function() {
    //Initialize filterizr with default options
    $('.filtr-container').filterizr();
});

</script>
</body>
</html>
