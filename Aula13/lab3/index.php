<?php

    require_once "model\pessoa.php";

    /*Instanciar um objeto da classe pessoa*/
    $objetoPessoa = new \app\model\pessoa();
    $objetoPessoa->setNome("Jean");
    $objetoPessoa->setSobrenome("Koerich");
    $objetoPessoa->setDataNascimento(new DateTime());
    $objetoPessoa->setTipo(1);
    $objetoPessoa->setCpfCnpj("000.000.000-00");

    echo "Nome Completo: " . $objetoPessoa->getNomeCompleto();
    echo "Idade: " . $objetoPessoa->getIdade();
?>