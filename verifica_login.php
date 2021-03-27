<?php

  session_start();

  require_once 'conexao.php';
  require_once 'login.php';
/*  require_once 'crudMotorista';
  require_once 'crudPassageiro';
*/
  $login = new Login(Conexao::getInstance());

 $cod_motorista = $login->realizarLogin($_POST['txt_login'], $_POST['txt_senha']);
 $cod_passageiro = $login->realizarLogin($_POST['txt_login'], $_POST['txt_senha']);

?>
