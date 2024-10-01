<!-- 7. Mariazinha foi comprar um carro novo esse carro custa R$ 22.500,00 a vista, mas como
ela não tem esse dinheiro para comprar a vista, resolveu fazer um financiamento, que
ficou em 60 parcelas de R$ 489,65.
Escreva um programa que calcule o valor gasto só dos juros que serão pagos por
Mariazinha em comparação ao valor a vista do carro.-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07</title>
</head>
<body>
    <h1>Cálculo dos Juros no Financiamento do Carro</h1>
    <form action="" method="POST">
        <input type="submit" value="Calcular Juros">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_avista = 22500.00;
        $valor_parcela = 489.65;
        $quantidade_parcelas = 60;

        function calcularTotalFinanciamento($valor_parcela, $quantidade_parcelas) {
            return $valor_parcela * $quantidade_parcelas;
        }

        function calcularJuros($total_financiado, $valor_avista) {
            return $total_financiado - $valor_avista;
        }

        function exibirResultado($total_financiado, $valor_avista, $valor_juros) {
            echo "<p>O valor do carro à vista é R$ $valor_avista.</p>";
            echo "<p>O total pago no financiamento será R$ $total_financiado.</p>";
            echo "<p>Mariazinha pagará R$ $valor_juros de juros no financiamento.</p>";
        }

        $total_financiado = calcularTotalFinanciamento($valor_parcela, $quantidade_parcelas);
        $valor_juros = calcularJuros($total_financiado, $valor_avista);
        exibirResultado($total_financiado, $valor_avista, $valor_juros);
    }
    ?>
</body>
</html>