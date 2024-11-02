<?php

    require_once "calculadora.php";

    $calculadora = new Calculadora();

    $calculadora->setOperador1(10);
    $calculadora->setOperador2(10);
    $calculadora->setOperando('+');
    $calculadora->calcula();

    echo $calculadora->escreveResultado();
?>