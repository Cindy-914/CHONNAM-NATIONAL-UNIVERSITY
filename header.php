<?php
   
   include "define.php"; 
    @session_start();  //session_start();에 오류가 생긴다면 사용



    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    /*isset($_SESSION[“userid”])는 세션 변수인 $_SESSION[“userid”]에 값이 있는지 검사.*/

    else $userid = ""; 

    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    
    else $username = ""; 

    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";

    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";

?>		
    <div id="top_btn">
        <a href="#"><img src="./img/top_btn.png" width="60" height="60" alt="top_btn"></a>
    </div>
    <header id="header_wrap">
        <div id="header_fixed">
            <div id="header">
                <div id="gnb">
                    <ul class="top_gnb">
                        <li class="freshman_quick">
                            <a href="#none">
                                <span>예비학생</span>
                            </a>
                            <div class="quick_wrap" id="freshman_wrap">
                                <div class="quick_inner_wrap">
                                    <ul>
                                        <li>
                                            <a href="#none">학부입학</a>
                                        </li>
                                        <li>
                                            <a href="#none">원클릭서비스</a>
                                        </li>
                                        <li>
                                            <a href="#none">외국인입학</a>
                                        </li>
                                        <li>
                                            <a href="#none">캠퍼스투어신청</a>
                                        </li>
                                    </ul>
                                    <button class="close"></button>
                                </div>
                            </div>
                        </li>
                        <li class="student_quick_on">
                            <a href="#none">
                                <span>재학생</span>
                            </a>
                            <div class="quick_wrap" id="student_wrap">
                                <div class="quick_inner_wrap">
                                    <ul>
                                        <li>
                                            <a href="#none">원격지원</a>
                                        </li>
                                        <li>
                                            <a href="#none">도서관</a>
                                        </li>
                                        <li>
                                            <a href="#none">언어교육원</a>
                                        </li>
                                        <li>
                                            <a href="#none">시설물바로고치미</a>
                                        </li>
                                        <li>
                                            <a href="#none">증명발급</a>
                                        </li>
                                        <li>
                                            <a href="#none">교육혁신본부</a>
                                        </li>
                                        <li>
                                            <a href="#none">국제협력본부</a>
                                        </li>
                                    </ul>
                                    <button class="close"></button>
                                </div>
                        </li>
                        <li class="teacher_quick">
                            <a href="#none">
                                <span>교직원</span>
                            </a>
                            <div class="quick_wrap" id="teacher_wrap">
                                <div class="quick_inner_wrap">
                                    <ul>
                                        <li>
                                            <a href="#none">교육혁신본부</a>
                                        </li>
                                        <li>
                                            <a href="#none">도서관</a>
                                        </li>
                                        <li>
                                            <a href="#none">PC병원</a>
                                        </li>
                                        <li>
                                            <a href="#none">증명발급</a>
                                        </li>
                                        <li>
                                            <a href="#none">서비스데스크</a>
                                        </li>
                                        <li>
                                            <a href="#none">시설물바로고치미</a>
                                        </li>
                                    </ul>
                                    <button class="close"></button>
                                </div>
                        </li>
                        <li class="normal_quick">
                            <a href="#none">
                                <span>동문·일반인</span>
                            </a>
                            <div class="quick_wrap" id="normal_wrap">
                                <div class="quick_inner_wrap">
                                    <ul>
                                        <li>
                                            <a href="#none">총동창회</a>
                                        </li>
                                        <li>
                                            <a href="#none">발전기금</a>
                                        </li>
                                        <li>
                                            <a href="#none">평생교육원</a>
                                        </li>
                                        <li>
                                            <a href="#none">스포츠센터</a>
                                        </li>
                                    </ul>
                                    <button class="close"></button>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <h1 class="logo">
                        <span>전남대학교</span>
                        <a href="index.php">
                            <img src="./img/logo.png" width="190" height="38" alt="전남대학교 로고">
                        </a>
                    </h1>


                    <?php
    if(!$userid) { 
        /*로그인 되지 않은 상태.*/
?>           

    <ul class="top_menu">
        <li class="top_menu1"><a href="login_form.php">로그인</a></li>
        <li class="top_menu0"><a href="member_form.php">회원가입</a></li>
        <li class="top_menu2"><a href="#none">ENGLISH</a></li>
        <li class="top_menu3"><a href="#none">전남대포털</a></li>
        <li class="top_menu4"><a href="#none">SITEMAP</a></li>
    </ul>

<?php
    } else { 
        /*$userid가 값을 가진 경우라면 로그인 상태, 위 if문 조건식이 거짓이 되어 else 다음 문장 수행.*/
        $logged = $username."(".$userid.")님";

?>
    <ul class="top_menu">
        <li><?=$logged?> </li>
        <li class="top_menu1"><a href="logout.php">로그아웃</a></li>
        <li class="top_menu0"><a href="member_modify_form.php">마이페이지</a></li>
        <li class="top_menu2"><a href="#none">ENGLISH</a></li>
        <li class="top_menu3"><a href="#none">전남대포털</a></li>
        <li class="top_menu4"><a href="#none">SITEMAP</a></li>
    </ul>


<?php
    }
