<!doctype html>
<html>
    
    <head>

        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="icon" href="imagens do sistema/Icon/iconSite.png">
        <link rel="stylesheet" href="css/fontawesome-web/fontawesome-free-5.1.0-web/css/all.css">
        <link rel="stylesheet" href="css/SpryValidationTextField.css">
        
        <script language="javascript" src="jquery/jquery-3.1.1.js"></script>
        <script language="javascript" src="js/menu.js"></script>
        <script language="javascript" src="js/owl.carousel.js"></script>
        <script language="javascript" src="jquery/SpryValidationTextField.js"></script>
        <script language="javascript" src="js/carrosel.js"></script> 
        <title> Compartilhe Viagens </title>
        
    </head>
    
    <body>
        
        <?php 
        
        session_start();
        
        require_once 'conexao.php';
        require_once 'login.php';
        require_once 'crudMotorista.php';
        require_once 'crudPassageiro.php';
        require_once 'Upload.class.php';
        
        $login = new Login(Conexao::getInstance());
        $login->validaLogin();
        $crud = new crudMotorista(Conexao::getInstance());
        $crud = new crudPassageiro(Conexao::getInstance());
        
        if(isset($_SESSION['logado']));
        
        ?>
        
        <?php require_once 'topoHome.php'?>
        
        <div class="fale_conosco">
            
            <legend>Fale conosco:</legend>

            <hr style="height:1px; border:none; background-color:#555; margin-left: 1px;" width="25%" />

            <form action="processaCad_message.php">

            <label for="ASSUNTO">Assunto:</label>
            <input type="text" name="assunto" placeholder="Digite seu assunto" required>

            <br><br>
            <label for="EMAIL">E-mail:</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" required>

            <br><br>
            <textarea name="mensagem" rows="10" cols="40" wrap="virtual"
            placeholder="Deixe sua mensagem"></textarea>

            <br>
            <button type="submit" value="enviar">Enviar</button>

            </form>
            
        </div>
    <!--================Regras e Avisos====================-->
        <div class="avisos">
            
            <h1>Porque nós o usamos?</h1>
            
            <strong>
                
                É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).
                
            </strong>
            
        </div>
        
    <!--==============Rodape====================-->
        <div class="rodape">
            
            <p class="copyright">Corridas @ Compartilhadas 2017. Todos os direitos reservados.</p>
            <p class="copyright">Central de Atendimento: 0800 777 7657 Regiões Metropolitanas</p>
            <p class="copyright">Sac: 4567 - 5432 Para demais localidades </p>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fas fa-phone"></i></a>
            <a href="#"><i class="fas fa-comment"></i></a>
            
        </div>
    </body>
</html>