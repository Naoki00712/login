<!DOCTYPE html>
<html>
<head>
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン11S</h1>
    <form action="" method="post">
        <p>
            <label>メールアドレス：</label>
            <input type="text" name="email">
        </p>

        <p>
            <label>パスワード：</label>
            <input type="password" name="pass">
        </p>

        <input type="submit" name="submit" value="ログインする">
    </form>
    <a href="sign.php">sample2へ</a>
	
</body>
</html>


<?php
// ini_set('display_errors',"On");

$user = "ここにユーザー名が入ります";
$password = "ここにパスワードが入ります";

try{
	$pdo = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8', 'root', 'root');

    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');

    $stmt->execute(array(':email' => $_POST['email']));

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if(password_verify($_POST['pass'], $result['password'])){
        echo "ログイン認証に成功しました";
    }else{
        echo "ログイン認証に失敗しました";
    } 

}catch(Exception $e){
    echo "データベースの接続に失敗しました：";
    echo $e->getMessage();
    die();
}

?>

