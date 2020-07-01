<?php
$serverName = "DESKTOP-K68U46E\SQLEXPRESS"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"proyectodb");
$conexion = sqlsrv_connect( $serverName, $connectionInfo);

if( $conexion ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r(sqlsrv_error(), true));
}


$insertar = "CREATE TABLE Per (
     PersonID int PRIMARY KEY,
     LastName varchar(255) NOT NULL,
     FirstName varchar(255) NOT NULL,
     Address varchar(255) NOT NULL,
     City varchar(255) NOT NULL)";

$vista1 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA. COLUMNS WHERE TABLE_NAME = 'Jungla'";
                        $query1 = sqlsrv_query($conexion,$vista1);
                        $val = sqlsrv_fetch_array($query1);
                        $string = "{$val[0]}";
                    echo $string;
?>

