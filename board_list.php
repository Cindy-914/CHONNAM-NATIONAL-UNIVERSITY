<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHONNAM NATIONAL UNIVERSITY</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/board.css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/jquery.easing.1.3.js"></script>
    <script src="./js/prefixfree.min.js"></script>
    <script src="./js/script2.js"></script>
</head>

<body>
    <div id="top_btn">
        <a href="#"><img src="./img/top_btn.png" width="60" height="60" alt="Top Button"></a>
    </div>

    <header>
        <?php include "header.php"; ?>
    </header>

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

                    <?php
                    require_once __DIR__ . "/define.php";

                    // GET 파라미터에서 page 값 가져오기
                    $page = isset($_GET["page"]) ? intval($_GET["page"]) : 1;

                    // DB 연결
                    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
                    if (!$con) {
                        die("DB 연결 실패: " . mysqli_connect_error());
                    }

                    // 게시글 조회 쿼리 실행
                    $sql = "SELECT * FROM board ORDER BY num DESC";
                    $result = mysqli_query($con, $sql);
                    if (!$result) {
                        die("쿼리 실행 실패: " . mysqli_error($con));
                    }

                    // 전체 게시글 개수 가져오기
                    $total_record = mysqli_num_rows($result);
                    $total_record = intval($total_record);

                    // 페이지네이션 설정
                    $scale = 10;
                    $total_page = ($total_record > 0) ? ceil($total_record / $scale) : 1;
                    $start = max(0, ($page - 1) * $scale);
                    $number = max(0, $total_record - $start);

                    // 게시글 목록 출력
                    for ($i = $start; $i < $start + $scale && $i < $total_record; $i++) {
                        mysqli_data_seek($result, $i);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                        $num = htmlspecialchars($row["num"]);
                        $name = htmlspecialchars($row["name"]);
                        $subject = htmlspecialchars($row["subject"]);
                        $regist_day = htmlspecialchars($row["regist_day"]);
                        $hit = htmlspecialchars($row["hit"]);
                        $file_image = !empty($row["file_name"]) ? "<img src='./img/file.gif' alt='첨부파일'>" : "";

                        echo "
                        <li>
                            <span class='col1'>$number</span>
                            <span class='col2'><a href='board_view.php?num=$num&page=$page'>$subject</a></span>
                            <span class='col3'>$name</span>
                            <span class='col4'>$file_image</span>
                            <span class='col5'>$regist_day</span>
                            <span class='col6'>$hit</span>
                        </li>
                        ";
                        $number--;
                    }

                    mysqli_close($con);
                    ?>
                </ul>

                <!-- 페이지네이션 -->
                <ul id="page_num">
                    <?php
                    if ($total_page >= 2 && $page >= 2) {
                        $new_page = $page - 1;
                        echo "<li><a href='board_list.php?page=$new_page'>◀ 이전</a></li>";
                    }

                    for ($i = 1; $i <= $total_page; $i++) {
                        if ($page == $i) {
                            echo "<li><b>$i</b></li>";
                        } else {
                            echo "<li><a href='board_list.php?page=$i'>$i</a></li>";
                        }
                    }

                    if ($total_page >= 2 && $page != $total_page) {
                        $new_page = $page + 1;
                        echo "<li><a href='board_list.php?page=$new_page'>다음 ▶</a></li>";
                    }
                    ?>
                </ul>

                <!-- 버튼 영역 -->
                <ul class="buttons">
                    <li>
                        <button onclick="location.href='board_list.php'">목록</button>
                    </li>
                    <li>
                        <?php
                        session_start();
                        if (isset($_SESSION["userid"])) {
                            echo '<a href="board_form.php"><button>글쓰기</button></a>';
                        } else {
                            echo '<a href="javascript:alert(\'로그인 후 이용해 주세요!\')"><button>글쓰기</button></a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>
