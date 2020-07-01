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

<style>
    .container {
        position: relative;
        width: 50%;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #5d87a0;
        overflow: hidden;
        width: 100%;
        height: 100%;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-transition: .3s ease;
        transition: .3s ease;
    }

    .overlay2 {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #a91d22;
        overflow: hidden;
        width: 100%;
        height: 100%;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
        -webkit-transition: .3s ease;
        transition: .3s ease;
    }

    .container:hover .overlay {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    .container:hover .overlay2 {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }

    .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }


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

    <nav class="navbar navbar-light bg-light">

    </nav><br>

    <h2 style="color:white;text-align:center;">
        Escoge tu motor de Base de Datos
    </h2><br><br>



    <div class="container d-flex flex-row justify-content-center alig-items-center">
        <div class="card-group">

            <div class="row">

                <div class="card col-sm-6">
                    <img src="./Images/mysql.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                        <div class="text">MySQL</div>
                        <a href="http://localhost/xampp/ProyectoDB/Proyecto/CRTMS.php" class="stretched-link"></a>
                    </div>
                    <div class="card-body">
                    </div>
                </div>

                <div class="card col-sm-6">
                    <img src="./Images/sql.jpg" alt="Avatar" class="image">
                    <div class="overlay2">
                        <div class="text">SQL SERVER</div>
                        <a href="http://localhost/xampp/ProyectoDB/Proyecto/CRSQL.php" class="stretched-link"></a>
                    </div>
                    <div class="card-body">
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>








</html>