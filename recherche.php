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
          <li class="active"><a href="index.php">Accueil</a></li>
          <li><a href="projets.php">Projets</a></li>
          <li><a href="staff.php">Staff</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="karaoke.php">Karaoké</a></li>
        </ul>
    </nav>
    <!-- Bannière -->
    <div class="jumbotron"></div>
    <!-- Caroussel projets en cours -->
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

    <!-- News + chatbox -->
    <div class="row middle-style">

      <!-- News -->
      <div class="col-sm-9 content-wrapper">
        <?php
        $requete = "SELECT article.id as id, titre, contenu, auteur, date, image FROM `article`, `projet` WHERE article.sujet = projet.id AND article.sujet =".$_GET['p']." ORDER BY `date` DESC";
        $resultat = $connexion->query($requete);
        while ($article = mysqli_fetch_array($resultat)) {
          echo "<div class=\"article\">";
          echo "<div class=\"vignette\"><img src=\"image/".$article['image']."\"/></div>";
          echo "<a href=\"article.php?id=".$article['id']."\" class=\"title\">".$article['titre']."</a>";
          echo "<div class=\"contenu\">".$article['contenu']."</div>";
          $date= new DateTime($article['date']);
          $ladate = date_format($date,"d M Y");
          echo "<div class=\"auteur\">".$article['auteur']." - ".$ladate."</div>";
          echo "</div>";

        }
        ?>
      </div>

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
<script type="text/javascript">
function lanceRecherche() {
	i = document.Choix.Liste.selectedIndex;
	if (i == 0) return;
	url = document.Choix.Liste.options[i].value;
	parent.location.href = url;
}

$(document).ready(function(){
  $('.autoplay').slick({
    dots: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
  });
});

</script>
</body>
</html>
