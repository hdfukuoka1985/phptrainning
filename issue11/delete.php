<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBSの作成</title>

<script type="text/javascript">
<!--

function disp(){

  // 「OK」時の処理開始 ＋ 確認ダイアログの表示
  if(window.confirm('本当にいいんですね？')){

    location.href = "example_confirm.html"; // example_confirm.html へジャンプ

  }
  // 「OK」時の処理終了

  // 「キャンセル」時の処理開始
  else{

    window.alert('キャンセルされました'); // 警告ダイアログを表示

  }
  // 「キャンセル」時の処理終了

}

// -->
</script>



</head>
<body>

<h3>コメントの削除</h3>
    <form action="update.php" method="post">



        <p><?php echo '投稿ID：'.$_GET['id'];?></p>

        <p><?php echo '削除する名前：'.$_GET['name'];?></p>





        <input type="hidden" name="name-delete" value="" />

        <input type="submit" value="削除する" onClick="disp()"/>


    </form>

    <p><a href="index.html">トップへ戻る</a></p>
    <p><a href="result.php">一覧を見る</a></p>

</body>
</html>