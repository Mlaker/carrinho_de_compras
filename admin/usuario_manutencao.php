<?php
     //echo "usuario_manutencao<br>";
   class usuario_manutencao
   {
       var $resultado;
	   var $registros;
	   
	   function usuario_manutencao() //metodo construtor
	   {
             $this->con = new conexao();		   
	   }       
	   function listar_usuario()
	   {
		    $ordenacao = $_REQUEST['ordem'];
			if ($ordenacao == '')
			   $ordenacao = "USU_NOME";

		    $filtro = $_REQUEST['pesquisa'];
			if ($filtro == '')
			    $filtrar_por == '';
	 		else
			   $filtrar_por = $filtro;

			   
			$sql = "select * from TBL_USUARIO where USU_NOME like '".$filtrar_por."%' order by ".$ordenacao;
            $this->resultado = $this->con->banco->Execute($sql); 	   
	   }
	   
	   function excluir()	   
	   {

		   	$sql = "delete from TBL_USUARIO where USU_CODIGO = ".$_REQUEST['codigo'];
        	if($this->resultado = $this->con->banco->Execute($sql))
			{
			     alerta("O registro foi excluido com sucesso")	;
				 return true;
			}
			else
			{
			     alerta("Nao foi possivel exluir")	;
				 return false;
			}	   
	   }
	   
   	   function gravar_incluir()
	   {
		   	$sql = "insert into TBL_USUARIO (USU_NOME, USU_LOGIN, USU_SENHA, USU_NIVEL) values ('".$_POST['usu_nome']."','".$_POST['usu_login']."','".base64_encode($_POST['usu_senha'])."','".$_POST['usu_nivel']."')";
        	if($this->resultado = $this->con->banco->Execute($sql))
			{
			     alerta("O registro foi incluido com sucesso")	;
				 return true;
			}
			else
			{
			     alerta("Nao foi possivel gravar")	;
				 return false;
			}

	   }
       
  
   	   function alterar()
	   {
		   	$sql = "select * from TBL_USUARIO where USU_CODIGO = ".$_REQUEST['codigo'];
            $this->resultado = $this->con->banco->Execute($sql); 
			$this->registros = $this->resultado->FetchNextObject(); //se posiciona no registro
	   }
   	   function gravar_alterar()
	   {
		   	$sql = "update TBL_USUARIO  set USU_NOME = '".$_POST['usu_nome']."', USU_LOGIN = '".											                     $_POST['usu_login']."', USU_SENHA = '".base64_encode($_POST['usu_senha'])."', USU_NIVEL = '".											                     $_POST['usu_nivel']."' where USU_CODIGO = ".$_POST['codigo'];
        	$this->resultado = $this->con->banco->Execute($sql); 	   
	   }
	   
	   function total_registros()
	   {
		   	$sql = "select count(*) as TOTAL from TBL_USUARIO";
            $this->resultado = $this->con->banco->Execute($sql); 
			$this->registros = $this->resultado->FetchNextObject(); //se posiciona no registro
		    return $this->registros->TOTAL;
	   }
 
   }
?>
