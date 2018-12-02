<html>
<head> <title> Editar Usuario </title> 
<meta charset="utf-8">
 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php
  

  
  if(isset($_GET['id'])){
	$id = $_GET['id'];
}

if(isset($_POST['id'])){
	$id = $_POST['id'];
}

// PEGAR DADOS DO CENARIO DE ACORDO COM UM ID
  //include("../dao/dao_cenario.php");
  
 // $cenarioDao = new CenarioDao();
  //$dadosCenario = $cenarioDao->retornaCenario($id);
 
            //Recebe os dados a serem editados
           
            $nome = filter_input(INPUT_POST, 'nome');
           $endereco = filter_input(INPUT_POST, 'endereco');
         $dataNascimento = filter_input(INPUT_POST, 'dataNascimento');
		 

echo "<form class= form-horizontal method=post action=../UsuarioController.php?acao=manterUsuarioEditar&id=".$id;
echo ">"

?>
<fieldset>
<br><br>
<div class="container">
<!-- Form Name -->
<legend>Editar de Cenário</legend>
</div>
<!-- Text input-->
<div class="form-group">


  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-5">
  <input id="nome" name="nome" value = "<?php echo $nome ?>" type="text"  class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="endereco">Endereço</label>  
  <div class="col-md-5">
  <input id="endereco" name="endereco" value = "<?php echo $endereco ?>" type="text" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="dataNascimento">Data de Nascimento</label>  
  <div class="col-md-5">
  <input id="dataNascimento" name="dataNascimento" value = "<?php echo $dataNascimento ?>" type="text" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="idConfirmar"></label>
  <div class="col-md-8">
       <td colspan="2"><input type='submit'class="btn btn-primary"></td>
	<a href="javascript:window.history.go(-1)">
                    <button type="button" class="btn btn-danger">Voltar</button>
                </a>
  </div>
</div>

</fieldset>
</form>




</body>
</html>