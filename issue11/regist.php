<?php
    // データベース接続

    try {
    // データベース接続。文字エンコーディング（utf-8）も実施
    $pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',

    // プリペアドステートメントのエミュレーションを無効にして、
    // MySQL ネイティブの静的プレースホルダを使用する
     array(PDO::ATTR_EMULATE_PREPARES => false));

    // 例外クラスをthrowする
    throw new Exception('エラーが発生しました');


    // throwされた内容をcatchして処理を実行
     } catch (PDOException $e) {
      exit('データベース接続失敗。'.$e->getMessage());
     }



    // 投稿されたデータを変数に入れる
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $timestamp = date("Y/m/d H:i:s");


    // 変数をデータベースに入れる
    $stmt = $pdo -> prepare("INSERT INTO topics (name, comment,created_at) VALUES (:name, :comment, :timestamp)");


    // パラメータに文字列としてバインド（文字列以外入力できなくする）
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
    $stmt->bindParam(':timestamp', $comment, PDO::PARAM_STR);

    // statementを実行
    $stmt -> execute();

    // データベースの接続を解除
    $pdo = null;

    echo '更新完了しました';


?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBSの作成</title>
</head>
<body>
    <h3>登録中</h3>
    


    
    <p>コメントの投稿が完了しました。</p>
    <p><a href="index.html">戻る</a></p>
    <p><a href="result.php">一覧を見る</a></p>

</body>
</html>