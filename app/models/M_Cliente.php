<?php 
namespace app\models;
use app\core\Model;

class M_Cliente extends Model
{

	public function __construct()
	{
		parent::__construct();

	}#END __construct



	public function lista()
	{

		$sql = "SELECT * FROM produtos";

		$qry = $this->db->query($sql);

		return $qry->fetchAll();

	}#END lista



}#END class M_Cliente

 ?>