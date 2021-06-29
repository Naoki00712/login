<?php
ini_set('display_errors',"On");

$user = "ここにユーザー名が入ります";
$password = "ここにパスワードが入ります";

try{

	$pdo = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8', 'root', 'root');


    $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");

    $stmt->execute(array(':email' => $_POST['email'],':password' => password_hash($_POST['pass'], PASSWORD_DEFAULT)));
    

    // header('Location: sample3.php');
    // exit();
}catch(Exception $e){
    echo "データベースの接続に失敗しました：";
    echo $e->getMessage();
    die();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>会員登録</title>
    <!-- <link rel="stylesheet/less" type="text/css" href="sign.less"> -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>

</head>
<body>
<div class="wrapper">
  <div class="container">
    <h1>Welcome</h1>
    
   
    <form action="" method="post">

      <input type="text" placeholder="Username" name="email">
      <input type="password" placeholder="Password" name="pass">
      <button type="submit" id="login-button">Login</button>
    </form>
  </div>
  
  <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>
<script src="./sign.js"></script>
</body>
</html>