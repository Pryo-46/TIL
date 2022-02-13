<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'Hello PHP';
    //文字列連結
    echo 'e'.'c'.'h'.'o'. '<br>';
    echo 'abc', 'eee', '123';

    //while文
    $i = 0;
    while($i < 3):
        $i = $i + 1;
        echo 'hello'.'<br>';
    endwhile;

    //for文
    $str = 'hoge';
    for($i = 0; $i < 5; $i++):
        echo $str. $i. '<br>';
    endfor;

    //日付
    //タイムゾーンの設定
    date_default_timezone_set('Asia/Tokyo');

    //UnixTime
    // $time = strtotime("+{i} day");
    // $day = date('n/j(D)', $time);

    for($i = 0; $i < 5; $i++):
        $time = strtotime("+{$i} day");
        $day = date('n/j(D)', $time);
        echo $day . '<br>';
    endfor;

    //配列
    echo '以下配列' . '<br>';
    $A_week_name = ['日', '月', '火', '水', '木', '金', '土'];
    //曜日の取得　int
    //$f_week = date('w')
    
    for($i = 0; $i < 5; $i++):
        $time = strtotime("+{$i} day");
        $f_week = date('w', $time);
        $day = date("n/j", $time);
        echo $day . "($A_week_name[$f_week])" . '<br>';
    endfor;

    //数値編集
    //切り捨て（負の場合は小数点切り上げ？（しっくりくる言い方））
    $num = 5;
    echo $num / 3 . '<br>';
    //1.6666666
    echo floor($num / 3 ) . '<br>';
    echo floor($num * -1 / 3) . '<br>';
    //切り上げ ceil （負の場合は小数点切り捨て？）
    echo ceil($num / 3) . '<br>';
    echo ceil($num * -1 / 3) . '<br>';
    //四捨五入 round
    echo round($num / 3) . '<br>';
    //0padding
    $num = 123;
    $format = "{$num}を9桁0埋めすると、%09d";
    $value = sprintf($format, $num);
    echo $value . '<br>';

    //ファイルの書き込み
    $res_file_create = file_put_contents('text/sample.txt', 'sampleテキストファイル');
    if($res_file_create):
        echo 'ファイルの作成に成功' . '<br>';
    else:
        echo 'ファイルの作成に失敗' . '<br>';
    endif;
    
    //xml file 読み込み
    $xmlTree = simplexml_load_file('rss.xml');

    //json読み込み
    $file = file_get_contents('rss.json');
    $json = json_decode($file);

    echo $json->title . '<br>';
    echo $json->items[0]->title;

    //jsonの作成
    $json_sample = [
        "title" => "json-Smaple",
        "items" => [
            "くるま",
            "自動車",
            "りんご",
            "オレンジ"
            ]
        ];

    $json = json_encode($json_sample, JSON_UNESCAPED_UNICODE);
    //echo $json;
    file_put_contents('json_sample.json', $json);
    

    ?>

    
</body>
</html>