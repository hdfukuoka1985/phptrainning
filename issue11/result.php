<?php
    // データベース接続
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',
    array(PDO::ATTR_EMULATE_PREPARES => false));
    } catch (PDOException $e) {
     exit('データベース接続失敗。'.$e->getMessage());
    }


    // データ引き出し
    // SELECT文を変数に格納
    $sql = 'SELECT name, comments FROM topics';

    
    // SQLステートメントを実行し、結果を変数に格納
    $stmt = $pdo->query($sql);



    // foreach文で配列の中身を一行ずつ出力
    foreach ($stmt as $row) {

    // データベースのフィールド名で出力
    echo ('投稿者：'.$row['name'].'<br>');
    echo ('コメント：'.$row['comments'].'<br>');

    }
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBSの作成</title>
</head>
<body>
    <h3>投稿一覧</h3>

        <p>投稿者名：<?php echo $row['name'];?></p>
        <p>コメント：<?php echo $row['comments'];?></p>


    <p><a href="index.html">トップへ戻る</a></p>
</body>
</html>