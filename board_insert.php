<meta charset="utf-8">
<?php
    include "define.php"; //데이터베이스 정보

    session_start();

    if(isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if(isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    //로그인 되지 않은 상태라면 
    if( !$userid ){
        echo("
            <script>
                alert('게시판 글쓰기는 로그인 후 이용해 주세요.');
                history.go(-1)
            </script>
        ");
        exit;
    }

    //글 제목과 내용 전달받기
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    //HTML 특수 문자를 이스케이프하여 XSS(크로스 사이트 스크립팅) 공격을 방지
    $subject = htmlspecialchars($subject, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);

    $regist_day = date("Y-m-d (H:i)");//현재의 '년-월-일-시-분'을 저장


    //업로드 폴더 설정(data폴더가 꼭 있어야함.)
    $upload_dir = './data/';

    $upfile_name     = $_FILES["upfile"]["name"];     //업로드 파일명
    $upfile_tmp_name = $_FILES["upfile"]["tmp_name"]; //실제 서버에 저장되는 임시 파일명
    $upfile_type     = $_FILES["upfile"]["type"];     //업로드 파일의 형식
    $upfile_size     = $_FILES["upfile"]["size"];     //업로드 파일의 크기
    $upfile_error     = $_FILES["upfile"]["error"];   //오류 발행

    if($upfile_name && !$upfile_error)
    {
        //explode()함수를 이용해 파일명과 확장자 분리.
        $file = explode(".",$upfile_name);
        $file_name = $file[0];
        $file_ext  = $file[1];

        //실제 업로드 파일명 구하기
        $new_file_name = date("Y_m_d_H_i_s");
        $new_file_name = $new_file_name;
        $copied_file_name = $new_file_name.".".$file_ext;
        $uploaded_file = $upload_dir.$copied_file_name;


        //업로드 파일의 크기 제한
        //업로드 파일의 크기가 1,000,000바이트(1메가바이트)를 초과하면 경고메세지 출력

        if($upfile_size > 1000000){
            echo("
                <script>
                    alert('업로드 파일 크기가 지정된 용량(1MB)를 초과합니다. <br> 파일의 크기를 체크해 주세요!');
                    history.go(-1)
                </script>
            ");
            exit; //스크립트 중단
        }

        //업로드 파일을 ./data 폴더에 저장
        //move_uploaded_file()함수로 서버에 임시 저장된 $upfile_tmp_name을 $uploaded_file의 값인 경로/파일명 형태로 저장할 수 있음. 업로드 파일명이 중복되는 것을 피할 수 있음.

        if(!move_uploaded_file($upfile_tmp_name,$uploaded_file)){
            echo("
                <script>
                    alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
                    history.go(-1)
                </script>
            ");
            exit;
        }
    }
    else{
        $upfile_name  = "";
        $upfile_type  = "";
        $copied_file_name  = "";
    }

    //DB에 게시글 저장
    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);

    $sql = "insert into board (id,name,subject,content,regist_day,hit,file_name,file_type,file_copied)";

    //기존 문자열에 새로운 문자열을 추가할 수 있다.
    $sql .= "values('$userid', '$username', '$subject', '$content', '$regist_day', 0, ";
    $sql .= "'$upfile_name', '$upfile_type', '$copied_file_name')";

    mysqli_query($con,$sql);

    //포인트 부여하기(게시판에 글을 쓰면 회원에게 포인트 100점 부여)
    $point_up = 100;

    $sql = "select point from members where id='$userid'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $new_point = $row["point"] + $point_up;


    //DB에 포인트를 업데이트
    $sql = "update members set point=$new_point where id='$userid'";
    mysqli_query($con,$sql);

    mysqli_close($con); 
    

    //목록페이지로 이동
    echo"
        <script>
            location.href='board_list.php';
        </script>
    ";
    
    ?>