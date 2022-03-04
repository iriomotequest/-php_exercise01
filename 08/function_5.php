<?php

//変数定義
$time = '';
$msg = '';
$week = ['日', '月', '火', '水', '木', '金', '土'];
$day = date('w');

//変数time受け取り
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $time = $_POST['time'];
}
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
<!--first message-->
    <?php if (empty($time)) : ?>
        <h2><?=$msg="本日の日付、曜日を確認しますか？"?></h2>
    <?php endif; ?>

<!--はいbtn-->
    <?php if ($msg) : ?>
    <form action="" method="POST">
        <input type="submit" name = "time" value="はい">
    </form>
    <?php endif; ?>

<!--time messge-->
    <?php if($time) : ?>
        <h2><?=$time = '今日は、'.date('Y年m月d日'). $week[$day] . '曜日です<br>'; ?></h2>
    <?php endif; ?>

<!--戻るbtn-->
    <?php if($time) : ?>
    <a href="">戻る</a>
    <?php endif; ?>

</body>

</html>