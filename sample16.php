<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>sample16</title>
</head>

<body>
    <div>

        <?php
        for ($i=1; $i < 101; $i++) { 
            if ($i%3 == 0) {
                echo 'Fizz' ;
                if ($i%5 == 0) {
                    echo 'Buzz' ;
                }
            } else {
                if ($i%5 == 0) {
                    echo 'Buzz' ;
                } else {
                    echo $i;
                }
            }
            echo "<br>" ;
        }
        ?>

    </div>
</body>

</html>