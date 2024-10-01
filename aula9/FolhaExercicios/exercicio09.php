<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Parcelas com Juros Compostos</title>
</head>
<body>
    <h1>Cálculo das Parcelas da Moto com Juros Compostos</h1>

    <!-- Formulário para confirmação do cálculo -->
    <form action="" method="POST">
        <input type="submit" value="Calcular Parcelas">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_avista = 8654.00;
        $taxa_juros_inicial = 0.02;
        $incremento_juros = 0.003;

        function calcularParcelasCompostos($valor_avista, $taxa_juros, $quantidade_parcelas) {
            $montante = $valor_avista * pow((1 + $taxa_juros), $quantidade_parcelas);
            return $montante / $quantidade_parcelas;
        }

        function exibirParcelas($quantidade_parcelas, $valor_parcela, $taxa_juros) {
            $taxa_percentual = $taxa_juros * 100;
            echo "<p>Para $quantidade_parcelas vezes com uma taxa de juros de $taxa_percentual%, a parcela será de R$ " . number_format($valor_parcela, 2, ',', '.') . ".</p>";
        }

        $opcoes_parcelamento = [24, 36, 48, 60];
        foreach ($opcoes_parcelamento as $indice => $quantidade_parcelas) {
            $taxa_juros_atual = $taxa_juros_inicial + ($incremento_juros * $indice);
            $valor_parcela = calcularParcelasCompostos($valor_avista, $taxa_juros_atual, $quantidade_parcelas);
            exibirParcelas($quantidade_parcelas, $valor_parcela, $taxa_juros_atual);
        }
    }
    ?>
</body>
</html>
