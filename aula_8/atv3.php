<?php

$SALARIO1 = 1000;
$SALARIO2 = 2000;


$SALARIO2 = $SALARIO1;
$SALARIO2++;


$SALARIO1 += $SALARIO1 * 0.1;

// Comparação
if ($SALARIO1 > $SALARIO2) {
    echo "O Valor da variável 1 é maior que o valor da variável 2";
} elseif ($SALARIO1 < $SALARIO2) {
    echo "O Valor da variável 1 é menor que o valor da variável 2";
} else {
    echo "Os valores são iguais";
}
?>
