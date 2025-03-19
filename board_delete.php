<?php
// 세션 시작
session_start();

// DB 연결
require_once __DIR__ . "/define.php";

$con = mysqli_connect("localhost", DBuser, DBpass, DBname);
if (!$con) {
    die("DB 연결 실패: " . mysqli_connect_error());
}

// 게시글 번호와 페이지 번호 전달받기
$num = $_GET["num"];
$page = $_GET["page"];

// 해당 게시글 정보 가져오기
$sql = "SELECT * FROM board WHERE num = $num";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo "<script>alert('게시글을 찾을 수 없습니다.'); history.back();</script>";
    exit;
}

$writer_id = $row['id']; // 게시글 작성자의 ID

// 로그인한 사용자 ID 확인
if ($_SESSION['userid'] != $writer_id) {
    echo "<script>alert('본인만 삭제할 수 있습니다.'); history.back();</script>";
    exit;
}

// 게시글 삭제
$sql = "DELETE FROM board WHERE num = $num";
if (mysqli_query($con, $sql)) {
    // 파일이 있으면 서버에서 파일 삭제
    $file_copied = $row['file_copied'];
    if ($file_copied) {
        $file_path = "./data/" . $file_copied;
        if (file_exists($file_path)) {
            unlink($file_path); // 파일 삭제
        }
    }

    echo "<script>
            alert('게시글이 삭제되었습니다.');
            location.href='board_list.php?page=$page';
          </script>";
} else {
    echo "삭제 실패: " . mysqli_error($con);
}

mysqli_close($con);
?>
