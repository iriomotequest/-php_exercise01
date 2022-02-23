<?php

$day = 0;

$subjects = [
    '数学' => '明日',
    '英語' => '明後日',
    '理科' => '明々後日',
    '社会' => '昨日',
    '国語' => '中止'
];

foreach ($subjects as $key => $value) {
    switch ($day) {
        case 0:
            echo $key . 'の試験は' . $value . 'です。' . '<br>';
    }
}
