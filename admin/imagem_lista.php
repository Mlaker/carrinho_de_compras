<link href="../util/estilos.css" rel="stylesheet" type="text/css"/>

<table width="482" border="1px" class="borda_tabela" cellspacing="2">
  <tr class="titulos_lista_pesquisa">
    <td colspan="3" align="center"><h2 align="center"> Lista de Imagens do produto de codigo = <?php echo $_REQUEST['codigo'];?></h2></td>
  </tr>
  <tr class="ordenacao_novo_registro">
    <td width="254"><a href="index.php?tabela=produto&acao=listar&ordem=PROD_DESCRICAO">Produto</td>
    <td width="138"><a href="index.php?tabela=produto&acao=listar&ordem=PROD_VALOR">Imagem</td>
    <td><a href="index.php?tabela=imagem&acao=incluir&codigo=<?php echo $_REQUEST['codigo'];?>">Novo Registro</a></td>
  </tr>
  <?php

	
	while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
	{
    ?>
            <tr onmouseover="muda_cor_over(this)" onmouseout="muda_cor_out(this)">
                <td  class="itens_tabela_banco"><?php echo $oquefazer->registros->IMG_DESCRICAO;?></td>
                <td class="itens_tabela_banco"><img src="../imagens/<?php echo $oquefazer->registros->IMG_DESCRICAO;?>" width="100px" height="100px"/>  </td>
               <td class="alterar_excluir" onMouseOver="this.className='alterar_excluir_over';"  onMouseOut="this.className='alterar_excluir';" width="118"><a href="javascript:if(confirm('Deseja excluir esse registro ?')) {location='index.php?tabela=imagem&acao=excluir&codigo=<?php echo $_REQUEST['codigo'];?>&codigo_imagem=<?php echo $oquefazer->registros->IMG_CODIGO;?>';}">Excluir</a></td>
             </tr>
<?php 
	} ?>         
  <tr class="titulos_lista_pesquisa">
    <td colspan="3"><p>Numero de imagens para este produto: <?php echo $oquefazer->total_registros();?></p>
    <p>email: videoaulasneri@gmail.com ou videoaulas@informaticon.com.br</p></td>
  </tr>
</table>
<p>&nbsp;</p>
