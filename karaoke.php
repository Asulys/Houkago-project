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
          <li><a href="staff.php">Staff</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li class="active"><a href="karaoke.php">Karaoké</a></li>
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
            <h1><a href="#">Karaoké</a></h1>
              <p><strong>Absolute Duo :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo Par Bloody</li>
            <li>Ending 2 : Téléchargement : Mega / Streaming : Vimeo Par Rioreur</li>
            <li>Ending 3 : Téléchargement : Mega / Streaming : Vimeo Par Rioreur</li>
            </ul>
            <p><strong>Danna Ga Nani Wo Itteiru Ka Wakaranai Ken :</strong></p>
            <ul>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Dungeon Ni Deai Wo Motomeru No Wa Machigatteiru Darou Ka ? :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            </ul>
            <p><strong>Gangsta :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Gokukoku No Brynhildr :</strong></p>
            <ul>
            <li>Opening 2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Gosick :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            </ul>
            <p><strong>Hanayamata :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 v1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 v2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Infinite Stratos - Saison 2 :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 FULL : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Inou Battle Wa Nichijou-kei No Naka De :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Jinsei :</strong></p>
            <ul>
            <li>Opening 1 v1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Opening 1 v2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            </ul>
            <p><strong>Jojo's Bizzare Adventure - Stardust Crusaders :</strong>
            - Opening 2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</p>
            <p><strong>Kamisama No Memochou :</strong></p>
            <ul>
            <li>Opening 1 v1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Opening 1 v2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Kantai Collection :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Kiseijuu :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Lance N' Masques :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Mekaku City Actors :</strong></p>
            <ul>
            <li>Opening 1 v1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Opening 1 v2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Opening 1 v3 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Insert Kisaragi Attention : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            <li>Insert Mekakushi Code : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Insert Kagerou Days : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            </ul>
            <p><strong>Psycho Pass - Saison 2 :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Psycho Pass - Movie :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Rakudai Kishi No Cavalry :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            </ul>
            <p><strong>Ranpo Kitan Game Of Laplace :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Seirei Tsukai No Blade Dance :</strong></p>
            <ul>
            <li>Opening 1 v1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Opening 1 v2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            </ul>
            <p><strong>Strike The Blood :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Opening 2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Opening 1 OAV : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 OAV : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            </ul>
            <p><strong>To Aru Majutsu No Index :</strong></p>
            <ul>
            <li>Opening 1 v1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Opening 1 v2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Opening 1 v3 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            </ul>
            <p><strong>Tokyo Esp :</strong></p>
            <ul>
            <li>Opening 1 v1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Opening 1 v2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Trinity Seven :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 3 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 4 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Utawarerumono Itsuwari No Kamen :</strong></p>
            <ul>
            <li>Opening 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Opening 2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            <li>Ending 1 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur </li>
            </ul>
            <p><strong>Yahari Yahari Ore No Seishun Lovecome Wa Machigatte Iru - Saison 2 :</strong></p>
            <ul>
            <li>Opening 1 v1 : Téléchargement : Mega / Streaming : Vimeo - Par Bloody</li>
            <li>Opening 1 v2 : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <p><strong>Yamada-kun To 7-nin No Majo :</strong></p>
            <ul>
            <li>Opening 1 OAV : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            <li>Ending 1 OAV : Téléchargement : Mega / Streaming : Vimeo - Par Bloody</li>
            <li>Insert OAV : Téléchargement : Mega / Streaming : Vimeo - Par Rioreur</li>
            </ul>
            <h2 id="karaokspersonnels">Karaokés Personnels</h2>
            <p>Rioreur : <a href="http://https://mega.nz/#F!fdUQ0RKZ!xAmgr_aIXfTV_tKTphvRNA">Dossier Mega</a> <br/>
            Bloody : Dossier Mega <br/>
            Les Typeset de Klinsk (peut contenir du troll) : <a href="http://62.210.36.233/Karashit/">Dossier FTP</a></p>
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
