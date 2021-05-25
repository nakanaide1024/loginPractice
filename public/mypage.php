<?php
session_start();
require_once '../classes/UserLogic.php';

// ログインしているか判定し、していなかったら新規登録画面へ返す
$result = UserLogic::checkLogin();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>マイページ</title>
</head>
<body>
  <h2>マイページ</h2>
  <p>ログインユーザー:</p>
  <p>メールアドレス:</p>
<a href="./login.php">ログアウト</a>
</body>
</html>