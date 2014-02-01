<?php 
	
	  session_start();
	
	if(!$_SESSION['sessao_codigo_usuario'])
	{

		require('../util/funcoes.php');
		direciona('login_form.php');
		exit;
	
	}
	else{



?>


<!DOCTYPE html>
<html>
<head>
<title>administrador</title>
<link type="text/css" rel="stylesheet" href="../util/estilos.css"/>
<script type="text/javascript" src="../util/funcoes.js"></script>
</head>
<body class="fundo01">
<center><h2>Administracao do Carrinho de Compras</h2></center>
<table >

<tr>
<td>
<a href="index.php">Home<br></a>
<a href="index.php?tabela=categoria&acao=listar">Categoria</a><br>
<a href="index.php?tabela=cidade&acao=listar">Cidade</a><br>
Clientes<br>
<a href="index.php?tabela=fornecedor&acao=listar">Fornecedores</a><br>
Pedidos<br>
Produto<br>
Promocao<br>
<a href="index.php?tabela=usuario&acao=listar">Usuario</a><br>
<a href="logoff.php">Sair</a><br>
</td>
<td>
<?php 

require('../util/conecta.php');

$tabela = $_REQUEST['tabela'];
//echo "tabela =".$tabela;
if($tabela == "cidade"){
require('cidade_acao.php');
}

else if($tabela == "categoria"){
require('categoria_acao.php');
}
else if($tabela == "usuario"){
require('usuario_acao.php');
}
else if($tabela == "fornecedor"){
require('fornecedor_acao.php');
}
else{
require('principal.php');
}
//echo "nao conseguiu";
?>
</td>
</tr>
<tr>
<td><h3>Henrique Mlaker dos Santos</h3></td>

</tr>
</table>

</body>
</html>



<?php } ?>
