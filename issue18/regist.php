<?php
    // データベース接続
    try {
    // データベース接続。文字エンコーディング（utf-8）も実施
    $pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',

    // プリペアドステートメントのエミュレーションを無効にして、
    // MySQL ネイティブの静的プレースホルダを使用する
     array(PDO::ATTR_EMULATE_PREPARES => false));


    // throwされた内容をcatchして処理を実行
     } catch (Exception $e) {
      exit('データベース接続失敗。'.$e->getMessage());
     }

     // 投稿されたデータを変数に入れる
    $name = $_POST['username'];
    $mail = $_POST['usermail'];
    $password = $_POST['password'];
    $timestamp = date("Y/m/d H:i:s");

     // パスワードのハッシュ化
    $hash = password_hash("$password", PASSWORD_DEFAULT);


    // 変数をデータベースに入れる
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $stmt = $pdo -> prepare("INSERT INTO users (name, mail, password, created_at) VALUES (:name, :mail, :hash, :timestamp)");
    // $stmt = $pdo -> prepare("INSERT INTO users (name, mail, password, created_at) VALUES ('$name', '$mail', '$password', '$timestamp')");

    // // パラメータに文字列としてバインド（文字列以外入力できなくする）
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmt->bindParam(':hash', $hash, PDO::PARAM_STR);
    $stmt->bindParam(':timestamp', $timestamp, PDO::PARAM_STR);

    // statementを実行
    $stmt -> execute();

    // データベースの接続を解除
    $pdo = null;

    echo '登録完了しました';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<h3>新規登録</h3>

    <p><a href="index.html">ログイン</a></p>
    <p><a href="result.php">一覧</a></p>
</body>
</html>
