
<?php
$age = '２３';
echo('全角カナの ' . $age);
//全角カナを半角カナに変換する
$age = mb_convert_kana($age, 'n', 'UTF-8');
echo('半角カナの ' . $age);
?>
