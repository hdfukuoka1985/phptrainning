
<?php
// セッションの初期化
// session_name("something")を使用している場合は特にこれを忘れないように!
session_start();
// セッション変数を全て解除する
$_SESSION = array();

// セッションを切断するにはセッションクッキーも削除する。
// Note: セッション情報だけでなくセッションを破壊する。
if (isset($_COOKIE[session_name()])) {
setcookie(session_name(), '', time()-42000, '/');
}

// 最終的に、セッションを破壊する
session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<h3>ログアウトしました。</h3>

    <p><a href="index.php">トップに戻る</a></p>
    <p><a href="signin.php">ログイン画面に戻る</a></p>
</body>
</html>
