<?php
require_once("clases/ingresos.php");
//instanciamos la clase
if (isset($_POST["codigopro"])){
	$u = new detalleEntradas();
	$u -> ingresar();
}
  ?>

	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Detalle Ingresos</title>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css">

      <!--Creamos las funciones javaScrip-JQuery-->
      <script src="jquery-3.2.1.min.js"></script>
      <script>

      		$(function(){
  				// Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
  				$("#adicional").on('click', function(){
  					$("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
  				});

  				// Evento que selecciona la fila y la elimina
  				$(document).on("click",".eliminar",function(){
  					var parent = $(this).parents().get(0);
  					$(parent).remove();
  				});
  			});
  		</script>
		</head>
		<body>
			<form method="post">
				<h3 class="bg-primary text-center pad-basic no-btm">Detalle de Ingresos </h3>
				<table class="table bg-info"  id="tabla">
					<tr class="fila-fija">
						<td><input required name="codigopro[]" placeholder="Codigo del Producto"/></td>
						<!--<td><input required name="nombre[]" placeholder="Nombre del Producto"/></td>-->
						<td><input required name="cantidad[]" placeholder="Cantidad"/></td>
						<td><input required name="precio[]" placeholder="Precio de Entrada"/></td>
						<td><input type="number" required name="bodega[]" placeholder="Bodega"/></td>
						<td class="eliminar"><input type="button"   value=" - "/></td>
					</tr>
				</table>

				<div class="btn-der">
					<input type="submit" name="insertar" value="Ingresar Productos" class="btn btn-info"/>
					<button id="adicional" name="adicional" type="button" class="btn btn-warning"> Más + </button>

				</div>
			</form>
		</body>
	</html>
