<?php

    // ログイン状態の確認
    session_start();

    // ログイン状態のチェック($_SESSION["USERID"]は存在しているか)
    if (!isset($_SESSION["USERMAIL"])) {

    // セッションIDが存在しない場合はログイン失敗画面へ
    header("Location: login-failed.php");
    exit;
    } 

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="job-register">
        <h2>仕事情報登録</h2>
        <form action="regist.php" method="post">
            <h3>募集するお仕事名</h3>
            <input type="text" name="jobname" size="30" value="" />

            <h3>仕事のタイプ</h3>
            <input type="text" name="jobtype" size="30" value="" />

            <h3>給与</h3>
            <input type="text" name="salary" size="30" value="" />

            <h3>勤務時間</h3>
            <input type="text" name="worktime" size="30" value="" />

            <h3>連絡先</h3>
            <input type="text" name="contact" size="30" value="" />

            <h3>アピールポイント</h3>
            <textarea rows="6" name="comment" style="width: 300px">
            </textarea>

            <h3>イメージ画像</h3>
            <input type="file" name="pic">

            <h3></h3>
            <input type="submit" value="登録する" />
        </form>

    <div class="admin-menu">
        <p><a href="job-register.php">仕事を登録する</a></p>
        <p><a href="a-index.php">仕事を編集・削除する</a></p>
        <p><a href="index.php">トップへ戻る</a></p>
    </div>

    </div>

    <div class="footer">
        <div class="footerlist">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">問い合わせ</a></li>
                <li><a href="#">運営会社</a></li>
            </ul>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>