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
    $sql = 'SELECT id, job_name, updated_at, salary, work_time,contact,job_type,comment,image FROM jobs WHERE 1';
    $stmt = $pdo->prepare($sql);
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

    <div class="header">
        <div class="topbanner">
            <h1>石垣島で働こう！</h1>
        </div>
    </div>


    <div class="main">
            <div class="row maincontents">

                    <div class="col-md-3 sidebar">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li><a href="#">飲食店</a></li>
                            <li><a href="#">旅行・ガイド</a></li>
                            <li><a href="#">農業・漁業</a></li>
                             <li><a href="#">事務系</a></li>
                            <li><a href="signin.php">ログイン</a></li>
                            <li><a href="#">お問い合わせ</a></li>
                        </ul>
                    </div>

                    <div class="col-md-9 job-information">
                        <div class="row">
                                <!-- ======================ループ記事======================== -->

                                <?php while($rec = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                                <div class="col-md-6">
                                        <div class="row job-box">
                                            <h6><?php echo $rec['job_name'];?></h6>
                                                <div class="col-md-4 job-photo">
                                                    <img src="images/<?php echo $rec['image'];?>" alt="">
                                                </div>
                                                <div class="col-md-8 job-info">
                                                    <div class="job-info-inside">
                                                        <p>掲載日時：<?php echo $rec['updated_at'];?></p>
                                                        <p>分類：<?php echo $rec['job_type'];?></p>
                                                        <p>給与：<?php echo $rec['salary'];?></p>
                                                        <p>勤務時間：<?php echo $rec['work_time'];?></p>
                                                        <p>連絡先：<?php echo $rec['contact'];?></p>
                                                        <p><?php echo $rec['comment'];?></p>
                                                    </div>
                                                </div>

                                        </div><!-- job-box -->
                                </div>
                                <?php endwhile; ?>

                                <!-- ======================ループ記事======================== -->
                        </div>

                    </div><!-- job-information -->
            </div><!-- maincontents -->
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