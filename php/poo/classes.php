<?php

class Humano
{
    public $nome;
    public $apelido;

    function __construct($n, $p)
    {
        $this->nome = $n;
        $this->apelido = $p;
    }

    public function nomeCompleto()
    {

        return $this->nome . ' ' . $this->apelido;
    }
}

$homem = new Humano('Stelio', 'Mondlane');
$homem->nome = 'Invo';
$homem->apelido = 'IN';

echo $homem->nomeCompleto().'<br>';


/* --------------------------- Classes anonimas ------------------------------ */
$b = new class{
    function teste(){
        echo 'classe anonima';
    }
};

$b->teste();