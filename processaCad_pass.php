<?php

  require_once 'conexao.php';
  require_once 'crudPassageiro.php';
  require_once 'Upload.class.php';

  $crud = new crudPassageiro(Conexao::getInstance());

  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $datanasc = $_POST['datanasc'];
  $cpf = $_POST['cpf'];             
  $sexo = $_POST['rd_sexo'];
  $foto = $_FILES['foto'];
  $login = $_POST['txt_login'];
  $senha = $_POST['txt_senha'];
  
  $upload = new Upload($foto, 80, 80, 'imagens/Passageiro/');
  $imagens = $upload->salvar();

  $cod_passageiro = $crud->cadastrarPassageiro($nome, $sobrenome, $datanasc, $cpf, $sexo, $imagens);
 
  $crud->cadastrarLogin($cod_passageiro, $login, $senha);
  
  header('location:cadastro.php');
  
?>