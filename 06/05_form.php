<?php
$msg = '';
$err_msg = '';
$num1 = '';
$num2 = '';
$num3 = '';
$answer = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];



    if (empty(is_numeric($num1))||empty(is_numeric($num2))||empty(is_numeric($num3))) {
        $err_msg = '全てに数字を入力してください';
    } else {
        $msg = $num1 + $num2 + $num3;
        $answer= "合計値は{$msg}です";
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの練習</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <form action="" method="POST">
        <?php if (!empty($err_msg)) : ?>
            <ul>
                <li><?= $err_msg ?></li>
            </ul>
        <?php endif; ?>
        <div>
            <label for="">1つめの数字</label><br>
            <input type="number" name="num1" id=""><br>
            <label for="">2つめの数字</label><br>
            <input type="number" name="num2" id=""><br>
            <label for="">3つめの数字</label><br>
            <input type="number" name="num3" id="">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
        <?php echo $answer; ?>
    </div>
</body>

</html>
