<?php

  session_start();

  require_once 'conexao.php';
  require_once 'login.php';


  $login = $_POST['txt_login'];
  $senha = $_POST['txt_senha'];

  $login = new Login(Conexao::getInstance());
  $login->realizarLogin($login, $senha);

?>
