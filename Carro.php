<?php

    class Carro {
        var $cor;
        var $ano;
        var $numPortas;
        var $peso;

        function acelerar() {
            echo "Acelerando!!<br>";
        }

        function informarCor() {
            echo $this->cor . "<br><br>";
        }
    }

?>