<?php 

    include 'gestor.php';

    $gestor = new Gestor();

    $clientes = $gestor->EXE_QUERY("SELECT id_cliente, nome FROM clientes ORDER BY nome ASC");

    //128- constante equivalente a print
    echo json_encode($clientes,128);