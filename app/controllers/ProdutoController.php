<?php 

namespace app\controllers;
use app\core\Controller;

class ProdutoController extends Controller
{

	public function index()
	{
		echo "Metodo Index";
		echo "<br>";


	}#END index

	public function ver()
	{

		$this->load("v_produto");

	}#END ver

	public function lista($valor = 10)
	{
		echo "Estou listando os produtos. Valor: R$ $valor";
		echo "<br>";


	}#END lista


}#END ProdutoController


 ?>