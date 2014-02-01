<?php

	$senha ="henrique_mlakera";
	$criptografada = sha1($senha);
	
 
	echo "senha digitada foi: ".$senha."<br>";
	echo "senha criptografada: ".$criptografada."<br>";



	$digitousenha = "henrique_mlaker";
	if(sha1($digitousenha) == $criptografada)
	echo "senha correta";
	else
	echo "senha incorreta";
?>
