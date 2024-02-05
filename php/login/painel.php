<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit();
}

echo '<h2>Bem-vindo, ' . $_SESSION['usuario_nome'] . '</h2>';
echo '<p>Tipo de Usuário: ' . $_SESSION['usuario_tipo'] . '</p>';
echo '<a href="logout.php">Logout</a>';
?>
