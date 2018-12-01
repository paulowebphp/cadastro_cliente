<?php 

namespace app\controllers;
use app\core\Controller;
use app\models\Cliente;


class ClienteController extends Controller
{

	public function index()
	{
		$cliente = new Cliente();

		$dados["clientes"] = $cliente->lista();
		$dados["view"] = "cliente/Index";
		
		$this->load("template", $dados);

	}#END index


	public function novo()
	{
		$dados["view"] = "cliente/Create";
		$this->load("template", $dados);

	}#END index


}#END ClienteController


 ?>