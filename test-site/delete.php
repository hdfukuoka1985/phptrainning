<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BBSの作成</title>

<script type="text/javascript">

function startConfirm(){
return (confirm("本当によろしいですか？"));
}

</script>



</head>
<body>




<h3>コメントの削除</h3>
    <form action="update-delete.php" method="post" onSubmit="return startConfirm()">



        <p>選択したお仕事情報を削除します。</p>
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />


        <input type="submit" value="削除する";/>


    </form>

    <div class="admin-menu">
        <p><a href="job-register.php">仕事を登録する</a></p>
        <p><a href="a-index.php">仕事を編集・削除する</a></p>
        <p><a href="index.php">トップへ戻る</a></p>
    </div>

</body>
</html>