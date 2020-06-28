<?php

if(isset($_REQUEST['btn_guardar'])){
    include("../Conexion/conexion.php");

    $at1= $_POST['a1'];
    $at2= $_POST['a2'];
    $at3= $_POST['a3'];
    $at4= $_POST['a4'];

    $sql="INSERT INTO persona(id,nombre,edad,correo)VALUES('$at1','$at2','$at3','$at4')";

    $ejecutar = mysqli_query($conexion,$sql);

    if($ejecutar){
        header("Location:CRUD.php");
    }
}


?>