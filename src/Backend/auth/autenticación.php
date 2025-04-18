<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: 404.php");
    exit();
}

$rol = $_SESSION['rol'];

$paginas_admin = [
    'tablero-admin.php',
    'estadisticas.php',
    'reportes.php',
    'bitacora-usuarios.php',
    'bases-datos.php',
    'lista-empleados.php',
    'permisos-vacaciones.php',
    'manual-usuario.php',
    'asistencias.php',
    'cesta-tickets.php'
];

$paginas_empleado = [
    'manual-usuario.php',
    'asistencias.php',
    'permisos-vacaciones.php',
    'tablero-empleados.php',
    'estadisticas.php',
    'reportes.php'
];

$current_page = basename($_SERVER['REQUEST_URI']);

if (($rol === 'Administrador' && !in_array($current_page, $paginas_admin)) ||
    ($rol === 'Empleado' && !in_array($current_page, $paginas_empleado))) {
    header("Location: 404.php");
    exit();
}
?>
