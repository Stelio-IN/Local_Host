<?php
// Validar e obter dados do POST
$id = isset($_POST['id_user']) ? htmlspecialchars($_POST['id_user']) : '';
$user_name = isset($_POST['text_user']) ? htmlspecialchars($_POST['text_user']) : '';

// Validar se os dados necessários foram fornecidos
if (empty($id) || empty($user_name)) {
    echo 'Dados inválidos';
    echo '<p><a href="index.php">Voltar</a></p>';
    exit();
}

include 'gestor.php';
$gestor = new Gestor();

// Verificar se existe um usuário com o mesmo nome
$parametros = array(
    ':id_user' => $id,
    ':user' => $user_name
);

// Verificar usuários onde o nome é igual e o ID é diferente
$result = $gestor->EXE_QUERY('SELECT user FROM usuarios WHERE user = :user AND id <> :id_user', $parametros);

if (count($result) > 0) {
    echo 'Já existe um usuário com o mesmo nome';
    echo '<p><a href="index.php">Voltar</a></p>';
    exit();
}

// Atualizar dados do usuário
$gestor->EXE_NON_QUERY('UPDATE usuarios SET user = :user, updated_at = NOW() WHERE id = :id_user', $parametros);

// Redirecionar para a página inicial com mensagem de sucesso
header('Location: index.php?mensagem=Usuário atualizado com sucesso');
?>
