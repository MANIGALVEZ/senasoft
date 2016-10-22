<?php 

/**
* 
*/
abstract class Database
{
	protected $conx;
	protected $host;
	protected $user;
	protected $pass;



	public function __construct($host= 'localhost', $user= 'root', $pass='')
	{
		$this->host=$host;
		$this->user=$user;
		$this->pass=$pass;

	}


	public function connect()
		{
			try
			{
				$this->conx=new PDO("mysql:host=$this->host;dbname=senasoft_dia1", $this->user, $this->pass);
				$this->conx->exec("SET NAMES utf8");
				//echo "Conexion Exitosa";
			}

			catch(PDOException $e)
			{
				echo "Error en la conexion " .$e->getMessage();
			}
		}


	public function disconnect()
	{
		$this->conx = null;
	}

}

 ?>