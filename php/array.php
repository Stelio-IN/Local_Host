<?php

/* ---------------------------------- Arrays Numericos -----------------------------------------*/
    #Declaracao normal
    $v1 = array(15,16,19,20);
    $v2 = [15,16,19,20];

    #adicionado valores e indices definidos
    $v3 =[
        2 => 100,
        3 => 50,
        4 => 25,
    ];
    #ou usar o push
    array_push($v3,15);
    echo $v3[3];

/* ---------------------------------- Arrays Associativos -----------------------------------------*/

    #esses array as keys sao do tipo string 
    $dados = [
        'nome' => 'stelio',
        'email' => 'stelioacaciomondlane@gmail.com',
        'telefone' => 842156451
    ];
    echo $dados['nome'];


