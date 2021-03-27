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
   $codigo = $_POST['codigo'];
  
 
$upload = new Upload($foto, 80, 80, 'imagens/Foto Motorista - Atualizado/');
$imagens= $upload->salvar();

$crud->alterar($nome, $sobrenome, $datanasc, $cpf, $modelocar, $status, $sexo, $imagens, $codigo);
 
  header('location:list_mot.php');

 ?>
