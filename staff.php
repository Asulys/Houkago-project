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
          <li><a href="projets.php">Projets</a></li>
          <li class="active"><a href="staff.php">Staff</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="karaoke.php">Karaoké</a></li>
        </ul>
    </nav>
    <!-- Bannière -->
    <div class="jumbotron"></div>
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
            <h1><a href="#">Staff</a></h1>

            <p><img class="avatar" src="/content/images/2016/02/klinsk-avatar.png" /></p>

            <div class="bio">
            <p>Pseudo: Klinsk</p>
            <p>Poste: A peu près tout :D </p>
            <p>Animes Favoris: Les Monogatari, les To Aru (Index & Railgun), Sakurasou no Pet na Kanojo</p>
            <p> Si vous avez des questions : <a href="https://ask.fm/HFKlinsk">https://ask.fm/HFKlinsk</a></p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/xybi-avatar.png" />

            <div class="bio">
            <p>Pseudo: Xybi</p>
            <p>Poste: Encodeur / Uploadeur / Q-checkeur / Admin réseaux sociaux </p>
            <p>Animes Favoris: Les Monogatari, Durarara, Baccano</p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/bloody-avatar.png" />

            <div class="bio">
            <p>Pseudo: Bloodyredstars</p>
            <p>Poste: Checkeur / Editeur / Karamaker / Qcheckeur</p>
            <p>Animes Favoris:  Fate/Zero, Psycho-Pass, Gintama, Shigatsu </p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/magnord-avatar.png" />

            <div class="bio">
            <p>Pseudo: Magnord</p>
            <p>Poste: Traducteur / Checkeur / Computer </p>
            <p>Animes Favoris: Death Note, One Piece, Phantom : Requiem  </p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/anon-avatar.png" />

            <div class="bio">
            <p>Pseudo: Alina</p>
            <p>Poste: Timeur / Checkeur. </p>
            <p>Animes Favoris: Death Note, Gosick, Mirai Nikki , Hyouka</p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/anon-2-avatar.png" />

            <div class="bio">
            <p>Pseudo: PingError</p>
            <p>Poste:  Encodeur </p>
            <p>Animes Favoris: les Fate, Yumekui Merry, Sakurasou no Pet na Kanojo</p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/poring-avatar-1.png" />

            <div class="bio">
            <p>Pseudo: Poring</p>
            <p>Poste: Traducteur </p>
            <p>Animes Favoris: Fate/Zero, Monogatari, Steins;Gate, Code Geass</p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/rioreur-avatar.png" />

            <div class="bio">
            <p>Pseudo: Rioreur</p>
            <p>Poste: Karamaker / Traducteur / Editeur </p>
            <p>Animes Favoris: Bakemonogatari, Kami-nomi, Steins;Gate</p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/satsuki-avatar.png" />

            <div class="bio">
            <p>Pseudo: Satsuki Kazame</p>
            <p>Poste: Encodeur / Admin Serveur </p>
            <p>Animes Favoris: Gundam Seed, Code Geass, Guilty Crown</p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/iav-avatar.png" />

            <div class="bio">
            <p>Pseudo: IA Aria </p>
            <p>Poste: Encodeur / Editeur</p>
            <p>Animes Favoris: SNK, Mirai Nikki, Nanatsu no taizai</p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/shino-avatar.png
            " />

            <div class="bio">
            <p>Pseudo: Shinokuni </p>
            <p>Poste: Encodeur de génie</p>
            <p>Animes Favoris: Psycho-Pass, les Fate, Garo</p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/Sylux-avatar.png
            " />

            <div class="bio">
            <p>Pseudo: Sylux </p>
            <p>Poste: Graphiste</p>
            <p>Animes Favoris: Sakurasou, Shigatsu, Love Live!</p>
            </div>

            <div class="clearfix"></div>

            <img class="avatar" src="/content/images/2016/02/Shiruku.png
            " />

            <div class="bio">
            <p>Pseudo: Shiruku </p>
            <p>Poste: Checkeur</p>
            <p>Animes Favoris: Kara no Kyoukai, Boku Wa Tomodachi !</p>
          </div>
        </div>
        </div>

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
