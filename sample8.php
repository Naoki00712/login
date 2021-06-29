<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>sample8</title>
    </head>
    <body>
        <div>
            <?php
                $fruits = [
                    'apple' => 'りんご' ,
                    'orange' => 'オレンジ',
                    'grape' => 'ぶどう'
                ];
                foreach($fruit as $key => $value){
                echo $value . 'は英語で書くと' . $key . 'です<br>';
                }
            ?>
        </div>
    </body>
</html>