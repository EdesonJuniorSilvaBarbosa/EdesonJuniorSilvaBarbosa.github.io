<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="imagens do sistema/Icon/iconSite.png">
</head>

<body>

 
<?php require_once 'topoHome.php'?>

<?php

require_once 'conexao.php';
require_once 'crudMotorista.php';
require_once 'Upload.class.php';

$crud = new crudMotorista(Conexao::getInstance());

?>
    
<div class="dados_dados">NOME</div>
<div class="dados_dados">SOBRENOME</div>            
<div class="dados_dados">DATA</div>
<div class="dados_dados">CPF</div>
<div class="dados_dados">CARRO</div>
<div class="dados_dados">STATUS</div>
<div class="dados_dados">SEXO</div>    
<div class="dados_dados">FOTO</div>
<div class="dados_dados">EDITAR</div>

<?php

$dados = $crud->selecionar();

foreach($dados as $registro){

?>

<br>    
<div class="clear"></div>
<div class="dados"><?php echo $registro->nome_motorista?></div>
<div class="dados"><?php echo $registro->sobrenome_motorista?></div>
<div class="dados"><?php echo $registro->datanasc_motorista?></div>
<div class="dados"><?php echo $registro->cpf_motorista?></div>
<div class="dados"><?php echo $registro->modelo_carro?></div>
<div class="dados"><?php echo $registro->status_motorista?></div>
<div class="dados"><?php echo $registro->sexo_motorista?></div>
<div class="dados"><img src="<?php echo $registro->foto_motorista ;?>"></div>
    
<div class="editar">
<a href="update_mot.php?cod=<?php echo $registro->cod_motorista ?>">
<i class="fas fa-pen"></i></a>

<a href="delete_mot.php?cod=<?php echo $registro->cod_motorista?>">
<i class="fas fa-trash-alt"></i></a>
</div>


<?php } ?>
</body>
</html>

