<?php

  require_once 'conexao.php';
  require_once 'crudMotorista.php';
  require_once 'Upload.class.php';

 $crud = new crudMotorista(Conexao::getInstance());

  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $datanasc = $_POST['date_nascimento'];
  $cpf = $_POST['cpf'];
  $modelocar = $_POST['carro'];
  $status = $_POST['rd_status'];               
  $sexo = $_POST['rd_sexo'];
  $foto = $_FILES['foto'];
  $login = $_POST['txt_login'];
  $senha = $_POST['txt_senha'];

/*  echo '<pre>';
  print_r($_POST);
  echo '</pre>';exit;*/

  $upload = new Upload($foto, 80, 80, 'imagens/Motorista/');
  $imagens = $upload->salvar();

 $cod_motorista = $crud->cadastrarMotorista($nome, $sobrenome, $datanasc, $cpf, $modelocar, $status, $sexo, $imagens);

 $crud->cadastrarLogin($cod_motorista, $login, $senha);

 header('location:form_login.php');
  
?>