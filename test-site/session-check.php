<?php
session_start();

// ログイン状態のチェック($_SESSION["USERMAIL"]は存在しているか)
if (!isset($_SESSION["USERMAIL"])) {

// セッションIDが存在しない時はログイン失敗ページへ
header("Location: login-failed.php");
exit;
// セッションIDが確認できた時
} else {
print "ログイン成功";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<h3>ログイン処理</h3>

    <p><a href="index.html">入力画面に戻る</a></p>
    <p><a href="result.php">一覧</a></p>
</body>
</html>
