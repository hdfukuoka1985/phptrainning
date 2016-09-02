<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBSの作成</title>
</head>
<body>
<h3>登録中</h3>
<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}


$name = $_POST['name'];
$comments = $_POST['comments'];

$stmt = $pdo -> prepare("INSERT INTO topics (name, comments) VALUES (:name, :comments)");
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':comments', $comments, PDO::PARAM_STR);


$stmt->execute();


?>
<p>コメントの投稿が完了しました。</p>
<p><a href="index.html">戻る</a></p>
<p><a href="result.php">一覧を見る</a></p>

</body>
</html>