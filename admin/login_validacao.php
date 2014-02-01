<?php
		session_start();
	   $texto_senha = $_POST['usu_senha'];
	    $texto_usuario = $_POST['usu_login'];
	if(($_POST['usu_login'] != '') &&($_POST['usu_senha'] != '')){

		require('../util/conecta.php');
		
		
		
		 $texto_senha = trim($texto_senha);
		 $texto_usuario = trim($texto_usuario);

	   //Prevenção contra SQL INJECTION
       $texto_senha = str_replace("=","",$texto_senha);
	   $texto_senha = str_replace("*","",$texto_senha);
	   $texto_senha = str_replace("drop","",$texto_senha);	   
	   $texto_senha = str_replace("insert","",$texto_senha);
	   $texto_senha = str_replace("update","",$texto_senha);
	   $texto_senha = str_replace("--","",$texto_senha);	   
   	   $texto_senha = str_replace("'","",$texto_senha);
	   $texto_senha = str_replace(" or ","",$texto_senha);	   
	   $texto_senha = str_replace("delete","",$texto_senha);	   
  	   $texto_senha = addslashes($texto_senha);
	   
	   //Prevenção contra SQL INJECTION
	   $texto_usuario = str_replace("=","",$texto_usuario);
	   $texto_usuario = str_replace("*","",$texto_usuario);
	   $texto_usuario = str_replace("drop","",$texto_usuario);	   
	   $texto_usuario = str_replace("insert","",$texto_usuario);
	   $texto_usuario = str_replace("update","",$texto_usuario);
	   $texto_usuario = str_replace("--","",$texto_usuario);	   
   	   $texto_usuario = str_replace("'","",$texto_usuario);
	   $texto_usuario = str_replace(" or ","",$texto_usuario);	   
	   $texto_usuario = str_replace("delete","",$texto_usuario);	   
  	   $texto_usuario = addslashes($texto_usuario);
		
		$sql = "select * from TBL_USUARIO where USU_LOGIN = '" .$texto_usuario."' and USU_SENHA = '".base64_encode($texto_senha)."'";
		$resultado = $con->banco->Execute($sql);

	if($registro = $resultado->FetchNextObject()){

		
			
		
			//echo "ok, digitou usuario e senha";
		    //session_register("sessao_codigo_usuario");
		  $_SESSION['sessao_codigo_usuario'] = $registro->USU_CODIGO;
		
		 // session_register('sessao_nome_usuario');
		  $_SESSION['sessao_nome_usuario'] = $registro->USU_NOME;
		//  session_register('sessao_nivel_usuario');
		  $_SESSION['sessao_nivel_usuario'] = $registro->USU_NIVEL;
		  
			//echo "$sessao_codigo_usuario ola" ;
			direciona('index.php');
		  //echo '<script>window.location="'.'index.php'.'"</script>';
		  exit;
		 
	}
	else
	{
	alerta("usuario invalido!");
	voltar();
	exit;
	}


	}
	else	
		echo "voce precisa digitar usuario e senha";
	


 
?>
