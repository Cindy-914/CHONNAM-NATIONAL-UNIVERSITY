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

  $(function () {
    var visual = $("#brandVisual>ul>li"); // 슬라이드 이미지
    var leftBtn = $(".btnImg .prev"); // 왼쪽 화살표
    var rightBtn = $(".btnImg .next"); // 오른쪽 화살표
    var current = 0; // 현재 슬라이드
    var setIntervalId = null; // setInterval ID (자동 슬라이드용)

    // 자동 슬라이드 함수
    function startTimer() {
      // 이미 타이머가 실행 중이지 않으면 타이머 시작
      if (setIntervalId === null) {
        setIntervalId = setInterval(function () {
          moveSlide(current + 1); // 슬라이드 5초마다 넘어감
        }, 5000);
      }
    }

    // 슬라이드 정지 함수
    function stopTimer() {
      // 타이머가 실행 중이면 멈춤
      if (setIntervalId !== null) {
        clearInterval(setIntervalId);
        setIntervalId = null;
      }
    }

    // 슬라이드 이동 함수
    function moveSlide(target) {
      // target이 범위를 벗어나지 않도록 조정
      if (target < 0) {
        target = visual.length - 1; // 마지막 슬라이드로 이동
      } else if (target >= visual.length) {
        target = 0; // 첫 번째 슬라이드로 이동
      }

      var prev = visual.eq(current);
      var next = visual.eq(target);

      // 방향을 계산하여 슬라이드 이동
      if (target > current) {
        // 오른쪽 방향으로 이동
        prev.css({ left: 0 }).stop().animate({ left: "-100%" }, 500);
        next.css({ left: "100%" }).stop().animate({ left: 0 }, 500);
      } else if (target < current) {
        // 왼쪽 방향으로 이동
        prev.css({ left: 0 }).stop().animate({ left: "100%" }, 500);
        next.css({ left: "-100%" }).stop().animate({ left: 0 }, 500);
      }

      current = target; // 현재 슬라이드 업데이트
    }

    // 왼쪽 화살표 클릭 시 (왼쪽으로 이동)
    leftBtn.click(function () {
      moveSlide(current - 1); // 왼쪽으로 이동
    });

    // 오른쪽 화살표 클릭 시 (오른쪽으로 이동)
    rightBtn.click(function () {
      moveSlide(current + 1); // 오른쪽으로 이동
    });

    // 호버 시 슬라이드 멈춤
    $("#brandVisual").on("mouseenter", function () {
      stopTimer(); // 슬라이드 멈춤
    });

    // 마우스가 나가면 슬라이드 재개
    $("#brandVisual").on("mouseleave", function () {
      startTimer(); // 슬라이드 재개
    });

    // 자동 슬라이드 시작
    startTimer();
  });

  /* 학사 입학 장학 전체 메뉴

  document.addEventListener("DOMContentLoaded", function () {
    // 학사 버튼 클릭 시 학사 공지사항 표시
    document
      .getElementById("academicBtn")
      .addEventListener("click", function () {
        // 학사 공지사항 표시
        document.getElementById("academic-notices").style.display = "block";
        // 입학 공지사항 숨김
        document.getElementById("admission-notices").style.display = "none";
        // 장학 공지사항 숨김
        document.getElementById("scholarship-notices").style.display = "none";
        // 전체 공지사항 숨김
        document.getElementById("all-notices").style.display = "none";
      });

    // 입학 버튼 클릭 시 입학 공지사항 표시
    document
      .getElementById("admissionBtn")
      .addEventListener("click", function () {
        // 학사 공지사항 숨김
        document.getElementById("academic-notices").style.display = "none";
        // 입학 공지사항 표시
        document.getElementById("admission-notices").style.display = "block";
        // 장학 공지사항 숨김
        document.getElementById("scholarship-notices").style.display = "none";
        // 전체 공지사항 숨김
        document.getElementById("all-notices").style.display = "none";
      });

    // 장학 버튼 클릭 시 장학 공지사항 표시
    document
      .getElementById("scholarshipBtn")
      .addEventListener("click", function () {
        // 학사 공지사항 숨김
        document.getElementById("academic-notices").style.display = "none";
        // 입학 공지사항 표시
        document.getElementById("admission-notices").style.display = "none";
        // 장학 공지사항 숨김
        document.getElementById("scholarship-notices").style.display = "block";
        // 전체 공지사항 숨김
        document.getElementById("all-notices").style.display = "none";
      });

    // 전체 버튼 클릭 시 전체 공지사항 표시
    document.getElementById("allBtn").addEventListener("click", function () {
      // 학사 공지사항 숨김
      document.getElementById("academic-notices").style.display = "none";
      // 입학 공지사항 표시
      document.getElementById("admission-notices").style.display = "none";
      // 장학 공지사항 숨김
      document.getElementById("scholarship-notices").style.display = "none";
      // 전체 공지사항 숨김
      document.getElementById("all-notices").style.display = "block";
    });
  });
  */
  /* tab메뉴 */
  $(document).ready(function () {
    // 각 버튼 클릭 시 카테고리 전환 처리
    $(".menu-buttons button").click(function () {
      // 모든 공지사항 카테고리를 숨김
      $(".notice-category").hide();

      // 모든 버튼에서 활성화 클래스 제거
      $(".menu-buttons button").removeClass("active");

      // 클릭된 버튼에 활성화 클래스 추가
      $(this).addClass("active");

      // 해당 버튼에 따라 보여줄 공지사항 설정
      var targetId = "";
      if ($(this).attr("id") === "academicBtn") {
        targetId = "#academic-notices";
      } else if ($(this).attr("id") === "admissionBtn") {
        targetId = "#admission-notices";
      } else if ($(this).attr("id") === "scholarshipBtn") {
        targetId = "#scholarship-notices";
      } else if ($(this).attr("id") === "allBtn") {
        targetId = "#all-notices";
      }

      // 타겟 공지사항만 보이게 설정
      $(targetId).show();
    });

    // 초기 상태: 전체 공지사항을 표시
    $(".menu-buttons button#allBtn").addClass("active");
    $(".notice-category").hide(); // 전체 숨기기
    $("#all-notices").show(); // 전체 공지사항만 보이기
  });
});

