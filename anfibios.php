<?php
    include_once("animal.php");

    class Anfibio extends Animal{
        public $tempoSubmerso;

        public function __construct($peso, $comprimento, $altura, $cor, $nome, $tempoSubmerso){
            parent::__construct($peso, $comprimento, $altura, $cor, $nome);

            $this->tempoSubmerso = $tempoSubmerso;
        }

        public function exibeAnfibio(){
            echo '
                <label> Tempo Submerso: </label>'.$this->tempoSubmerso.'
            ';
        }
    }
?>