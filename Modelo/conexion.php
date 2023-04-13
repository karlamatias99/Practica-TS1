<?php
$host = "localhost";
$DB = "maiz";
$usuario = "root";
$pass = "12345";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$DB", $usuario, $pass);
    /*if ($conexion) {
        echo "Conectando a sistema";
    }*/

} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>