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
        <li class="active">
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
        <li>
            <a href="administration-avancement.php">Avancement</a>
        </li>
      </ul>
    </div>

      <!-- Page Content -->
      <div id="page-content-wrapper">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                      <h1>Dashboard</h1>
                  </div>
              </div>
          </div>
      </div>
  </div>

</body>

</html>
<?php
}
?>
