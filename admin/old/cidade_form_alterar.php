<!DOCTYPE html>
<html>
<head>
<title>Alterar de Cidades</title>
</head>
<body>
<center><form id="form" name="form_cadastro" method="post" action="index.php">
<table border="1" width="500"  cellpadding="5" cellspacing="5px">
<tr>
<td colspan="2"><center><b style="font-size:30px">Manutencao de Cidades</b></center></td>

</tr>
<tr>
<td width="99">Nome</td>
<td width="360"><input name="CID_DESCRICAO" type="text" id="CID_DESCRICAO" size="40" value="<?php  echo $oquefazer->registros->CID_DESCRICAO;?>"/></td>
</tr>
<tr>
<td>UF</td>
<td><label>
<select name="CID_UF" id="CID_UF">
<?php 

$estato1 ='';
$estato2 ='';
$estato3 ='';
$estato4 ='';
$estato5 ='';
$estato6 ='';
$estato7 ='';
$estato8 ='';
$estato9 ='';
$estato10 ='';
$estato11 ='';
$estato12 ='';
$estato13 ='';
$estato14 ='';
$estato15 ='';
$estato16 ='';
$estato17 ='';
$estato18 ='';
$estato19 ='';
$estato20 ='';
$estato21 ='';
$estato22 ='';
$estato23 ='';
$estato24 ='';
$estato25 ='';
$estato26 ='';
$estato27 ='';

switch($oquefazer->registros->CID_UF)
{
	case 'AC' : $estado1 = 'selected';break;
	case 'AL' : $estado2 = 'selected';break;
	case 'AP' : $estado3 = 'selected';break;
	case 'AM' : $estado4 = 'selected';break;
	case 'BA' : $estado5 = 'selected';break;
	case 'CE' : $estado6 = 'selected';break;
	case 'DF' : $estado7 = 'selected';break;
	case 'ES' : $estado8 = 'selected';break;
	case 'GO' : $estado9 = 'selected';break;
	case 'MA' : $estado10 = 'selected';break;
	case 'MT' : $estado11 = 'selected';break;
	case 'MS' : $estado12 = 'selected';break;
	case 'MG' : $estado13 = 'selected';break;
	case 'PR' : $estado14 = 'selected';break;
	case 'PB' : $estado15 = 'selected';break;
	case 'PA' : $estado16 = 'selected';break;
	case 'PE' : $estado17 = 'selected';break;
	case 'PI' : $estado18 = 'selected';break;
	case 'RJ' : $estado19 = 'selected';break;
	case 'RN' : $estado20 = 'selected';break;
	case 'RS' : $estado21 = 'selected';break;
	case 'RO' : $estado22 = 'selected';break;
	case 'RR' : $estado23 = 'selected';break;
	case 'SC' : $estado24 = 'selected';break;
	case 'SE' : $estado25 = 'selected';break;
	case 'SP' : $estado26 = 'selected';break;
	case 'TO' : $estado27 = 'selected';break;
	

	
	

}



?>
<option value="AC" <?php  echo $estado1 ;?>>AC</option>	
<option value="AL" <?php  echo $estado2 ;?>>AL</option>
<option value="AP" <?php  echo $estado3 ;?>>AP</option>
<option value="AM" <?php  echo $estado4 ;?>>AM</option>
<option value="BA" <?php  echo $estado5 ;?>>BA</option>
<option value="CE" <?php  echo $estado6 ;?>>CE</option>
<option value="DF" <?php  echo $estado7 ;?>>DF</option>
<option value="ES" <?php  echo $estado8 ;?>>ES</option>
<option value="GO" <?php  echo $estado9 ;?>>GO</option>
<option value="MA" <?php  echo $estado10 ;?>>MA</option>
<option value="MT" <?php  echo $estado11 ;?>>MT</option>
<option value="MS" <?php  echo $estado12 ;?>>MS</option>
<option value="MG" <?php  echo $estado13 ;?>>MG</option>
<option value="PR" <?php  echo $estado14 ;?>>PR</option>
<option value="PB" <?php  echo $estado15 ;?>>PB</option>
<option value="PA" <?php  echo $estado16 ;?>>PA</option>
<option value="PE" <?php  echo $estado17 ;?>>PE</option>
<option value="PI" <?php  echo $estado18 ;?>>PI</option>
<option value="RJ" <?php  echo $estado19 ;?>>RJ</option>
<option value="RN" <?php  echo $estado20 ;?>>RN</option>	
<option value="RS" <?php  echo $estado21 ;?>>RS</option>	
<option value="RO" <?php  echo $estado22 ;?>>RO</option>	
<option value="RR" <?php  echo $estado23 ;?>>RR</option>	
<option value="SC" <?php  echo $estado24 ;?>>SC</option>	
<option value="SE" <?php  echo $estado25 ;?>>SE</option>	
<option value="SP" <?php  echo $estado26 ;?>>SP</option>	
<option value="TO" <?php  echo $estado27 ;?>>TO</option>
</select>
</label></td>
</tr>
<tr>
<td colspan="2" align="center">

	<input type="submit" name="button"  id="button"  value="Salvar"  />
	<input type="reset"  name="button2" id="button2" value="Limpar"  />
	<input type="button" name="button3" id="button3" value="Cancelar"/>
	<input type="hidden" name="tabela" value="cidade"/>
	<input type="hidden" name="acao" value="gravar_alterar"/>
	<input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->CID_CODIGO; ?>"/>
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
