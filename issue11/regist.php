<?php
    // データベース接続

    try {
    $pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',
     array(PDO::ATTR_EMULATE_PREPARES => false));
     } catch (PDOException $e) {
      exit('データベース接続失敗。'.$e->getMessage());
     }



    // 投稿されたデータを変数に入れる
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $timestamp = date("Y/m/d H:i:s");


    // 変数をデータベースに入れる
    $sql = 'INSERT INTO topics (name,comment,created_at) VALUES ("'.$name.'","'.$comment.'","'.$timestamp.'")';
    $stmt =$pdo->prepare($sql);
    $stmt -> execute();


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