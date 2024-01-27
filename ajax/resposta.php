<?php
    $nomes = array(
        array(
            'nome'=>'Joao',
            'apelido'=>'Ribeiro'
        ),
        array(
            'nome'=>'Stelio',
            'apelido'=>'Mondlane'
        ),
        array(
            'nome'=>'Ana',
            'apelido'=>'Paula'
        )
    );

    echo json_encode($nomes);