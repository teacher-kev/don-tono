<?php
session_start();
include("php/conexion.php");

// Proteger la página
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}

// Obtener datos del usuario
$id = $_SESSION['usuario_id'];

$sql = "SELECT nombre, correo, rol FROM usuarios WHERE usuarioID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light min-vh-100">

    <div class="container py-4">
        <div class="row justify-content-center">

            <div class="col-12 col-sm-10 col-md-8 col-lg-6">

                <div class="card shadow p-3 p-md-4">
                    <h3 class="mb-4 text-center">Perfil del Usuario</h3>

                    <p><strong>Nombre:</strong> <?php echo $usuario['nombre']; ?></p>
                    <p><strong>Correo:</strong> <?php echo $usuario['correo']; ?></p>
                    <p><strong>Rol:</strong> <?php echo $usuario['rol']; ?></p>

                    <div class="d-grid mt-4">
                        <a href="index.php" class="btn btn-secondary">
                            Volver
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
