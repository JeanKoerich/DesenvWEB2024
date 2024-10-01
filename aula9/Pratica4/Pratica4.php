<?php

    function getDesconto(){
        return $_REQUEST["desconto"];
    }

    function getValor(){
        if(isset($_REQUEST["valor"])){
            if(is_numeric($_REQUEST["valor"]))
            return $_REQUEST["valor"]
        }
    }

    function calculaValorFinal(){
        return getValor() - getDesconto();
    }

    function exibeMensagem($mensagem){
        echo $mensagem;
    }

    exibeMensagem("Valor Final: " . calculaValorFinal());

    exibeMensagem(var_dump($_REQUEST));
?>