<?php 

session_start();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {

  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: ./login/index.php');
}
$logado = $_SESSION['email'];


?>
