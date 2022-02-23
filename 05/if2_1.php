<?php

$poket_money = 1000;
$fund_raising = 101;

while ($poket_money > 0) {
    echo "あなたの所持金は{$poket_money}です。<br>
    {$fund_raising}円募金しました。<br>
    残り残金は{$poket_money}です。<br>";
    $poket_money -= $fund_raising;
}
echo 'あなたはこれ以上募金できません';
