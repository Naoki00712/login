<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>sample12</title>
</head>
<body>
    <div>
        <?php
        if(isset($_FILES['file'])){
            $file = $_FILES['file'];
            print('ファイル名:'. $file['name']. "<br>");
            print('ファイルタイプ:'. $file['type']. "<br>");
            print('ファイルサイズ'. $file['size']. "<br>");
            print('ファイル場所'. $file['tmp_name']. "<br>");
            $file_path = 'images'. $file['name'];
            move_uploaded_file($file['tmp_name'],$file_path);
            print('<img src="'. $file_path. '">');
        }
        ?>
        <form action="sample11.php" method="post" enctype="multipart/form-data">
            <label for="file">写真:</label>
            <input id="file" type="file" name="file">
            <input type="submit" value="返信する">
        </from>
    </div>
</body>
</html>