?>
                    
                    <div class="search">
                        <form action="#none" method="post" name="search">
                            <input type="text" name="word" id="keyword" placeholder="검색어를 입력하세요.">
                            <button type="submit">
                                <img src="./img/search.png" alt="검색" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- lnb영역 -->
            <nav id="top_menu_wrap">
                <div class="drop_bg"></div>
                <div class="bg_menu">
                    <ul class="depth">
                        <li><!-- menu1 -->
                            <a href="#none" class="depth_01_link">
                                <span class="depth_tit">전남대소개</span>
                            </a>
                            <div class="sub">
                                <div class="depth_info">
                                    <p>
                                        <strong>전남대소개</strong>
                                        <span>CHONNAM <br> NATIONAL UNIVERSITY</span>
                                    </p>
                                </div>
                                <div class="headerBg">
                                    <ul id="gnbMenu1" class="depth_02">
                                        <li>
                                            <a href="#none">
                                                <span>열린총장실</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>인사말</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>역대총장</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>총장동정</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>신문고</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>대학소개</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>대학역사</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>대학상징</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>대학보도자료</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>대학현황</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>대학기관</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>조직도</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>대학본부</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>지원시설</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>연구기관</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>캠퍼스안내</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="./index2.php">
                                                        <span>찾아오시는길</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>캠퍼스안내</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>전남대학교
                                                            민주길</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>교내주차</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </li>
                        <li><!-- menu2 -->
                            <a href="#none" class="depth_01_link">
                                <span class="depth_tit">입학·취업</span>
                            </a>
                            <div class="sub">
                                <div class="depth_info">
                                    <p>
                                        <strong>입학·취업</strong>
                                        <span>CHONNAM NATIONAL UNIVERSITY</span>
                                    </p>
                                </div>
                                <div class="headerBg">
                                    <ul id="gnbMenu2" class="depth_03">
                                        <li>
                                            <a href="#none">
                                                <span>입학안내</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>학부입시</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>대학원입시</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>원클릭서비스</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>International
                                                            Admission</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>취업안내</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>취업·진로포털</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>현장실습</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>대학일자리플러스센터 재학생 맞춤형 고용서비스</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>구인신청</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </li>
                        <li><!-- menu3 -->
                            <a href="#none" class="depth_02_link">
                                <span class="depth_tit">대학·대학원</span>
                            </a>
                            <div class="sub">
                                <div class="depth_info">
                                    <p>
                                        <strong>대학·대학원</strong>
                                        <span>CHONNAM NATIONAL UNIVERSITY</span>
                                    </p>
                                </div>
                                <div class="headerBg">
                                    <ul id="gnbMenu3" class="depth_04">
                                        <li>
                                            <a href="#none">
                                                <span>대학·학부</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>대학·학부(과)</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>대학·학부(과)</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>간호대학</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>경영대학</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>공과대학</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>농업생명과학대학</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>대학원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>전문대학원</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>경영전문대학원</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>문화전문대학원</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>치의학전문대학원</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>법학전문대학원</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>특수대학원</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>교육대학원</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>산업대학원</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>정책대학원</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>식물방역대학원</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </li>
                        <li><!-- menu4 -->
                            <a href="#none" class="depth_04_link">
                                <span class="depth_tit">대학생활</span>
                            </a>
                            <div class="sub">
                                <div class="depth_info">
                                    <p>
                                        <strong>대학생활</strong>
                                        <span>CHONNAM NATIONAL UNIVERSITY
                                        </span>
                                    </p>
                                </div>
                                <div class="headerBg">
                                    <ul id="gnbMenu4" class="depth_05">
                                        <li>
                                            <a href="#none">
                                                <span>학사정보</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>학사일정</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>수강신청</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>수업성적</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>학적</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>장학/학자금융자</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>장학일반</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>교내장학금</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>교외장학금</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>학자금대출안내</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>교육지원</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>인재상 및 핵심역량</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>교육과정</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>평생교육사자격제도</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>학점은행제</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>교직정보</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>교직과정</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>입학년도 결정기준</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>교직이수자선발</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>교원자격증 취득요건</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>후생복지</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>학교버스</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>도서관이용</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>생활관(기숙사)</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </li>
                        <li><!-- menu5 -->
                            <a href="#none" class="depth_05_link">
                                <span class="depth_tit">연구·산학</span>
                            </a>
                            <div class="sub">
                                <div class="depth_info">
                                    <p>
                                        <strong>연구·산학</strong>
                                        <span>CHONNAM NATIONAL UNIVERSITY
                                        </span>
                                    </p>
                                </div>
                                <div class="headerBg">
                                    <ul id="gnbMenu5" class="depth_06">
                                        <li>
                                            <a href="#none">
                                                <span>연구소식</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>SciVal(연구성과분석솔루션)산학협력단</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>연구지원 및 산학협력</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>지적재산권</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>기술이전</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>창업보육</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>연구소 및 사업단</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>연구소현황</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>사업단현황</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>연구지원시설</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>공동실험실습관</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>연구실안전관리센터</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>인프라활용지원센터</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </li>
                        <li><!-- menu6 -->
                            <a href="#none" class="depth_06_link">
                                <span class="depth_tit" id="international">국제교류</span>
                            </a>
                        </li>
                        <li><!-- menu7 -->
                            <a href="#none"
                                class="depth_07_link">
                                <span class="depth_tit">커뮤니티</span>
                            </a>
                            <div class="sub">
                                <div class="depth_info">
                                    <p>
                                        <strong>커뮤니티</strong>
                                        <span>CHONNAM NATIONAL UNIVERSITY</span>
                                    </p>
                                </div>
                                <div class="headerBg">
                                    <ul id="gnbMenu7" class="depth_08">
                                        <li>
                                            <a href="board_list.php">
                                                <span>공지사항</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="board_list.php">
                                                        <span>공지사항</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>코로나19 안내</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>묻고답하기</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>FAQ</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>Q&A</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>생활광장</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>알뜰장터</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>주거정보</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>아르바이트</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>사랑방</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>인터넷은사랑을싣고</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>칭찬릴레이(이달의 전남대인)</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#none">
                                                <span>자료실</span>
                                            </a>
                                            <ul class="lnbMenu">
                                                <li>
                                                    <a href="#none">
                                                        <span>학부서식</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#none">
                                                        <span>대학원서식</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    </script>