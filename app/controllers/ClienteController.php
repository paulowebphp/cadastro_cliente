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

	}#END novo




	public function edit($id_cliente)
	{
		$cliente = new Cliente();
		$dados["cliente"] = $cliente->getCliente($id_cliente);

		$dados["view"] = "cliente/Edit";



		$this->load("template", $dados);

	}#END edit



	public function delete($id_cliente)
	{
		$dados["view"] = "cliente/Delete";
		$this->load("template", $dados);

	}#END delete




	public function salvar()
	{

		$cliente = new Cliente();

		/*
		# Esta forma funciona, porém é menos segura

		$nome = $_POST["txt_nome"];
		$email = $_POST["txt_email"];
		$fone = $_POST["txt_fone"];

		*/

		# Esta forma com strip_tags() e filter_input() não é necessária, mas é mais segura que a forma acima

		$id_cliente = isset($_POST["id_cliente"]) ? strip_tags(filter_input(INPUT_POST, "id_cliente")) : NULL;
		$nome = isset($_POST["txt_nome"]) ? strip_tags(filter_input(INPUT_POST, "txt_nome")) : NULL;
		$email = isset($_POST["txt_email"]) ? strip_tags(filter_input(INPUT_POST, "txt_email")) : NULL;
		$fone = isset($_POST["txt_fone"]) ? strip_tags(filter_input(INPUT_POST, "txt_fone")) : NULL;

		if( $id_cliente )
		{
			$cliente->editar($id_cliente, $nome, $email, $fone);
		}#end if
		else
		{
			$cliente->inserir($nome, $email, $fone);

		}#end else

		header("location: ".URL_BASE."cliente");

	}#END salvar


}#END ClienteController


 ?>