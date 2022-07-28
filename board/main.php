<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="images/png" href="http://germy.net/img/logo/Glogo.png">
        <link rel="stylesheet" type="text/css" href="/css/basic.css">
        <title>Germy - 게시판</title>
    </head>
    <body>
        <header class="board_header">
            <h1 class="board_domain">Germy.net</h1>
        </header>
        <ul class="board_list">
            <li>자유게시판</li>
            <li>고양이</li>
	    <li>애옹ㅋㅋ</li>
        </ul>
        <div class="board_main">
            <h2 class="board_title">자유게시판</h2>
            <table class="board_table">
                <thead class="board_table_head">
                    <tr>
                        <th width="70px" >No.</th>
                        <th width="500px">제목</th>
                        <th width="120px">글쓴이</th>
                        <th width="100px">작성일</th>
                        <th width="100px">추천</th>
                        <th width="100px">조회수</th>
                    </tr>
                </thead>
<?php
    include "/db/dbconn.php";
    $result = "select * from board order by idx desc limit 0,10";
    $sql = mysqli_query($conn, $result);
    while ($board = mysqli_fetch_array($sql)) {
        $title = $board["title"];
        if (strlen($title)>30) {
            $title = str_replace($board["title"], mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
        }
?>              <tbody>
                    <tr>
                        <td width="70px"><?php echo $board['idx']; ?></td>
                        <td width="500px"><?php echo $title; ?></td>
                        <td width="120px"><?php echo $board['id']; ?></td>
                        <td width="100px"><?php echo $board['date']; ?></td>
                        <td width="100px"><?php echo $board['hit']; ?></td>
                        <td width="100px"><?php echo $board['thumbup']; ?></td>
                    </tr>
                </tbody>
<?php } ?>
            </table>
        </div>
    </body>
</html>
