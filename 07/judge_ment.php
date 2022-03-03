<?php

$score = '';
//scoreで受け取った数字を＄scoreに代入
$score = $_GET['score'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($score >= 60) :?>
        <h1>合格</h1>
    <?php elseif($score > 0 && $score < 60) :?>
        <h1>不合格</h1>
    <?php endif; ?>
</body>
</html>