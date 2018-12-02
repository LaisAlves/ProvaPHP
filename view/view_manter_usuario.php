<html>
<head> 
<title> Cadastro de Usuários</title>
 <meta charset="utf-8">
 
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<br>
<br>
<form class="form-horizontal"method="post" action="UsuarioController.php?acao=manterUsuario" enctype="multipart/form-data">
<fieldset>
<div class="container">

<br><br>
<legend> Cadastro de Usuarios</legend>
</div>
<div class="form-group">
<label class="col-md-4 control-label" for="nome"> Nome:</label>
<div class="col-md-5">
<input type="text" id="nome" name="nome" class="form-control input-md" required="">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="endereco"> Endereço:</label>
<div class="col-md-5">
<input type="text" id="endereco" name="endereco" class="form-control input-md" required="">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="dataNascimento"> Data de Nascimento:</label>
<div class="col-md-5">
<input type="text" id="dataNascimento" name="dataNascimento" class="form-control input-md" required="">
</div>
</div>
<div class="form-group">
 <label class="col-md-4 control-label" for="foto" for="imagem">Foto:</label>
 <div class="col-md-5">
        <input type="file" id="foto" name="foto"class="form-control input-md" required=""/>
		</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="idConfirmar"></label>
 <div class="col-md-8">
       <td colspan="2"><input type='submit'class="btn btn-primary"></td>
 
</div>
</div>
</fieldset>
</form>
</body>
</html>