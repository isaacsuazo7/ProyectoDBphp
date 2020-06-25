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
?>