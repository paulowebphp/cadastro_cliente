<?php 

namespace app\controllers;
use app\core\Controller;


class ClienteController extends Controller
{

	public function index()
	{
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