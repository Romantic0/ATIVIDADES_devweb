<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Soma de Três Valores</h1>
    <form method="POST">
        <label for="var1">Digite o primeiro valor:</label>
        <input type="number" name="var1" id="var1" required>
        <br>
        <label for="var2">Digite o segundo valor:</label>
        <input type="number" name="var2" id="var2" required>
        <br>
        <label for="var3">Digite o terceiro valor:</label>
        <input type="number" name="var3" id="var3" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    function calcularSoma($var1, $var2, $var3) {
        return $var1 + $var2 + $var3;
    }

    function exibirResultado($resultado, $cor) {
        echo "<p style='color: $cor;'>Resultado da soma: $resultado</p>";
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $var1 = (int) $_POST['var1'];
        $var2 = (int) $_POST['var2'];
        $var3 = (int) $_POST['var3'];

        $resultado = calcularSoma($var1, $var2, $var3);

        if ($var1 > 10) {
            exibirResultado($resultado, "blue");
        } elseif ($var2 < $var3) {
            exibirResultado($resultado, "green");
        } elseif ($var3 < $var1 && $var3 < $var2) {
            exibirResultado($resultado, "red");
        } else {
            echo "<p>Condições não atendidas, resultado: $resultado</p>";
        }
    }
    ?>
</body>
</html>
