<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php
    //Arquivo index responsável pela inicialização do sistema

    //declare(strict_types = 1); 

    require_once "sistema/configuracao.php";
    include_once "helpers.php";
    include "./sistema/Nucleo/Mensagem.php";

    echo (new Mensagem())->alerta("texto de alerta");

    // $msg = new Mensagem();
    // echo $msg->sucesso("Mensagem de sucesso")->renderizar();

    // echo (new Mensagem())->erro("mensagem de erro")->renderizar();

    echo "<hr>";
?>