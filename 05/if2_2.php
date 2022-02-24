<?php

$poket_money = 1000;
$fund_raising = 101;

echo "あなたの所持金は{$poket_money}です。<br>";

do {
    echo "{$fund_raising}円募金しました。<br>";
    $poket_money -= $fund_raising;
} while ($poket_money > 0);

echo "残り残金は{$poket_money}です。<br>";
