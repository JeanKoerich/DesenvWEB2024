<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>
    <h1>Cálculo da Área de um Retângulo</h1>

    <form action="" method="POST">
        <label for="lado_a">Digite o comprimento do lado A (em metros):</label>
        <input type="number" id="lado_a" name="lado_a" required>
        <br><br>
        <label for="lado_b">Digite o comprimento do lado B (em metros):</label>
        <input type="number" id="lado_b" name="lado_b" required>
        <br><br>
        <input type="submit" value="Calcular Área">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function obterDados() {
            $dados = [];
            $dados['ladoA'] = $_POST['lado_a'];
            $dados['ladoB'] = $_POST['lado_b'];
            return $dados;
        }

        function calcularArea($a, $b) {
            return $a * $b;
        }

        function exibirMensagem($a, $b, $area) {
            if ($area > 10) {
                echo "<h1>A área do retângulo de lados $a e $b metros é $area metros quadrados.</h1>";
            } else {
                echo "<h3>A área do retângulo de lados $a e $b metros é $area metros quadrados.</h3>";
            }
        }

        $dados = obterDados();
        $area = calcularArea($dados['ladoA'], $dados['ladoB']);
        exibirMensagem($dados['ladoA'], $dados['ladoB'], $area);
    }
    ?>
</body>
</html>
