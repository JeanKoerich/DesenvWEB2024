<?php

    require_once "pessoa.php";

    /*Instanciar um objeto da classe pessoa*/
    $objetoPessoa = new pessoa();
    $objetoPessoa->setNome("Jean");
    $objetoPessoa->setSobrenome("Koerich");

    echo $objetoPessoa->getNomeCompleto();

?>