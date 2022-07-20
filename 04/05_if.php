<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));
$msg = '素数です。';
if($num = 1){
    echo "{$num}は素数ではありません。";
}for($i = 2; $i < $num ; $i++){
    if ($num % $i == 0) {
        $msg = '素数ではありません。';
        break;
    }else{
        $msg = '素数です。';
    }
}
// echo $msg;
