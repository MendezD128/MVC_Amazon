<?php
class Cliente
{
	private $cliente;
	private $dbh;

	public function __construct()
	{
		$this->cliente = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bd_amazon', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_clientes()
	{
		self::set_names();
		$sql="select id, nombre, apellidoP, direccion, telefono, email, fecha_nacimiento, c_postal from tbl_cliente";
		foreach ($this->dbh->query($sql) as $amz)
		{
			$this->cliente[]=$amz;
		}
		return $this->cliente;
		$this->dbh=null;
	}
}
?>