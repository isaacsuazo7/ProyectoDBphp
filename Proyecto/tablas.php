<?php
    $servidor = "localhost";
    $usuario = "root";
    $contraseña ="";
    $bd="proyectodb";
    
    $conexion = mysqli_connect($servidor, $usuario,$contraseña,$bd);
    
    if($conexion){
        echo "Conexion exitosa";
    }else{
        echo "Error de conexion";
    }

    
$nombreTabla=$_POST['nombreTabla'];
$a1= $_POST['a1'];
$a2= $_POST['a2'];
$a3= $_POST['a3'];
$a4= $_POST['a4'];
$t1= $_POST['t1'];
$t2= $_POST['t2'];
$t3= $_POST['t3'];
$t4= $_POST['t4'];

    $sql = "CREATE TABLE $nombreTabla(
        $a1 $t1 PRIMARY KEY,
        $a2 $t2 NOT NULL,
        $a3 $t4 NOT NULL,
        $a4 $t4 NOT NULL)";

    if($conexion->query($sql) === true){
        echo "La tabla se creó correctamente...";
    }else{
        die("Error al crear tabla: " . $conexion->error);
    }

        $conexion->close();

?>