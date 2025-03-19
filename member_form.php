<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>회원가입</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/member.css">
<link rel="stylesheet" href="./css/style.css">
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/prefixfree.min.js"></script>
    <script src="./js/script.js"></script>

<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
   function check_input() 
   {
      if (!document.member_form.id.value.trim()) {  
          alert("아이디를 입력하세요!");    
          document.member_form.id.focus(); 
          return;
      }

      if (!document.member_form.pass.value.trim()) { 
          alert("비밀번호를 입력하세요!");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value.trim()) { 
          alert("비밀번호 확인을 입력하세요!");
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value.trim()) {
          alert("이름을 입력하세요!");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.email1.value.trim() || !document.member_form.email2.value.trim()) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email1.focus();
          return;
      }

	  if (!document.member_form.phone.value.trim()) {
        alert("핸드폰 번호를 입력하세요!");
        document.member_form.phone.focus();
        return;
    }

      if (document.member_form.pass.value.trim() != document.member_form.pass_confirm.value.trim()) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!"); 
          document.member_form.pass.focus();  
          document.member_form.pass.select(); 
          return;
      }

      document.member_form.submit(); 
   }

   function reset_form() { 
      document.member_form.id.value = "";  
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
      document.member_form.postcode.value = "";
      document.member_form.address.value = "";
      document.member_form.detailAddress.value = "";
      document.member_form.id.focus();
      return;
   }

   function check_id() { /*check_id() 함수는 중복확인 버튼을 클릭하면 입력된 아이디가 중복되는지 검사*/

window.open("member_check_id.php?id=" + document.member_form.id.value,
    "IDcheck",
     "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
}

   function execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                document.getElementById('postcode').value = data.zonecode;
                document.getElementById('address').value = data.address;
                document.getElementById('detailAddress').focus();
            }
        }).open();
   }
</script>
</head>
<body> 
	<header>
    <?php include "header.php";?>
    </header>
	<section>
		<div id="main_content">
      		<div id="join_box">
          	<form name="member_form" method="post" action="member_insert.php">
			    <h2>회원 가입</h2>
    		    	<div class="form id">
				        <div class="col1">아이디</div>
				        <div class="col2">
							<input type="text" name="id"> 
				        </div>  
				        <div class="col3">
				        	<a href="#"><img src="./img/check_id.gif" onclick="check_id()"></a>
				        </div>                 
			       	</div>
			       	<div class="clear"></div>

			       	<div class="form">
				        <div class="col1">비밀번호</div>
				        <div class="col2">
							<input type="password" name="pass"> 
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">비밀번호 확인</div>
				        <div class="col2">
							   <input type="password" name="pass_confirm">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">이름</div>
				        <div class="col2">
							<input type="text" name="name">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form email">
				        <div class="col1">이메일</div>
				        <div class="col2">
							<input type="text" name="email1">@<input type="text" name="email2">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>

                    <!-- 우편번호 및 주소 입력 -->
			       	<div class="form">
				        <div class="col1">우편번호</div>
				        <div class="col2">
							<input type="text" id="postcode" name="postcode" readonly>
                            <button type="button" onclick="execDaumPostcode()">우편번호 검색</button>
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">주소</div>
				        <div class="col2">
							<input type="text" id="address" name="address" readonly>
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">상세주소</div>
				        <div class="col2">
							<input type="text" id="detailAddress" name="detailAddress">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
					<!-- 핸드폰 번호 입력 -->
					<div class="form">
						<div class="col1">핸드폰 번호</div>
						<div class="col2">
							<input type="text" id="phone" name="phone" placeholder="예: 010-1234-5678">
						</div>                 
					</div>
					<div class="clear"></div>
			       	<div class="buttons">
	                	<img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input()">&nbsp;
                  	<img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif" onclick="reset_form()">
	           	</div>
           	</form>
        	</div>
        </div>
	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>
