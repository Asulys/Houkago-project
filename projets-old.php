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
        <div class="titre"><span>Koutetsujou no Kabaneri<br><small>- Episode 2 -</small></span></div>
        <img src="image/kabaneri.jpg" alt="" />
        <div class="avancement">
          <div class="fondavancement"></div>
          <div class="barreavancement"></div>
        </div>
      </div>
      <div class="projetEnCours">
        <a href="#"> </a>
        <div class="titre"><span>Sakamoto desu ga?<br><small>- Episode 2 -</small></span></div>
        <img src="image/sakamoto.jpg" alt="" />
        <div class="avancement">
          <div class="fondavancement"></div>
          <div class="barreavancement" style="width: 20px;"></div>
        </div>
      </div>
      <div class="projetEnCours">
        <a href="#"> </a>
        <div class="titre"><span>Dagashi Kashi<br><small>- Episode 9 -</small></span></div>
        <img src="image/dagashi.jpg" alt="" />
        <div class="avancement">
          <div class="fondavancement"></div>
          <div class="barreavancement" style="width: 100px;"></div>
        </div>
      </div>
      <div class="projetEnCours">
        <a href="#"> </a>
        <div class="titre"><span>Sansha Sanyou <br><small>- Episode 3 -</small></span></div>
        <img src="image/sansha.jpg" alt="" />
        <div class="avancement">
          <div class="fondavancement"></div>
          <div class="barreavancement"></div>
        </div>
      </div>
      <div class="projetEnCours">
        <a href="#"> </a>
        <div class="titre"><span>Koyomimonogatari<br><small>- Episode 1 -</small></span></div>
        <img src="image/koyomimonogatari.jpg" alt="" />
        <div class="avancement">
          <div class="fondavancement"></div>
          <div class="barreavancement" style="width: 150px;"></div>
        </div>
      </div>
    </div>

    <!-- Projets + chatbox -->
    <div class="row middle-style">

      <!-- Les projets -->
      <div class="col-sm-9 content-wrapper">
          <div class="projet-container">
            <ul class="simplefilter ">
                <li class="aze active" data-filter="all">Tous</li>
                <li class="aze" data-filter="1">TV</li>
                <li class="aze" data-filter="2">OAV</li>
                <li class="aze" data-filter="3">Film</li>
                <li class="" data-filter="4">BluRay</li>
            </ul>

        <!-- Search control -->
        <div class="search">
          <img src="image/search-icon.png"/>
          <input type="text" class="filtr-search" name="filtr-search" data-search>
        </div>

            <!-- 1:TV 2:OAV 3:Bluray -->
            <div class="filtr-container">
              <div class="col-sm-4 filtr-item" data-category="1, 4" data-sort="Gokukoku no Brynhildr">
                <div class="projet">
                  <a href="#" data-toggle="modal" data-target="#modal01"></a><!-- modal-numprojet -->
                  <div class="nom-projet"><span>Gokukoku no Brynhildr</span></div>
                  <div class="image-projet"> </div>
                  <img src="image/bry.jpg" alt="" />
                </div>
              </div>
              <div class="col-sm-4 filtr-item" data-category="3" data-sort="Hinata no Aoshigure">
                <div class="projet">
                  <a href="#"></a>
                  <div class="nom-projet"><span>Hinata no Aoshigure</span></div>
                  <div class="image-projet"> </div>
                  <img src="image/hinata.jpg" alt="" />
                </div>
              </div>
              <div class="col-sm-4 filtr-item" data-category="1, 4" data-sort="Kantai Collection: KanColle">
                <div class="projet">
                  <a href="#"></a>
                  <div class="nom-projet"><span>Kantai Collection: KanColle</span></div>
                  <div class="image-projet"> </div>
                  <img src="image/kantai.jpg" alt="" />
                </div>
              </div>
              <div class="col-sm-4 filtr-item" data-category="1" data-sort="Koutetsujou no Kabaneri">
                <div class="projet">
                  <a href="#"> </a>
                  <div class="nom-projet"><span>Koutetsujou no Kabaneri</span></div>
                  <div class="image-projet"> </div>
                  <img src="image/kabaneri.jpg" alt="" />
                </div>
              </div>
              <div class="col-sm-4 filtr-item" data-category="1, 4" data-sort="Nisekoi">
                <div class="projet">
                  <a href="#"> </a>
                  <div class="nom-projet"><span>Nisekoi</span></div>
                  <div class="image-projet"> </div>
                  <img src="image/nisekoi.jpg" alt="" />
                </div>
              </div>
              <div class="col-sm-4 filtr-item" data-category="2" data-sort="Yamada-kun to 7-nin no Majo (OVA)">
                <div class="projet">
                  <a href="#"> </a>
                  <div class="nom-projet"><span>Yamada-kun to 7-nin no Majo (OVA)</span></a></div>
                  <div class="image-projet"> </div>
                  <img src="image/yamada.jpg" alt="" />
                </div>
              </div>
              <div class="col-sm-4 filtr-item" data-category="1" data-sort="Yamada-kun to 7-nin no Majo (TV)">
                <div class="projet">
                  <a href="#"> </a>
                  <div class="nom-projet"><span>Yamada-kun to 7-nin no Majo (TV)</span></a></div>
                  <div class="image-projet"> </div>
                  <img src="image/yamadatv.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal01" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Gokukoku no Brynhildr</h4>
              </div>
              <div class="modal-body">
                <div class="project">
                  <img src="image/bry.jpg">
                  <div class="infotext">
                    <strong>Genres : </strong>Drama, Mystery, Sci-Fi, Seinen<br>
                    <strong>Studio : </strong>ARMS<br>
                    <strong>Episodes : </strong>13<br>
                    <strong>Synopsis : </strong>Alors qu’il était enfant, Murakami était amoureux de Kuroneko. Passionnée par les extraterrestres, Kuroneko disait les avoir déjà rencontré mais personne ne la croyait. Un jour, elle décida de le prouver à Murakami mais un accident mortel emporta Kuroneko pendant que Murakami fut grièvement blessé. Quelques années plus tard, Murakami recherche activement des preuves sur l’existence d’extraterrestres. C’est alors que la nouvelle élève fraîchement transférée dans sa classe ressemble à Kuroneko mais s’appelle Kuroha Neko ! Même si elle dit ne pas le connaitre, Murakami découvre que Kuroha possède une force surhumaine...<br>
                  </div>
                  <table>
                    <tbody>
                      <tr class="table-header1">
                        <th rowspan="2">Episode</th>
                        <th colspan="2">Jheberg</th>
                        <th colspan="2">Dédié</th>
                        <th colspan="2">Nya</th>
                      </tr>
                      <tr class="table-header2">
                        <th class="sub">720p</th>
                        <th class="sub">1080p</th>
                        <th class="sub">720p</th>
                        <th class="sub">1080p</th>
                        <th class="sub">720p</th>
                        <th class="sub">1080p</th>
                      </tr>
                      <tr>
                      <td class="ep">Gokukoku no Brynhildr 01</td>
                        <td class="link">
                          <a class="episode-link" href="http://jheberg.net/captcha/houkago-fansub-mekaku-city-actors-01bd-vostfr-720p/" target="_blank" title="Téléchargement depuis Jheberg">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/tick.png">
                          </a>
                        </td>
                        <td class="link">
                          <a class="episode-link" href="http://jheberg.net/captcha/houkago-fansub-mekaku-city-actors-01bd-vostfr-720p/" target="_blank" title="Téléchargement depuis Jheberg">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/tick.png">
                          </a>
                        </td>
                        <td class="link">
                          <a class="episode-link no-link" target="_blank" title="Téléchargement serveur dédié">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/cross.png">
                          </a>
                        </td>
                        <td class="link">
                          <a class="episode-link" href="http://jheberg.net/captcha/houkago-fansub-mekaku-city-actors-01bd-vostfr-720p/" target="_blank" title="Téléchargement depuis Jheberg">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/tick.png">
                          </a>
                        </td>
                        <td class="link">
                          <a class="episode-link disabled" target="_blank" title="Téléchargement serveur dédié">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/cross.png">
                          </a>
                        </td>
                        <td class="link">
                          <a class="episode-link disabled" target="_blank" title="Téléchargement serveur dédié">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/cross.png">
                          </a>
                        </td>
                      </tr>
                      <tr>
                      <td class="ep">Gokukoku no Brynhildr 02</td>
                        <td class="link">
                          <a id="episode-link" class="true" href="http://jheberg.net/captcha/houkago-fansub-mekaku-city-actors-01bd-vostfr-720p/" target="_blank" title="Téléchargement depuis Jheberg">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/tick.png">
                          </a>
                        </td>
                        <td class="link">
                          <a id="episode-link" class="true" href="http://jheberg.net/captcha/houkago-fansub-mekaku-city-actors-01bd-vostfr-720p/" target="_blank" title="Téléchargement depuis Jheberg">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/tick.png">
                          </a>
                        </td>
                        <td class="link">
                          <a id="episode-link" class="false" target="_blank" title="Téléchargement serveur dédié">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/cross.png">
                          </a>
                        </td>
                        <td class="link">
                          <a id="episode-link" class="true" href="http://jheberg.net/captcha/houkago-fansub-mekaku-city-actors-01bd-vostfr-720p/" target="_blank" title="Téléchargement depuis Jheberg">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/tick.png">
                          </a>
                        </td>
                        <td class="link">
                          <a id="episode-link" class="false" target="_blank" title="Téléchargement serveur dédié">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/cross.png">
                          </a>
                        </td>
                        <td class="link">
                          <a id="episode-link" class="false" target="_blank" title="Téléchargement serveur dédié">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/cross.png">
                          </a>
                        </td>
                      </tr>
                      <tr>
                      <td class="ep">Gokukoku no Brynhildr 03</td>
                        <td class="link">
                          <a id="episode-link" class="true" href="http://jheberg.net/captcha/houkago-fansub-mekaku-city-actors-01bd-vostfr-720p/" target="_blank" title="Téléchargement depuis Jheberg">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/tick.png">
                          </a>
                        </td>
                        <td class="link">
                          <a id="episode-link" class="true" href="http://jheberg.net/captcha/houkago-fansub-mekaku-city-actors-01bd-vostfr-720p/" target="_blank" title="Téléchargement depuis Jheberg">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/tick.png">
                          </a>
                        </td>
                        <td class="link">
                          <a id="episode-link" class="false" target="_blank" title="Téléchargement serveur dédié">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/cross.png">
                          </a>
                        </td>
                        <td class="link">
                          <a id="episode-link" class="true" href="http://jheberg.net/captcha/houkago-fansub-mekaku-city-actors-01bd-vostfr-720p/" target="_blank" title="Téléchargement depuis Jheberg">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/tick.png">
                          </a>
                        </td>
                        <td class="link">
                          <a id="episode-link" class="false" target="_blank" title="Téléchargement serveur dédié">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/cross.png">
                          </a>
                        </td>
                        <td class="link">
                          <a id="episode-link" class="false" target="_blank" title="Téléchargement serveur dédié">
                            <img class="lienep" src="https://dl.dropboxusercontent.com/u/149449937/cross.png">
                          </a>
                        </td>
                      </tr>
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
