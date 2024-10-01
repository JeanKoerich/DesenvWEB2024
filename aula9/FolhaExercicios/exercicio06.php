<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 06</title>
    <style>
        .excedente {
            color: red;
        }
        .suficiente {
            color: blue;
        }
        .esgotado {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Cálculo das Compras</h1>

    <form action="" method="POST">
        <h3>Insira o preço por Kg e a quantidade comprada para cada produto:</h3>

        <label for="preco_maca">Preço da Maçã (R$/Kg):</label>
        <input type="number" step="0.01" id="preco_maca" name="preco_maca" required>
        <label for="quantidade_maca">Quantidade de Maçã (Kg):</label>
        <input type="number" step="0.01" id="quantidade_maca" name="quantidade_maca" required>
        <br><br>

        <label for="preco_melancia">Preço da Melancia (R$/Kg):</label>
        <input type="number" step="0.01" id="preco_melancia" name="preco_melancia" required>
        <label for="quantidade_melancia">Quantidade de Melancia (Kg):</label>
        <input type="number" step="0.01" id="quantidade_melancia" name="quantidade_melancia" required>
        <br><br>

        <label for="preco_laranja">Preço da Laranja (R$/Kg):</label>
        <input type="number" step="0.01" id="preco_laranja" name="preco_laranja" required>
        <label for="quantidade_laranja">Quantidade de Laranja (Kg):</label>
        <input type="number" step="0.01" id="quantidade_laranja" name="quantidade_laranja" required>
        <br><br>

        <label for="preco_repolho">Preço do Repolho (R$/Kg):</label>
        <input type="number" step="0.01" id="preco_repolho" name="preco_repolho" required>
        <label for="quantidade_repolho">Quantidade de Repolho (Kg):</label>
        <input type="number" step="0.01" id="quantidade_repolho" name="quantidade_repolho" required>
        <br><br>

        <label for="preco_cenoura">Preço da Cenoura (R$/Kg):</label>
        <input type="number" step="0.01" id="preco_cenoura" name="preco_cenoura" required>
        <label for="quantidade_cenoura">Quantidade de Cenoura (Kg):</label>
        <input type="number" step="0.01" id="quantidade_cenoura" name="quantidade_cenoura" required>
        <br><br>

        <label for="preco_batatinha">Preço da Batatinha (R$/Kg):</label>
        <input type="number" step="0.01" id="preco_batatinha" name="preco_batatinha" required>
        <label for="quantidade_batatinha">Quantidade de Batatinha (Kg):</label>
        <input type="number" step="0.01" id="quantidade_batatinha" name="quantidade_batatinha" required>
        <br><br>

        <input type="submit" value="Calcular Valor da Compra">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function obterDados() {
            return [
                'preco_maca' => $_POST['preco_maca'],
                'quantidade_maca' => $_POST['quantidade_maca'],
                'preco_melancia' => $_POST['preco_melancia'],
                'quantidade_melancia' => $_POST['quantidade_melancia'],
                'preco_laranja' => $_POST['preco_laranja'],
                'quantidade_laranja' => $_POST['quantidade_laranja'],
                'preco_repolho' => $_POST['preco_repolho'],
                'quantidade_repolho' => $_POST['quantidade_repolho'],
                'preco_cenoura' => $_POST['preco_cenoura'],
                'quantidade_cenoura' => $_POST['quantidade_cenoura'],
                'preco_batatinha' => $_POST['preco_batatinha'],
                'quantidade_batatinha' => $_POST['quantidade_batatinha']
            ];
        }

        function calcularTotal($dados) {
            $total = 0;
            $total += $dados['preco_maca'] * $dados['quantidade_maca'];
            $total += $dados['preco_melancia'] * $dados['quantidade_melancia'];
            $total += $dados['preco_laranja'] * $dados['quantidade_laranja'];
            $total += $dados['preco_repolho'] * $dados['quantidade_repolho'];
            $total += $dados['preco_cenoura'] * $dados['quantidade_cenoura'];
            $total += $dados['preco_batatinha'] * $dados['quantidade_batatinha'];
            return $total;
        }

        function exibirMensagem($total, $saldo) {
            if ($total > $saldo) {
                $diferenca = $total - $saldo;
                echo "<p class='excedente'>O valor da compra excedeu o disponível. Você precisará de R$ $diferenca a mais.</p>";
            } elseif ($total < $saldo) {
                $restante = $saldo - $total;
                echo "<p class='suficiente'>Você gastou R$ $total e ainda pode gastar R$ $restante.</p>";
            } else {
                echo "<p class='esgotado'>O saldo para compras foi esgotado. Você gastou exatamente R$ 50,00.</p>";
            }
        }

        $saldo = 50;
        $dados = obterDados();
        $total = calcularTotal($dados);
        exibirMensagem($total, $saldo);
    }
    ?>
</body>
</html>