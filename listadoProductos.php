<?php
require_once("clases/productos.php");
$u = new Productos();
$datos=$u->getDatos();
//echo ($datos);exit;**/

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>..::Productos::..</title>
	 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav aria-label="breadcrumb" role="navigation">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="index.php">Principal</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Listado de Productos</li>
	  </ol>
	</nav>
	<div class="container" >
		<div class="panel panel-primary">
        	<div class="panel-heading">
    			<h3 class="panel-title">Listado de Productos</h3>
  			</div>
  		<div class="panel-body">
   			<p>
   				<a href="agregaProducto.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</a>
   			</p>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Código</th>
					<th>Nombre del Producto </th>
					<th>Descripción</th>
					<th>Existencia </th>
				</tr>
			</thead>
			<tbody>
                        <?php
                        foreach($datos as $dato)
                        {
                            ?>
                            <tr>
                                <td> <?php echo $dato->codProducto ?> </td>
                                <td> <?php echo $dato->nombreProducto?> </td>
                                <td> <?php echo $dato->Descripcion ?> </td>
																  <td> <?php echo $dato->cantidad ?> </td>



                            </tr>
                            <?php
                        }
                        ?>
			</tbody>

		</table>

  	</div>


</body>
</html>
