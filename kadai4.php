<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>kadai4</title>
</head>

<body>
    <div>

        <?php
        ini_set('display_errors', "On");
        try {
            $db = new PDO('mysql:dbname=kadai3;host=localhost;port=8889;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            echo "接続失敗: " . $e->getMessage() . "\n";
        }
        ?>

    </div>
</body>

</html>