<?php
require_once __DIR__ . "/define.php";

// DB 연결
$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
if (!$con) {
    die("DB 연결 실패: " . mysqli_connect_error());
}

// 수정할 게시글 번호와 수정된 데이터 가져오기
$num = isset($_POST["num"]) ? intval($_POST["num"]) : 0;
$subject = isset($_POST["subject"]) ? mysqli_real_escape_string($con, $_POST["subject"]) : '';
$content = isset($_POST["content"]) ? mysqli_real_escape_string($con, $_POST["content"]) : '';

// 기존 게시글의 파일 정보 가져오기
$sql = "SELECT file_name FROM board WHERE num = $num";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$current_file = $row['file_name'];

// 파일 업로드 처리
$file_name = $current_file; // 초기화, 기존 파일이 있을 경우 기존 파일 유지
$upload_dir = "./uploads/";

// 업로드 디렉터리가 존재하지 않으면 생성
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true); // 디렉터리 생성 (쓰기 권한 포함)
}

// 파일 업로드 처리
if ($_FILES["upfile"]["name"]) {
    $upload_file = $upload_dir . basename($_FILES["upfile"]["name"]);

    // 기존 파일 삭제
    if ($current_file && file_exists($upload_dir . $current_file)) {
        unlink($upload_dir . $current_file);  // 기존 파일 삭제
    }

    // 새 파일 업로드
    if (move_uploaded_file($_FILES["upfile"]["tmp_name"], $upload_file)) {
        $file_name = basename($_FILES["upfile"]["name"]);  // 새 파일 이름 저장
    } else {
        echo "파일 업로드에 실패했습니다.";
        exit;
    }
}

// 게시글 수정 쿼리
$sql_update = "UPDATE board SET subject = '$subject', content = '$content', file_name = '$file_name' WHERE num = $num";
if (mysqli_query($con, $sql_update)) {
    // 수정 완료 후 board_list.php로 리디렉션
    echo "<script>alert('수정되었습니다.'); location.href='board_list.php';</script>";
} else {
    echo "수정 실패: " . mysqli_error($con);
}

mysqli_close($con);
?>
