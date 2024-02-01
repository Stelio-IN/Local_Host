<?php 

    //informar se api esta a funcionar
    $resposta = array(
        'status' => 'SUCCESS',
        'message' => 'A API esta a funcionar corretamente',
        'data' => array(),
        'resques_id'=> time()
    );

    echo Json_encode($resposta,JSON_PRETTY_PRINT);
    #echo Json_encode($resposta,128)
?>