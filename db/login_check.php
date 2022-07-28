<?php
    include "dbconn.php";
    session_start();
    
    // login.php로 부터 입력받은 값 저장
    $id     = $_POST['id'];
    $pw     = $_POST['pw'];
    // 변수 선언
    $query  = "SELECT * FROM member WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
?>
<?php
    if ($row != null) {
        $_SESSION['id'] = $row['id'];
    }
    if (mysqli_num_rows($result) == 1) {
        // PW가 동일할 시 세션 생성
        if ($row['pw'] == $pw) {
            $_SESSION['id'] = $id;
            if (isset($_SESSION['id'])) {
?>              <script>
                    alert("로그인되었습니다.");
                    location.replace("http://germy.net/board/main.php");
                </script>
<?php       }
            else {
                echo "Session Fail";
            }
        }
        else {
?>          <script>
                alert("아이디 또는 비밀번호가 잘못되었습니다.1");
                history.back();
            </script>
<?php   }
    }
    else {
?>      <script>
            alert("아이디 또는 비밀번호가 잘못되었습니다.2");
            history.back();
        </script>
<?php
    }
?>
