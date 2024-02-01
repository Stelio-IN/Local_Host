<?php
    include 'gestor.php';

    $bd = new Gestor();
    $dados = $bd->EXE_QUERY("SELECT * FROM clientes");

    echo Json_encode($dados, 128);
?>