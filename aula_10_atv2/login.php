<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os dados do formulário
    $login = $_POST['login'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Inicia a sessão com os dados do usuário
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['inicio_sessao'] = date('Y-m-d H:i:s');
    $_SESSION['ultima_requisicao'] = date('Y-m-d H:i:s');

    // Redireciona para a página de exibição
    header('Location: sessao.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label for="login">Usuário:</label>
        <input type="text" name="login" id="login" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
