<?php
include('conexion.php');

// Verificamos que los datos hayan llegado por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    // Encriptamos la contraseña (recomendado)
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Preparamos la consulta
    $sql = "INSERT INTO usuarios (nombre, email, password, rol)
            VALUES ('$nombre', '$email', '$password_hash', '$rol')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Usuario registrado correctamente.";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