$(function () {
  var banner = $(".visual1>ul>li");
  var button1 = $(".arrow1_1_center>img.next");
  var button2 = $(".arrow1_1_center>img.prev");
  var current = 0;
  var setIntervalId;
  var p = $(".section_number>p"); /* 넘버 */

  timer();

  function timer() {
    setIntervalId = setInterval(function () {
      var prev = banner.eq(current);
      var pn = p.eq(current); /* 현재 순번을 pn에 담아 */

      move(prev, 0, "-100%");
      pn.removeClass("bl"); /* 넘버 */

      current++;

      if (current == banner.size()) {
        current = 0;
      }

      var next = banner.eq(current);
      var pnn = p.eq(current);

      move(next, "100%", 0);
      pnn.addClass("bl");
    }, 2000);
  }

  function move(tg, start, end) {
    tg.css("left", start)
      .stop()
      .animate({ left: end }, { duration: 500, ease: "easeOutCubic" });
  }

  $(".visual1").on({
    mouseover: function () {
      clearInterval(setIntervalId);
    },
    mouseout: function () {
      timer();
    },
  });

  button1.click(function () {
    var prev = banner.eq(current);
    var pn = p.eq(current);

    move(prev, 0, "-100%");
    pn.removeClass("bl");

    current++;

    if (current == banner.size()) {
      current = 0;
    }

    var next = banner.eq(current);
    var pnn = p.eq(current);

    move(next, "100%", 0);
    pnn.addClass("bl");

    return false;
  });

  button2.click(function () {
    var prev = banner.eq(current);
    var pn = p.eq(current);

    move(prev, 0, "100%");
    pn.removeClass("bl");

    current--;

    if (current == -banner.size()) {
      current = 0;
    }

    var next = banner.eq(current);
    var pnn = p.eq(current);

    move(next, "-100%", 0);
    pnn.addClass("bl");

    return false;
  });

  $(function () {
    const sliderTrack = $(".slider-track"); // 슬라이더 트랙
    const slides = $(".event-card"); // 슬라이드 카드들
    const leftBtn = $(".slider-prev-btn"); // 이전 버튼
    const rightBtn = $(".slider-next-btn"); // 다음 버튼
    const totalSlides = slides.length; // 총 슬라이드 개수
    let currentIndex = 0; // 현재 슬라이드 인덱스

    // 각 슬라이드의 너비를 25%로 설정 (4개 카드가 한 번에 보이도록)
    slides.css("flex", "0 0 25%");

    // 다음 버튼 클릭
    rightBtn.click(function () {
      if (currentIndex < totalSlides - 4) {
        // 한 번에 4개의 카드가 보이므로 조건을 설정
        currentIndex++;
        moveSlider();
      }
    });

    // 이전 버튼 클릭
    leftBtn.click(function () {
      if (currentIndex > 0) {
        currentIndex--;
        moveSlider();
      }
    });

    // 슬라이더 이동 함수
    function moveSlider() {
      const translateXValue = -(currentIndex * 25); // 한 카드의 너비는 25%이므로
      sliderTrack.css("transform", `translateX(${translateXValue}%)`);
    }
  });
  $(function () {
    let nowMonth = new Date(); // 현재 날짜 설정
    const today = new Date();
    today.setHours(0, 0, 0, 0); // 시, 분, 초, 밀리초를 0으로 설정

    // 달력 생성 함수
    const buildCalendar = () => {
      const firstDate = new Date(
        nowMonth.getFullYear(),
        nowMonth.getMonth(),
        1
      ); // 이번 달 1일
      const lastDate = new Date(
        nowMonth.getFullYear(),
        nowMonth.getMonth() + 1,
        0
      ); // 이번 달 마지막 날

      const calendarDays = document.querySelector(".calendar-days");
      document.getElementById("calYear").innerText = nowMonth.getFullYear();
      document.getElementById("calMonth").innerText = leftPad(
        nowMonth.getMonth() + 1
      );

      calendarDays.innerHTML = ""; // <div>내부를 비움

      // 요일만큼 빈 셀 추가
      for (let j = 0; j < firstDate.getDay(); j++) {
        const emptyCell = document.createElement("div");
        emptyCell.className = "emptyDay";
        calendarDays.appendChild(emptyCell);
      }

      // 이번 달 날짜를 채움
      for (
        let nowDay = firstDate;
        nowDay <= lastDate;
        nowDay.setDate(nowDay.getDate() + 1)
      ) {
        const nowColumn = document.createElement("div");
        nowColumn.innerText = leftPad(nowDay.getDate());
        calendarDays.appendChild(nowColumn);

        if (nowDay.getDay() === 0) {
          nowColumn.style.color = "#DC143C"; // 일요일
        } else if (nowDay.getDay() === 6) {
          nowColumn.style.color = "#0000CD"; // 토요일
        }

        if (nowDay < today) {
          nowColumn.className = "pastDay";
        } else if (nowDay.toDateString() === today.toDateString()) {
          nowColumn.className = "today";
          nowColumn.onclick = () => choiceDate(nowColumn);
        } else {
          nowColumn.className = "futureDay";
          nowColumn.onclick = () => choiceDate(nowColumn);
        }
      }
    };

    // 날짜 선택 함수
    const choiceDate = (nowColumn) => {
      const selectedDay = document.querySelector(".choiceDay");
      if (selectedDay) {
        selectedDay.classList.remove("choiceDay");
      }
      nowColumn.classList.add("choiceDay");
    };

    // 이전 달 버튼 클릭
    const prevCalendar = () => {
      nowMonth = new Date(nowMonth.getFullYear(), nowMonth.getMonth() - 1);
      buildCalendar(); // 달력 다시 생성
    };

    // 다음 달 버튼 클릭
    const nextCalendar = () => {
      nowMonth = new Date(nowMonth.getFullYear(), nowMonth.getMonth() + 1);
      buildCalendar(); // 달력 다시 생성
    };

    // 두 자리 숫자 형식
    const leftPad = (value) => (value < 10 ? `0${value}` : value);

    // 웹페이지가 로드될 때 달력 빌드
    buildCalendar();

    // 이전/다음 버튼에 이벤트 리스너 추가
    document.getElementById("prevBtn").addEventListener("click", prevCalendar);
    document.getElementById("nextBtn").addEventListener("click", nextCalendar);
  });
});
