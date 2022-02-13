
<?php 
//入力した郵便番号　123-4567
$zip = '223-2221';

if (preg_match("/¥A¥d{3}[-]¥d{4}¥z/", $zip)) {
    echo '郵便番号：〒'.$zip;
} else {
    echo '郵便番号が不正';
}

?>