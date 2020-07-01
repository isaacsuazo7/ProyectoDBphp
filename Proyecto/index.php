<?php
//header("Location: ../form_validation.php?proceso=$_Proceso");
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "proyectodb";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd);


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

<body>

</body>

<!--<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="./Images/mysql.jpg" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">SQL SERVER</p>
    </div>
</div>
</div>-->

<style>
    img {
        max-width: 100%;
        max-height: 100%;
        padding-top: 5px;
        padding-bottom: 0.05px;
    }

    h1 {
        color: green;
    }

    body {
        background: url('./Images/fondo.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }
</style>
</head>

<body>
    <h1 style="color:white;text-align:center;">
        LGBTXHDERBEZ
    </h1>
    <h2 style="color:white;text-align:center;">
        Escoge tu motor de Base de Datos
    </h2>

    <div class="container d-flex flex-row justify-content-center alig-items-center">
        <div class="card-group">

            <div class="row">

                <div class="card col-sm-6">

                    <a href="http://localhost/xampp/ProyectoDB/Proyecto/insertar_registros.php"><img class="card-img-top" src="./Images/mysql.jpg"></a>

                    <div class="card-body">
                    </div>
                </div>

                <div class="card col-sm-6">
                <a href="http://localhost/xampp/ProyectoDB/Proyecto/CRSQL.php"><img class="card-img-top" src="./Images/sql.jpg"></a>

                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>








</html>