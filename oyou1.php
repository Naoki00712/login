<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>oyou1</title>
    </head>
    <body>
        <div>
            <?php 
            $week = array("日", "月", "火", "水", "木", "金", "土");
            for($i = 0; $i < 366; $i++)
                {
                    $w = date("w", strtotime("+$i day"));
                    echo date("m/d", strtotime("+$i day")). "($week[$w])"."<br>";
                }
            ?>
        </div>
    </body>
</html>