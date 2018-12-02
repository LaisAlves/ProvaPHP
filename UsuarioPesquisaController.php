<?php
include_once 'model/Usuario.php';
include_once 'dao/dao_conexao2.php';
 include_once 'dao/dao_usuario.php';
 
 if(isset($_GET['acao'])){
	$acao = $_GET['acao'];
}

if(isset($_POST['acao'])){
	$acao = $_POST['acao'];
}

if($acao =='pesquisaUsuario'){
	//$cenarios = null;
	
	 
	 $database = new Database();
	 $conn = $database->Conectar();
	 $UsuarioDao = new UsuarioDao();
	

	
	$usuarios = $UsuarioDao ->listaUsuarios();
	 
	// $cenarios = $cenarioDao ->listaCenarios();
	 header('Location:view/view_pesquisa_usuario.php');
	
 }
 