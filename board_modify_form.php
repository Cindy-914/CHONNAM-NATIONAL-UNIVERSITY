<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글 수정</title>
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
    <?php include "header.php"; ?>
</header>
<section>
    <div id="board_box">
        <h3>
            공지사항 > 글 수정
        </h3>
        <?php
        session_start();  // 세션 시작

        require_once __DIR__ . "/define.php";
        
        // GET 파라미터에서 num 가져오기
        $num = isset($_GET["num"]) ? intval($_GET["num"]) : 0;

        // DB 연결
        $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
        if (!$con) {
            die("DB 연결 실패: " . mysqli_connect_error());
        }

        // 게시글 내용 가져오기
        $sql = "SELECT * FROM board WHERE num = $num";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            die("쿼리 실행 실패: " . mysqli_error($con));
        }

        $row = mysqli_fetch_assoc($result);
        
        // 수정할 정보 불러오기
        $subject = htmlspecialchars($row['subject']);
        $content = htmlspecialchars($row['content']);
        $file_name = htmlspecialchars($row['file_name']);
        $writer_id = $row['id'];  // 게시글 작성자의 아이디

        // 로그인한 사용자 ID 확인
        if ($_SESSION['userid'] != $writer_id) {
            echo "<script>alert('본인만 수정할 수 있습니다.'); location.href='board_list.php';</script>";
            exit;
        }

        mysqli_close($con);
        ?>

        <!-- 수정 폼 -->
        <form action="board_modify.php" name="board_form" enctype="multipart/form-data" method="post">
            <input type="hidden" name="num" value="<?= $num ?>">
            <ul id="board_form">
                <li>
                    <span class="col1">이름 : </span>
                    <span class="col2"><?= $_SESSION['username'] ?></span> <!-- 로그인한 사용자 이름 -->
                </li>
                <li>
                    <span class="col1">제목 : </span>
                    <span class="col2"><input type="text" name="subject" value="<?= $subject ?>"></span>
                </li>
                <li id="text_area">
                    <span class="col1">내용 : </span>
                    <span class="col2">
                        <textarea name="content"><?= $content ?></textarea>
                    </span>
                </li>
                <li>
                    <span class="col1">첨부파일 </span>
                    <span class="col2">
                        <?php if($file_name): ?>
                            <p>현재 파일: <?= $file_name ?></p>
                        <?php endif; ?>
                        <input type="file" name="upfile">
                    </span>
                </li>
            </ul>
            <ul class="buttons">
                <li><button type="button" onclick="check_input()">수정 완료</button></li>
                <li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
            </ul>
        </form>
    </div>
</section>

<!-- Footer Section -->
<footer>
    <?php include "footer.php"; ?>
</footer>
</body>
</html>
