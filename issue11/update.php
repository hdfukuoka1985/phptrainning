
<?php
    // データベース接続
    $dsn='mysql:host=localhost;dbname=bbs;charset=utf8';
    $user='fukuoka2';
    $password='pass888';
    $pdo=new PDO($dsn,$user,$password);
    $pdo->query('SET NAMES UTF-8');


    // result.phpから投稿されたデータを変数に入れる
    $namebefore = $_POST['name-before'];
    $nameafter = $_POST['name-after'];


    var_dump($namebefore);
    // UPDATE文を実行
    $sql = 'UPDATE topics SET name='$nameafter' WHERE name='$namebefore'';
    $stmt = $pdo->prepare($sql);
    $stmt ->execute();

    


    // データベースから切断
    $pdo = null;


?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBSの作成</title>
</head>
<body>
    <h3>更新しました。</h3>


    <p><a href="index.html">トップへ戻る</a></p>
</body>
</html>