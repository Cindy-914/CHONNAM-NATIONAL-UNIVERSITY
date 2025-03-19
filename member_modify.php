<?php
    session_start(); // 세션 시작 추가
    include "define.php";

    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];


    $email = $email1."@".$email2;

    $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
   

    $sql = "update members set pass='$pass', name='$name' , email='$email'";


    $sql .= " where id='$id'"; 
    mysqli_query($con, $sql);

    mysqli_close($con);

    //세션에 저장된 사용자 이름도 업데이트
    $_SESSION["username"] = $name;

    echo "
	      <script>
	          location.href = 'index.php'; 
              /*메인 페이지로 index.php로 이동.*/
	      </script>
	  ";
?>

