<?php
session_start();
if (isset($_POST['usrname']) && isset($_POST['psw'])) {
  //echo $_POST['usrname']." ".$_POST['psw'];
  if ($_POST['usrname'] == "Asulys" && $_POST['psw'] == "azerty") {
    $_SESSION['superuser'] = 1;
    header('Location: ../administration-dashboard.php');
  } else {
    header('Location: ../administration-login.php');
  }
} else {
  header('Location: ../administration-login.php');
}

?>
