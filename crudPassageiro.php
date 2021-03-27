<?php

  class crudPassageiro{

    private $pdo = null;

    public function __construct($conexao){
      $this->pdo = $conexao;
    }

  public function cadastrarPassageiro($nome, $sobrenome, $datanasc, $cpf, $sexo, $foto){

      try{

  $sql = 'insert into tbl_passageiro(nome_passageiro, sobrenome_passageiro, datanasc_passageiro, cpf_passageiro, sexo_passageiro, foto_passageiro) 
  values (?, ?, ?, ?, ?, ?)';
  
 

	 $stm = $this->pdo->prepare($sql);
	
	$stm = $this->pdo->prepare($sql);
	$stm->bindValue(1, $nome);
	$stm->bindValue(2, $sobrenome);
    $stm->bindValue(3, $datanasc);
    $stm->bindValue(4, $cpf);
    $stm->bindValue(5, $sexo);
	$stm->bindValue(6, $foto);
    $stm->execute();

       return $this->pdo->lastInsertId();
	   
	   echo 'dados gravados com sucesso';


       echo "<script>alert('Registro inserido com sucesso')</script>";
	   
	   echo "<script>location.href='formLogin.php';</script>";
	   
		}catch(PDOException $erro){
       echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
      }

    }

/*--------------------------------------------------------------------------------------------------------------*/	
public function cadastrarLogin($codigo, $login, $senha){

  try{

  $sql = 'insert into tbl_login(cod_passageiro, login, senha)
  values (?, ?, ?)';

   		$stm = $this->pdo->prepare($sql);
		$stm = $this->pdo->prepare($sql);
		$stm->bindValue(1, $codigo);
		$stm->bindValue(2, $login);
		$stm->bindValue(3, $senha);
	
		$stm->execute();

     	echo 'dados gravados com sucesso';
		echo "<script>alert('Registro inserido com sucesso')</script>";
 		echo "<script>location.href='formLogin.php';</script>";

    }catch(PDOException $erro){
       echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
      }

    }
/*
public function selecionarUsuario($id){

   try{

    $sql = "SELECT nome_passageiro, cod_passageiro FROM tbl_login where login = ?";

    $stm = $this->pdo->prepare($sql);
    $stm->bindValue(1, $id);

    $stm->execute();

     $dados = $stm->fetchAll(PDO::FETCH_OBJ);
  //  $dados = $stm->fetchALL(pdo::fecht_obj);

    return $dados;

  }catch(PDOException $erro){

      echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";

  }
}
*/
      
public function selecionar(){

     try{

      $sql = "SELECT * FROM tbl_passageiro";

      $stm = $this->pdo->prepare($sql);

      $stm->execute();

      $dados = $stm->fetchAll(PDO::FETCH_OBJ);

      return $dados;

     }catch(PDOException $erro){

      echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";

     }

    }
public function selecionarCriterio($codigo){
		try{
			$sql = "SELECT * FROM tbl_passageiro WHERE cod_passageiro = ?";
			$stm = $this->pdo->prepare($sql);
			$stm->bindValue(1, $codigo);

			$stm->execute();
			$dados = $stm->fetchAll(PDO::FETCH_OBJ);
			return $dados;

		}catch(PDOException $erro){

			echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";

		}
	}

 public function alterar($nome,
                         $sobrenome,
                         $datanasc,
                         $cpf,  
                         $sexo,
						 $foto,
                         $codigo){
   
   
    $sql = "UPDATE tbl_passageiro SET 
						 nome_passageiro = ?,  
                         sobrenome_passageiro = ?,  
                         datanasc_passageiro = ?,  
                         cpf_passageiro = ?,      
                         sexo_passageiro = ?,
						 foto_passageiro = ?
					 				  
           WHERE cod_passageiro = ?";

    try{

          
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $nome);
          $stm->bindValue(2, $sobrenome);
          $stm->bindValue(3, $datanasc);
          $stm->bindValue(4, $cpf);
          $stm->bindValue(5, $sexo);
		  $stm->bindValue(6, $foto);
          $stm->bindValue(7, $codigo);
          $stm->execute();

      echo "<script>alert('Registro alterado
            com sucesso')</script>";

    }catch(PDOException $erro){

      echo "<script>alert('Erro na linha:
      {$erro->getLine()}')</script>";

    }


  }

/*--------------------------------------------------------------------------------------------------------------*/
public function excluir($codigo){

    $sql = "DELETE FROM tbl_passageiro WHERE
            cod_passageiro = ?";
			
    try{

      $stm = $this->pdo->prepare($sql);
			$stm->bindValue(1, $codigo);

      $stm->execute();
	  
      echo "<script>alert('Registro excluído
            com sucesso')</script>";

    }catch(PDOException $erro){

      echo "<script>alert('Erro na linha:
      {$erro->getLine()}')</script>";

    	}

  	}

  
 /*--------------------------------------------------------------------------------------------------------------*/ 
 public function excluirLogin($codigo){

    $sql = "DELETE FROM tbl_login WHERE
            cod_passageiro = ?";
			
    try{

      $stm = $this->pdo->prepare($sql);
			$stm->bindValue(1, $codigo);

      $stm->execute();
	  
      echo "<script>alert('Registro excluído
            com sucesso')</script>";

    }catch(PDOException $erro){

      echo "<script>alert('Erro na linha:
      {$erro->getLine()}')</script>";

    	}

  	}

  }
  
?>