<?php



    /**
     * Valida uma url
     * @param string $url
     * @return bool
     */
    function validarUrl(string $url): bool {
        if (mb_strlen($url < 10)) {
            return false;
        }

        if (!str_contains($url, ".")) {
            return false;
        }

        if (str_contains($url, "http://") || str_contains($url, "https://")) {
            return true;
        }

        return false;
    }

    function validarUrlComFiltro(string $url): bool {
        return filter_var($url, FILTER_VALIDATE_URL);
    }

    function validarEmail(string $email): bool {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Conta o tempo decorrido de uma data
     * @param string $data
     * @return string
     */
    function contarTempo(string $data) {
        $agora = strtotime(date("Y-m-d H:i:s"));
        $tempo = strtotime($data);
        $diferenca = $agora - $tempo;

        $segundos = $diferenca;
        $minutos = round($diferenca / 60);
        $horas = round($diferenca / 3600);
        $dias = round($diferenca / 86400);
        $semanas = round($diferenca / 604800);
        $meses = round($diferenca / 2419200);
        $anos = round($diferenca / 29030400);

        if ($segundos <= 60) {
            return "agora";
        } else if ($minutos <= 60) {
            return $minutos == 1 ? "há $minutos minuto" : "há $minutos minutos";
        } else if ($horas <= 24) {
            return $horas == 1 ? "há $horas hora" : "há $horas horas";
        } else if ($dias <= 7) {
            return $dias == 1 ? "ontem" : "há $dias dias";
        } else if ($semanas <= 4) {
            return $semanas == 1 ? "há $semanas semana" : "há $semanas semanas";
        } else if ($meses <= 12) {
            return $meses == 1 ? "há $meses mês" : "há $meses meses";
        } else {
            return $anos == 1 ? "há $anos ano" : "há $anos anos";
        }
    } 

    function formatarValor(float $valor = null):string {
        return number_format(($valor ? $valor : 0), 2, ",", ".");
    }

    function formatarNumero(int $numero = null) {
        return number_format(($numero ?: 0), 0, ".", ".");
    }

    function saudacao(): string {
        $hora = date("H:i:s");
        echo "$hora";

        if ($hora >= 0 && $hora <= 5) {
            $saudacao = "Boa Madrugada";
        } else if ($hora >= 6 && $hora <= 12) {
            $saudacao = "Bom Dia";
        } else if ($hora >= 13 && $hora <=18) {
            $saudacao = "Boa Tarde";
        } else {
            $saudacao = "Boa Noite";
        }
        return $saudacao;
    }

    /**
     * Resume do texto
     * 
     * @param string $texto texto para resumir
     * @param int $limite quantiade de caracteres
     * @param string $continue opcional - o que deve ser ao final do resumo
     * @return string texto resumido
     */
    function resumirTexto(string $texto, int $limite, string $continue = "..."): string {

        $textoLimpo = trim(strip_tags($texto));
        if(mb_strlen($textoLimpo) <= $limite) {
            return $textoLimpo;
        }
        
        $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ""));

        return $resumirTexto.$continue;
    }
?>