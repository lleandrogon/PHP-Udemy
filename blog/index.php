<?php
    //Arquivo index responsável pela inicialização do sistema

    //declare(strict_types = 1);

    require_once "sistema/configuracao.php";
    include_once "helpers.php";

    /* if (validarEmail("teste@hotmail.com")) {
        echo "Endereço de e-mail válido";
    } else {
        echo "E-mail inválido";
    } */

    $url = "https://unset.";

    var_dump(validarUrl($url));
    echo "<hr>";
    var_dump(validarUrlComFiltro($url));

    //var_dump(validarEmail("teste@gmail.com"));
?>