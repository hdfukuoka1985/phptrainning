<?php
    // データベース接続
    $dsn='mysql:host=localhost;dbname=bbs;charset=utf8';
    $user='fukuoka2';
    $password='pass888';
    $pdo=new PDO($dsn,$user,$password);
    $pdo->query('SET NAMES UTF-8');



    // データ引き出し
    // SELECT文を変数に格納
    $sql = 'SELECT name, comment, updated_at FROM topics WHERE 1';
    $stmt = $pdo->prepare($sql);
    $stmt ->execute();



    while(1)
    {
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if($rec==false)
    {
        break;
    }
    echo '投稿時間：'.$rec['updated_at'];
    echo ' / ';
    echo '投稿者：'.$rec['name'];
    echo '<br>';
    echo 'コメント：'.$rec['comment'];
    echo '<br>';
    echo '<br>';
    }

    // データベース接続解除
    $pdo = null;
?>




<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBSの作成</title>
</head>
<body>
    <h3>投稿一覧</h3>

        <p>投稿者名：<?php echo $row['name'];?></p>
        <p>コメント：<?php echo $row['comment'];?></p>


    <p><a href="index.html">トップへ戻る</a></p>
</body>
</html>