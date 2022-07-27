<?php
    include $_SERVER['DOCUMENT_ROOT']."/db/dbconn.php"
    // 회원가입
    // 입력받은 ID, PW
    $u_id       = $_POST['id'];
    $u_pw       = $_POST['pw'];
    $u_gender   = $_POST['gender'];
    $u_phone    = $_POST['phone'];
    $u_email    = $_POST['email'];

    // DB에 동일한 ID가 존재하는지 검색
    $id_search  = "SELECT * FROM member where id=$u_id";
    $m_id       = $conn->query($id_search);

    // 동일한 ID가 존재할 경우
    if (mysqli_num_rows($m_id) == 1) {
?>      <script>
            alert("동일한 아이디가 존재합니다.");
            history.back();
        </script>
<?php   }
    // 동일한 ID가 존재하지 않을 경우
    else {
        $register   = "INSERT INTO member (id, pw, gender, phone, email) VALUES ($u_id, $u_pw, $u_gender, $u_phone, $u_email)";
?>      <script>
            alert("계정이 생성되었습니다.");
            location.replace($_SERVER['DOCUMENT_ROOT']);
        </script>
<?php   }
?>