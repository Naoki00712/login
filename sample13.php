<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>sample13</title>
</head>

<body>
    <div>

        <?php
        ini_set('display_errors', "On");
        try {
            $dbh = new PDO('mysql:dbname=mydb;host=localhost;port=8889;charset=utf8', 'root', 'root');
            echo "接続成功\n";
            $record = $dbh->query("SELECT * FROM items");
            while ($r = $record->fetch()){
                print "$r[id]<br>";
                print "$r[name]<br>";
            }
        } catch (Exception $e) {
            echo "接続失敗: " . $e->getMessage() . "\n";
        }
        ?>

    </div>
</body>

</html>