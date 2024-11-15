<!-- Arquivo: enviar.php -->
<!-- Página de processamento das respostas-->

<?php
//Inclui a conexão com o banco de dados
include '../src/database.php';

//Verifica as requisições do tipo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recupera os dados do formulário
    $resposta = $_POST['resposta'] ?? null;
    $feedback = $_POST['feedback'] ?? null;
    $pergunta_id = $_POST['pergunta_id'] ?? null;

    // Valida os dados recebidos
    if (!empty($pergunta_id) && $resposta !== null && is_numeric($resposta)) {
        $query = "INSERT INTO respostas (pergunta_id, valor, feedback) 
                VALUES ($pergunta_id, $resposta, '" . pg_escape_string($feedback) . "')";

        $result = pg_query($conn, $query);

        // Verifica se a inserção foi um sucesso
        if ($result) {
            // Redireciona para a página de agradecimento
            header('Location: agradecimento.php');
            exit();
        } else {
            // Exibe uma mensagem de erro de inserção
            echo "Erro ao enviar avaliação: " . pg_last_error($conn);
        }
    } else {
        // Exibe uma mensagem de erro se dados incompletos
        echo "Por favor, responda todas as perguntas corretamente.";
    }
}
?>