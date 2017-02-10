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
      <div class="projetEnCours">
        <a href="#"> </a>
        <div class="titre"><span>Koutetsujou no Kabaneri<br><small>- Épisode 3 -</small></span></div>
        <img src="image/Koutetsujou no Kabaneri.jpg"/>
        <div class="avancement"><div class="fondavancement"></div><div class="barreavancement" style="width: 216px"></div></div></div>
      <div class="projetEnCours"><a href="#"> </a><div class="titre"><span>Sakamoto desu ga?<br><small>- Épisode 3 -</small></span></div><img src="image/Sakamoto desu ga.jpg"/><div class="avancement"><div class="fondavancement"></div><div class="barreavancement" style="width: 36px"></div></div></div>

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
              <div class="col-sm-4 filtr-item" data-category="1, 4" data-sort="Koutetsujou no Kabaneri">
                <div class="projet">
                  <a href="#" data-toggle="modal" data-target="#modal7"></a>
                  <div class="nom-projet"><span>Koutetsujou no Kabaneri</span></div>
                  <div class="image-projet"> </div>
                  <img src="image/Koutetsujou no Kabaneri.jpg"/>
                </div>
              </div>
              <div class="col-sm-4 filtr-item" data-category="2" data-sort="Sakamoto desu ga?">
                <div class="projet">
                  <a href="#" data-toggle="modal" data-target="#modal6"></a>
                  <div class="nom-projet"><span>Sakamoto desu ga?</span></div>
                  <div class="image-projet"> </div>
                  <img src="image/Sakamoto desu ga.jpg"/>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- génération des Modal -->
        <div class="modal fade" id="modal7" role="dialog"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Koutetsujou no Kabaneri</h4></div><div class="modal-body"><div class="project"><img src="image/Koutetsujou no Kabaneri.jpg"><div class="infotext"><strong>Genres : </strong>Action, Drama, Fantasy, Horror<br><strong>Studio : </strong>Wit Studio<br><strong>Épisodes : </strong>12<br><strong>Synopsis : </strong>As the world is in the middle of an industrial revolution, a monster appears that cannot be defeated unless its heart, which is protected by a layer of iron, is pierced. By infecting humans with its bite, the monster can create aggressive and undead creatures known as Kabane. On the island Hinomoto, located in the far east, people have built stations to shelter themselves from these creatures. People access the station, as well as transport wares between them, with the help of a locomotive running on steam, called Hayajiro. Ikoma, a boy who lives in the Aragane station and helps to build Hayajiro, creates his own weapon called Tsuranukizutsu in order to defeat the creatures. One day, as he waits for an opportunity to use his weapon, he meets a girl named Mumei, who is excused from the mandatory Kabane inspection. During the night, Ikoma meets Mumei again as he sees Hayajiro going out of control. The staff on the locomotive has turned into the creatures. The station, now under attack by Kabane, is the opportunity Ikoma has been looking for.<br></div>          <table>
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

          <tr><td class="ep">Koutetsujou no Kabaneri 1</td><td class="link"><a class="episode-link" href="lien1" target="_blank."><img class="lienep" src="image/tick.png"></a></td><td class="link"><a class="episode-link" href="aaaa" target="_blank."><img class="lienep" src="image/tick.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td></tr><tr><td class="ep">Koutetsujou no Kabaneri 2</td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td></tr><tr><td class="ep">Koutetsujou no Kabaneri 3</td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td></tr><tr><td class="ep">Koutetsujou no Kabaneri 4</td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td></tr><tr><td class="ep">Koutetsujou no Kabaneri 5</td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td></tr><tr><td class="ep">Koutetsujou no Kabaneri 6</td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td></tr><tr><td class="ep">Koutetsujou no Kabaneri 7</td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td></tr><tr><td class="ep">Koutetsujou no Kabaneri 8</td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td></tr>                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

        </div>
        </div>
        <div class="modal fade" id="modal6" role="dialog"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Sakamoto desu ga?</h4></div><div class="modal-body"><div class="project"><img src="image/Sakamoto desu ga.jpg"><div class="infotext"><strong>Genres : </strong>Comedie, School, Seinen<br><strong>Studio : </strong>Studio Deen<br><strong>Épisodes : </strong>13<br><strong>Synopsis : </strong>First year high school student Sakamoto isn't just cool, he's the coolest! Almost immediately after starting school, he began attracting everyone's attention. The girls love him, and most of the boys resent him. There's even a boy in the class who works as a model, but who is constantly upstaged by Sakamoto! No matter what tricks the other boys try to play on him, Sakamoto always manages to foil them with ease and grace. Though Sakamoto may seem cool and aloof, he helps others when asked, such as in the case of the boy in his class who was being constantly bullied. No matter what difficulties Sakamoto encounters, he moves through his high school life with confidence and class.<br></div>          <table>
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

          <tr><td class="ep">Sakamoto desu ga? 1</td><td class="link"><a class="episode-link" href="coucou" target="_blank."><img class="lienep" src="image/tick.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td></tr><tr><td class="ep">Sakamoto desu ga? 2</td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td><td class="link"><a class="episode-link no-link" target="_blank"><img class="lienep" src="image/cross.png"></a></td></tr>                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

        </div>
        </div>


      <!-- Chatbox -->
      <div class="col-sm-3 chatbox">
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
