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
<legend> Lista de Usuarios</legend>
</div>
	<?php 
	
  require_once'../dao/dao_conexao.php';
  /*
 $conn = mysqli_connect('localhost','root', '', 'exemplo');
$query = "SELECT * FROM empresa";
$result = mysqli_query($conn, $query);

  */
$conn = conexao();
$query = "SELECT * FROM usuario";
$result = mysqli_query($conn,$query);
 /*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */

echo"<div class=container>";
echo " <div class=row>";

echo "
<div class=col-md-12>
            <div class=panel panel-primary>
                <table class=table table-hover table-responsive>
                    <thead>
                    <tr>

                        <th>Id</th>
                        <th>Nome</th>
						<th>Data de Nascimento</th>
						
						<th></th>
                       
                    </tr>
                    </thead>
                    <tbody>

" ;
//echo "<table><tr><td>Nome</td><td>Descrição</td></tr>";

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_assoc($result)){

/*Escreve cada linha da tabela*/

echo "<tr><td>" . $escrever['id'] . "</td><td>" . $escrever['nome'] . "</td><td>". $escrever['dataNascimento']. "</td><td>";

echo "<td><a class=btn btn-outline-success  href =../UsuarioController.php?acao=excluir&id=".$escrever['id'].">Excluir</a></td>";

echo "  <td>
  <form action=view_editar_usuario.php?id=".$escrever['id']." method=post>
                 <input name=nome  type=hidden value=" .$escrever['nome'].">
                 <input name=endereco type=hidden value=" .$escrever['endereco']. ">
				 <input name=dataNascimento type=hidden value=" .$escrever['dataNascimento']. ">
				
                <button  class=btn btn-outline-success >Editar</button>
               </form>


</td>";

          
echo "</tr>";
}/*Fim do while*/

echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

echo "</div>";

echo "
</div>
        </div>
    </div>
</div>
";


?>
</table>
<div class="form-group">
  <label class="col-md-4 control-label" for="idConfirmar"></label>
  <div class="col-md-8">
  <a href= "../manter_usuario.php" class="btn btn-primary"> Adicionar Usuario </a>
  <a href="../usuario.php">
                    <button type="button" class="btn btn-danger">Voltar</button>
                </a>
       
	
  </div>
</div>
</fieldset>
</form>
</body>
</html>