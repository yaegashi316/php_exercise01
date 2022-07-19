<?php

$favorites = [
'sport' => ['サッカー','バスケ','野球'],
'cooking' => ['スイーツ', '中華料理', 'フレンチ'],
'exercise' => ['腹筋','懸垂','ランニング']
];

echo <<<EOM
私の好きなスポーツは、{$favorites['sport'][0]}、{$favorites['sport'][2]}、{$favorites['sport'][1]}です｡
また、{$favorites['cooking'][1]}を作ることにもハマってまして、その他にも{$favorites['cooking'][2]}、{$favorites['cooking'][0]}も作ります。
最近は、運動にも取り組んでいて、{$favorites['exercise'][2]}、{$favorites['exercise'][1]}、{$favorites['exercise'][0]}をよくします。
EOM;
