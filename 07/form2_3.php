<?php

$score = '';
$err_msg = '';
$msg = '';

//POSTでscoreに入っている数字を受け取る
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$scoreにPOSTで受け取った scoreに入っている数字を代入
    $score = $_POST['score'];
    //scoreが空なら
    if (empty($score)) {
        //エラーメッセージを表示
        $err_msg = '点数が入力されていません。';
        //scoreに数字が入っていたら
    } elseif ($score) {
        //ヘッダーロケーションでjudge_ment.phpへscoreの数字を送る
        header('Location: judge_ment.php?score=' . $score);
        //ヘッダーロケーションの処理終了
        exit;
    }
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h1><?= $err_msg ?></h1>
    <ul>
        <?php if ($scores = 0) : ?>
            <ul><?= $msg = '点数が入力されていません'; ?></ul>
        <?php endif; ?>
    </ul>
    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>