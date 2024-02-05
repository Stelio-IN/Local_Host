<?php

    include 'gestor.php';
    include 'model.php';


    $func = new Funcionario();
    $func->setNome('Involution');
    $func->setCargo('Gerente');
    $func->setPassword('abc123');

    $client = new Cliente();
    $client->setNome('Acacio');
    $client->setTelefone('878873084');
    $client->setPassword('abc123');

    echo    '<h1> Cliente: </h1> <br> ' .$client->getNome().'<br>';
    echo     $client->getTelefone().'<br>';
    echo     $client->getPassword().'<br> <hr>';

    echo    '<h1> Funcionario: </h1> <br> ' .$func->getNome().'<br>';
    echo     $func->getCargo().'<br>';
    echo     $func->getPassword().'<br>';

    $obj = new Gestor();

    //Inserir Clientes
    $params = array(
        ':nome' => $client->getNome(),
        ':telefone' => $client->getTelefone(),
        ':senha' => password_hash( $client->getPassword(), PASSWORD_DEFAULT)
    );
    $obj->EXE_NON_QUERY('INSERT INTO clientes VALUES(0, :nome, :telefone, :senha)',$params);