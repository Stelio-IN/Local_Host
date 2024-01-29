<?php
//passar um array por cookies
/*
$dados = array(
    'nome' => 'Stelio',
    'apelido' => 'Mondlane',
    'idade'=> 23
);
#json_encode(obj,128)- converter um obj em string 
setcookie('dados',json_encode($dados, 128),time()+100000);
*/

$dados = json_decode($_COOKIE['dados'], 128);

#echo 'Ola, '.$dados['nome'].' '.$dados['apelido'].' de '.$dados['idade'].' anos';
#echo '<pre>';
#print_r($dados);

#apagar cokiee
setcookie('dados','',time()-1);