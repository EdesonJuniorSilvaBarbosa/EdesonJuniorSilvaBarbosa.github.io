<?php

  session_start();

  require_once 'conexao.php';
  require_once 'login.php';

  $login = new Login(Conexao::getInstance());
  $login->sairLogin();

?>