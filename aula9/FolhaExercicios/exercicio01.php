<!-- 1. Criar um programa que execute a soma de três valores.
Se a primeira variável for maior que 10, escrever o resultado da operação em azul
Se a segunda variável for menor que a terceira, escrever o resultado em verde
Se a terceira variável for menor que a primeira e a segunda variável escrever o
resultado em vermelho -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>    
    <h1>Soma de três valores</h1>
    <form action="" method="POST">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required>
        <br><br>
        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" required>
        <br><br>
        <label for="valor3">Valor 3:</label>
        <input type="number" id="valor3" name="valor3" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

        function somarValores($a, $b, $c) {
            return $a + $b + $c;
        }

        function exibirMensagem($mensagem, $cor) {
            echo "<p style='color:$cor;'>$mensagem</p>";
        }

        $resultado = somarValores($valor1, $valor2, $valor3);

        if ($valor1 > 10) {
            exibirMensagem("Resultado (primeira maior que 10): $resultado", 'blue');
        } elseif ($valor2 < $valor3) {
            exibirMensagem("Resultado (segunda menor que terceira): $resultado", 'green');
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            exibirMensagem("Resultado (terceira menor que ambas): $resultado", 'red');
        } else {
            exibirMensagem("Nenhuma das condições foi atendida. Resultado: $resultado", 'black');
        }
    }
    ?>
</body>
</html>