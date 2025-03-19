<meta charset="utf-8">
<?php
   include "define.php";
   
   $id   = $_POST["id"];
   $pass = $_POST["pass"];

   $con = mysqli_connect("localhost", DBuser, DBpass, DBname); 
   /*mysqli_connect()함수로 MySQL 서버에 연결*/

   $sql = "select * from members where id='$id'";

   $result = mysqli_query($con, $sql); /*아이디 검색*/
 

   $num_match = mysqli_num_rows($result); /*레코드 개수 세기*/
   /*mysqli_num_rows( ) 함수로 검색 결과로 저장된 레코드 개수를 세고 $num_match에 저장.*/


   if(!$num_match) /*아이디 존재여부 판단*/
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')  /*아이디가 존재하지 않는 경우*/
             history.go(-1)
           </script>
         ");
    }
    else /*아이디가 존재하는 경우*/
    {
        $row = mysqli_fetch_array($result); /*DB에서 비밀번호 가져오기위해 
         mysqli_fetch_array( ) 함수로 해당 레코드를 가져와 $row에 저장한 뒤 $row의 pass 필드에 있는 데이터, 
         즉 DB에 저장된 비밀번호인 $row[“pass”]를 $db_pass에 저장. */
       
        $db_pass = $row["pass"];


        mysqli_close($con);

        if($pass != $db_pass) /*입력된 비밀번호와 DB의 비밀번호 비교*/
        {
            /*비밀번호가 다른경우 실행*/
           echo(" 
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start(); /*비밀번호가 같은 경우 세션 시작*/

            $_SESSION["userid"] = $row["id"]; //로그인한 사용자 id
            $_SESSION["username"] = $row["name"]; 
           
            $_SESSION["userlevel"] = $row["level"]; 
            $_SESSION["userpoint"] = $row["point"]; 
          

            echo("
              <script>
                location.href = 'index.php';
              </script>
            ");
        }
     }        
?>