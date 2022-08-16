<?php

    include_once "Contas.php";

    $conta1 = new Contas;
    $conta2 = new Contas;

    $conta1->numAge = 0001;
    $conta1->numConta = 45622115;
    $conta1->nome =  "Carlos";
    $conta1->saldo = 500.93;
    $conta1->exibeDados();

    $conta2->numAge = 0001;
    $conta2->numConta = 45238419;
    $conta2->nome = "Miguel";
    $conta2->saldo = 327.67;
    $conta2->exibeDados();

?>