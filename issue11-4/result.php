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
    $sql = 'SELECT id, name, comment, updated_at FROM topics WHERE 1';
    $stmt = $pdo->prepare($sql);
    $stmt ->execute();



    // データベース接続解除
    $pdo = null;
?>




<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBSの作成</title>
</head>
<body>

<h3>掲示板</h3>

<form action="edit.php" method="post">
<?php
    while(1)
    {
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if($rec==false)
    { break;}

    echo 'ID：'.$rec['id'];
    echo ' / ';
    echo '投稿時間：'.$rec['updated_at'];
    echo ' / ';
    echo '投稿者：'.$rec['name'];
    echo '<br>';
    echo 'コメント：'.$rec['comment'];
    echo '<br>';


    echo '<input type="submit" value="編集する" />';
    echo '<br>';
    echo '<br>';

    }

?>
</form>

    <p><a href="index.html">トップへ戻る</a></p>
</body>
</html>