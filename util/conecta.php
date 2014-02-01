<?php

    require('adodb/adodb.inc.php'); //biblioteca necessaria para trabalhar com adodb
    require('funcoes.php');
	
	
	class conexao
	{
	      var $tipo_banco    = "mysql";
		  var $servidor      = "localhost";
		  var $usuario       = "root";
		  var $senha         = "root";
		  var $banco;       
	    
	      function conexao() //metodo construtor
		  {
                $this->banco = NewADOConnection($this->tipo_banco);
				$this->banco->dialect = 3;
				$this->banco->debug = true;
				$this->banco->Connect($this->servidor,$this->usuario,$this->senha,"carrinho_compras");
		  }
	}

    $con = new conexao();	
	
	//mysql_select_db("carrinho_compras");
	
	
    //if($con)
		//echo "conectou"."<br><br>";
	//else
		//echo "nao conectou";

	
?>
