<!--자동 로그인-->
<?php
    include "./db/dbconn.php";
    session_start();
    $goto_login = './access/login.php';
    $goto_board = './board/main.php';

    if (!isset($_COOKIE['id']) or !isset($_SESSION['id'])) {
        echo "<meta http-equiv='refresh content='0; url=$goto_login'>";
    }
    else {
        echo "<meta http-equiv='refresh content='0; url=$goto_board'>";
    }
?>
