<?php

    class Idade
    {
        private $idade =0;

        public function setIdade($valor){
            //verificar se e um numero
            if(is_numeric($valor)){
                $this->idade = $valor;
            }
        }

        public function getIdade(){
            return $this->idade;
        }
    }

    $teste = new Idade();
    $teste->setIdade(23);
    echo $teste->getIdade();