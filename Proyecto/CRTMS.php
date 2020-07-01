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
<style>
    .bg-company-red {
    background-color: #00618a;
}
</style>


</head>

<body>
    

    <section>
        <form method="post">
        <nav class="navbar navbar-expand-sm navbar-dark bg-company-red">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">CREAR TABLA MySQL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/relacionesMS.php">RELACIONES MySQL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/consultasMS.php">CONSULTAS SQL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/index.php">MOTORES DB</a>
    </li>
  </ul>
</nav>

            <div class="col-sm-4">
                <label for="nombreTabla"></label>
                <input type="text" class="form-control" name="nombreTabla" value="" placeholder="Nombre de la Tabla">
            </div><br>
            <div class="alert alert-success col-sm-4"> Ingresa como primer atributo la que sera tu llave primaria</div>


                  
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
                    <td class="eliminar"><input type="button" class="btn btn-danger" value="Eliminar Campo" /></td>
                </tr>
            </table>

            <div class="btn-der">
                <input type="submit" name="insertar" value="Crear Tabla" class="btn btn-primary"" />
                <button id="adicional" name="adicional" type="button" class="btn btn-success"> Agregar Campo </button>
               
            </div>
        </form>

        <?php

        //////////////////////// PRESIONAR EL BOTÓN //////////////////////////
        if (isset($_POST['insertar'])) {

            $nombreTabla =  ($_POST['nombreTabla']);
            $items1 = ($_POST['atributo']);
            $items2 = ($_POST['tipoDato']);

             
            ///////////// SEPARAR VALORES DE ARRAYS
            while (true) {


                $item1 = current($items1);
                $item2 = current($items2);

                $atributo = (($item1 !== false) ? $item1 : ", &nbsp;");
                $tipoDato = (($item2 !== false) ? $item2 : ", &nbsp;");


              if ($result = $conexion->query("SHOW TABLES LIKE '" . $nombreTabla . "'")) {
                if ($result->num_rows == 1) {
                  //  echo "Table exists";
                    $sql = "ALTER TABLE $nombreTabla add(
                        $atributo $tipoDato NOT NULL)";
    
                    if ($conexion->query($sql) === true) {
                     //   echo "La tabla se creó correctamente...";
                    } else {
                        die("Error al crear tabla: " . $conexion->error);
                    }
                } else {
                 //   echo "Table does not exist";
                    $sql = "CREATE TABLE $nombreTabla(
                        $atributo $tipoDato PRIMARY KEY)";
    
                    if ($conexion->query($sql) === true) {
                    //    echo "La tabla se creó correctamente...";
                    } else {
                        die("Error al crear tabla: " . $conexion->error);
                    }
                }
            }
                // Up! Next Value
                $item1 = next($items1);
                $item2 = next($items2);

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