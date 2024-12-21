<?php
    //Arquivo index responsável pela inicialização do sistema

    //declare(strict_types = 1);

    require_once "sistema/configuracao.php";
    include_once "helpers.php";

    echo saudacao() . " hoje é " . dataAtual();

    //$meses = array();
    /* $meses = [
        "j" => "Janeiro", 
        "f" => "Fevereiro", 
        "Março"
    ];
    foreach ($meses as $chave => $valor) {
        echo $valor."<br>";
    }
    
    echo "<hr>";
    var_dump($meses);

    echo "<hr>";
    echo $_SERVER["SCRIPT_FILENAME"];
    echo "<hr>";
    var_dump($_SERVER); */
?>