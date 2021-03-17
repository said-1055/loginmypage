<!DOCTYPE HTML>
<html lang = "ja">
    <head>
        <meta charset="UTF-8">
        <tile>マイページ登録</tile>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        
        <main>
            <form action="mypage.php" method="post" >
            
            <div class="login_form">
                <div class="mail">
                <label>メールアドレス</label><br>
                <input type="text" class="formbox" size="40" value="<?php 
                                                                            if (isset($_COOKIE['login_keep'])) {
                                                                                echo $_COOKIE['mail'];
                                                                            }
                                                                    ?>" name="mail">
                </div>
                
                <div class="password">
                <label>パスワード</label><br>
                    <input type="password" class="formbox" size="40" value="<?php 
                                                                            if (isset($_COOKIE['login_keep'])) {
                                                                                echo $_COOKIE['password'];
                                                                            }
                                                                    ?>" name="password">
                    </div>
                
                <div class="login_hoji">
                <input type="checkbox" name="hohi" value="login_keep">ログイン状態を保持する
                </div>
                
                <div class="login_button">
                   
                        <input type="submit" class="submit_button" size="35" value="ログイン">
                    
                </div>
                
                </div>
            </form>
        </main>
        
        <footer>
            ©　2018 InterNous.inc All rights reserved
        </footer>
        
    </body>
</html>