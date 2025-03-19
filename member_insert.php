<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
  include "define.php"; 

  // 사용자 입력 데이터 수신
  $id   = $_POST["id"]; 
  $pass = $_POST["pass"]; 
  $name = $_POST["name"];
  $email1  = $_POST["email1"];
  $email2  = $_POST["email2"];
  $postcode = $_POST['postcode']; // 우편번호
  $address = $_POST['address']; // 기본 주소
  $detailAddress = $_POST['detailAddress']; // 상세 주소
  $phone = $_POST['phone']; // 핸드폰 번호 추가

  // 이메일 주소 합치기
  $email = $email1."@".$email2; 
  // 현재 날짜와 시간을 저장
  $regist_day = date("Y-m-d (H:i)"); 

  // 데이터베이스 연결
  $con = mysqli_connect("localhost", DBuser, DBpass, DBname); 

  // 아이디 중복 체크
  $checkid = "select * from members where id='$id'"; 
  $result = mysqli_query($con, $checkid);
  $num_record = mysqli_num_rows($result); // 총 레코드 수 반환

  // 아이디 유효성 검사: 숫자와 문자를 포함하여 8자리 이상인지 확인
  if (!preg_match('/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/', $id)) {
      echo("
          <script>
              window.alert('아이디는 숫자와 문자를 포함하여 8자리 이상이어야 합니다.');
              history.go(-1); // 이전 페이지로 이동
          </script>
      ");
      exit;
  }

  // 비밀번호 유효성 검사: 숫자와 문자를 포함하여 8자리 이상인지 확인
  if (!preg_match('/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/', $pass)) {
      echo("
          <script>
              window.alert('비밀번호는 숫자와 문자를 포함하여 8자리 이상이어야 합니다.');
              history.go(-1); // 이전 페이지로 이동
          </script>
      ");
      exit;
  }

  // 중복된 아이디가 있는 경우 경고 메시지 출력
  if ($num_record) {
      echo("
          <script>
              window.alert('아이디가 중복되었습니다! 다른 아이디를 사용해주세요.');
              history.go(-1); // 이전 페이지로 이동
          </script>
      ");
  } else {
      // 새로운 회원 정보 저장
      $sql = "insert into members (id, pass, name, email, postcode, address, detail_address, phone, regist_day, level, point) ";
      $sql .= "values ('$id', '$pass', '$name', '$email', '$postcode', '$address', '$detailAddress', '$phone', '$regist_day', 9, 0)"; 
      mysqli_query($con, $sql);  // SQL 명령 실행 
  } 

  // 데이터베이스 연결 종료
  mysqli_close($con);

  // 회원가입 후 로그인 페이지로 이동
  echo "
      <script>
          location.href = 'login_form.php';
      </script>
  ";
?>
