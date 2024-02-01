<?php
    include 'gestor.php';

    $bd = new Gestor();

    $parametros = array(
        'id_cliente' => $_GET['id']
    );
    $dados = $bd->EXE_QUERY("SELECT * FROM clientes WHERE id = :id_cliente",$parametros);

    echo Json_encode($dados, 128);

?>