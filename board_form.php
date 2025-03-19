<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/board.css">
    <link rel="stylesheet" type="text/css" href="./css/style2.css">

    <script src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/prefixfree.min.js"></script>
    <script src="./js/script2.js"></script>
<script>
    function check_input(){
        if(!document.board_form.subject.value.trim()){
            alert("제목을 입력하세요!");
            document.board_form.subject.focus();
            return;
        }
        if(!document.board_form.content.value.trim()){
            alert("내용을 입력하세요!");
            document.board_form.content.focus();
            return;
        }
        document.board_form.submit();
    }
</script>
</head>
<body>
<header>
    <?php include "header.php";?>
</header>
<section>
    <div id="board_box">
        <h3>
            공지사항 > 글쓰기
        </h3>
        <!-- enctype="multipart/form-data"로 파일첨부기능 추가 -->
        <!-- 파일 업로드와 같이 텍스트 데이터 이외의 데이터를 서버로 전송해야 할 때 사용 -->
        <form action="board_insert.php" name="board_form" enctype="multipart/form-data" method="post">
            <ul id="board_form">
                <li>
                    <span  class="col1">이름 : </span>
                    <span  class="col2"><?=$username?></span>
                </li>
                <li>
                    <span  class="col1">제목 : </span>
                    <span  class="col2"><input type="text" name="subject"></span>
                </li>
                <li id="text_area">
                    <span  class="col1">내용 : </span>
                    <span  class="col2">
                        <textarea name="content"></textarea>
                    </span>
                </li>
                <li>
                    <span  class="col1">첨부파일 </span>
                    <span  class="col2"><input type="file" name="upfile"></span>
                </li>
            </ul>
            <ul class="buttons">
                <li><button type="button" onclick="check_input()">완료</button></li>
                <li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
            </ul>
        </form>
    </div>
</section>
    <!-- Footer Section -->
    <footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>