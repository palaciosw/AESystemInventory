<?php
require_once("conectar.php");

/**
*
*/
class detalleEntradas extends Conectar
{
	private $db;

	public function __construct()
	{
		$this->db=parent::conectar();
		parent::setNames();
	}


	public function ingresar()
	{
		$sql="insert into detalleEntradas
		values
		 (null,null,'".$_POST["codigopro"]."','".$_POST["cantidad"]."','".$_POST["precio"]."','".$_POST["bodega"]."');";
		 $this->db->query($sql);
	}
}


?>
