<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo'];
    $descripcion = $_POST['descripcion'];
    $ubicacion = $_POST['ubicacion'];
    $usuario_id = $_POST['usuario_id']; // Esto normalmente lo sacás de la sesión

    $sql = "INSERT INTO alertas (tipo, descripcion, ubicacion, usuario_id)
            VALUES ('$tipo', '$descripcion', '$ubicacion', '$usuario_id')";

    if ($conn->query($sql) === TRUE) {
        echo "🚨 Alerta enviada con éxito.";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
