<!DOCTYPE html>
<html>
<head>
<title>Cidade Lista</title>

</head>
<body>
<table width="753" border="1px" class="borda_tabela" cellspacing="2">
<tr class="titulos_listas">
	<td colspan="4" align="center" height="150px"><h2 align="center"> Lista de Cidades</h2>

           <form id="form_pesquisa" name="form_pesquisa" method="post" action="index.php?tabela=cidade&acao=listar">
        <label>
          Pesquisa.:
          <input name="pesquisa" type="text" id="pesquisa" size="50" />
        </label>
        <label>
          <input type="submit" name="button" id="button" value="Pesquisar" />
        </label>
      </form>
</td>
     
</tr>
<tr class="ordenacao_novo_registro">
    <td width="414"><a href="index.php?tabela=cidade&acao=listar&ordem=CID_DESCRICAO">Descricao</a></td>
    <td width="87"><a href="index.php?tabela=cidade&acao=listar&ordem=CID_UF">UF</a></td>
    <td colspan="2"><a href="index.php?tabela=cidade&acao=incluir">Novo Registro</a></td>
</tr>
  <?php
//require('../util/conecta.php');

$sql = "select * from TBL_CIDADE";

$resultado = $con->banco->Execute($sql);

while($oquefazer->registros = $oquefazer->resultado->FetchNextObject()){

//echo "cidade = ".$resultado->Fields('CID_DESCRICAO')."<br>";


  
  ?>
<tr class="itens_tabela_banco">
	<td><?php echo $oquefazer->registros->CID_DESCRICAO;?></td>	
        <td><?php echo $oquefazer->registros->CID_UF;?></td>
     <td width="100"><a href="index.php?tabela=cidade&acao=alterar&codigo=<?php echo $oquefazer->registros->CID_CODIGO;?>">Alterar<a/></td>
     <td width="100"><a href="index.php?tabela=cidade&acao=excluir&codigo=<?php echo $oquefazer->registros->CID_CODIGO;?>">Excluir</a></td>
</tr>
    	<?php  }?>   
<tr>
	<td colspan="4"><p>Numero de registros: <?php  echo $oquefazer->total_registros() ; ?> </p>
</td>
</tr>
</table>
</body>
</html>
