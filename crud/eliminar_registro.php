<?php
// Validar e obter o ID
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // ID inválido, redirecionar ou exibir mensagem de erro
    header("Location: index.php");
    exit;
}

// Eliminar o registro
include 'gestor.php';
$gestor = new Gestor();
$parametros = array(
    ':id_user' => $id
);

try {
    $gestor->EXE_NON_QUERY('DELETE FROM usuarios WHERE id = :id_user', $parametros);

    // Redirecionar para a página inicial com uma mensagem de êxito
    header("Location: index.php?mensagem=Usuário excluído com sucesso");
    exit;
} catch (Exception $e) {
    // Lidar com exceções, redirecionar ou exibir mensagem de erro
    header("Location: index.php?mensagem=Erro ao excluir usuário");
    exit;
}
?>
