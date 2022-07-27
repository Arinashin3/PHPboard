<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/basic.css">
        <title>Germy - 로그인</title>
        <style>
            body {
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <div class="login_box">
            <h1>Germy.net</h1>
            <p class="login_text">로그인하기 위해 </p>
            <p class="login_text">ID와 PW를 입력하여주세요.</p>
            <form action="/db/login_check.php" method="post">
                <input type="text" class="login_id" name="id" placeholder="ID를 입력해주세요."><br>
                <input type="password" class="login_pw" name="pw" placeholder="PW를 입력해주세요."><br>
                <button type="submit" class="login_btn" onclick="location.href='/db/login_check.php'">다음</button>
            </form>
            <div class="register_link"><a href='/register.html'>회원가입</a></div>
        </div>
    </body>
</html>