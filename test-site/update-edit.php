
<?php
    // データベース接続
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',
     array(PDO::ATTR_EMULATE_PREPARES => false));
     } catch (PDOException $e) {
      exit('データベース接続失敗。'.$e->getMessage());
     }


    // edit.phpから投稿されたデータを変数に入れる
    $id = $_POST['id'];
    $jobnameupdate = $_POST['jobname-update'];
    $jobtypeupdate = $_POST['jobtype-update'];
    $salaryupdate = $_POST['salary-update'];
    $worktimeupdate = $_POST['worktime-update'];
    $contactupdate = $_POST['contact-update'];
    $commentupdate = $_POST['comment-update'];

    // UPDATE文を実行
    // この文を書くことにより静的プレースホルダを使うことになる
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // 実行するSQL文を準備
    $stmt = $pdo -> prepare("UPDATE jobs SET job_name=:jobnameupdate, job_type=:jobtypeupdate, salary=:salaryupdate, work_time=:worktimeupdate, contact=:contactupdate, comment=:commentupdate WHERE id='$id'");


    // パラメータに文字列としてバインド（文字列以外入力できなくする）
    $stmt->bindParam(':jobnameupdate', $jobnameupdate, PDO::PARAM_STR);
    $stmt->bindParam(':jobtypeupdate', $jobtypeupdate, PDO::PARAM_STR);
    $stmt->bindParam(':salaryupdate', $salaryupdate, PDO::PARAM_STR);
    $stmt->bindParam(':worktimeupdate', $worktimeupdate, PDO::PARAM_STR);
    $stmt->bindParam(':contactupdate', $contactupdate, PDO::PARAM_STR);
    $stmt->bindParam(':commentupdate', $commentupdate, PDO::PARAM_STR);

    // 実行する
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


    <div class="admin-menu">
        <p><a href="job-register.php">仕事を登録する</a></p>
        <p><a href="a-index.php">仕事を編集・削除する</a></p>
        <p><a href="index.php">トップへ戻る</a></p>
    </div>


</body>
</html>