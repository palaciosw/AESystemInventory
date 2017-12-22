<?php
//require_once("clases/conectar.php");


////////////////// CONEXION A LA BASE DE DATOS //////////////////

$host = 'localhost';
$basededatos = 'AESystemInventory';
$usuario = 'root';
$contraseña = 'oscar14';



$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno) {
die( "Fallo la conexión : (" . $conexion -> mysqli_connect_errno()
. ") " . $conexion -> mysqli_connect_error());
}
  ///////////////////CONSULTA DE LOS ALUMNOS///////////////////////

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresos</title>
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
    <div class="container" >
      <div class="panel panel-primary">
            <div class="panel-heading">
            <h3 class="panel-title"><center><strong>DETALLE DE INGRESOS</strong></center></h3>
          </div>
        <div class="panel-body">
          <section>


          </section>

          <form class="form-horizontal" role="form" method="post">
            <table class="table bg-info" id="tabla">
              <tr class="fila-fija">
                <td><input type="date" required name="fecha[]" placeholder="Fecha de Ingreso"></input></td>
                <td><input required name="producto[]" placeholder="idProducto"></input></td>
                <td><input required name="nombre[]" placeholder="Nombredel Producto"></input></td>
                <td><input required name="cantida[]" placeholder="Cantidad"></input></td>
                <td><input required name="precio[]" placeholder="Precio Entrada"></input></td>


                <td class="eliminar"><button type="submit" value="Menos -" class="btn btn-success"><span class="glyphicon glyphicon-minus"
                 aria-hidden="true"></span></button></td>
              </tr>

            </table>

                <div class="btn-der">
                <button id="adicional" name="adicional" type="button" class="btn-success btn-lg"><span class="glyphicon glyphicon-plus-sign"
                 aria-hidden="true"></span><strong></strong></button>
                 <input type="submit" name="insertar" value="Insertar Registros " class="btn btn-primary btn-lg"  />
              </div>

            </table>
          </form>

          <!-- INSERCIÓN-->
          <?php
          if(isset($_POST['insertar']))
          {
            $registro1=($_POST['fecha']);
            $registro2=($_POST['producto']);
            //$registro3=($_POST['nombre']);
            $registro4=($_POST['cantidad']);
            $registro5=($_POST['precio']);
              /////Separamos los valores

              while (true) {
                # code...//Creamos el arreglo para recuperar los valores
                $dato1=current($registro1);
                $dato1=current($registro2);
                $dato4=current($registro4);
                $dato5=current($registro5);

                //Asignamos los valores a una variable

           $date=(( $dato1 !== false) ? $dato1 : ", &nbsp;");
           $code=(( $dato2 !== false) ? $dato2 : ", &nbsp;");
           $cant=(( $item4 !== false) ? $dato4 : ", &nbsp;");
           $price=(( $item5 !== false) ? $dato5 : ", &nbsp;");

           //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
           $valores='('.$date.',"'.$code.'","'.$cant.'","'.$price.'"),';

           //////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
           $valoresQ= substr($valores, 0, -1);

           ///////// QUERY DE INSERCIÓN ////////////////////////////
           $sql = "INSERT INTO detalleEntradas (null, fechaIngreso, Cantidad, PrecioEntrada, codProducto,null)
         VALUES $valoresQ";


        $sqlRes=$conexion->query($sql) or mysql_error();


           //
           $dato1 = next( $registro1 );
           $dato2 = next( $registro2);
           $dato4 = next( $registro4 );
           $dato5 = next( $registro5 );

           // Check terminator
           if($dato1 === false && $dato2 === false && $dato4 === false && $dato5 === false) break;

              }
          }

          ?>
      </div>


      </header>

  </body>
</html>
