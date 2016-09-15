<?php
    // データベース接続
    try {
    // データベース接続。文字エンコーディング（utf-8）も実施
    $pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',

    // プリペアドステートメントのエミュレーションを無効にして、
    // MySQL ネイティブの静的プレースホルダを使用する
     array(PDO::ATTR_EMULATE_PREPARES => false));

    // // 例外クラスをthrowする
    if (false){
    throw new Exception('エラーが発生しました');
    }

    // throwされた内容をcatchして処理を実行
     } catch (Exception $e) {
      exit('データベース接続失敗。'.$e->getMessage());
     }

    // $mysqli = new mysqli("localhost","fukuoka2","pass888","bbs");
    // $mysqli->set_charset("utf-8");
    // if ($mysqli -> connect_errno) {
    //   print('<p>データベースへの接続に失敗しました。</p>' . $mysqli -> connect_error);
    //   exit();
    // } 




    // データ引き出し
    // SELECT文を変数に格納
    $stmt = $pdo->query("SELECT id, name, password FROM login WHERE 1");
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
     $id = $row["id"];
     $name = $row["name"];
     $password = $row["password"];
     $db_hashed_pwd = $row['password'];
    }




    // 投稿されたデータを変数に入れる
    $name = $_POST['userid'];
    $password2 = $_POST['password'];

    // パスワードをハッシュ化
    $hash = password_hash("$password2", PASSWORD_DEFAULT);


    // パスワードの照合
    if (password_verify($hash, $db_hashed_pwd)) {
      // 認証成功なら、セッションIDを新規に発行する
      echo パスワードが認証されました。;
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
</body>
</html>
