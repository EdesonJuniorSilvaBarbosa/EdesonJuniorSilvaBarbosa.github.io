<?php

Class Login{

private $pdo = null;

      public function __construct($conexao){
        $this->pdo = $conexao;
      }

      	public function realizarLogin($login, $senha){

        try {

	$sql = "SELECT  tbl_motorista.nome_motorista
	 from tbl_motorista inner join tbl_login
	 on tbl_motorista.cod_motorista = tbl_login.cod_motorista
	 where tbl_login.login = ? and  tbl_login.senha=?";
	 
	 $sql1 = "SELECT tbl_passageiro.nome_passageiro from tbl_passageiro inner join tbl_login 
	 on tbl_passageiro.cod_passageiro = tbl_login.cod_passageiro where tbl_login.login = ? and tbl_login.senha=?";

          $stm = $this->pdo->prepare($sql);
		  

          $stm->bindValue(1, $login);
		  $stm->bindValue(2, $senha);
		  

          $stm->execute();

          $rows =  $stm->rowCount();

          $dados = $stm->fetchAll(PDO::FETCH_OBJ);

          if($rows === 1){

            foreach ($dados as $registro) {
			
				
              $_SESSION['txt_login'] = $registro->nome_motorista;
			  
			  
            }
			
			$id = $_POST['id'];

            $_SESSION['id'] = session_id();
			

            header('location:home.php');

          }else{

            session_unset();
            session_destroy();

            header('location:index.php');

          }

        } catch (PDOException $e) {

          session_unset();
          session_destroy();

        }

		  }
	
		  function validaLogin(){
	
			if(($_SESSION['id'] != session_id()) || (empty($_SESSION['id']))){
	
			  header('location:index.php');
	
			}
	
		  }

      function sairLogin(){

        session_unset();
        session_destroy();
        header('location:index.php');

      }

  }


?>
