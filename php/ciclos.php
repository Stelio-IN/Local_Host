<?php
/* ------------------------  while -----------------------------*/
echo '<p> Ciclo while <p>';
$x = 0;
while($x < 10){
    echo 'Valor de x: '.$x;
    $x++; 
    echo '<br>';
}

echo '<hr>';
/* ------------------------  Do while -----------------------------*/
echo '<p> Ciclo Do while <p>';
$x = 0;
do{
    echo 'Valor de x: '.$x;
    $x++; 
    echo '<br>';
}while($x < 10);

echo '<hr>';
/* ------------------------  for -----------------------------*/
echo '<p> Ciclo For Normal<p>';
    for($i = 0; $i<10;$i++){
        echo 'Valor de x: '.$i;
        echo '<br>';
    }
    #forma aleatoria
    $i = 1;
    for(;$i<20;){
        $i++;
    }
    echo '<hr>';
    echo '<p> Ciclo For com parametros aumentados<p>';
    #o primeiro e ultimo parametro podem ser devididos em varios parametros usando virgula
    for($cont =1, $x = 15, $y=5; $cont<= $x;$cont++,$x--){
        echo 'Valor de X: '.$x.'<br>';
        echo 'Valor de cont: '.$cont.'<br>';
        echo 'Valor de y: '.$y.'<br>';
    }



/* ------------------------  while -----------------------------*/