<?php
$pastas = array(
    "bsn" => array(
        "3a Fase" => array("desenvWeb", "bancoDados 1", "engSoft 1"),
        "4a Fase" => array("Intro Web", "bancoDados 2", "engSoft 2")
    )
);

function criarArvore($dados, $nivel = 0) {
    foreach ($dados as $chave => $valor) {
        echo str_repeat(" ", $nivel * 4);
        if (is_array($valor)) {
            echo $chave . ":\n";
            criarArvore($valor, $nivel + 1);
        } else {
            echo "- " . $valor . "\n";
        }
    }
}

criarArvore($pastas);
?>
