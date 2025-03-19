<!DOCTYPE html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/member.css">
<style>
h3 {
   padding-left: 5px;
   border-left: solid 5px #edbf07;
}
#close {
   margin:20px 0 0 80px;
   cursor:pointer;
}
</style>
</head>
<body>
<h3>아이디 중복체크</h3>
<p>
<?php
   include "define.php";

	
   $id = $_GET["id"]; 

   if(!$id) 
   {
      echo("<li>아이디를 입력해 주세요!</li>");
   }
   else
   {
      $con = mysqli_connect("localhost", DBuser, DBpass, DBname); 
 
      $sql = "select * from members where id='$id'";
      /*사용자가 아이디를 입력하면 members 테이블에 동일한 아이디가 있는지 검사.*/
      $result = mysqli_query($con, $sql);

      $num_record = mysqli_num_rows($result);
      /*실행 결과를 저장한 $result의 레코드 개수를 mysqli_num_rows() 함수로 세고 그 결과를 $num_record에 저장한다.*/

      if ($num_record) /*$num_record가 값을 가지면 DB에 동일한 아이디가 존재한다는 것을 의미.*/
      {
         echo "<li>".$id." 아이디는 중복됩니다.</li>"; /*동일한 아이디라면 출력*/
         echo "<li>다른 아이디를 사용해 주세요!</li>";
      }
      else /*$num_record가 null 값이면 DB에 동일한 아이디가 존재하지 않는다면*/
      {
         echo "<li>".$id." 아이디는 사용 가능합니다.</li>";
      }
    
      mysqli_close($con);
   }
?>
</p>
<div id="close">
   <img src="./img/close.png" onclick="javascript:self.close()">
</div>
</body>
</html>
