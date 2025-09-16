<?php

$num = 6;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    // $factorial *= $i;
    $factorial = $factorial * $i;
}

echo $factorial;