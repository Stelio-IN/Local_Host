<?php

/* ---------------------------------- Arrays Numericos -----------------------------------------*/
    #Declaracao normal
    $v1 = array(15,16,19,20);
    $v2 = [15,16,19,20];

    for($i = 0; $i < sizeof($v1); $i++){
        echo '{'.$v1[$i].'} ';
    }
    
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
    echo ' '.$dados['nome'];

/* ---------------------------------- Arrays Mistos -----------------------------------------*/
$dados = [
    0 =>10,
    'nome' => 'Stelio',
    1 => 15,
    'apelido' => 'Mondlane'
];

/* ---------------------------------- Arrays Multidemensionais -----------------------------------------*/

$dados = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11]
];
echo ' '.$dados[0][1];

$cidades = [
    'mocambique' => ['Maputo','gaza','sofala'],
    'brasil' => ['Brazilia','Sao paulo', 'Rio de Janeiro']
];
echo '  Eu sou de'.' '.$cidades['mocambique'][0];




