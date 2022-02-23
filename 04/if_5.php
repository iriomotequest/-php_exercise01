<?php

$num = 19;

if ($num == 1) {
    echo "{$num}は素数ではありません";
    return 0;
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        echo "{$num}は素数ではありません";
        return 0;
    }
}

echo "{$num}は素数です";
