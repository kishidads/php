<?php

    include_once "Carro.php";

    $carro1 = new Carro;
    $carro2 = new Carro;

    $carro1->cor = "Amarelo";
    $carro1->ano = 1986;
    $carro1->numPortas = 4;
    $carro1->peso = 1230;
    $carro1->acelerar();
    $carro1->informarCor();


    $carro2->cor = "Branco";
    $carro2->ano = 2016;
    $carro2->numPortas = 4;
    $carro2->peso = 986;
    $carro2->acelerar();
    $carro2->informarCor();

?>