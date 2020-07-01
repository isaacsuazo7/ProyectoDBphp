<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "proyectodb";
$dato1 = "";
$dato2 = "";
$dato3 = "";


$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd);
if ($conexion) {
} else {
    echo "Error de conexion";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=no,initial-scale=1, maximum-scale=1, minimum-scale=1">
    <title>SGBD-Relaciones</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>

<Body>
    <form method="post">
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">RELACIONES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/CRUD.php">CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/insertar_registros.php">CREAR
                        TABLA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </nav>
        <br>
        <header>
            <h1>RELACIONES ENTRE TABLAS</h1>

        </header>


        <tr>
            Selecciona las tablas que quieres relacionar
        </tr><br><br>

        <label>Primera Tabla</label>



        <<select name="tabla1">
            <?php
            $query1 = $conexion->query("SHOW TABLES FROM $bd");
            while ($valores = mysqli_fetch_array($query1)) {
                if ($valores) {
                    echo "<option selected value='$valores[0]'>$valores[0]";
                } else {
                    echo "<option value='$valores[0]'>$valores[0]";
                }
            }
            ?>
            </select><br><br>

            <label>Tipo de Relacion</label>

            <select name="tiporelacion">
                <option value="A">Uno a Uno</option>
                <option value="B">Uno a Muchos</option>
                <option value="C">Muchos a Muchos</option>
            </select><br><br>


            <label>Segunda Tabla</label>

            <select name="tabla2" id="tabla2">

                <?php
                $query2 = $conexion->query("SHOW TABLES FROM $bd");
                while ($valores = mysqli_fetch_array($query2)) {
                    if ($valores) {
                        echo "<option selected value='$valores[0]'>$valores[0]";
                    } else {
                        echo "<option value='$valores[0]'>$valores[0]";
                    }
                }



                ?>


            </select><br><br>


            <div class="btn-der">
                <input type="submit" name="insertar" value="Confirmar" class="btn btn-primary"" />
            </div>
        <br>


        <label>Seleccionar cual sera la llave Foranea</label>
        <br> <br>
        <select name="Atributos">
                <option value="FK">Crear nuevo atributo foraneo</option>

                <?php

                if (isset($_POST['insertar'])) {
                    echo $tabla2 =  ($_POST['tabla2']);
                    echo $tabla1 = ($_POST['tabla2']);
                    $query3 = $conexion->query("SHOW COLUMNS FROM $tabla2");
                    while ($valores = mysqli_fetch_array($query3)) {
                        if ($valores) {
                            echo "<option selected value='$valores[0]'>$valores[0]";
                        } else {
                            echo "<option value='$valores[0]'>$valores[0]";
                        }
                    }

                    //echo $columna;
                }

                
              /*  if (isset($_POST['salvar'])) {
                    echo $tabla2;
                    echo $columna = ($_POST['Atributos']);
                    $query4 = "ALTER TABLE $tabla2 ADD INDEX($columna)";
                    if ($ejecutar = $conexion->query($query4) === true) {
                        echo "El Indice se creó correctamente...";
                    } else {
                        die("Error al crear indice: " . $conexion->error);
                    }
    
    
                    $conexion->close();

                    //echo $columna;
                }*/
                echo $tabla2;
                 echo $columna = ($_POST['Atributos']);

                ?>

                </select><br><br>







                <div class="btn-salvar">
                    <input type="submit" name="salvar" value="Relacionar Tablas" class="btn btn-primary" />
                </div>

                <?php

                

                
                ?>





    </form>

</Body>

</html>