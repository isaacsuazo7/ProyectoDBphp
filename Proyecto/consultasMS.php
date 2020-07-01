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

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=no,initial-scale=1, maximum-scale=1, minimum-scale=1">
    <title>SGBD-Consultar</title>
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

<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-company-red">
        <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">CONSULTAS MySQL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/CRTMS.php">CREAR TABLA MySQL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/relacionesMS.php">RELACIONES SQL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/xampp/ProyectoDB/Proyecto/index.php">MOTORES DB</a>
    </li>
  </ul>
        </nav>

    <div class="container" style="width: 88%;height: 100%;max-width: 100%;margin: center;">
        <div class="row" style="width: 100%;height: 100%;">
            <div class="col s8">
                <br>
                <h5 class="blue-text">SQL QUERY</h5>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="textarea1">Ingrese una consulta SQL:</label>
                        <textarea class="form-control" name="consulta" id="consulta" rows="3"></textarea>
                    </div>
                    <div class="input-field">
                        <button type="submit" name="insertar" class="btn btn-primary btn-sm">Consultar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    //////////////////////// PRESIONAR EL BOTÓN //////////////////////////
    if (isset($_POST['insertar'])) {

        $consulta =  ($_POST['consulta']);
 
            if ($result = $conexion->query($consulta)) {
                echo '<br><div class="alert alert-success col-sm-4">Sentencia ejecutada</div>';
                    } else {
                        echo '<br><div class="alert alert-success col-sm-4">Sentencia ejecutada</div>';
            }

        }

    ?>
</body>

</html>