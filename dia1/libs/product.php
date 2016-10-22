<?php 

/**
* 
*/
class Product extends Database
{
	
	private $stmt;


	public function __construct()
	{
		parent::__construct();
		parent::connect();
	}


	public function listProducts()
	{
		$this->stmt = $this->conx->prepare("SELECT * FROM productos");
		$this->stmt->execute();
		return $this->stmt->fetchAll();

	}


	public function showProduct($idp)
	{
		$sql="SELECT i.*, p.nombre FROM inventarios AS i, productos AS p WHERE i.producto_id = $idp AND p.id = $idp";

		$this->stmt = $this->conx->prepare($sql);
		$this->stmt->execute();
		return $this->stmt->fetchAll();

	}

}


 ?>