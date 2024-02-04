<?php
/* ------------------------  while -----------------------------*/
echo '<p> Ciclo while <p>';
$x = 0;
while ($x < 10) {
    echo 'Valor de x: ' . $x;
    $x++;
    echo '<br>';
}

echo '<hr>';
/* ------------------------  Do while -----------------------------*/
echo '<p> Ciclo Do while <p>';
$x = 0;
do {
    echo 'Valor de x: ' . $x;
    $x++;
    echo '<br>';
} while ($x < 10);

echo '<hr>';
/* ------------------------  for -----------------------------*/
echo '<p> Ciclo For Normal<p>';
for ($i = 0; $i < 10; $i++) {
    echo 'Valor de x: ' . $i;
    echo '<br>';
}
#forma aleatoria
$i = 1;
for (; $i < 20;) {
    $i++;
}
echo '<hr>';
echo '<p> Ciclo For com parametros aumentados<p>';
#o primeiro e ultimo parametro podem ser devididos em varios parametros usando virgula
for ($cont = 1, $x = 15, $y = 5; $cont <= $x; $cont++, $x--) {
    echo 'Valor de X: ' . $x . '<br>';
    echo 'Valor de cont: ' . $cont . '<br>';
    echo 'Valor de y: ' . $y . '<br>';
}


echo '<hr>';
/* ------------------------  foreach -----------------------------*/
echo '<p> Ciclo foreach<p>';
$nomes = ['Stelio', 'Acacio', 'Mondlane'];
foreach ($nomes as $nome) {
    echo $nome . '<br>';
}

$capitais = [
    'Mocambique' => 'portugal',
    'portugal' => 'Lisboa',
    'brazil' => 'Brasilia'
];
//Editificacao da chave e valor ($c as $k =>$v)- keyvaluepar 
foreach ($capitais as $key => $value) {
    echo "Para o pais $key a capital e $value <br>";
}

/* ------------------------  controlador de fluxo -----------------------------*/

for ($i = 0; $i < 20; $i++) {
    if ($i == 10) {
        break; #para o loop
    }
}
for ($i = 0; $i < 20; $i++) {
    if ($i == 10) {
        continue; #volta a linha inicial do loop
    }
}


//Passar vario parametros em uma function
function funcao_mista(...$argumentos)
{
    foreach ($argumentos as $v) {
        echo "$v<br>";
    }
}
funcao_mista(10, 15, 16, 25, 30);

#funcao anonima
$a = function(){
    return 'Funcao anonima';
};

function fatorial($n)
{
    if ($n == 1) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}
$resultado = fatorial(5);
echo "O fatorial de 5 é: " . $resultado;