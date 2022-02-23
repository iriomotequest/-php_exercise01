<?php

$num = 1;

if ($num == 1) {
    echo "{$num}は素数ではありません";
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        echo "{$num}は素数ではありません";
    } else {
        echo "{$num}は素数です";
    }
    break;
}


