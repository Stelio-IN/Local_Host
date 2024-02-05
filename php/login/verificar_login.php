<?php
session_start();
include 'gestor.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $obj = new Gestor();

    $result = $obj->EXE_QUERY("SELECT * FROM usuarios WHERE email = :email", array(':email' => $email));

    if ($result) {
        $usuario = $result[0];
        #password_verify($senha, $usuario['senha'])
        if ($senha==$usuario['senha']) {
            // Login bem-sucedido
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            $_SESSION['usuario_tipo'] = $usuario['tipo'];

            switch($usuario['tipo']){
                case 'cliente':
                    header('Location: painel.php');
                    break;
                case 'funcionario':
                    header('Location: painel.php');
                    break;
                case 'gerente':
                    header('Location: painel.php');
                    break;
                default:
                    header('Location: login.php?erro=tipo_Invalido');
                    break;
            }       
            exit(); 
        } else {
            // Senha incorreta
            header('Location: login.php?erro=senha');
            exit();
        }
    } else {
        // Usuário não encontrado
        header('Location: login.php?erro=usuario');
        exit();
    }
} else {
    // Redirecionar para o formulário de login se o acesso direto a este script for tentado
    header('Location: login.php');
    exit();
}
?>
