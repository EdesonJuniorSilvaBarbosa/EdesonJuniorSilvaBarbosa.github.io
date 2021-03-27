<?php

  class crudMotorista{

    private $pdo = null;

    public function __construct($conexao){
      $this->pdo = $conexao;
    }

/*-------------------------------------------------------------------------------------------------*/	
public function cadastrarMotorista($nome, $sobrenome, $datanasc, $cpf, $modelocar, $status, $sexo, $foto){

      try{

  $sql = 'insert into tbl_motorista(nome_motorista, sobrenome_motorista, datanasc_motorista, cpf_motorista, modelo_carro, status_motorista, sexo_motorista, foto_motorista) 
  values (?, ?, ?, ?, ?, ?, ?, ?)';

	$stm = $this->pdo->prepare($sql);
	$stm = $this->pdo->prepare($sql);
	$stm->bindValue(1, $nome);
	$stm->bindValue(2, $sobrenome);
    $stm->bindValue(3, $datanasc);
    $stm->bindValue(4, $cpf);
    $stm->bindValue(5, $modelocar);
    $stm->bindValue(6, $status);
    $stm->bindValue(7, $sexo);
    $stm->bindValue(8, $foto);
	$stm->execute();

    return $this->pdo->lastInsertId();
	   
	echo 'dados gravados com sucesso';


       echo "<script>alert('Registro inserido com sucesso')</script>";
	   
	   echo "<script>location.href='formLogin.php';</script>";
	   
		}catch(PDOException $erro){
       echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
      }

    }

public function cadastrarLogin($codigo, $login, $senha){
	
      try{

  $sql = 'insert into tbl_login(cod_motorista, login, senha)
  values (?, ?, ?)';

   $stm = $this->pdo->prepare($sql);

    $stm = $this->pdo->prepare($sql);
    $stm->bindValue(1, $codigo);
	$stm->bindValue(2, $login);
    $stm->bindValue(3, $senha);
    $stm->execute();
	
	return $this->pdo->lastInsertId();

     echo 'dados gravados com sucesso';

       echo "<script>alert('Registro inserido com sucesso')</script>";

     echo "<script>location.href='formLogin.php';</script>";

    }catch(PDOException $erro){
       echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
      }

 }

public function selecionar(){

     try{

      $sql = "SELECT * FROM tbl_motorista";
	
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
			$sql = "SELECT * FROM tbl_motorista WHERE cod_motorista = ?";
			$stm = $this->pdo->prepare($sql);
			$stm->bindValue(1, $codigo);

			$stm->execute();
			$dados = $stm->fetchAll(PDO::FETCH_OBJ);
			return $dados;

		}catch(PDOException $erro){

			echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";

		}
	}

/*-------------------------------------------------------------------------------------------------------------*/
 public function alterar($nome,
                         $sobrenome,
                         $datanasc,
                         $cpf,
                         $modelocar,
						 $status,    
                         $sexo,
                        /* $email,*/
                         $foto,
                         $codigo){
   
   
    $sql = "UPDATE tbl_motorista SET 
						 nome_motorista = ?,  
                         sobrenome_motorista = ?,  
                         datanasc_motorista = ?,  
                         cpf_motorista = ?,  
                         modelo_carro = ?,
						 status_motorista = ?,     
                         sexo_motorista = ?,	
						 foto_motorista = ?			
        				  
           WHERE cod_motorista = ?";

    try{

          
          $stm = $this->pdo->prepare($sql);
          $stm->bindValue(1, $nome);
          $stm->bindValue(2, $sobrenome);
          $stm->bindValue(3, $datanasc);
          $stm->bindValue(4, $cpf);
          $stm->bindValue(5, $modelocar);
		  $stm->bindValue(6, $status);
          $stm->bindValue(7, $sexo);
          /*$stm->bindValue(8, $email);*/
          $stm->bindValue(8, $foto);
          $stm->bindValue(9, $codigo);
          $stm->execute();

      echo "<script>alert('Registro alterado
            com sucesso')</script>";

    }catch(PDOException $erro){

      echo "<script>alert('Erro na linha:
      {$erro->getLine()}')</script>";

    }


  }

  public function excluir($codigo){

    $sql = "DELETE FROM tbl_motorista WHERE
            cod_motorista = ?";

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
  
 public function excluirLogin($codigo){

    $sql = "DELETE FROM tbl_login WHERE
            cod_motorista = ?";

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