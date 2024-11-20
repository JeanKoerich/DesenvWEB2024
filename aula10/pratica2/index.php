<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);

    if (empty($login) || empty($senha)) {
        echo "<script>alert('Por favor, preencha todos os campos.');</script>";
    } else {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['session_start_time'] = date("Y-m-d H:i:s");
        $_SESSION['last_request_time'] = $_SESSION['session_start_time'];

        setcookie("usuario", $login, time() + 60 * 5, "/");
        setcookie("inicio_sessao", $_SESSION['session_start_time'], time() + 60 * 5, "/");

        header("Location: session.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="index.php" method="POST">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
