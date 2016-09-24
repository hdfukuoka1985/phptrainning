
<?php
    // データベース接続
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',
     array(PDO::ATTR_EMULATE_PREPARES => false));
     } catch (PDOException $e) {
      exit('データベース接続失敗。'.$e->getMessage());
     }


    // result.phpから投稿されたデータを変数に入れる
    $id = $_POST['id'];


    // DELETE文を実行

    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $sql = "DELETE FROM jobs WHERE id='$id'";
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
    <h3>お仕事情報を削除しました。</h3>


    <div class="admin-menu">
        <p><a href="job-register.php">仕事を登録する</a></p>
        <p><a href="a-index.php">仕事を編集・削除する</a></p>
        <p><a href="index.php">トップへ戻る</a></p>
    </div>


</body>
</html>