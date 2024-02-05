<?php

class Animal
{
    public function mover()
    {
        echo 'Mover da classe base';
    }
}

class Peixe extends Animal
{
    public function mover()
    {
        echo 'Mover da classe Derivada';
    }
}

$peixe = new Peixe();
$peixe->mover();


class Retangulo
{
    public $largura, $altura;

    function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $a;
    }
    function area(){
        return $this->altura * $this->largura;
    }
}
class Quadrado extends Retangulo
{
    //Pegado o construtor da classe pai  e adptando a classe filha, reduzindo assim o cod
    function __construct($l)
    {
        parent:: __construct($l,$l);
    }
}

//instaciando os objs e usando o metodo da classe pai
$quadrado = new Quadrado(5);
$retangulo = new Retangulo(5,4);
echo 'Aredo do quadrado e: '.$quadrado->area();
echo 'Aredo do Retangulo e: '.$retangulo->area();

/* ----------------------------------------------------*/
#Final- para impedir o override

class Veiculo{
    final function mover(){}
}

class Bicicleta extends Veiculo
{
    #a funcao nao pode ser sobscrita 
   /* function mover(){

    }*/
}

final class Teste{}
#nao aceita devido ao atributo final 
//class teste1 extends Teste{}