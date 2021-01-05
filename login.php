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
                <div class="mail">
                    <label>メールアドレス</label><br>
                    <input type="text" class="formbox" size="40" value="<?php
                            if(isset($_COOKIE['login_keep'])){
                                echo $_COOKIE['mail'];
                            }
                            ?>" name="mail">
                </div>
                <div class="password">
                    <label>パスワード</label><br>
                    <input type="password" class="formbox" size="40" value="<?php
                            if(isset($_COOKIE['login_keep'])){
                                echo $_COOKIE['password'];
                            }
                            ?>" name="password">
                </div>
                <div class="hold">
                    <input type="checkbox" name="login_keep" <?php
                           if(isset($_COOKIE['login_keep'])){
                               echo "checked = 'checked'";
                           }
                           ?>><label>ログイン状態を保持する</label>
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