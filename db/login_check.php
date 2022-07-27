<?php
    include "dbconn.php";
    session_start();
    
    // login.php로 부터 입력받은 값 저장
    $id     = $_POST['id'];
    $pw     = $_POST['pw'];

    // ID 검색
    $query  = "SELECT * FROM member WHERE id='$id' AND pw='$pw'";
    $result = $conn->query($query);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($row != null) {
        $_SESSION['id'] = $row['id']
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // PW가 동일할 시 세션 생성
        if($row['pw']==$pw) {
            $_SESSION['id'] = $id;
            if(isset($_SESSION['id'])) {
?>              <script>
                    alert("로그인되었습니다.");
                    location.replace("http://germy.net/board/board.php");
                </script>
<?php       }
            else {
                echo "Session Fail";
            }
        }
        else {
?>          <script>
                alert("아이디 또는 비밀번호가 잘못되었습니다.");
                history.back();
            </script>
<?php   }
    }
    else {
?>      <script>
            alert("아이디 또는 비밀번호가 잘못되었습니다.");
            history.back();
        </script>
<?php
    }
?>