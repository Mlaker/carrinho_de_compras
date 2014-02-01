<?php

	$senha ="henrique_mlakera";
	$criptografada = md5($senha);
	
 
	echo "senha digitada foi: ".$senha."<br>";
	echo "senha criptografada: ".$criptografada."<br>";



	$digitousenha = "henrique_mlaker";
	if(md5($digitousenha) == $criptografada)
	echo "senha correta";
	else
	echo "senha incorreta";
?>
