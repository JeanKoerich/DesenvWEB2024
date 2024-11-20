<?php
session_start();

if (!isset($_SESSION['login'], $_SESSION['senha'], $_COOKIE['usuario'], $_COOKIE['inicio_sessao'])) {
    echo "<script>alert('Dados da sessão foram perdidos. Por favor, faça login novamente.');</script>";
    header("Location: index.php");
    exit();
}

$current_time = date("d-m-Y H:i:s");
$_SESSION['last_request_time'] = $current_time;

$session_start_time = strtotime($_SESSION['session_start_time']);
$current_time_unix = strtotime($current_time);
$session_duration = $current_time_unix - $session_start_time;

$usuario = htmlspecialchars($_SESSION['login']);
$senha = htmlspecialchars($_SESSION['senha']);
$inicio_sessao = $_SESSION['session_start_time'];
$ultima_requisicao = $_SESSION['last_request_time'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sessão do Usuário</title>
</head>
<body>
    <h2>Informações da Sessão</h2>
    <p><strong>Login:</strong> <?php echo $usuario; ?></p>
    <p><strong>Senha:</strong> <?php echo $senha; ?></p>
    <p><strong>Data/Hora de Início da Sessão:</strong> <?php echo $inicio_sessao; ?></p>
    <p><strong>Data/Hora da Última Requisição:</strong> <?php echo $ultima_requisicao; ?></p>
    <p><strong>Tempo de Sessão (segundos):</strong> <?php echo $session_duration; ?></p>

    <br>
    <a href="index.php">Retornar para tela de Login</a>
</body>
</html>
