<?php
session_start();

// Validação de dados
if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    echo "<script>alert('Dados da sessão foram perdidos. Redirecionando para o login.');</script>";
    header('Location: login.php');
    exit();
}

// Atualiza a última requisição
$_SESSION['ultima_requisicao'] = date('Y-m-d H:i:s');

// Calcula o tempo de sessão
$inicio = isset($_SESSION['inicio_sessao']) ? strtotime($_SESSION['inicio_sessao']) : 0;
$tempo_sessao = time() - $inicio;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da Sessão</title>
</head>
<body>
    <h1>Dados da Sessão</h1>
    <p><strong>Usuário:</strong> <?= $_SESSION['login'] ?></p>
    <p><strong>Senha:</strong> <?= $_SESSION['senha'] ?></p>
    <p><strong>Início da Sessão:</strong> <?= $_SESSION['inicio_sessao'] ?></p>
    <p><strong>Última Requisição:</strong> <?= $_SESSION['ultima_requisicao'] ?></p>
    <p><strong>Tempo de Sessão:</strong> <?= gmdate('H:i:s', $tempo_sessao) ?></p>
    <br>
    <a href="logout.php">Encerrar Sessão</a>
</body>
</html>
