<?php

  require_once 'conexao.php';
  require_once 'crudPassageiro.php';

  $crud = new crudPassageiro(Conexao::getInstance());

  $codigo = $_GET['cod'];

  $crud->excluir($codigo);
  $crud->excluirLogin($codigo);

  header('location:list_pass.php');

 ?>