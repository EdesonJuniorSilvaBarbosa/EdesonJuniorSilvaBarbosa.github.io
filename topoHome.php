<!Doctype html>
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
<link rel="stylesheet" href="css/fontawesome-web/fontawesome-free-5.1.0-web/css/all.css">
<link rel="styleheet" typ="text/css" href="https://fonts-googleapis.com/css?family=lato:400,300,700">
<link rel="icon" href="imagens do sistema/Icon/iconSite.png">
<script language="javascript" src="jquery/jquery-3.1.1.js"></script>
<script language="javascript" src="js/menu.js"></script>
</head>
    
<body>
    
<header class="topo_home">

<div class="logo">

<div class="variant"><a href="home.php">

<img src="imagens do sistema/Icon/Icon-site2.ico" width="100"></a>

</div>

</div>

<span>                   
<?php if( !empty($_SESSION['txt_login'])){
echo " Olá !!!" . " " . $_SESSION['txt_login'] . "</br>";
} 
?>        
</span>

<div class="menu">

<a href="home.php"> Home <i class="fa fa-home"></i></a>
<a href="list_mot.php"> Motorista <i class="fas fa-user-slash"></i></a>
<a href="list_pass.php"> Passageiro <i class="fas fa-user"></i></a>
<a href="rota.php"> Rota <i class="fa fa-map"></i></a>
<a href="consulta.php"> Consultar </a>
<a href="logoff.php" id="bot"><i class="fa fa-power-off">Sair</i></a>

</div>  

</header>
</body>
</html>