<?php
    include("form_animal.php");
    include("animal.php");
    include("ave.php");
    include("mamifero.php");
    include("anfibios.php");        
    include("reptil.php");
    include("peixe.php");

    $peso = $_POST["peso"];
    $comprimento = $_POST["comprimento"];
    $altura = $_POST["altura"];
    $cor = $_POST["cor"];
    $nome = $_POST["nome"];
    $tipoAnimal = $_POST["tipo"];

    switch ($tipoAnimal){
        case 'Ave':
            $alturaMaxima = $_POST["alturaMaxima"];
            $ave = new Ave($peso, $comprimento, $altura, $cor, $nome, $alturaMaxima);

            echo '
                <label>'.$tipoAnimal.': </label>'.$nome.'<br/>
            ';
            $ave->exibeAnimal();
            $ave->exibeAve();
        break;
        case 'Mamífero':
            $alturaMaxima = $_POST["velocidade"];
            $anfibio = new Mamifero($peso, $comprimento, $altura, $cor, $nome, $velocidadeaMaxima);

            echo '
                <label>'.$tipoAnimal.': </label>'.$nome.'<br/>
            ';
            $ave->exibeAnimal();
            $ave->exibeMamifero();
        break;
        case 'Anfíbio':
            $tempoMaximo = $_POST["tempoMaximo"];
            $ave = new Anfibio($peso, $comprimento, $altura, $cor, $nome, $tempoMaximo);

            echo '
                <label>'.$tipoAnimal.': </label>'.$nome.'<br/>
            ';
            $ave->exibeAnimal();
            $ave->exibeAnfibio();
        break;
        case 'Réptil':
            $tempoMaximo = $_POST["tempoMaximo"];
            $ave = new Peixe($peso, $comprimento, $altura, $cor, $nome, $tempoMaximo);

            echo '
                <label>'.$tipoAnimal.': </label>'.$nome.'<br/>
            ';
            $ave->exibeAnimal();
            $ave->exibeReptil();
        break;
        case 'Peixe':
            $tempoVida = $_POST["tempoVida"];
            $ave = new Reptil($peso, $comprimento, $altura, $cor, $nome, $tempoVida);

            echo '
                <label>'.$tipoAnimal.': </label>'.$nome.'<br/>
            ';
            $ave->exibeAnimal();
            $ave->exibePeixe();
        break;
    }
?>