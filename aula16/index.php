<?php

    $tabela = new htmlTable();
    $tabela -> setId("tab1");
    $tabela -> setName("tab1");
    $tabela -> setStyle("background-color: green");
    $tabela -> setNumColunas(3);
    $tabela -> setNumLinhas(2);
    $tabela -> addLinha();
    $html = $tabela -> renderHtml();

    echo $html;

?>