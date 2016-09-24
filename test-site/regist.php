<?php
    // データベース接続

    try {
    // データベース接続。文字エンコーディング（utf-8）も実施
    $pdo = new PDO('mysql:host=localhost;dbname=bbs;charset=utf8','fukuoka2','pass888',

    // プリペアドステートメントのエミュレーションを無効にして、
    // MySQL ネイティブの静的プレースホルダを使用する
     array(PDO::ATTR_EMULATE_PREPARES => false));

    // // 例外クラスをthrowする
    // もし$scoreが85以上なら
    if (false){
    throw new Exception('エラーが発生しました');
    }


    // throwされた内容をcatchして処理を実行
     } catch (Exception $e) {
      exit('データベース接続失敗。'.$e->getMessage());
     }



    // 投稿されたデータを変数に入れる
    $jobname = $_POST['jobname'];
    $jobtype = $_POST['jobtype'];
    $salary = $_POST['salary'];
    $worktime = $_POST['worktime'];
    $contact = $_POST['contact'];
    $comment = $_POST['comment'];
    $pic = $_POST['pic'];
    $timestamp = date("Y/m/d H:i:s");


    // 変数をデータベースに入れる
    $stmt = $pdo -> prepare("INSERT INTO jobs (job_name, job_type, salary, work_time, contact, comment, created_at ,image) VALUES (:jobname, :jobtype, :salary, :worktime, :contact, :comment, :timestamp, '$pic')");


    // パラメータに文字列としてバインド（文字列以外入力できなくする）
    $stmt->bindParam(':jobname', $jobname, PDO::PARAM_STR);
    $stmt->bindParam(':jobtype', $jobtype, PDO::PARAM_STR);
    $stmt->bindParam(':salary', $salary, PDO::PARAM_STR);
    $stmt->bindParam(':worktime', $worktime, PDO::PARAM_STR);
    $stmt->bindParam(':contact', $contact, PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
    $stmt->bindParam(':timestamp', $comment, PDO::PARAM_STR);

    // statementを実行
    $stmt -> execute();

    // データベースの接続を解除
    $pdo = null;

    echo '更新完了しました';


?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBSの作成</title>
</head>
<body>
    <h3>登録中</h3>
    


    
    <p>仕事情報の投稿が完了しました。</p>

    
    <div class="admin-menu">
        <p><a href="job-register.php">仕事を登録する</a></p>
        <p><a href="a-index.php">仕事を編集・削除する</a></p>
        <p><a href="index.php">トップへ戻る</a></p>
    </div>

</body>
</html>