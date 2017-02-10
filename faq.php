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
          <li class="active"><a href="faq.php">FAQ</a></li>
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
        <h1><a href="#">F.A.Q.</a></h1>
        <p><strong>Q : Qu'est-ce que la Houkago ?</strong></p><p>R : Un groupe de personnes qui, pour des raisons variées, aiment mettre du texte sur des vidéos pour que d'autres personnes aient de quoi se plaindre.</p>
        <p><strong>Q : Pourquoi la Houkago ?</strong></p>
        <p>R : Parce que la fansub fr, c'est souvent mal vu (pour des raisons plutôt valables je vous l'accorde), et que nos différentes expériences avec d'autres fansubs ont été mauvaises, donc nous avons décidé de s'économiser le fait de passer du temps à corriger les fautes des autres et devoir regarder un anime avec de mauvaises fansubs.</p>
        <p><strong>Q : Quel est votre but ?</strong></p>
        <p>R : Proposer les meilleurs sous-titres possibles sur les animes sur lesquels nous travaillons.</p>
        <p><strong>Q : Quand allez-vous sortir l'épisode de X ? Ça fait 5 minutes que vous n'en avez pas parlé, l'avez-vous drop ?</strong></p>
        <p>R : Soon™. Il y a une barre d'avancement à droite du site, mais ne vous attendez pas à ce que ce soit en permanence à jour, et de toute façon, ça n'indique pas grand chose sur <strong>quand</strong> l'épisode va sortir. De plus, rien n'est drop tant que nous ne l'avons pas annoncé. Soyez patients, ou allez regarder d'autres subs, surtout si c'est un anime licencié.</p>
        <p><strong>Q : Quels sont vos formats vidéos ?</strong></p>
        <p>R : Cela dépend du staff sur la série. Généralement, on essaye d'avoir la meilleure qualité par rapport à la technologie actuelle, donc du mkv 10 bits. Mais vu que les fr ont apparement <strong>tous</strong> des toasters (ce que je ne comprends pas car même mon téléphone portable vieux de trois ans lit du 10 bits mkv), il nous arrive dans notre grande bonté de faire du mp4.</p>
        <p><strong>Q : Quel lecteur conseillez-vous ?</strong></p>
        <p>R : MPC-HC avec <a href="http://cccp-project.net/">CCCP</a>.</p>
        <p><strong>Q : Pourquoi vous mettez parfois des honorifiques, et parfois non ?</strong></p>
        <p>R : Il y a trois types de personnes qui regardent des animus : <br/>
        1) Ceux qui détestent les honorifiques et qui s'offusquent comme des vierges effarouchées quand ils en voient. <br/>
        2) Ceux qui ne peuvent pas regarder un anime sans, parce que MUH JAPANESENESS RESPECT 404 <br/>
        3) Les personnes raisonnables. <br/>
        Nous (je?) pensons appartenir au troisième groupe. Sérieusement, qu'est-ce qu'on en a à faire des honorifiques ? Certains animes en auront, d'autres pas. Cela dépend du staff qui bosse sur le projet, si l'anime se passe au Japon ou dans un pays imaginaire du genre aux USA et si ils sont en grand nombre ou pas.</p>
        <p><strong>Q : Vous faites des batchs, c'est quoi ?</strong></p>
        <p>R : Des batchs sont des releases censées être finales. Généralement, je ne le fais que sur du BD, et encore, j'en fais rarement car cela demande que je repasse parfois une 3e fois sur la série <strong>entière</strong>, c'est donc une tonne d'effort.</p>
        <p><strong>Q : Vous êtes nuls à chier ! Où est-ce que je me plains ?</strong></p>
        <p>R : Par commentaire, sur chatbox ou voir la dernière question. Toute personne s'appelant Otafox ou soutenant que manga et otaku doivent s'écrire avec une majuscule et ne prennent pas de "s" au pluriel est priée de s'abstenir.</p>
        <p><strong>Q : Pourquoi vous faites du licencié ? C'est pas beau...!</strong></p>
        <p>R : Nous soutenons les éditeurs. Ça peut paraître paradoxal, mais bien sûr, nous achetons des animes. La seule chose que nous ne cautionnons pas, c'est le J+15. Toutes les autres licences peuvent être arrêtées sur demande de l'éditeur. De toute façon, nous nous dirigeons lentement vers du full non-licencié en projet TV, et nous subbons des BD qui ne sortent pas en physique en France (donc potentiellement licenciés en simulcast).</p>
        <p><strong>Q : Index where ? Jinsei where ?</strong></p>
        <p>R : Nous faisons du fansub durant notre temps libre. (Wah, c'était original ça). Ouais, je sais, on a déjà dû vous dire ça des centaines de fois mais certains ont de facheux accès d'alzheimer parfois. On ne doit rien à personne, et on release quand on peut.</p>
        <p><strong>Q : <a href="https://i.gyazo.com/1612a4ad673b3297d068003550cceca3.jpg">Nice meme</a>.</strong></p>
        <p>R : Ce n'est pas une question. Si nos choix d'adaptations ne vous plaisent pas, vous avez trois choix : <br/>
        1) Vous tuer. <br/>
        2) Aller voir ailleurs. <br/>
        3) Changer le script, vu qu'on release du mkv.</p>
        <p><strong>Q : Recrutez-vous et comment je postule ?</strong></p>
        <p>R : Actuellement, nous recherchons des timeurs, des éditeurs et des traducteurs Jap. Vous pouvez postuler au même endroit que la question suivante.</p>
        <p><strong>Q : J'ai d'autres questions sur X sujet, où je vous contacte ?</strong></p>
        <p>R : <a href="https://m.ask.fm/HFKlinsk">Ici</a> ou contact@houkago-fansub.com</p>
        <p><strong>Q : On vous pose souvent ces questions, ou c'est juste le staff qui t'a harcelé pendant des semaines pour faire la FAQ ?</strong></p>
        <p>R : Un peu des deux.</p>
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
