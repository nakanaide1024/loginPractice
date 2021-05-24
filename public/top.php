<?php

require_once '../classes/UserLogic.php';

session_start();

// エラーメッセージ
$err = [];

//バリデーション
if (!$email = filter_input(INPUT_POST, 'email')) {
    $err['email'] = 'メールアドレスを記入して下さい';
}
if (!$password = filter_input(INPUT_POST, 'password')) {
    $err['password'] = 'パスワードを記入して下さい';
}

if (count($err) > 0) {
    //エラーがあった場合は戻す
    $_SESSION = $err;
   header('location: login.php');
   return;
}
//ログイン成功時の処理
echo 'ログインしました';


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録完了画面</title>
</head>
<body>
<?php if (count($err) > 0) : ?>
    <?php foreach ($err as $e) : ?>
      <p><?php echo $e?></p>
      <?php endforeach ?>
<?php else : ?>
  <p>ユーザー登録が完了しました。</p>
<?php endif ?>
<a href="./login.php">戻る</a>
</body>
</html>