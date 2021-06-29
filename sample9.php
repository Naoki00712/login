<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>sample9</title>
    </head>
    <body>
        <div>
            <?php
            if(isset($_POST['name'])&& $_POST['name'] !=''){
                print('送信された値'. $_POST['name']);
            }
            ?>

            <form action="sample9.php"method="post">
                <label for="name">お名前:</label>
                <input id="name" type="text" name="name">
                <input type="submit" value="返信する">
            </from>
        </div>
    </body>
</html>