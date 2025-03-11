$(function () {
    /* nav */
    $(".bg_menu .depth > li").hover(
      function () {
        if ($(this).find("#international").length) return;
        // 다른 열린 메뉴 닫기
        $(".bg_menu .depth > li .sub")
          .not($(this).find(".sub"))
          .stop(true, true)
          .slideUp(400);
  
        // 현재 메뉴 열기
        $(this).find(".sub").stop(true, true).slideDown(400);
        $("#header_wrap #header_fixed #top_menu_wrap .drop_bg")
          .stop(true, true)
          .slideDown(400);
      },
      function () {
        if ($(this).find("#international").length) return;
  
        // 현재 메뉴 닫기
        $(this).find(".sub").stop(true, true).slideUp(400);
        $("#header_wrap #header_fixed #top_menu_wrap .drop_bg")
          .stop(true, true)
          .slideUp(400);
      }
    );
  });
  
  $(function () {
    // 예비학생 메뉴 클릭 시
    $(".freshman_quick").click(function () {
      var quickWrap = $(this).find(".quick_wrap");
      var backgroundImage = $(this);
  
      // .quick_wrap 요소가 보이는 상태인지 확인
      if (quickWrap.is(":visible")) {
        quickWrap.stop().slideUp(300);
        backgroundImage.css("background-image", "url(../img/up_arrow.png)");
      } else {
        // 메뉴가 보이지 않을 때, 펼치기
        quickWrap.stop().slideDown(500);
        backgroundImage.css("background-image", "url(../img/down_arrow.png)");
      }
    });
  
    $(".student_quick_on").click(function () {
      var quickWrap = $(this).find(".quick_wrap");
      var backgroundImage = $(this);
  
      // .quick_wrap 요소가 보이는 상태인지 확인
      if (quickWrap.is(":visible")) {
        quickWrap.stop().slideUp(300);
        backgroundImage.css("background-image", "url(../img/up_arrow.png)");
      } else {
        // 메뉴가 보이지 않을 때, 펼치기
        quickWrap.stop().slideDown(500);
        backgroundImage.css("background-image", "url(../img/down_arrow.png)");
      }
    });
  
    $(".teacher_quick").click(function () {
      var quickWrap = $(this).find(".quick_wrap");
      var backgroundImage = $(this);
  
      // .quick_wrap 요소가 보이는 상태인지 확인
      if (quickWrap.is(":visible")) {
        quickWrap.stop().slideUp(300);
        backgroundImage.css("background-image", "url(../img/up_arrow.png)");
      } else {
        // 메뉴가 보이지 않을 때, 펼치기
        quickWrap.stop().slideDown(500);
        backgroundImage.css("background-image", "url(../img/down_arrow.png)");
      }
    });
  
    $(".normal_quick").click(function () {
      var quickWrap = $(this).find(".quick_wrap");
      var backgroundImage = $(this);
  
      // .quick_wrap 요소가 보이는 상태인지 확인
      if (quickWrap.is(":visible")) {
        quickWrap.stop().slideUp(300);
        backgroundImage.css("background-image", "url(../img/up_arrow.png)");
      } else {
        // 메뉴가 보이지 않을 때, 펼치기
        quickWrap.stop().slideDown(500);
        backgroundImage.css("background-image", "url(../img/down_arrow.png)");
      }
    });
  
    // "퀵 서비스 레이어 닫기" 버튼 클릭 시
    $(".btn_close").click(function () {
      var quickWrap = $(this).closest(".quick_wrap");
      var freshmanQuick = quickWrap.closest(".freshman_quick");
  
      // 메뉴를 숨기기
      quickWrap.stop().slideUp(5000);
      // 배경이미지 원상복구 (아래로 향하는 화살표로 변경)
      freshmanQuick.css("background-image", "url(../img/up_arrow.png)");
    });
});