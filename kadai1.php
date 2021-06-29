<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>kadai1</title>
    </head>
    <body>
        <div>
            <?php
                $apple = 100;
                $beef = 1000;
                $egg = 200;
                $sum =$apple*2+$beef+$egg*2;
                $sum2 = $sum*1.08;
                
                echo "税抜き $sum 円  税込　$sum2 円";
            ?>
        </div>
    </body>
</html>