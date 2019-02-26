<?php
    class Animal{
        public $peso;
        public $comprimento;
        public $altura;
        public $cor;
        public $nome;

        public function __construct($peso, $comprimento, $altura, $cor, $nome){
            $this->peso = $peso;
            $this->comprimento = $comprimento;
            $this->altura = $altura;
            $this->cor = $cor;
            $this->nome = $nome;
        }

        public function exibeAnimal(){
            echo '
                <label>Peso: </label>'.$this->peso.'<br/>
                <label>Comprimento: </label>'.$this->comprimento.'<br/>
                <label>Altura: </label>'.$this->altura.'<br/>
                <label>Cor: </label>'.$this->cor.'<br/>
                <label>Nome: </label>'.$this->nome.'<br/>
            ';
        }
    }
?>