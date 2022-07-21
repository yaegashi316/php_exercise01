<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

echo '私は、'.PHP_EOL;

foreach ($foods as $key => $valu) {

    echo "{$key}に{$valu}".PHP_EOL;
}
echo 'を食べます';

