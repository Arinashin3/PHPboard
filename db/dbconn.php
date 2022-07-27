<?php
    // DB 선언 (알아서 맞게 설정할 것)
    $dbhost = "localhost";
    $dbname = "germy";
    $dbadmin = "germynim";
    $dbpassword = "wkgus1904";

    // DB 접속
    $conn = mysqli_connect($dbhost, $dbadmin, $dbpassword, $dbname);
    $conn = set_charset('utf-8');
?>