<?php

// 変数を用意
$msg = '';

// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = '私の名前は、' . $_POST['message'] . 'です。';
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの練習</title>
</head>

<body>
    
    <p>
        <?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?><br>
        <a href=02_form.php>戻る</a>
    </p>
</body>

</html>
