<?php
$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro'
];
$select_stylist = '';
$result = '';

// ここにコードを追記
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //リクエストメソット=フォームから送られてきた情報を処理
    $select_stylist = $_POST['stylist'];
}

foreach ($stylists as $sty => $stylist) {

    if ($select_stylist == $sty) {
        $result = 'あなたの担当は' . "{$stylist}". 'です。';
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
    <h1>希望するスタイリストのランクを選んでください。</h1>
    <form action="" method="post">
        <select name="stylist">
            <option value="スタイリスト">スタイリスト</option>
            <option value="ハイスタイリスト">ハイスタイリスト</option>
            <option value="トップスタイリスト">トップスタイリスト</option>
        </select>
        <br>
        <input type="submit" value="送信">
    </form>
    <?= $result ?>
</body>

</html>
