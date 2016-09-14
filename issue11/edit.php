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

 
    <p><?php echo '投稿ID：'.$_GET['id'];?></p>

    <p><?php echo '変更する名前：'.$_GET['name'];?></p>
    <input type="hidden" name="name-before" value="" />

    <p><?php echo '変更後の名前：';?></p>
    <input type="text" name="name-after" size="30" value="" />

    <input type="submit" value="変更する" />


</form>

    <p><a href="index.html">トップへ戻る</a></p>
    <p><a href="result.php">一覧を見る</a></p>

</body>
</html>