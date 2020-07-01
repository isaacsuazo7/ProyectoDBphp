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

$vista="SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_NAME = 'Per'";
$ejecutar = sqlsrv_query($conexion,$vista, array(), array( "Scrollable" => 'static' ));

$row_count = sqlsrv_num_rows( $ejecutar );  
  
if ($row_count === false)  
   echo "\nerror\n";  
else if ($row_count >=0)  
   echo "\n$row_count\n"; 

 
?>

