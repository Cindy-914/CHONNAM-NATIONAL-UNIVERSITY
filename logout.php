<?php
  session_start();
  unset($_SESSION["userid"]); 
  /*unset()함수를 이용해 세션 변수를 삭제.*/
  unset($_SESSION["username"]);
  unset($_SESSION["userlevel"]);
  unset($_SESSION["userpoint"]);
  
  echo("
       <script>
          location.href = 'index.php';
         </script>
       ");
?> 