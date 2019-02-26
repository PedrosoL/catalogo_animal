<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Pesquisa Animal </title>
    </head>
    <body>
    <?php
        if(empty($_GET)){
            echo '
            <form action="form_animal.php" method="GET">
                <fieldset>
                    <legend> Cadastro de Animal: </legend>
                    <input type="radio" id="animal" name="animal" value="Ave" /> Ave
                    <input type="radio" id="animal" name="animal" value="Anfíbio" /> Anfíbio
                    <input type="radio" id="animal" name="animal" value="Mamífero" /> Mamífero
                    <input type="radio" id="animal" name="animal" value="Peixe" /> Peixe
                    <input type="radio" id="animal" name="animal" value="Réptil" /> Réptil
                    <br/><br/>
                    <input type="submit" value="Próximo">
                </fieldset>
            </form>';
        }else{
            $animal = $_GET["animal"];
            echo '
            <form action="exibe_animal.php" method="POST">
                <fieldset>
                    <legend> Cadastro de '.$animal.': </legend>
                    <input type="number" id="peso" name="peso" placeholder="Peso..."/>
                    <input type="number" id="comprimento" name="comprimento" placeholder="Comprimento..."/>
                    <br/><br/>
                    <input type="number" id="altura" name="altura" placeholder="Altura..."/>
                    <input type="text" id="cor" name="cor" placeholder="Cor Predominante..."/>
                    <br/><br/>
                    <input type="text" id="nome" name="nome" placeholder="Nome da Espécie..."/> ';

                    switch($animal){
                        case 'Ave':
                            echo '<input type="number" id="alturaMaxima" name="alturaMaxima" placeholder="Altura Máxima de Vôo...">';
                        break;
                        case 'Mamífero':
                            echo '<input type="number" id="velociade" name="velociade" placeholder="Velocidade Máxima...">';
                        break;
                        case 'Anfíbio':
                            echo '<input type="number" id="tempoMaximo" name="tempoMaximo" placeholder="Tempo máximo Submersos na Água...">';
                        break;
                        case 'Réptil':
                            echo '<input type="number" id="tempoMaximo" name="tempoMaximo" placeholder="Tempo máximo Submersos na Água...">';
                        break;
                        case 'Peixe':
                            echo '<input type="number" id="tempoVida" name="tempoVida" placeholder="Média de tempo de sobrevivencia...">';
                        break;
                    }
            echo '
                    <br/><br/>
                    <input type="submit" value="Enviar">
                    <input type="hidden" name="tipo" value="'.$animal.'"/>
                </fieldset>
            </form>';
        }
    ?>
    </body>
</html>