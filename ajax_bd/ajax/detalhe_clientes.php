<?php 

    include 'gestor.php';

    $gestor = new Gestor();

    $parametros = array(
       ':id' => $_POST['id']
    );
    $detalhe_cliente = $gestor->EXE_QUERY("SELECT * FROM  clientes where id_cliente = :id",$parametros);

    //128- constante equivalente a print
    echo json_encode($detalhe_cliente,128);