<?php

$SALARIO1 = 1000;
$SALARIO2 = 2000;


$SALARIO2 = $SALARIO1;
$SALARIO2++;

$SALARIO1 += $SALARIO1 * 0.1;

for ($i = 1; $i <= 100; $i++) {
    $SALARIO1++;
    if ($i == 50) {
        break; 
    }
}


if ($SALARIO1 < $SALARIO2) {
    echo "Após o loop, SALARIO1 é menor que SALARIO2: $SALARIO1";
} else {
    echo "Após o loop, SALARIO1 é maior ou igual a SALARIO2: $SALARIO1";
}
?>
