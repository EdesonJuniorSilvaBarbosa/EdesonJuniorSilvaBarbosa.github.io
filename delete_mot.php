<?php

  require_once 'conexao.php';
  require_once 'crudMotorista.php';

  $crud = new crudMotorista(Conexao::getInstance());

  $codigo = $_GET['cod'];

  $crud->excluir($codigo);
  $crud->excluirLogin($codigo);

  header('location:list_mot.php');

 ?>