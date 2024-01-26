<?php

    //validar dados sempre cooll
    /*
        verificar se ja existe um usuario com o mesmo nome...
            SIM- notificar
            NAO - Guardar
    */
    include 'gestor.php';
    $gestor = new Gestor();

    //Verificar se existe um user com mesmo nome
    $parametros = array(
        ':user' => $_POST['text_usuario']);
    $resultado = $gestor->EXE_QUERY("SELECT user FROM usuarios WHERE user = :user",$parametros);
    if(count($resultado)!=0){
        //se existir um user com o mesmo nome
        echo '<h3>ERRO, esse usuario ja foi registrado</h3>';
        echo '<a href="formulario_novo_usario.php"> voltar</a>';   
    }else{
        //Preparar os dados 
        $parametros = array(
            ':user' => $_POST['text_usuario'],
            ':pass' => password_hash($_POST['text_password'], PASSWORD_DEFAULT)
        );

        //guradar dados
        $gestor->EXE_NON_QUERY("
            INSERT INTO usuarios(user,password,created_at) VALUES(:user,:pass, NOW())
        ",$parametros);
        
        echo '<h3>Usuario Adicionado<h3>';
        echo '<a href="index.php"> voltar</a>';
    }
?>