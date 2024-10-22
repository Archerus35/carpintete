<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['username']; ?></h2>
    <p>Este es el panel de control de la carpintería.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
