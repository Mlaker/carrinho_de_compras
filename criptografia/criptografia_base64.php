<?php

	$senha ="henrique_mlakera";
	$criptografada = base64_encode($senha);
	
 
	echo "senha digitada foi: ".$senha."<br>";
	echo "senha criptografada: ".$criptografada."<br>";



	$digitousenha = "henrique_mlaker";
	if(base64_encode($digitousenha) == $criptografada)
	echo "senha correta";
	else
	echo "senha incorreta";

	$senha_oricinal_descriptografada = base64_decode("Y2FoMTAyMG1pbGE=");

  	echo "senha original é".$senha_oricinal_descriptografada;
?>
