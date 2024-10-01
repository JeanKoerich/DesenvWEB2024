<!-- 3. Crie um programa que calcule a área de um quadrado. Você deve configurar uma
variável que representa o comprimento dos lados de um quadrado em metros. Após o
cálculo escrever uma frase com o resultado da operação, exemplo: “A área do
quadrado de lado 3 metros é 9 metros quadrados”-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
    <h1>Área de um Quadrado</h1>
    <form action="" method="POST">
        <label for="lado">Digite o comprimento do lado do quadrado (em metros):</label>
        <input type="number" id="lado" name="lado" required>
        <br><br>
        <input type="submit" value="Calcular Área">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST['lado'];
        $area = $lado * $lado;
        echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados</p>";
    }
    ?>
</body>
</html>