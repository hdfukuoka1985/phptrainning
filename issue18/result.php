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
    $stmt = $pdo -> prepare("SELECT id, name, password, mail, updated_at FROM users WHERE 1");
    // $stmt = $pdo->prepare($sql);
    $stmt ->execute();

// $rec = $stmt->fetch(PDO::FETCH_ASSOC);
//     if($rec==false)
//     { break;}


    // データベース接続解除
    $pdo = null;
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php while($rec = $stmt->fetch(PDO::FETCH_ASSOC)):?>
  <div class="userinfo">
    <p>ID：<?php echo $rec['id'];?> / 名前：<?php echo $rec['name'];?></p>

    <p>メールアドレス：<?php echo $rec['mail'];?></p>

    <p>パスワード：<?php echo $rec['password'];?></p>
  </div>
<?php endwhile; ?>

<p><a href="index.html">ログイン</a></p>
<p><a href="signup.php">新規登録</a></p>

  
</body>
</html>