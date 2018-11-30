<?php 

namespace app\controllers;
use app\core\Controller;
use app\models\M_Cliente;

class ClienteController extends Controller
{

	public function lista()
	{
		
		$clientes = new M_Cliente;
		
		$dados["clientes"] = $clientes->lista();

		# Chamando a view
		$this->load("v_cliente", $dados);
		
	}#END lista



	public function ver()
	{
		$dados["nome"] = "Mjailton";
		$dados["email"] = "mjailto@gmail.com";
		$this->load("v_cliente", $dados);

	}#END ver


}#END ClienteController


 ?>