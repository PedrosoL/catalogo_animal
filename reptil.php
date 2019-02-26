<?php
    include_once("animal.php");

    class Reptil extends Animal{
        public $tempoSubmerso;

        public function __construct($peso, $comprimento, $altura, $cor, $nome, $tempoSubmerso){
            parent::__construct($peso, $comprimento, $altura, $cor, $nome);

            $this->tempoSubmerso = $tempoSubmerso;
        }

        public function exibeReptil(){
            echo '
                <label> Tempo Submerso: </label>'.$this->tempoSubmerso.'
            ';
        }
    }
?>