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
    $mail = $_POST['postmail'];
    $password1 = $_POST['postpass'];



    // データ引き出し
    // SELECT文を変数に格納
    $stmt = $pdo->query("SELECT password FROM admins WHERE  mail = '$mail'");
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {

    $password2 = $row['password'];
    
    }




    // パスワードの照合
    if ($password1 == $password2) {
      // 認証成功なら、job-register.phpへ移動
      session_regenerate_id(true);
      $_SESSION["USERID"] = $_POST["userid"];
      header("Location: job-register.php");
      exit;
    }
    else {
      // 不一致
      echo パスワードが正しくありません。;
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
