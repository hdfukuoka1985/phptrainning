<?php
    // データベース接続
    $dsn='mysql:host=localhost;dbname=bbs;charset=utf8';
    $user='fukuoka2';
    $password='pass888';
    $pdo=new PDO($dsn,$user,$password);
    $pdo->query('SET NAMES UTF-8');


    // 投稿されたデータを変数に入れる
    $name = $_POST['name'];
    $comment = $_POST['comment'];


    // 変数をデータベースに入れる
    $sql = 'INSERT INTO topics (name,comment) VALUES ("'.$name.'","'.$comment.'")';
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