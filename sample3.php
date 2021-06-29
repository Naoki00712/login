<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>sample3</title>
    </head>
    <body>
        <div>
            <?php
                date_default_timezone_set('japan');
                echo 'PHPの時間表示 <br> 現在は',date('Y年m月d日 H時i分s秒'),'です';
            ?>
        </div>
    </body>
</html>