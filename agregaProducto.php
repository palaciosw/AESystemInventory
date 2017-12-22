<?php 
require_once("clases/productos.php");

//($datos);exit;**/
if (isset($_POST["codigo"])) {
	$u = new Productos();
	$u->insertar();
	
}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>..::Agregar Productos::..</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
	<div class="container" >	
		<ol class="breadcrumb">
 	    	<li><a href="index.php">Principal</a></li>
        	<li class="active">Agregar Productos</li>
        </ol>

		<div class="panel panel-primary">
        	<div class="panel-heading">
    			<h3 class="panel-title"><center><strong>Agregar Productos</strong></center></h3>
  			</div>
  		<div class="panel-body">

  		<form name="form" action="" method="post">
  		<p>
  			<label for="codigo"> Código del Producto: </label>
  			<input type="text" name="codigo">
  		</p>

  		<p>
  			<label for="sel1">Elija una Categoría:</label>
  			<select class="form-control" id="sel1">
   		  <option>Laminas</option>
    		<option>Tornillos</option>
    		<option>Lijas</option>
   		  <option>Varios</option>
  </select>
  		</p>
  		<p>
  			<label for="nombre"> Nombre del Producto: </label>
  			<input type="text" name="nombre" class="form-control">
  		</p>

  		<p>
  			<label for="descripcion"> Descripción del Producto: </label>
  			<input type="text" name="descripcion" class="form-control">
  		</p>

  			<p>
  			<label for="stock"> Stock Minimo: </label>
  			<input type="number" name="stock" class="form-control">
  		</p>

        <p>
        <label for="fecha"> Fecha Creación: </label>
        <input type="date" name="fecha" class="form-control">
      </p>  		
  		
  		<button type="submit" value="Enviar" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Crear Producto</button>

  		</form>
   		
  	</div>
	

</body>
</html>