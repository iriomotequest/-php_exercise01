<?php

function calc_cal($total_meals)
{
    return '接種カロリー合計は' . array_sum($total_meals) . 'Kcalです';
}

$yesterday_meal = [
    '食パン' => 300,
    'ステーキ' => 1200,
    'うどん' => 500
];

$today_meal = [
    'シリアル' => 200,
    'とんかつ' => 1000,
    'パスタ' => 400
];

$total_meals = array_merge($yesterday_meal, $today_meal);
// 標準関数を使用して、配列を結合($yesterday_mealと$today_meal)

echo calc_cal($total_meals);
