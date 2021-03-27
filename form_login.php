<!doctype html>
<html>
	<head>
        <link rel="icon" href="imagens do sistema/Icon/iconSite.png">

        <link rel="stylesheet" type="text/css" href="css/estiloLogin.css">
	</head>
    
    <body>
    
		<?php /*?>
        <?php 
        
            require_once 'topo.php';
        
        ?>
        <?php */?>
        
    	<header class="logar">

            <legend>Entre com seu login !!!</legend>
            
        
        	<form name="for_log" action="verifica_login.php" method="POST">
            
            	<?php /*?><label for="Email">E-mail:</label><?php */?>
                <input type="email" id="emailId" name="txt_login" required placeholder="Digite seu E-mail">
                
                <?php /*?><label for="Senha">Senha:</label><br><?php */?>
                <br><br>
                <input type="password" id="senhaId" name="txt_senha" placeholder="Digite sua Senha" required>
                
                <br>
                <button type="submit" value="Logar">Conectar</button>
                
                
               <!-- <img src="imagens do sistema/Icon/icon login.png" width="40">-->
                
                <a href="cadastro.php">Não está cadastrado? Clique aqui.</a>
            

            </form>
        
        </header>
        
	
		<?php
        
            
            require_once 'rodape.php';
        
        
        ?>
    
    </body>
    
</html>