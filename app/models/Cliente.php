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


	public function inserir($nome, $email, $fone)
	{

		$sql = "

		INSERT INTO cliente SET
		nome = :nome, 
		email = :email, 
		fone = :fone;

		";

		$qry = $this->db->prepare($sql);

		$qry->bindValue(":nome", $nome);
		$qry->bindValue(":email", $email);
		$qry->bindValue(":fone", $fone);

		$qry->execute();

		return $this->db->lastInsertId();

	}#END inserir


}#END class Cliente


 ?>