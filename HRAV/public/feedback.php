<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação do Hospital Regional Alto Vale - Feedback</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <img src="../img/logo.png" alt="Logo do Hospital Regional Alto Vale"
        style="display: block; margin: 0 auto; width: 150px;">

    <h1>Avaliação do Hospital Regional Alto Vale</h1>

    <?php
    $respostas = $_POST['respostas'] ?? [];
    $pergunta_id = $_POST['pergunta_id'][0] ?? null;
    ?>

    <form method="POST" action="enviar.php">
        <div class="pergunta">
            <p>Feedback adicional (opcional):</p>
            <textarea name="feedback" placeholder="Deixe seu comentário..."></textarea>
        </div>

        <input type="hidden" name="resposta" value="<?= $respostas[$pergunta_id] ?? '' ?>">
        <input type="hidden" name="pergunta_id" value="<?= $pergunta_id ?>">

        <button type="submit">Enviar Avaliação</button>
    </form>

    <footer>
        <p>Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.</p>
    </footer>
</body>
</html>
