<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$baseDeDatos = "ambualert";

// Crear la conexión
$conexion = new mysqli($host, $usuario, $contrasena, $baseDeDatos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("❌ Error en la conexión: " . $conexion->connect_error);
}

// Opcional: evita problemas con acentos, ñ, etc.
$conexion->set_charset("utf8");

// ⚠️ No cierres la conexión aquí, ¡porque aún la necesitas usar en otros archivos!
?>
