<!DOCTYPE html>
<html>
<head>
<title>Manutencao de Cidades</title>
</head>
<body>
<center><form id="form" name="form_cadastro" method="post" action="index.php">
<table border="1" width="500"  cellpadding="5" cellspacing="5px">
<tr>
<td colspan="2"><center><b style="font-size:30px">Manutencao de Cidades</b></center></td>

</tr>
<tr>
<td width="99">Nome</td>
<td width="360"><input name="CID_DESCRICAO" type="text" id="CID_DESCRICAO" size="40"/></td>
</tr>
<tr>
<td>UF</td>
<td><label>
<select name="CID_UF" id="CID_UF">
<option>AC</option>	
<option>AL</option>
<option>AP</option>
<option>AM</option>
<option>BA</option>
<option>CE</option>
<option>DF</option>
<option>ES</option>
<option>GO</option>
<option>MA</option>
<option>MT</option>
<option>MS</option>
<option>MG</option>
<option>PR</option>
<option>PB</option>
<option>PA</option>
<option>PE</option>
<option>PI</option>
<option>RJ</option>
<option>RN</option>	
<option>RS</option>	
<option>RO</option>	
<option>RR</option>	
<option>SC</option>	
<option>SE</option>	
<option>SP</option>	
<option>TO</option>
</select>
</label></td>
</tr>
<tr>
<td colspan="2" align="center">

	<input type="submit" name="button"  id="button"  value="Salvar"  />
	<input type="reset"  name="button2" id="button2" value="Limpar"  />
	<input type="button" name="button3" id="button3" value="Cancelar"/>
	<input type="hidden" name="tabela" value="cidade"/>
	<input type="hidden" name="acao" value="gravar"/>
	
</td>
</tr>
<tr>
<td colspan="2">Rodape</td>
</tr>

</table>
</form></center>





<?php

?>
</body>
</html>
