<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Teste de Divisibilidade por 2</h1>
    <form method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <br><br>
        <button type="submit">Testar</button>
    </form>

    <?php
    function verificarDivisibilidade($numero) {
        if ($numero % 2 === 0) {
            return "Valor divisível por 2";
        } else {
            return "O valor não é divisível por 2";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero = (int) $_POST['numero'];
        $mensagem = verificarDivisibilidade($numero);
        echo "<p>$mensagem</p>";
    }
    ?>
</body>
</html>
