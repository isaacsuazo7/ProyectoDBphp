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
    <style>
    .bg-company-red {
    background-color: #00618a;
}
</style>

</head>

<Body>
    <form method="post">
        <nav class="navbar navbar-expand-sm navbar-dark bg-company-red">
        <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">RELACIONES MySQL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/CRTMS.php">CREAR TABLA MySQL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/consultasMS.php">CONSULTAS SQL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/index.php">MOTORES DB</a>
    </li>
  </ul>
        </nav>
        <br>
        <header>
        <h2 style="color:black;text-align:center;">RELACIONES ENTRE TABLAS</h2>

        </header>

        <table class="table table-secondary" id="tabla">
            <thead>
                <tr>
                    <th>Primera Tabla</th>
                    <th>Tipo de relacion</th>
                    <th>Segunda Tabla</th>
                    <th>Llave foranea</th>
                    <th></th>
                </tr>
            </thead>
            <tr class="fila-fija">
                <td><input class="form-control" required name="tabla1" placeholder="Primera Tabla" /></td>
                <td><select class="form-control" class="selectpicker" name="tipoRelacion" style="width:170px;" />
                    <option value="" disabled selected>Tipo Relacion</option>
                    <option value="1">Uno a Uno</option>
                    <option value="2">Uno a Muchos</option>
                    <option value="3">Muchos a Muchos</option>
                    </select>
                </td>
                <td><input class="form-control" required name="tabla2" placeholder="Segunda Tabla" /></td>
                <td><input class="form-control" required name="fk" placeholder="Llave Foranea" /></td>
            </tr>
        </table>

        <div class="btn-der">
            <input type="submit" name="insertar" value="Relacionar" class="btn btn-primary"" />
            </div>
        <br>


                <?php
                if (isset($_POST['insertar'])) {
                    $tabla2 =  ($_POST['tabla2']);
                    $tabla1 = ($_POST['tabla1']);
                    $fk = ($_POST['fk']);
                    $relacion = ($_POST['tipoRelacion']);

                    if ($relacion == "1" || $relacion=="2") {

                        $query1 = $conexion->query("SHOW COLUMNS FROM $tabla1");
                        $val = mysqli_fetch_array($query1);
                        $string = "{$val[0]}";
                        



                         $query5 = "ALTER TABLE $tabla2 ADD FOREIGN KEY ($fk) REFERENCES $tabla1($string)";

                         $query4 = "ALTER TABLE $tabla2 ADD INDEX ($fk)";

                        if ($ejecutar = $conexion->query($query4) === true) {
                           // echo "El Indice se creó correctamente...";
                        } else {
                            die("Error al crear indice: " . $conexion->error);
                        }

                        if ($ejecuta = $conexion->query($query5) === true) {
                          //  echo "La llave foranea se creó correctamente...";
                        } else {
                            die("Error al crear la llave: " . $conexion->error);
                        }
                    } else if($relacion =="3"){
                        $query7 = $conexion->query("SHOW COLUMNS FROM $tabla1");
                        $val7 = mysqli_fetch_array($query7);
                        $id1 = "{$val7[0]}";

                        $query8 = $conexion->query("SHOW COLUMNS FROM $tabla2");
                        $val8 = mysqli_fetch_array($query8);
                        $id2 = "{$val8[0]}";

                        $nuevaTabla = $tabla1.'_'.$tabla2;

                        $query6 = "CREATE TABLE `proyectodb`.`$nuevaTabla` (`id` INT PRIMARY KEY,
                        `$id1` INT NOT NULL,
                        `$id2` INT NOT NULL,
                         INDEX `$id1` (`$id1` ASC),
                         INDEX `$id2` (`$id2` ASC),
                         FOREIGN KEY (`$id1`)
                         REFERENCES `proyectodb`.`$tabla1`(`$id1`)
                         ON DELETE CASCADE
                         ON UPDATE CASCADE,
                         FOREIGN KEY (`$id2`)
                         REFERENCES `proyectodb`.`$tabla2`(`$id2`)
                         ON DELETE CASCADE
                         ON UPDATE CASCADE)";

                         if ($ejecutar = $conexion->query($query6) === true) {
                            echo "Se creo la tabla relacion muchos a muchos...";
                        } else {
                            die("Error al crear tabla relacion: " . $conexion->error);
                        }

                    }

                }

                ?>

    </form>

</Body>

</html>