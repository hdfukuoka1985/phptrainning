<?php
    // サーバに保存したCookieを読み取る
  $val = $_COOKIE["cookietest"];

?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php
    echo "サーバーには{$val}というCookieが保存されています。";
?>

<p><a href="cookie.php">戻る</a></p>

</body>
</html>