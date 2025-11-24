<?php
session_start();

// Verifica si hay sesión activa
if (!isset($_SESSION['id']) || !isset($_SESSION['nombre']) || !isset($_SESSION['rol'])) {
    header("Location: form_login.html");
    exit();
}

// Datos del usuario
$nombreUsuario = htmlspecialchars($_SESSION['nombre']);
$rolUsuario = htmlspecialchars($_SESSION['rol']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Control - AMBUALERT</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Bienvenido, <?php echo $nombreUsuario; ?> 🚑</h1>
    <p>Tu rol es: <strong><?php echo $rolUsuario; ?></strong></p>

    <nav>
        <ul>
            <li><a href="paramedico.html">Paramédicos</a></li>
            <li><a href="registro.html">Registrar Emergencia</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </nav>

    <section>
        <h2>Alertas activas</h2>
        <p>Aquí podrías listar emergencias desde la base de datos con PHP/MySQL 🏥.</p>
    </section>
</body>
</html>

