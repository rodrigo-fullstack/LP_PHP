<?php
    $nome = "String";

    //Aspas únicas não aceita sequências de escape de quebra de linha
    //echo $nome . '\n';

    echo $nome . "\n";

    $_nome = 'String';

    $numero = 99;

    //Strings de interpolação possuem aspas duplas
    $mensagem = "O número é: $numero\n";
    echo "$mensagem";
    $vetor = [
        "0" => "Rodrigo",
        1 => "Rafael"
    ];

    var_dump($vetor);

    class Pessoa{
        function testa(){
            echo 'Teste';
        }
    }

    $teste = new Pessoa();

    $teste->testa();

    
?>