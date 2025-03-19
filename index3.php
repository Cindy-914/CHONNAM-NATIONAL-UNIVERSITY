<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHONNAM NATIONAL UNIVERSITY</title>
    <link rel="stylesheet" href="./css/style2.css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/prefixfree.min.js"></script>
    <script src="./js/script2.js"></script>
</head>

<body>
    <div id="top_btn">
        <a href="#"><img src="./img/top_btn.png" width="60" height="60" alt="top_btn"></a>
    </div>
	<header>
    	<?php include "header.php";?>
    </header>

    <div>
    <!-- 게시판 영역 -->
    <section id="board">
        <div class="container3">
            <div class="board-list">
                <h3>공지사항</h3>
                <ul class="list">
                    <li>
                        <span class="col1">번호</span>
                        <span class="col2">제목</span>
                        <span class="col3">글쓴이</span>
                        <span class="col4">첨부</span>
                        <span class="col5">등록일</span>
                        <span class="col6">조회</span>
                    </li>
                </ul>
                <ul class="page_num">
                    <li>&nbsp;</li>
                    <li><a href="board_list.php?page=1">1</a></li>
                    <li>&nbsp;</li>
                </ul>
                <ul class="buttons">
                    <li>
                        <button onclick="location.href='board_list.php'">목록</button>
                    </li>
                    <li>
                        <a href="javascript:alert('로그인 후 이용해 주세요!')"><button>글쓰기</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>

</html>