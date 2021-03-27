<!DOCTYPE html>
<html>

<head>          
<meta chasrset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Corridas Compartilhadas - Compartilhe sua viagem!!!</title>
<meta name="description" content="Corridas Compartilhadas">
<meta name="keywords" content="Agencia de corridas compartilhadas">
<meta name="robots" content="index, follow">
<meta name="author" content="Junior">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" typ="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="styleheet" typ="text/css" href="https://fonts-googleapis.com/css?family=lato:400,300,700">
<link rel="icon" href="imagens do sistema/Icon/iconSite.png">
<script language="javascript" src="jquery/jquery-3.1.1.js"></script>
<script language="javascript" src="js/menu.js"></script>   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   

<style type="text/css">

body{
background:url(imagens%20do%20sistema/Background/microscopio.gif); 
margin:0;}

</style>



</head>

<body> 

<!--======================PASSAGEIRO======================-->


<?php

require_once 'conexao.php';
require_once 'crudPassageiro.php';

$codigo = $_GET['cod'];


$crud = new crudPassageiro(Conexao::getInstance());
$passageiro = $crud->selecionarCriterio($codigo);

foreach ($passageiro as $dado) {

?>


<div class="container">
<h2>Mantenha seus dados sempre atualizados</h2>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Atualize seus dados aqui</button>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">

<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">

<div class="modal-header">
<div class="formulario">
<legend>Atualize sempre seus dados <i class="fas fa-sync-alt"></i></legend>

<form name="formPassageiro" action="processa_update_pass.php" method="POST">

<input type="hidden" name="codigo" value="<?php echo $dado->cod_passageiro; ?>">

<label for="NOME">nome:</label>
<input type="text" id="nomeId" name="nome" 
size="12" value="<?php echo $dado->nome_passageiro; ?>" required>


<label for="SOBRENOME">Sobrenome:</label>
<input type="text" id="sobrenomeId"  name="sobrenome" 
size="18" value="<?php echo $dado->sobrenome_passageiro; ?>" required>
<span class="style1"></span>



<br><br>
<label for="DATANASCIMENTO">Data de nascimento:</label>
<input type="date" id="datanascId" name="datanasc" 
value="<?php echo $dado->datanasc_passageiro; ?>" 
required="required" maxlength="10" name="date" 
pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$"
min="1950-01-01" max="2017-12-31" />
<span class="style1"></span>


<br><br>
<label>Cpf:</label>
<input type="text" name="cpf" id="cpfId" 
size="14" value="<?php echo $dado->cpf_passageiro; ?>"required>
<script type="text/javascript">
<!--
var CPF = new Spry.Widget.ValidationTextField("CPF", "custom", 
{pattern:"000.000.000-00", validateOn:["blur"], useCharacterMasking:true});
//-->
</script> <span class="style1"></span>

<br><br>
<label for="SEXO">Sexo:</label>
<input type="radio" id="sexoId" name="rd_sexo" 
<?php if($dado->sexo_passageiro == "Feminino") {echo"checked";}?> 
checked value="Feminino">Feminino

<input type="radio" id="sexoId" name="rd_sexo" 
<?php if($dado->sexo_passageiro == "Masculino") {echo"checked";}?> 
value="Masculino">Masculino
<span class="style1"></span>

<br><br>
<label for="imagem">Imagem:</label>
<input type="file" name="foto" value="<?php echo $dado->foto_passageiro; ?>" required/>
<br><br>
<img src="<?php echo $dado->foto_passageiro ;?>"> 

<br><br>
<div class="buttons">

<a href="processa_update_pass.php">

<button class="btn-cadastrar">Alterar<i class="fas fa-check"></i>
</button>

</a>

    <a href="list_pass.php"><input type="button" value="cancelar" onClick="Nova()"><i class="fas fa-ban"></i></a>

</div>

<br>

</form>

</div>
</div>

</div>

</div>

</div>

</div>

<?php }?>
    
<img src="imagens do sistema/background/carroUpUpUp.gif" width="90%">


</body>

</html>
