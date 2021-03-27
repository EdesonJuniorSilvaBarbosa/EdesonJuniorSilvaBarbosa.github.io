<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="imagens do sistema/Icon/iconSite.png">
</head>

<body>

<?php require_once 'topoHome.php'?>
    
<?php
require_once 'conexao.php';
require_once 'crudPassageiro.php';

$crud = new crudPassageiro(Conexao::getInstance());

?>

<div class="dados_dados">NOME</div>
<div class="dados_dados">SOBRENOME</div>
<div class="dados_dados">DATA</div>
<div class="dados_dados">CPF</div>
<div class="dados_dados">SEXO</div>
<div class="dados_dados">FOTO</div> 
<div class="dados_dados">EDITAR</div> 


<?php

$dados = $crud->selecionar();

foreach($dados as $registro){

?>


<div class="clear"></div>

<!--<hr style="height:1px; border:none; background-color:#ccc; margin-bottom: 0px;" width="90%" /> -->           
<div class="dados"><?php echo $registro->nome_passageiro?></div>
<div class="dados"><?php echo $registro->sobrenome_passageiro?></div>
<div class="dados"><?php echo $registro->datanasc_passageiro?></div>
<div class="dados"><?php echo $registro->cpf_passageiro?></div>
<div class="dados"><?php echo $registro->sexo_passageiro?></div>
<div class="dados"><img src="<?php echo $registro->foto_passageiro;?>"></div>
    

<div class="editar">
<a href="update_pass.php?cod=<?php echo $registro->cod_passageiro ?>">
<i class="fas fa-pen"></i></a>

<a href="delete_pass.php?cod=<?php echo $registro->cod_passageiro?>">
<i class="fas fa-trash"></i></a>
</div>

<?php } ?>

</div>

</body>

</html>
