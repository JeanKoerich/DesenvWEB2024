<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação do Hospital Regional Alto Vale - Pergunta</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <img src="../img/logo.png" alt="Logo do Hospital Regional Alto Vale"
    style="display: block; margin: 0 auto; width: 150px;">
    
    <h1>Avaliação do Hospital Regional Alto Vale</h1>

    <?php
    include '../src/database.php';

    // Consulta para pegar uma pergunta
    $query = "SELECT * FROM perguntas LIMIT 1";
    $result = pg_query($conn, $query);
    ?>

    <form method="POST" action="feedback.php">
        <?php while ($row = pg_fetch_assoc($result)): ?>
            <div class="pergunta">
                <p><?= $row['texto'] ?></p>
                <div class="escala">
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                        <input type="radio" id="resposta_<?= $row['id'] ?>_<?= $i ?>"
                        name="respostas[<?= $row['id'] ?>]" value="<?= $i ?>" required>
                        <label for="resposta_<?= $row['id'] ?>_<?= $i ?>"><?= $i ?></label>
                    <?php endfor; ?>
                </div>
                <input type="hidden" name="pergunta_id[]" value="<?= $row['id'] ?>">
            </div>
        <?php endwhile; ?>

        <button type="submit">Confirmar Respostas</button>
    </form>

    <footer>
        <p>Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.</p>
    </footer>
</body>
</html>
