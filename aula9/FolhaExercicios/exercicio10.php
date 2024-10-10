<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Árvore de Pastas</title>
</head>
<body>

<?php

function getPastas() {
    return array(
        "bsn" => array(
            "3a Fase" => array("desenvWeb", "BancoDados 1", "EngSoft 1"),
            "4a Fase" => array("Intro Web", "BancoDados 2", "EngSoft 2")
        )
    );
}

function criarArvore($array) {
    echo "<ul>";
    foreach ($array as $chave => $valor) {
        if (is_array($valor)) {
            echo "<li>" . htmlspecialchars($chave) . "</li>";
            criarArvore($valor);
        } else {
            echo "<li>" . htmlspecialchars($valor) . "</li>";
        }
    }
    echo "</ul>";
}

function exibirArvore() {
    $pastas = getPastas();
    criarArvore($pastas);
}

exibirArvore();
?>
</body>
</html>
