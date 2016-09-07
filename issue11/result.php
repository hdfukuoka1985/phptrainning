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

    <form action="update.php" method="post">
        <h3>名前を変更する</h3>
        <p>変更したい名前</p>
        <input type="text" name="name-before" size="30" value="" />
        <p>変更する名前</p>
        <input type="text" name="name-after" size="30" value="" />

        <h3>削除する</h3>
        <p>削除したいコメントの名前</p>
        <input type="text" name="name-delete" size="30" value="" />

        <h3></h3>
        <input type="submit" value="登録する" />
    </form>


    <p><a href="index.html">トップへ戻る</a></p>
</body>
</html>