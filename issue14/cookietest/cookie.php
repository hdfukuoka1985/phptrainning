<?php
    // Cookieを送信する(クッキー名, 値)
    $flag = setcookie("cookietest", cookie_no_test_desu);
?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php
    if ($flag){
        print('<p>クッキーを書き込みました</p>');
    }else{
        print('<p>クッキーの書き込みに失敗しました</p>');
    }
?>
<p><a href="cookieresult.php">保存状態を見る</a></p>

</body>
</html>