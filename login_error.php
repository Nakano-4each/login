<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:http://localhost/login_mypage/mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
    </header>
    
    <main>
        <form action="mypage.php" method="post" enctype="multipart/form-data">
            <div class="form_contents">
                <p>メールアドレスまたはパスワードが間違っています。</p>
                <div class="mail">
                    <label>メールアドレス</label><br>
                    <input type="text" class="formbox" size="40" name="mail">
                </div>
                <div class="password">
                    <label>パスワード</label><br>
                    <input type="password" class="formbox" size="40" name="password">
                </div>
                <div class="hold">
                    <input type="checkbox" name="hold"><label>ログイン状態を保持する</label>
                </div>
                <div class="toroku">
                    <input type="submit" class="submit_button" size="35" value="ログイン">
                </div>
            </div>
        </form>
    </main>

    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>


</body>
</html>