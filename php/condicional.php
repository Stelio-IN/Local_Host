<?php

/* ------------------------ If-Else  -----------------------------*/
    $nome = 'stelio';
    if($nome == 'stelio'){
        echo 'Yes';
    }elseif($nome =='mondlane'){
        echo 'Yes again';
    }else{
        echo 'No';
    }
/* ------------------------  switch  -----------------------------*/
    switch($nome){
        case 'stelio';
            echo 'Yes';
            break;
        case 'mondlane':
            echo 'Yes again';
            break;
        default:
            echo 'No';
            break;
    }

/* ------------------------  Operador ternario  -----------------------------*/
    $opcao =0;
    $nome = $opcao == 1 ? 'stelio' : 'Mondlane';
    #ou
    $opcao ==1 ? $nome = 'stelio' : 'Mondlane';

    echo $nome;

    #ternario na web
    /*
    <h2><?= $opcao == 1 ? 'stelio' : 'mondlane'?></h2>

    <h2 style="color: <?= $opcao == 1 ? 'red' : 'blue' ?>" > Texto com cor definida pelo php</h2>
    */
/* ------------------------ match -----------------------------*/
    #O match so pode executar uma linha de codigo
    $x = 1;
    echo match($x){
        2 => 'valor de x = 2',
        1 => 'valor de x =1',
        4,5,7 => 'valor de x = 4/7/5'
    };



/* ------------------------ If e switch usado mais para web  -----------------------------*/

    #there for if
    $valor = 5;
    if($valor==5):
        echo 'igual';
    else:
        echo '5 e diferente de '.$valor;
    endif;
    
    #Exemplo na web
    /*
        <?php if(true): ?>
            <div>Codigo html</div>
        <?php else: ?>
            <div>Outro Codigo html</div>
        <?php endif; ?>
    */

    #Aqui para o switch
    switch($valor):
        case 1:
            echo 'batatas';
            break;
        case 5:
            echo 'fritas';
            break;
        default:
            echo 'Error';
            break;
    endswitch;


       #Aqui para o switch
       switch($valor):
        case 1:
        case 2:
        case 3:
            echo 'batatas de 1 a 3';
            break;
        case 5:
            echo 'fritas de 5';
            break;
        default:
            echo 'Error';
            break;
    endswitch;
?>


<h2><?= $opcao == 1 ? 'stelio' : 'mondlane' ?></h2>

<h2 style="color: <?= $opcao == 1 ? 'red' : 'blue' ?>" > Texto com cor definida pelo php</h2>        