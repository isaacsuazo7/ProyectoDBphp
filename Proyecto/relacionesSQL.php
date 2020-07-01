<?php
$serverName = "DESKTOP-K68U46E\SQLEXPRESS"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"proyectodb");
$conexion = sqlsrv_connect( $serverName, $connectionInfo);

if( $conexion ) {
    // echo "Conexión establecida.<br />";
}else{
    // echo "Conexión no se pudo establecer.<br />";
     die( print_r(sqlsrv_error(), true));
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
    background-color: #d02a27;
}
</style>

</head>

<Body>
    <form method="post">
    <nav class="navbar navbar-expand-sm navbar-dark bg-company-red">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">RELACIONES SQL SERVER</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/CRSQL.php">CREAR TABLA SQL SERVER</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/consultasSQL.php">CONSULTAS SQL SERVER</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/index.php">MOTORES SQL</a>
    </li>
  </ul>
</nav>
        <br>
        <header>
            <h2 style="color:red;text-align:center;">RELACIONES ENTRE TABLAS</h2>

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
                       $vista1 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA. COLUMNS WHERE TABLE_NAME = '$tabla1'";
                        $query1 = sqlsrv_query($conexion,$vista1);
                        $val = sqlsrv_fetch_array($query1);
                        $string = "{$val[0]}";


                        $query5 = "USE proyectodb ALTER TABLE $tabla2 ADD CONSTRAINT FK_$tabla1$tabla2 FOREIGN KEY ($fk) REFERENCES $tabla1($string);";

                        if ($ejecuta = sqlsrv_query($conexion,$query5)) {
                            echo '<br><div class="alert alert-success col-sm-4">Relacion realizada con exito</div>';
                        } else {
                            die( print_r( sqlsrv_errors(), true));
                        }
                    } else if($relacion =="3"){
                        $vista2 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA. COLUMNS WHERE TABLE_NAME = '$tabla1'";
                        $query11 = sqlsrv_query($conexion,$vista2);
                        $val7 = sqlsrv_fetch_array($query11);
                        $id1 = "{$val7[0]}";

                        $vista3 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA. COLUMNS WHERE TABLE_NAME = '$tabla2'";
                        $query12 = sqlsrv_query($conexion,$vista3);
                        $val8 = sqlsrv_fetch_array($query12);
                        $id2 = "{$val8[0]}";

                        $nuevaTabla = $tabla1.'_'.$tabla2;

                        $query6 = "CREATE TABLE dbo.$nuevaTabla (id INT PRIMARY KEY, $id1 INT NOT NULL, $id2 INT NOT NULL)";

                        $query7= "ALTER TABLE dbo.$nuevaTabla WITH CHECK ADD  CONSTRAINT $id1 FOREIGN KEY($id1) REFERENCES dbo.$tabla1 ($id1)";

                        $query8="ALTER TABLE dbo.$nuevaTabla  WITH CHECK ADD  CONSTRAINT $id2 FOREIGN KEY($id2) REFERENCES dbo.$tabla2 ($id2)";

                        $query9 = "ALTER TABLE dbo.$nuevaTabla CHECK CONSTRAINT $id1";
                        
                        $query10 ="ALTER TABLE dbo.$nuevaTabla CHECK CONSTRAINT $id2";

                        if ($ejecuta = sqlsrv_query($conexion,$query6)) {
                         //   echo "La llave foranea se creó correctamente...";
                        } else {
                            die( print_r( sqlsrv_errors(), true));
                        }
                        if ($ejecuta = sqlsrv_query($conexion,$query7)) {
                          //  echo "La llave foranea se creó correctamente...";
                        } else {
                            die( print_r( sqlsrv_errors(), true));
                        }
                        if ($ejecuta = sqlsrv_query($conexion,$query8)) {
                          //  echo "La llave foranea se creó correctamente...";
                        } else {
                            die( print_r( sqlsrv_errors(), true));
                        }
                        if ($ejecuta = sqlsrv_query($conexion,$query9)) {
                          //  echo "La llave foranea se creó correctamente...";
                        } else {
                            die( print_r( sqlsrv_errors(), true));
                        }
                        if ($ejecuta = sqlsrv_query($conexion,$query10)) {
                            echo '<br><div class="alert alert-success col-sm-4">Relacion muchos a muchos realizada con exito</div>';
                        } else {
                            die( print_r( sqlsrv_errors(), true));
                        }

                    }

                    //echo $columna;
                }

                ?>

    </form>

</Body>

</html>