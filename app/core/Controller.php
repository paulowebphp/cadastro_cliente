<?php 
namespace app\core;

class Controller
{

	public function load($viewName, $viewDados = array())
	{
		# extract() extrai as chaves de um array e, se o tipo de dados permitir, as transforma em variáveis com os mesmos nomes das chaves
		extract($viewDados);
		include "app/views/". $viewName . ".php";

	}#END load
	
}#END class Controller


 ?>