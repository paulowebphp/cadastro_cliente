<?php 

namespace app\models;
use app\core\Model;

class Cliente extends Model
{

	public function __construct()
	{

		parent::__construct();

	}#END __construct()



	public function lista()
	{

		$sql = "

		SELECT *
		FROM cliente

		";


		$qry = $this->db->query($sql);


		# \PDO::FETCH_OBJ para retornar em forma de Objeto
		return $qry->fetchAll(\PDO::FETCH_OBJ);

	}#END lista


}#END class Cliente


 ?>