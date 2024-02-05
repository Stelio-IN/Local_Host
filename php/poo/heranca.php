<?php 

    class Animal
    {
        public $especie;
        public $peso;

        public function tipoEspecie(){
            return "este animal e um  $this->especie";
        }
    }

    class Mamifero extends Animal
    {
        public $numer_pernas;
        public $pelo;

        public function pernas(){
            return "Esse animal e um $this->especie tem  $this->numer_pernas pernas";
        }

    }

    $mamifero = new Mamifero();
    $mamifero->especie = 'homem';
    $mamifero->numer_pernas = 2;
    echo $mamifero->pernas();
    /*
    $cao = new Animal();
    $cao->especie = 'Mamifero';

    echo $cao->tipoEspecie();
    */
