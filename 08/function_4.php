<?php

function check_temperature($body_temperature)
{
    if($body_temperature < 37) {
        return true ;
    }elseif($body_temperature >= 37) {
        return false ;
    }
    // 37度未満の場合はtrue
    // 37度以上の場合はfalse
}

function create_message($body_temperature)
{
    if(check_temperature($body_temperature)) {
        return "あなたは平熱なので、問題なく参加できます";
    }else{
        return "あなたは発熱しているので、参加できません";
    }
    // check_temperature関数を呼び出す
    // check_temperature関数の結果によって文字列を変更し、関数の戻り値として設定
}

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body_temperature = $_POST['body_temperature'];
    // POSTされたbody_temperatureを取得

    $msg = create_message($body_temperature);
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
    <?php if ($msg): ?>
    <h1><?= $msg ?></h1>
    <?php endif; ?>
    <h2>体温を入力してください</h2>
    <form action="" method="post">
        <input type="number" step="0.1" name="body_temperature" required>
        <input type="submit" value="送信">
    </form>
</body>

</html>