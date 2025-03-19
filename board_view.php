<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/board.css">
    <link rel="stylesheet" href="./css/style2.css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/prefixfree.min.js"></script>
    <script src="./js/script2.js"></script>
</head>
<body>
    <header>
        <?php include "header.php";?>
    </header>  
<section>
	<div id="main_img_bar"></div>
    <div id="board_box">
        <h3 class="title">게시판 > 내용보기</h3>
<?php
    //레코드 일련번호와 페이지번호 전달받기
    $num = $_GET["num"];
    $page = $_GET["page"];

    //DB에서 해당 글 검색하여 글 정보 가져오기
    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
    $sql = "select * from board where num=$num";
    $result = mysqli_query($con,$sql );

    //$result에서 데이터 가져오기
    $row = mysqli_fetch_array($result);
    $id = $row["id"];
    $name = $row["name"];
    $regist_day = $row["regist_day"];
    $subject = $row["subject"];
    $content = $row["content"];
    $file_name = $row["file_name"];
    $file_type = $row["file_type"];
    $file_copied = $row["file_copied"]; //서버에 저장된 첨부 파일명
    $hit = $row["hit"]; //조회수

    //공백과 줄 바꿈 코드 변경
    $content = str_replace(" ","&nbsp;", $content);
    $content = str_replace("\n","<br>", $content);


    //조회수 증가와 DB업데이트
    //$hit값을 1증가시키고 MySQL의 update명령을 이용해 board테이블의 hit수를 업데이트 함.
    $new_hit = $hit +1;
    $sql = "update board set hit=$new_hit where num=$num";
    mysqli_query($con,$sql );
?>
    <ul id="view_content">
        <li><!-- 제목, 작성자이름, 작성일시 -->
            <span class="col1">제목: <?=$subject?></span> <!-- 제목 -->
            <span class="col2"><?=$name?> | <?=$regist_day?></span><!-- 작성자이름, 작성일시 -->
        </li>
        <li>
<?php
    if($file_name){
        $real_name = $file_copied;
        $file_path = "./data/".$real_name;
        $file_size = filesize($file_path);

        echo "▷첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
            <a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a> <br><br>";
    }
?>
<?=$content?>
        </li>
    </ul>
    <ul class="buttons">
        <li><button onclick="location.href='board_list.php?page=<?$page?>'">목록</button></li>
        <li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
        <li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
        <li><button onclick="location.href='board_form.php'">글쓰기</button></li>
    </ul>
    </div>
</section>
<footer>
	<?php include "footer.php";?>
</footer>
</body>
</html>