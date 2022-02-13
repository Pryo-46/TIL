<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit2</title>
</head>
<body>
    <?php
        //htmlspecialchars() 不正な入力を防ぐ（<script>など）
    ?>
    post
    <p>ことば：<?php echo htmlspecialchars($_POST["my_name"],ENT_QUOTES);?></p>

    <form action="submit2.php" method="post">
        <label for="my_name">氏名</label>
        <input type="text" id="my_name" name="my_name">
        <input type="submit" value="決定">
    </form>
    
    
    <?php
    
    ?>
</body>
</html>