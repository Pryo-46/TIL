<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>しりとり</title>
</head>
<body>
    <?php
        
    ?>
    <p>ことば：<?php echo $_REQUEST["my_name"];?></p>

    <form action="submit.php" method="get_form">
        <label for="my_name">氏名</label>
        <input type="text" id="my_name" name="my_name">
        <input type="submit" value="決定">
    </form>
      
</body>
</html>