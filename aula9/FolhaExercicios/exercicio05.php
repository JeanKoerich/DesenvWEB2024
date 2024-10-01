<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
</head>
<body>
    <h1>Cálculo da Área de um Triângulo Retângulo</h1>

    <form action="" method="POST">
        <label for="base">Digite o valor da base (em metros):</label>
        <input type="number" id="base" name="base" required>
        <br><br>
        <label for="altura">Digite o valor da altura (em metros):</label>
        <input type="number" id="a tura" name="altura" required>
        <br><br>
        <input type="submit" value="Calcular Área">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function obterDados() {
            $dados = [];
            $dados['base'] = $_POST['base'];
            $dados['altura'] = $_POST['altura'];
            return $dados;
        }

        function calcularArea($base, $altura) {
            return ($base * $altura) / 2;
        }

        function exibirMensagem($base, $altura, $area) {
            echo "<h3>A área do triângulo de base $base metros e altura $altura metros é $area metros quadrados.</h3>";
        }

        $dados = obterDados();
        $area = calcularArea($dados['base'], $dados['altura']);
        exibirMensagem($dados['base'], $dados['altura'], $area);
    }
    ?>
</body>
</html>