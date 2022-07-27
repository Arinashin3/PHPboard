<!--자동 로그인-->
<?php
    include "/db/dbconn.php";
    session_start();
    $F_LOGIN = '/access/login.php';
    $S_LOGIN = '/board/main.php';

    if (!isset($_SESSION['id'])) {
        echo "<meta http-equiv='refresh' content='0; url=$F_LOGIN'>";
    }
    else {
        echo "<meta http-equiv='refresh' content='0; url=$S_LOGIN'>";
    }
?>
