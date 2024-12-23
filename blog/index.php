<?php
    //Arquivo index responsável pela inicialização do sistema

    //declare(strict_types = 1);

    require_once "sistema/configuracao.php";
    include_once "helpers.php";

    $numero = 6;

    /* while ($numero <= 10) {
        echo $numero++;
    } */

    for ($i = 1; $i <= 10; $i++) {
        // echo ($i % 2 ? $i . " ímpar" : $i . " par") . "<br>";
        
        // echo $i . " x " . $numero . " = " . $i * $numero . "<br>";
    }
?>