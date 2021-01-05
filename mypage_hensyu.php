<?php
mb_internal_encoding("utf8");
session_start();

if(empty($_POST['from_mypage'])){
    header("Location:http://localhost/login_mypage/login_error.php");
} 
$_POST['from_mypage'] = "";
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ</title>
        <link rel="stylesheet" type="text/css" href="mypage_.css">
    </head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="logout"><a href="log_out.php">ログアウト</a></div>
    </header>
    
    <main>
        <form action="mypage_update.php" method="post" enctype="multipart/form-data">
            <div class="form_contents">
                <h2>会員情報</h2>
                <p>こんにちは！　<?php echo $_SESSION['name'];?>さん</p>
                <div class="info">
                    <img src="<?php echo $_SESSION['path_filename'];?>">
                    <div class="name">
                        氏名 : <input type="text" name="name" size="30" value="<?php echo $_SESSION['name'];?>">
                    </div>
                    <div class="mail">
                        メール : <input type="text" name="mail" size="30" value="<?php echo $_SESSION['mail'];?>">
                    </div>
                    <div class="password">
                        パスワード : <input type="text" name="password" size="28" value="<?php echo $_SESSION['password'];?>">
                    </div>
                </div>
                <div class="comments">
                    <textarea rows="3" cols="77" name="comments"><?php echo     $_SESSION['comments'];?></textarea>
                </div>
                <input type="submit" class="button1" value="この内容に変更する"/>
            </div>
        </form>
    </main>
    

    
    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>


</body>
</html>