<?php
//header("Location: ../form_validation.php?proceso=$_Proceso");
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "proyectodb";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd);

if ($conexion) {
} else {
}

?>

<html lang="es">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="css/estilos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  

    <script>
        $(function() {
            // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
            $("#adicional").on('click', function() {
                $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
            });

            // Evento que selecciona la fila y la elimina 
            $(document).on("click", ".eliminar", function() {
                var parent = $(this).parents().get(0);
                $(parent).remove();
            });
        });
    </script>



</head>

<body>
    

    <section>
        <form method="post">
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">CREAR TABLA</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/CRUD.php">CRUD</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/relaciones.php">RELACIONES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav>

            <div class="col-sm-4">
                <label for="nombreTabla"></label>
                <input type="text" class="form-control" name="nombreTabla" value="" placeholder="Nombre de la Tabla">
            </div><br>
            <div class="alert alert-success col-sm-4"> Ingresa como primer atributo la que sera tu llave primaria</div>


                  
          <!--  <div class="col l7 offset-l5" style="position:absolute; left:600px; top:15.95%">

                <div class="form-group">
                    <select class="form-control" class="selectpicker" name="relacionTabla" style="width:190px;" />
                    <option value="" disabled selected>Tabla a Relacionar</option>
                    <option value="bignit">persona</option>
                    <option value="binary(50)">animal</option>
                    <option value="bit">planta</option>
                    </select>
                </div>

            </div>

            <div class="col l7 offset-l5" style="position:absolute; left:850px; top:15.95%">

                <div class="form-group">
                    <select class="form-control" class="selectpicker" name="relacionTipo" style="width:170px;" />
                    <option value="" disabled selected>Tipo de Relacion</option>
                    <option value="bignit">Uno a uno</option>
                    <option value="binary(50)">Uno a Muchos</option>
                    <option value="bit">Muchos a Muchos</option>
                    </select>
                </div>

            </div>-->



            <table class="table table-secondary" id="tabla">
            <thead>
                <tr>
                    <th>Nombre Atributo</th>
                    <th>Tipo de Dato</th>
                    <th></th>
                </tr>
            </thead>
                <tr class="fila-fija">
                    <td><input class="form-control" required name="atributo[]" placeholder="Nombre Atributo" /></td>
                    <td><select class="form-control" class="selectpicker" name="tipoDato[]" style="width:170px;" />
                        <option value="" disabled selected>Tipo Dato</option>
                        <option value="bignit">bigint</option>
                        <option value="binary(50)">binary(50)</option>
                        <option value="bit">bit</option>
                        <option value="char(10)">char(10)</option>
                        <option value="date">date</option>
                        <option value="datetime">datetime</option>
                        <option value="decimal(18,0)">decimal(18,0)</option>
                        <option value="float">float</option>
                        <option value="INT">int</option>
                        <option value="money">money</option>
                        <option value="nchar(10)">nchar(10)</option>
                        <option value="ntext">ntext</option>
                        <option value="numeric(18,0)">numeric(18,0)</option>
                        <option value="nvarchar(50)">nvarchar(50)</option>
                        <option value="nvarchar(MAX)">nvarchar(MAX)</option>
                        <option value="text">text</option>
                        <option value="varchar(50)">varchar(50)</option>
                        <option value="varchar(max)">varchar(max)</option>
                        </select>
                    </td>
                    <td class="eliminar"><input type="button" class="btn btn-danger" value="Menos -" /></td>
                </tr>
            </table>

            <div class="btn-der">
                <input type="submit" name="insertar" value="Crear Tabla" class="btn btn-primary"" />
                <button id="adicional" name="adicional" type="button" class="btn btn-success"> Más + </button>
               
            </div>
        </form>

        <?php

        //////////////////////// PRESIONAR EL BOTÓN //////////////////////////
        if (isset($_POST['insertar'])) {

            $nombreTabla =  ($_POST['nombreTabla']);
            $items1 = ($_POST['atributo']);
            $items2 = ($_POST['tipoDato']);

             $separado1=implode(" ",$items1);
             $separado2=implode(" ",$items2);

             foreach($items1 as $key=>$value) {
               // echo ' indice es '.$key.' y el valor es '.$value;
            }
            ///////////// SEPARAR VALORES DE ARRAYS
            while (true) {

                //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
                $item1 = current($items1);
                $item2 = current($items2);

              //  echo "Primer ",$item1;


                ////// ASIGNARLOS A VARIABLES ///////////////////
                $atributo = (($item1 !== false) ? $item1 : ", &nbsp;");
                $tipoDato = (($item2 !== false) ? $item2 : ", &nbsp;");




                //echo $atributo;
                // echo $tipoDato;

                //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
                $valores = '("' . $atributo . '","' . $tipoDato . '"),';
             $valoresQ= substr($valores, 0, -1);
               // echo $nombreTabla;
              //  echo $valores;

              if ($result = $conexion->query("SHOW TABLES LIKE '" . $nombreTabla . "'")) {
                if ($result->num_rows == 1) {
                    echo "Table exists";
                    $sql = "ALTER TABLE $nombreTabla add(
                        $atributo $tipoDato  NOT NULL)";
    
                    if ($conexion->query($sql) === true) {
                        echo "La tabla se creó correctamente...";
                    } else {
                        die("Error al crear tabla: " . $conexion->error);
                    }
                } else {
                    echo "Table does not exist";
                    $sql = "CREATE TABLE $nombreTabla(
                        $atributo $tipoDato PRIMARY KEY)";
    
                    if ($conexion->query($sql) === true) {
                        echo "La tabla se creó correctamente...";
                    } else {
                        die("Error al crear tabla: " . $conexion->error);
                    }
                }
            }

 
                ///////// QUERY DE INSERCIÓN ////////////////////////////
             /*    $sql = "CREATE TABLE $nombreTabla(
                    $atributo $tipoDato  NOT NULL)";

                if ($conexion->query($sql) === true) {
                    echo "La tabla se creó correctamente...";
                } else {
                    die("Error al crear tabla: " . $conexion->error);
                }*/


                // Up! Next Value
                $item1 = next($items1);
                $item2 = next($items2);

                //echo ' ', $item1;
                //  echo $item2;


                // Check terminator
                if ($item1 === false && $item2 === false) break;
            }
        }

        ?>

    </section>

    <footer>
    </footer>


</body>

</html>