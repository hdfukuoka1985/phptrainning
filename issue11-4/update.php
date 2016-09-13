
<?php
    // データベース接続
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',
     array(PDO::ATTR_EMULATE_PREPARES => false));
     } catch (PDOException $e) {
      exit('データベース接続失敗。'.$e->getMessage());
     }


    // result.phpから投稿されたデータを変数に入れる


    $namebefore = $rec['name-before'];
    $nameafter = $_POST['name-after'];
    $namedelete = $_POST['name-delete'];

    // UPDATE文を実行
    $sql = "UPDATE topics SET name='$nameafter' WHERE name='$namebefore'";
    $stmt = $pdo->prepare($sql);
    $stmt ->execute();

    // DELETE文を実行
    $sql = "DELETE FROM topics WHERE name='$namedelete'";
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
    <p><a href="result.php">一覧を見る</a></p>

</body>
</html>