<?php
require_once("fonctions/connexion_db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Houkago - Administration</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style-admin.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>
<body>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="fonctions/login.php">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Utilisateur</label>
              <input type="text" class="form-control" name="usrname" id="usrname">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mot de passe</label>
              <input type="password" class="form-control" name="psw" id="psw">
            </div>
            <button type="submit" class="btn btn-success btn-log btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">

        </div>
      </div>

    </div>
  </div>
</div>

<script>
window.onload = function() {
  $("#myModal").modal();
};

</script>

</body>
</html>
