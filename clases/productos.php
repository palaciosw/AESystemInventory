<?php
require_once("conectar.php");

/**
*
*/
class Productos extends Conectar
{
	private $db;

	public function __construct()
	{
		$this->db=parent::conectar();
		parent::setNames();
	}

		public function getDatos()
	{
		$sql="
			select p.codProducto,nombreProducto,p.Descripcion, sum(cantidad) as cantidad from Productos p join detalleEntradas e where p.codProducto=e.codProducto group by codProducto;
		";

		$datos = $this->db->query($sql);
		$arreglo = array();
		while ($reg=$datos->fetch_object()) {
			# code...
			$arreglo[]=$reg;

		}
		return $arreglo;
	}
	public function insertar()
	{
		$sql="insert into Productos
		values
		 (null,'".$_POST["codigo"]."','".$_POST["categoria"]."','".$_POST["nombre"]."','".$_POST["descripcion"]."', '".$_POST["stock"]."','".$_POST["fecha"]."');";
		 $this->db->query($sql);
	}
}


?>
