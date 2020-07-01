<?php


$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "proyectodb";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd);

if ($conexion) {
} else {
}

//Saber que tablas tiene mi bd
$query = $conexion->query("SHOW TABLES FROM $bd");
while ($valores = mysqli_fetch_array($query)) {
    if ($valores) {
        echo "<option selected value='$valores[0]'>$valores[0]";
    } else {
        echo "<option value='$valores[0]'>$valores[0]";
    }
}

//Saber cuantas tablas tiene mi bd
$query2 = $conexion->query("SELECT COUNT(*) numero_de_tablas FROM information_schema.tables WHERE table_schema='$bd'");

$string = '';
$i = 0; // init counter
while ($row = mysqli_fetch_array($query2)) {
     $string .= $row[$i];
}
echo $string;

//Si una tabla ya existe



$resultado = $conexion->query("SHOW TABLES FROM $bd");

$table="animal";
if ($result = $conexion->query("SHOW TABLES LIKE '".$table."'")) {
    if($result->num_rows == 1) {
        echo "Table exists";
    }else {
    echo "Table does not exist";
}}





//$sql = "SHOW TABLES FROM $bd";
$sqll = "SHOW COLUMNS FROM persona";

$resultado = mysqli_query($conexion, $sqll);

if (!$resultado) {
    echo "Error de BD, no se pudieron listar las tablas\n";

    exit;
}

while ($fila = mysqli_fetch_row($resultado)) {
    echo "{$fila[0]}\n";
}

$query5 = $conexion->query("SHOW COLUMNS FROM persona");
        while ($valores = mysqli_fetch_array($query5)) {
            if ($valores) {
                echo "<option selected value='$valores[0]'>$valores[0]";
            } else {
                echo "<option value='$valores[0]'>$valores[0]";
            }
        }

// 2) Preparar la orden SQL
$query6 = $conexion->query("SELECT * FROM persona");

// 4) Ir Imprimiendo las filas resultantes
while ($fiila =mysqli_fetch_array($query6)){
echo "<p>";
echo $fiila ["id"];
echo "-"; // un separador
echo $fiila["nombre"];
echo "-"; // un separador
echo $fiila ["email"];
echo "-"; // un separador
echo "</p>";
}


echo  phpinfo();



//mysqli_free_result($resultado);
