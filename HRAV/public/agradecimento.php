<!-- Arquivo: agradecimento.php -->
<!--Página de Agradecimento após o sucesso das respostas-->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecimento</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- temporizador para redirecionar o usuário para a tela inicial após 5seg -->
    <script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 5000);
    </script>
</head>

<body class="centralizado">
    <!-- Logo do Hospital -->
    <img src="../img/logo.png" alt="Logo do Hospital Regional Alto Vale"
        style="display: block; margin: 0 auto; width: 150px;">

    <!-- Mensagem de agradecimento -->
    <h1>Obrigado pela sua Avaliação!</h1>
    <p>O Hospital Regional Alto Vale (HRAV) agradece sua resposta e ela é muito importante para nós,
        pois nos ajuda a melhorar continuamente nossos serviços.</p>

    <!-- Rodapé com mensagem de anonimato -->
    <footer>
        <p>Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.</p>
    </footer>

</body>

</html>