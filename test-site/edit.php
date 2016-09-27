<?php
    // データベース接続
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',
     array(PDO::ATTR_EMULATE_PREPARES => false));
     } catch (PDOException $e) {
      exit('データベース接続失敗。'.$e->getMessage());
     }

    $id = $_GET['id'];

    // データ引き出し
    // SELECT文を変数に格納
    $sql = "SELECT id, job_name, updated_at, salary, work_time,contact,job_type,comment,image FROM jobs WHERE 1";
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

<form action="update-edit.php" method="post">


    <p><?php echo '投稿ID：'.$_GET['id'];?></p>
    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />

    <p>募集するお仕事名</p>
    <input type="text" name="jobname-update" value="<?php echo $_GET['jobname'];?>" size="50" />

    <p>仕事のタイプ</p>
    <input type="text" name="jobtype-update" value="<?php echo $_GET['jobtype'];?>" size="50" />

    <p>給与</p>
    <input type="text" name="salary-update" value="<?php echo $_GET['salary'];?>" size="50" />

    <p>勤務時間</p>
    <input type="text" name="worktime-update" value="<?php echo $_GET['worktime'];?>" size="50" />

    <p>連絡先</p>
    <input type="text" name="contact-update" value="<?php echo $_GET['contact'];?>" size="50" />

    <h3>アピールポイント</h3>
    <textarea rows="6" name="comment-update" style="width: 300px" >
    <?php echo $_GET['comment'];?>
    </textarea>

    <h3>イメージ画像</h3>
    <input type="file" name="image-update" value="<?php echo $_GET['image'];?>" >

    <h3></h3>
    <input type="submit" value="変更する" />


</form>

    <div class="admin-menu">
        <p><a href="job-register.php">仕事を登録する</a></p>
        <p><a href="a-index.php">仕事を編集・削除する</a></p>
        <p><a href="index.php">トップへ戻る</a></p>
    </div>
    
</body>
</html>