<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHONNAM NATIONAL UNIVERSITY</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/prefixfree.min.js"></script>
    <script src="./js/script.js"></script>
    <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=ef06ea5c7c40dff08149bebbe4b039a8"></script>
</head>

<body>
    <div id="top_btn">
        <a href="#"><img src="./img/top_btn.png" width="60" height="60" alt="top_btn"></a>
    </div>
	<header>
    	<?php include "header.php";?>
    </header>
    <div id="wrap">
        <div id="brandVisual">
            <ul>
                <li class="visual_0"><a href="#none">배너이미지1</a></li>
                <li class="visual_1"><a href="#none">배너이미지2</a></li>
                <li class="visual_2"><a href="#none">배너이미지3</a></li>
            </ul>
        </div>

        <div class="btnImg">
            <img src="./img/slide_left.png" class="prev" width="50" height="50" alt="" />
            <img src="./img/slide_right.png" class="next" width="50" height="50" alt="" />

        </div>

        <ul id="buttonList">
            <li><a href="#none">배너1</a></li>
            <li><a href="#none">배너2</a></li>
            <li><a href="#none">배너3</a></li>
        </ul>
    </div>
    <button id="playPauseBtn" class="play" no-repeat center center;></button>

    <!-- quick-menu section -->
    <section class="quick-menu">
        <div class="quick-menu-wrapper">
            <img src="./img/quick-icon.png" alt="Quick Menu Icon">
            <div class="quick-menu-icon">
                <p>QUICK<br>MENU</p>
            </div>
            <ul class="quick-menu-list">
                <li class="news-icon">
                    <a href="#none">
                        <img src="./img/news-icon.png" alt="보도자료">
                        <p>보도자료</p>
                        <span>전남대 최신 소식</span>
                    </a>
                </li>
                <li class="portal-icon">
                    <a href="#none">
                        <img src="./img/portal-icon.png" alt="전남대포털">
                        <p>전남대포털</p>
                        <span>학사 행정지원 서비스</span>
                    </a>
                </li>
                <li class="donation-icon">
                    <a href="#none">
                        <img src="./img/donation-icon.png" alt="발전기금재단">
                        <p>발전기금재단</p>
                        <span>후원하기</span>
                    </a>
                </li>
                <li class="media-icon">
                    <a href="#none">
                        <img src="./img/media-icon.png" alt="미디어포털">
                        <p>미디어포털</p>
                        <span>CNU Today</span>
                    </a>
                </li>
                <li class="complaint-icon">
                    <a href="#none">
                        <img src="./img/complaint-icon.png" alt="청렴센터">
                        <p>청렴센터</p>
                        <span>공익클린신고센터</span>
                    </a>
                </li>
                <li class="safety-icon">
                    <a href="#none">
                        <img src="./img/safety-icon.png" alt="안전서비스">
                        <p>안전서비스</p>
                        <span>캠퍼스 안전 서비스</span>
                    </a>
                </li>
                <li class="professor-icon">
                    <a href="#none">
                        <img src="./img/professor-icon.png" alt="교수추천">
                        <p>교수초빙</p>
                        <span>교원공채시스템</span>
                    </a>
                </li>
                <li class="certificate-icon">
                    <a href="#none">
                        <img src="./img/certificate-icon.png" alt="증명발급">
                        <p>증명발급</p>
                        <span>인터넷 증명발급 신청</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>


    <!-- information & popup zone -->
    <section class="information">
        <h2>INFORMATION</h2>
        <p class="subtitle">혁신과 가치를 담은 전남대 정보</p>
        <div class="menu-buttons">
            <button id="academicBtn">학사</button>
            <button id="admissionBtn">입학</button>
            <button id="scholarshipBtn">장학</button>
            <button id="allBtn">전체</button>
        </div>

        <div class="information-list">

            <!-- 학사 관련 공지사항 -->
            <div id="academic-notices" class="notice-category">
                <div class="information-wrapper">
                    <ul>
                        <li class="academic-notices1">
                            <a href="#none">
                                <span class="board-date">2024-02-06
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>대학생활</p>
                                </div>
                                <h3 class="board-title">2024학년도 대학생활자료 안내</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 입학 관련 공지사항 -->
            <div id="admission-notices" class="notice-category">
                <div class="information-wrapper">
                    <ul>
                        <li class="admission-notices1">
                            <a href="#none">
                                <span class="board-date">2024-12-02
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>공통</p>
                                </div>
                                <h3 class="board-title">2025학년도 수시모집 학생부위주전형 면접 응시 확인서 출력 안내</h3>
                            </a>
                        </li>
                        <li class="admission-notices2">
                            <a href="#none">
                                <span class="board-date">2024-11-27
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>공통</p>
                                </div>
                                <h3 class="board-title">수험생 및 수험생 가족 생활관 이용 안내</h3>
                            </a>
                        </li>
                        <li class="admission-notices3">
                            <a href="#none">
                                <span class="board-date">2024-11-24
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>일반/학사편입</p>
                                </div>
                                <h3 class="board-title">2025학년도 편입학(일반/학사)전형 모집요강 공고</h3>
                            </a>
                        </li>
                        <li class="admission-notices4">
                            <a href="#none">
                                <span class="board-date">2024-11-18
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>수시모집</p>
                                </div>
                                <h3 class="board-title">2025학년도 수시모집 면접 및 실기고사 응시확인서 출력 안내</h3>
                            </a>
                        </li>
                        <li class="admission-notices5">
                            <a href="#none">
                                <span class="board-date">2024-11-12
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>수시모집</p>
                                </div>
                                <h3 class="board-title">2025학년도 수시모집 예·체능계 실기고사 수험생 안내사항(시간 및 장소)</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 장학 관련 공지사항 -->
            <div id="scholarship-notices" class="notice-category">
                <div class="information-wrapper">
                    <ul>
                        <li class="scholarship-notices1">
                            <a href="#none">
                                <span class="board-date">2024-12-02
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>장학안내</p>
                                </div>
                                <h3 class="board-title">2024년 서울장학재단 장학생 수기 공모전 안내</h3>
                            </a>
                        </li>
                        <li class="scholarship-notices2">
                            <a href="#none">
                                <span class="board-date">2024-11-29
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>장학안내</p>
                                </div>
                                <h3 class="board-title">2024학년도 2학기 다문화ㆍ탈북학생 멘토링(대학원) 장학금 멘토 활동시간 연장</h3>
                            </a>
                        </li>
                        <li class="scholarship-notices3">
                            <a href="#none">
                                <span class="board-date">2024-11-29
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>장학안내</p>
                                </div>
                                <h3 class="board-title">2024학년도 2학기 한국장학재단 교내 국가근로장학금 장학생 월별 최대 활동시간 변경 안내</h3>
                            </a>
                        </li>
                        <li class="scholarship-notices4">
                            <a href="#none">
                                <span class="board-date">2024-11-29
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>장학안내</p>
                                </div>
                                <h3 class="board-title">2024학년도 2학기 다문화ㆍ탈북학생 멘토링 장학금 멘토 활동시간 연장</h3>
                            </a>
                        </li>
                        <li class="scholarship-notices5">
                            <a href="#none">
                                <span class="board-date">2024-11-29
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>장학안내</p>
                                </div>
                                <h3 class="board-title">2024학년도 2학기 대학생 청소년 교육지원사업 장학금 멘토 활동시간 연장</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- 전체 관련 공지사항 -->
            <div id="all-notices" class="notice-category">
                <div class="information-wrapper">
                    <ul>
                        <li class="all-notices1">
                            <a href="#none">
                                <span class="board-date">2024-12-02
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>대학생활</p>
                                </div>
                                <h3 class="board-title">온라인 커리어 컨퍼런스 [Next career conference 2024] 개최 및 참가 안내</h3>
                            </a>
                        </li>
                        <li class="all-notices2">
                            <a href="#none">
                                <span class="board-date">2024-12-02
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>대전해든학교</p>
                                </div>
                                <h3 class="board-title">2024학년도 겨울계절학교 교육봉사자 2차 추가 모집 공고</h3>
                            </a>
                        </li>
                        <li class="all-notices3">
                            <a href="#none">
                                <span class="board-date">2024-12-02
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>장학안내</p>
                                </div>
                                <h3 class="board-title">2024년 서울장학재단 장학생 수기 공모전 안내</h3>
                            </a>
                        </li>
                        <li class="all-notices4">
                            <a href="#none">
                                <span class="board-date">2024-12-02
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>대학생활</p>
                                </div>
                                <h3 class="board-title">환경부 화학물질안전원 “제13기 화학물질 불법유통 온라인 감시단”공개 모집</h3>
                            </a>
                        </li>
                        <li class="all-notices5">
                            <a href="#none">
                                <span class="board-date">2024-12-02
                                    <img class="line-image" src="./img/information_line.png" alt="line">
                                </span>
                                <div class="category">
                                    <p>대학생활</p>
                                </div>
                                <h3 class="board-title">키움증권 제36회 대학생 모의투자 대회 안내</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="more">
                <button id="more-buttons">
                    <p>더보기</p>
                </button>
            </div>
        </div>
        <div class="visual1">
            <h1>POPUP</h1>
            <ul>
              <li class="visu_1" style="left: 0">
                <div class="section1"></div>
              </li>
              <li class="visu_2">
                <div class="section2"></div>
              </li>
              <li class="visu_3">
                <div class="section3"></div>
              </li>
              <li class="visu_4">
                <div class="section4"></div>
              </li>
              <li class="visu_5">
                <div class="section5"></div>
              </li>
            </ul>
            <div id="section_arrow">
              <div class="arrow1">
                <div class="arrow1_1">
                  <div class="arrow1_1_center">
                    <img
                      src="./img/arrow1.png"
                      width="16"
                      height="16"
                      alt=""
                      class="prev fl"
                    />
                    <img
                      src="./img/arrow2.png"
                      width="16"
                      height="16"
                      alt=""
                      class="next fr"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="section_number">
              <p class="bl">01/05</p>
              <p>02/05</p>
              <p>03/05</p>
              <p>04/05</p>
              <p>05/05</p>
            </div>
          </div>
    </section>
    <div class="slider-container">
        <h2 class="slider-title">CNU TODAY</h2>
        <p class="subtitle">전남대의 오늘, 세상을 바꾸는 내일</p>
        <div  id="sns">
            <a href="https://www.instagram.com/chonnam_univ/" target="_blank">
                <img src="./img/insta.png" alt="sns">
            </a>
            <a href="https://www.facebook.com/ChonnamUniv/" target="_blank">
                <img src="./img/facebook.png" alt="sns">
            </a>
            <a href="https://www.youtube.com/user/yesCNU" target="_blank">
                <img src="./img/youtube.png" alt="sns">
            </a>
            <a href="https://x.com/yesCNU?mx=2" target="_blank">
                <img src="./img/X.png" alt="sns">
            </a>
            <a href="https://blog.naver.com/yeschonnam" target="_blank">
                <img src="./img/blog.png" alt="sns">
            </a>
        </div>
        <div class="slider">
          <div class="slider-track">
            <div class="slider-item">
              <img src="./img/card1.jpg" alt="Card 1">
              <div class="card-content">
                <p>전남대 의대 법의학교실 연구팀 우울증과 자살 예측하는 지표 발견 ‘화제’</p>
                <a href="#none" class="more-btn">MORE</a>
              </div>
            </div>
            <div class="slider-item">
              <img src="./img/card2.jpg" alt="Card 2">
              <div class="card-content">
                <p>전남대 손형일 교수연구팀 ‘말벌 탐지’ 자율 추적 시스템 개발</p>
                <a href="#none" class="more-btn">MORE</a>
              </div>
            </div>
            <div class="slider-item">
              <img src="./img/card3.jpg" alt="Card 3">
              <div class="card-content">
                <p>전남대, 호치민시 베트남국립과학대와 교류 다각화</p>
                <a href="#none" class="more-btn">MORE</a>
              </div>
            </div>
            <div class="slider-item">
              <img src="./img/card4.jpg" alt="Card 4">
              <div class="card-content">
                <p>연구와 산학협력 성과 망라..2024 용봉학술제 성료</p>
                <a href="#none" class="more-btn">MORE</a>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="event-container">
        <h2 class="event-title">CNU EVENTS</h2>
        <p class="event-subtitle">전남대가 선사하는 특별한 하루</p>
        <div class="event-slider">
          <button class="slider-prev-btn">&lt;</button>
          <div class="slider-track">
            <div class="event-card">
              <img src="./img/events1.png" alt="Event 1">
              <div class="card-info">
                <p class="card-title">겨울 노래 경연대회</p>
                <p class="card-date">2024.12.20</p>
              </div>
            </div>
            <div class="event-card">
              <img src="./img/events2.png" alt="Event 2">
              <div class="card-info">
                <p class="card-title">우리의 관계를 돌봐야 할 때 안내</p>
                <p class="card-date">2024.11.22 (목) 4:00PM - 6:00PM</p>
              </div>
            </div>
            <div class="event-card">
              <img src="./img/events3.png" alt="Event 3">
              <div class="card-info">
                <p class="card-title">부모교육 프로그램: 유아 학부모 소진 대처</p>
                <p class="card-date">2024.11.22 (목) 11:40AM - 12:40PM</p>
              </div>
            </div>
            <div class="event-card">
              <img src="./img/events4.png" alt="Event 4">
              <div class="card-info">
                <p class="card-title">빅데이터 분석 이론 세미나</p>
                <p class="card-date">2024.12.05 - 2024.12.06</p>
              </div>
            </div>
          </div>
          <button class="slider-next-btn">&gt;</button>
        </div>

        <div class="container">
            <div class="left-section">
                <div class="click">
                    <h2 class="click-title">CNU CLICK</h2>
                    <p class="click-subtitle">전남대학교, 한눈에 CLICK하다</p>
                </div>
                <div class="left-section2">
                        <div class="left-panel">
                            <div class="left-info">
                                <a href="#none" class="left-info-link" target="_blank" >
                                    <img src="./img/icon_admission.png" alt="입학 안내" class="left-info-icon">
                                    <h3>입학안내</h3>
                                    <p>혁신 교육을 선도하는 맞춤형<br>교육 시스템</p>
                                </a>
                            </div>
                            <div class="left-info2">
                                <a href="#none" class="left-info-link2" target="_blank" >
                                    <img src="./img/icon_center.png" alt="플러스 센터" class="left-info-icon2">
                                    <h3>대학일자리 플러스센터</h3>
                                    <p>꿈을 실현하는 취업과 진로 보장</p>
                                </a>
                            </div>
                        </div>
                        <div class="center-info">
                            <img src="./img/icon_application.png" alt="입학 안내" class="center-info-icon">
                            <h3>교육지원 서비스</h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td><a href="#none" target="_blank" >이클래스</a></td>
                                        <td><a href="#none" target="_blank">도서관</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#none" target="_blank">교수학습</a></td>
                                        <td><a href="#none" target="_blank">교양교육</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#none" target="_blank">언어교육원</a></td>
                                        <td><a href="#none" target="_blank">성장마루</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        
            <div class="right-section">
                <div class="info-box">
                    <h4 class="info-box-title">학사일정</h4>
                    <p class="info-box-subtitle">한눈에 보는 전남대학교 학사일정</p>
                </div>
                <div class="right-section2">
                    <div class="right-panel">
                        <!-- 달력 컴포넌트 삽입 -->
                        <div id="calendarWrap">
                            <div class="calendar-header">
                                <button id="prevBtn">
                                    <img src="./img/prev.png" alt="Prev">
                                </button>
                                <div>
                                    <span id="calYear"></span>년
                                    <span id="calMonth"></span>월
                                </div>
                                <button id="nextBtn">
                                    <img src="./img/next.png" alt="Next">
                                </button>
                            </div>
                            <div class="calendar-weekdays">
                                <div>일</div>
                                <div>월</div>
                                <div>화</div>
                                <div>수</div>
                                <div>목</div>
                                <div>금</div>
                                <div>토</div>
                            </div>
                            <div class="calendar-days">
                                <!-- 날짜들이 여기에 동적으로 추가됩니다 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class=""></section>
    </script>

      <!-- Footer Section -->
    <footer>
    	<?php include "footer.php";?>
    </footer>

</body>

</html>