<?php

    require_once "../lab1/conexaoBd.php";
    require_once "../lab1/query.php";

    $conexaoBd = new conexaoBd();
    $conexaoBd -> setHost("127.0.0.1");
    $conexaoBd -> setPorta(5000);
    $conexaoBd -> setUserName("postgres");
    $conexaoBd -> setPassword("123456");
    $conexaoBd -> setDatabase("postgres");
    if(!$conexaoBd -> conectar()){
        echo "Falha na conexao";
    } else {
        echo "Conectado!";

        $query = new Query($conexaoBd);
        $query -> setSql("select 1 as coluna");
        if($query->Open()){
            while ($linha = $query->getNextRow()){
                var_dump($linha);
            }
        }
    }

?>