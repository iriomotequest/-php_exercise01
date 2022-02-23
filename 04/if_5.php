<?php

$num = 3434;

if ($num == 1 || $num % 2 == 0 || $num % 3 == 0 || $num % 5 == 0 || $num % 7 == 0) {
    echo "{$num}は素数ではありません";
} elseif ($num % 2 == 0 || $num % 3 == 0 || $num % 5 == 0 || $num % 7 == 0 && $num > 10 || $num % $num == 0) {
    echo "{$num}は素数です";
} else {
    echo "{$num}は素数です";
}