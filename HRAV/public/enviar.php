<?php
include '../src/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $resposta = $_POST['resposta'] ?? null;
    $feedback = $_POST['feedback'] ?? null;
    $pergunta_id = $_POST['pergunta_id'] ?? null;

    if (!empty($pergunta_id) && $resposta !== null && is_numeric($resposta)) {
        $query = "INSERT INTO respostas (pergunta_id, valor, feedback) 
                VALUES ($pergunta_id, $resposta, '" . pg_escape_string($feedback) . "')";
        
        $result = pg_query($conn, $query);

        if ($result) {
            header('Location: agradecimento.php');
            exit();
        } else {
            echo "Erro ao enviar avaliação: " . pg_last_error($conn);
        }
    } else {
        echo "Por favor, responda todas as perguntas corretamente.";
    }
}
?>
