<?php

    class Contas {
        var $numAge;
        var $numConta;
        var $nome;
        var $saldo;

        function exibeDados() {
            echo "Agência: " . $this->numAge . "<br>Conta: " . $this->numConta . "<br>Nome: " . $this->nome . "<br>Saldo: " . $this->saldo . "<br><br>";
        }

    } 

?>