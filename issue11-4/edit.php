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

<h3>コメントの編集</h3>

<form action="update.php" method="post">
<?php
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    echo '変更したい名前：'.$rec['name'];
    $rec = $name-before;
    echo '<br>';
    echo '変更後の名前：';
    echo '<input type="text" name="name-after" size="30" value="" />';
    echo '<br>';
    echo '<input type="submit" value="変更する" />';

?>
</form>

</body>
</html>