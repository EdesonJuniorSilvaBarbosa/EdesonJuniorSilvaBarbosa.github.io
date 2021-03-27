<?php

  require_once 'conexao.php';
  require_once 'crudPassageiro.php';

  $crud = new crudPassageiro(Conexao::getInstance());

  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $datanasc = $_POST['datanasc'];
  $cpf = $_POST['cpf'];
  $sexo = $_POST['rd_sexo'];
  $codigo = $_POST['codigo'];

  $crud->alterar($nome, $sobrenome, $datanasc, $cpf, $sexo, $codigo);
 
  header('location:list_pass.php');

 ?>
