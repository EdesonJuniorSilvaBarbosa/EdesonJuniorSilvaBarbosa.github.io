<!doctype html>

<html>

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="icon" href="imagens do sistema/Icon/iconSite.png">
<!--<link rel="stylesheet" typ="text/css" 
href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="css/fontawesome-web/fontawesome-free-5.1.0-web/css/all.css">
<link rel="stylesheet" href="css/SpryValidationTextField.css">
<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script language="javascript" src="jquery/jquery-3.1.1.js"></script>
<script language="javascript" src="js/menu.js"></script>
<script language="javascript" src="js/owl.carousel.js"></script>
<script language="javascript" src="jquery/SpryValidationTextField.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script language="javascript" src="js/carrosel.js"></script> 

<title> Corrridas compartilhadas </title>

<style type="text/css">

body{background:url(imagens%20do%20sistema/Background/microscopio.gif); margin:0;}

</style>

</head>

<body>

<!--=====MOTORISTA===-->

<?php

require_once 'conexao.php';
require_once 'crudMotorista.php';
require_once 'Upload.class.php';

$codigo = $_GET['cod'];

$crud = new crudMotorista(Conexao::getInstance());
$motorista = $crud->selecionarCriterio($codigo);

foreach ($motorista as $dado) {

?>



<div class="container">

<h2>Mantenha seus dados atualizados:</h2>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Atualize seus dados aqui</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">

<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">

<div class="modal-header">




<div class="formulario">

<legend>Alterar Dados <i class="fas fa-sync-alt"></i></legend>


<form name="for_mot" action="processa_update_mot.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="codigo" value="<?php echo $dado->cod_motorista; ?>">

<label for="NOME">Nome:</label>
<input type="text" id="nomeId" name="nome" 
size="12" value="<?php echo $dado->nome_motorista; ?>" required>


<label for="SOBRENOME">Sobrenome:</label>
<input type="text" id="sobrenomeId"  name="sobrenome" 
size="18" value="<?php echo $dado->sobrenome_motorista; ?>" required>
<span class="style1"></span>

<br>
<label for="DATANASCIMENTO">Data Nascimento:</label>
<input type="date" id="datanascId" name="date_nascimento" 
        value="<?php echo $dado->datanasc_motorista; ?>" 
required="required" maxlength="10" name="date" 
pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$"
min="1950-01-01" max="2017-12-31" />
<span class="style1"></span>

<br>
<label>Cpf:</label>
<input type="text" name="cpf" id="cpfId" 
size="14" value="<?php echo $dado->cpf_motorista; ?>"required>
<script type="text/javascript">
<!--
var CPF = new Spry.Widget.ValidationTextField("CPF", "custom", 
{pattern:"000.000.000-00", validateOn:["blur"], useCharacterMasking:true});
//-->
</script> <span class="style1"></span>

<br><br>
<label>Carro:</label>
<select name="carro" id="carroId">

<option value="VOLKSWAGEN GOL" 
<?php if($dado->modelo_carro == "VOLKSWAGEN GOL"){echo"selected";} ?>>VOLKSWAGEN GOL</option>

<option value="FIAT SIENA" 
<?php if($dado->modelo_carro == "FIAT SIENA"){echo"selected";} ?>>FIAT SIENA</option>

<option value="VOLKSWAGEN FOX" 
<?php if($dado->modelo_carro == "VOLKSWAGEN FOX"){echo"selected";} ?>>VOLKSWAGEN FOX</option>

<option value="FIAT UNO" 
<?php if($dado->modelo_carro == "FIAT UNO"){echo"selected";} ?>>FIAT UNO</option>

<option value="FORD FIESTA" 
<?php if($dado->modelo_carro == "FORD FIESTA"){echo"selected";} ?>>FORD FIESTA</option>

<option value="RENAULT SANDERO" 
<?php if($dado->modelo_carro == "RENAULT SANDERO"){echo"selected";} ?>>RENAULT SANDERO</option>

<option value="HYUNDAI HB20" 
<?php if($dado->modelo_carro == "HYUNDAI HB20"){echo"selected";} ?>>HYUNDAI HB20</option>

<option value="CITROËN C3" 
<?php if($dado->modelo_carro == "CITROËN C3"){echo"selected";} ?>>CITROËN C3</option>

<option value="CHEVROLET CELTA" 
<?php if($dado->modelo_carro == "CHEVROLET CELTA"){echo"selected";} ?>>CHEVROLET CELTA</option>

<option value="CHEVROLET ONIX" 
<?php if($dado->modelo_carro == "CHEVROLET ONIX"){echo"selected";} ?>>CHEVROLET ONIX</option>

<option value="FIAT PALIO" 
<?php if($dado->modelo_carro == "FIAT PALIO"){echo"selected";} ?>>FIAT PALIO</option>

<option value="FORD KA" 
<?php if($dado->modelo_carro == "FORD KA"){echo"selected";} ?>>FORD KA</option>

<option value="TOYOTA COROLLA" 
<?php if($dado->modelo_carro == "TOYOTA COROLLA"){echo"selected";} ?>>TOYOTA COROLLA</option>

<option value="AUDI A3" 
<?php if($dado->modelo_carro == "AUDI A3"){echo"selected";} ?>>AUDI A3</option>

<option value="VOLKSWAGEN UPVOLKSWAGEN UP" 
<?php if($dado->modelo_carro == "VOLKSWAGEN UPVOLKSWAGEN UP"){echo"selected";} ?>>
VOLKSWAGEN UPVOLKSWAGEN UP</option>

<option value="HONDA CIVIC" 
<?php if($dado->modelo_carro == "HONDA CIVIC"){echo"selected";} ?>>HONDA CIVIC</option>

<option value="JEEP RENEGADE" 
<?php if($dado->modelo_carro == "JEEP RENEGADE"){echo"selected";} ?>>JEEP RENEGADE</option>

<option value="TOYOTA ETIOS" 
<?php if($dado->modelo_carro == "TOYOTA ETIOS"){echo"selected";} ?>>TOYOTA ETIOS</option>

<option value="CHEVROLET PRISMA" 
<?php if($dado->modelo_carro == "CHEVROLET PRISMA"){echo"selected";} ?>>CHEVROLET PRISMA
</option>

<option value="HONDA HR-V" 
<?php if($dado->modelo_carro == "HONDA HR-V"){echo"selected";} ?>>HONDA HR-V</option>

<option value="CHEVROLET CLASSIC" 
<?php if($dado->modelo_carro == "CHEVROLET CLASSIC"){echo"selected";} ?>>CHEVROLET CLASSIC
</option>
<option value="RENAULT LOGAN" 
<?php if($dado->modelo_carro == "RENAULT LOGAN"){echo"selected";} ?>>RENAULT LOGAN</option>

<option value="RENAULT CLIO" 
<?php if($dado->modelo_carro == "RENAULT CLIO"){echo"selected";} ?>>RENAULT CLIO</option>

<option value="RENAULT DUSTER" 
<?php if($dado->modelo_carro == "RENAULT DUSTER"){echo"selected";} ?>>RENAULT DUSTER</option>

<option value="HYUNDAI I30" 
<?php if($dado->modelo_carro == "HYUNDAI I30"){echo"selected";} ?>>HYUNDAI I30</option>

</select>

<br><br>
<label for="STATUS">Status:</label>
<input type="radio" id="statusId" name="rd_status" 
<?php if($dado->status_motorista == "ATIVO") {echo"checked";}?> checked value="ATIVO">Ativo

<input type="radio" id="statusId" name="rd_status" 
<?php if($dado->status_motorista == "INATIVO") {echo"checked";}?> value="INATIVO">Inativar
<span class="style1"></span>


<br><br>
<label for="SEXO">Sexo:</label>
<input type="radio" id="sexoId" name="rd_sexo" 
<?php if($dado->sexo_motorista == "Feminino") {echo"checked";}?> checked value="Feminino">Feminino

<input type="radio" id="sexoId" name="rd_sexo" 
<?php if($dado->sexo_motorista == "Masculino") {echo"checked";}?> value="Masculino">Masculino
<span class="style1"></span>

<br><br>
<label for="imagem">Imagem:</label>
<input type="file" name="foto" value="<?php echo $dado->foto_motorista; ?>" required/>
<br><br>
<img src="<?php echo $dado->foto_motorista ;?>">

<div class="buttons">

<a href="processa_update_mot.php">

<button class="btn-cadastrar">Alterar<i class="fas fa-sync-alt"></i></button>

</a>

<a href="list_mot.php">

<input type="button" value="cancelar" onClick="Nova()"><i class="fas fa-ban"></i>

</a>


</div>

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
