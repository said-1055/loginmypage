<?php
mb_internal_encoding("utf8");

session_start();

if(empty($_POST['from_mypage'])) {
  header("Location:login_error.php");
}

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    
    <body>
        
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログアウト</a></div>
        </header>
        
        <main>
            <form action="mypage_update.php" method="post">
                <div class="box">
                    <h2>会員情報</h2>
                    
                    <div class="hello">
                        <?php echo "こんにちは！".$_SESSION['name']."さん";?>
                    </div>
                    
                   
                    <div class="right">
                    <div class="picture">
                        <img src="<?php echo $_SESSION['picture']; ?>">
                    </div>
                    </div>
                    
                    <div class="left">
                   
                        <p> 氏名：<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name"> </p>
                        <p> メール：<input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail"> </p>
                        <p>パスワード：<input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password">
                            <input type="hidden" value="<?php echo rand(1,10);?>" name="from_mypage_hensyu">
                        </p>
                    
                    </div>
                    
                    
                    <div class="comments">
                        <textarea rows="3" cols="75" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                    
                    
                <div class="hensyu">
                     
                        <input type="submit" class="submit_button" size="35" value="この内容で変更する">
                    
                        </div>
                        
                     </div>
                    
                    
                </div>
            </form>
                    
                
        
          



        </main>
        
        <footer>
             ©　2018 InterNous.inc All rights reserved
        </footer>
    </body>
</html>