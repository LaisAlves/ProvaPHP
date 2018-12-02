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

if(isset($_GET['id'])){
	$id = $_GET['id'];
}

if(isset($_POST['id'])){
	$id = $_POST['id'];
}

if($acao=='manterUsuario'){
	$nome = addslashes ($_POST['nome']);
	$endereco = addslashes ($_POST['endereco']);
	
	$dataNascimento = addslashes ($_POST['dataNascimento']);
	
	$imagem = $_FILES["foto"];
	if($imagem != NULL) { 
    $nomeFinal = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal); 
 
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
		
	}
	}
	$usuario = new Usuario($nome,$endereco,$dataNascimento);
	$usuario ->setNome($nome);
	$usuario ->setEndereco($endereco);
	$usuario ->setFoto($mysqlImg);
	$usuario ->setdataNascimento($dataNascimento);
	
	$database = new Database();
	 $conn = $database->Conectar();
	 
	 $usuarioDao = new UsuarioDao();
	 $mensagem = $usuarioDao ->adiciona($conn,$usuario);
	 header('Location:view/view_pesquisa_usuario.php');
	
	
}


 if($acao=='excluir'){
	  $database = new Database();
	 $conn = $database->Conectar();
	 $usuarioDao = new UsuarioDao();
	 $usuarioDao ->removeUsuario ($id);
	 	 header('Location:view/view_pesquisa_usuario.php');
	
	 
 }
  if($acao =='manterUsuarioEditar'){
	
	 $nome = addslashes($_POST['nome']);
     $endereco = addslashes($_POST['endereco']);
	 $dataNascimento = addslashes($_POST['dataNascimento']);
	
	  $usuarioDao = new UsuarioDao();
	  
	 $usuarioDao ->editarUsuario ($id,$nome,$endereco,$dataNascimento);

	 header('Location:view/view_pesquisa_usuario.php');
	
 }
 
  