<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpを使ってphpMyadminへのデータ入力（出力）</title>
</head>
<body>
<h3>登録中</h3>
<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=test1;charset=utf8','fukuoka2','pass888',
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}


$id   = $_POST['id'];
$name = $_POST['name'];

$stmt = $pdo -> prepare("INSERT INTO test2 (name, id) VALUES (:name, :id)");
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);


$stmt->execute();


?>
<p>登録が完了しました。<br /><a href="index.html">戻る</a></p>
</body>
</html>