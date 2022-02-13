<?php
$file = $_FILES['picture'];
var_dump($file);
//$success = move_uploaded_file($file['tmp_name'], $file['name']);

if($success){
    echo '成功';
} else {
    echo 'failed';
}
?>