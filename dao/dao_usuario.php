<?php
require_once 'dao/dao_conexao2.php';
require_once'model/Usuario.php';

class UsuarioDao{
function adiciona($conn,$usuario){
$conn->beginTransaction();
		 $query = "INSERT INTO usuario (nome,endereco,dataNascimento,foto) VALUES ('{$usuario->getNome()}', '{$usuario->getEndereco()}','{$usuario->getdataNascimento()}','{$usuario->getFoto()}')";    
		$resultado = $conn->query($query);
	if(!$resultado)	{
		die("<p>Erro do salvar o Usuario</p>");
		
	}
	// como não tem mais uma query então não vai o rollback;
	// commit 
	$conn->commit();
}	
function listaUsuarios(){
	$database = new Database();
	 $conexao = $database->Conectar();
	 $sql = "SELECT * FROM `usuario`
            ";
    $stmp = $conexao->prepare($sql);
    $stmp->execute();
    $dados = $stmp->fetchAll();
    return $dados;
	
	
}
public function removeUsuario($id)
  {
	   $database = new Database();
	  
	  
	 $conexao = $database->Conectar();
	  //Inicio da Transação;
	 $conexao ->beginTransaction();
	 

    $sql = "DELETE FROM usuario WHERE id= :id";
	 
	$stmp = $conexao->prepare($sql); 
    $stmp->bindValue(':id',$id,PDO::PARAM_INT);
    $resultado =  $stmp->execute();

    if(!$resultado){
         
          die ("<p>Erro da remover o Usuário </p>");

	}	
   $conexao->commit();
    
    //return $resultado;	
    
  }
    public function editarUsuario($id,$nome,$endereco,$dataNascimento){
		$database = new Database();
    $conexao = $database->Conectar();
	//Inicio da Transação
	$conexao->beginTransaction();
    $sql = "UPDATE usuario SET
            nome = :nome,
            endereco = :endereco,
			dataNascimento =:dataNascimento,
			
            
            WHERE id = :id;";
    $stmp = $conexao->prepare($sql);
    $stmp->bindValue(':nome',$nome,PDO::PARAM_STR);
    $stmp->bindValue(':endereco',$endereco,PDO::PARAM_STR);
	$stmp->bindValue(':dataNascimento',$dataNascimento,PDO::PARAM_STR);
    $stmp->bindValue(':id',$id,PDO::PARAM_INT);
    $resultado = $stmp->execute();
	if(!$resultado)	{
		die("<p>Erro do salvar o usuario</p>");
		
	}
	
	$conexao->commit();
	echo 'Lançamento efetuado com sucesso!';
	}
	
	
}