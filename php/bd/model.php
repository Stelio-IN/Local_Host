<?php

    class Pessoa{
        private $id;
        private $nome;
        private $password;
        

        public function setNome($nome){
            $this->nome =$nome;
        }
        public function setPassword($password){
            $this->password = $password;
        }

        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return  $this->nome;
        }
        public function getPassword(){
            return  $this->password;
        }

    }

    class Funcionario extends Pessoa{
        private $cargo;
        public function setCargo($cargo){
            $this->cargo = $cargo;
        }

        public function getCargo(){
            return $this->cargo;
        }

    }

    class Cliente extends Pessoa{
        private $telefone;
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getTelefone(){
           return $this->telefone;
        }
    }
