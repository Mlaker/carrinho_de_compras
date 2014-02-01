<?php
	class cidade_manutencao
	{

		var $resultado;
		var $registros;

		function cidade_manutencao() //metodo construtor
		{
			$this->con = new conexao();
		}

		function listar_cidade()
		{

			$ordenacao = $_REQUEST['ordem'];
			if($ordenacao == ''){
			$ordenacao= "CID_DESCRICAO";
			}

			

			$filtro = $_REQUEST['pesquisa'];
			if($filtro == ''){
			$filtrar_por == '';
			}else{

			$filtrar_por= $filtro;

			}


			


			 $sql = "select * from TBL_CIDADE where CID_DESCRICAO like '".$filtrar_por."%' order by ".$ordenacao;
           		 $this->resultado = $this->con->banco->Execute($sql); 
		}

		function excluir()
		{
			$sql = "delete  from TBL_CIDADE where CID_CODIGO = ".$_REQUEST['codigo'];
			if($this->resultado = $this->con->banco->Execute($sql))
			{



				alerta("O registro foi Excluido com sucesso");
				return true;

			 }
			 else
			 {

				alerta("nao foi possivel Excluir o registro");
				return false;


		         }
		}
		function gravar_incluir()
		{
		$sql = "insert into TBL_CIDADE (CID_DESCRICAO,CID_UF) values ('".$_POST['CID_DESCRICAO']."','".
										 $_POST['CID_UF']."')";
			if($this->resultado = $this->con->banco->Execute($sql))
			{



				alerta("O registro foi incluido com sucesso");
				return true;

			 }
			 else
			 {

				alerta("nao foi possivel incluir o registro");
				return false;


		         }
		}

		function alterar()
		{
			$sql = "select *  from TBL_CIDADE where CID_CODIGO = ".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);			 
			$this->registros = $this->resultado->FetchNextObject();		

		}

		function gravar_alterar()
		{
			$sql = "update TBL_CIDADE  set CID_DESCRICAO = '".$_REQUEST['CID_DESCRICAO']."', CID_UF = '".                     $_REQUEST['CID_UF']."' where CID_CODIGO = ".$_REQUEST['codigo'];
        	if($this->resultado = $this->con->banco->Execute($sql))
			{



				alerta("O registro foi Alterado com sucesso");
				return true;

			 }
			 else
			 {

				alerta("nao foi possivel Alterar o registro");
				return false;


		         }
		}


		//require('../util/conecta.php');

		//$sql = "select * from tbl_cidade";

		//$resultado = $con->banco->Execute($sql);




		function total_registros(){
			
			$sql = "select count(*) as TOTAL from TBL_CIDADE";
			$this->resultado = $this->con->banco->Execute($sql);			 
			$this->registros = $this->resultado->FetchNextObject();		
			return $this->registros->TOTAL;


		}

		}



?>
