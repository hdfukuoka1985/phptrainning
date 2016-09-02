<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBSの作成</title>
</head>
<body>
<h3>投稿一覧</h3>
<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}

$stmt = $pdo->query("SELECT name, comments FROM topics ORDER BY no ASC");
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
 $name = $row["name"];
 $comments = $row["comments"];

echo<<<EOF

print($name);
print($comments);

EOF;
}

?>
<p><a href="index.html">トップへ戻る</a></p>
</body>
</html>