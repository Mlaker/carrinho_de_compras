<?php

    require('conecta.php');
	
	$sql = "select * from TBL_CIDADE";
	
	$resultado = $con->banco->Execute($sql); 
	
	    echo'<table border="1">';
		
		echo "<tr>";
		
		echo "<th>Cod</th>";
		echo "<th>Cidade</th>";
		echo "<th>UF</th>";
		
		echo "</tr>";
		
	while(!$resultado->EOF)
	{
		echo"<tr>";
		
		echo"<td>";
        echo  $resultado->Fields('CID_CODIGO');
        echo"</td>";
		
		echo"<td>";
	    echo $resultado->Fields('CID_DESCRICAO');
        echo"</td>";	
		
		echo"<td>";
		echo  $resultado->Fields('CID_UF');	
		echo"</td>";
		
		echo"</tr>";
		
		$resultado->MoveNext();
	}
echo"</table>"."<br><br>";

?>
