<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHONNAM NATIONAL UNIVERSITY</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style2.css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/prefixfree.min.js"></script>
    <script src="./js/script2.js"></script>
</head>

<body>
    <div id="top_btn">
        <a href="#"><img src="./img/top_btn.png" width="60" height="60" alt="top_btn"></a>
    </div>
	<header>
    	<?php include "header.php";?>
    </header>

    <div>
    <!-- 지도영역 -->
    <header id="location">
        <div class="container">
            <div class="location-info">
                <ul>
                    <li>
                        <h1>전남대학교 찾아오시는 길</h1>
                        <p>위의 지도에서 전남대학교 위치를 확인하세요.</p>
                    </li>
                </ul>
            </div>
            <div id="map"></div>
            <div class="map_info">
                <ul>
                    <li>
                        <span>용봉동캠퍼스</span>
                        <p>주소 : 61186 광주광역시 북구 용봉로 77 (용봉동)</p>
                    </li>
                    <li>
                        <span>고속버스, 시외버스(광천동 종합버스터미널) 이용 시</span>
                        <p>-택시 : 용봉동캠퍼스까지 15분 정도 소요되며, 요금은 교통체증 여부에 따라 다르며 6,000원 정도임</p>
                        <p>-시내버스: 광천동 종합버스터미널에서 목적지 정류소에 맞는 버스 탑승</p>
                        <p>전남대 내 용봉탑 회전교차로 정류소 : 마을버스777<br>전남대 정류소(정문) : 매월26, 첨단30, 상무64, 518<br>전남대 후문 정류소 : 일곡38</p>
                    </li>
                    <li>
                        <span>철도편(송정역) 이용 시</span>
                        <p>-택시 : 용봉동캠퍼스까지 30분 정도 소요되며, 요금은 교통체증 여부에 따라 다르며 15,000원 정도임</p>
                        <p>-시내버스: 송정역 정류장에서 목적지 정류소에 맞는 버스에 탑승</p>
                        <p>전남대 정류소(정문) : 좌석02<br>전남대 후문 정류소 : 160, 송정19, 일곡 38</p>
                    </li>
                    <li>
                        <span>자가용 이용 시</span>
                        <p>-고속도로를 이용하여 용봉동캠퍼스에 올 경우 서광주IC와 동광주IC 사이에 있는 용봉IC로 빠져 나온 뒤 찾아오시는 길 안내의 약도에 따라 운행하면 10분 정도 소요</p>
                        <p>-용봉IC는 출구만 있고 입구는 없으므로 고속도로를 이용하기 위해서는 운암고가 밑을 지나 서광주IC로 진입해야 함</p>
                    </li>
                    <li>
                        <span>시내(마을)버스 이용시</span>
                        <p>-전남대 정류소(정문)는 매월26, 첨단30, 금남 57, 상무64, 두암81(상행), 일곡180, 518 버스가 정차</p>
                        <p>-전남대 후문 정류소는 진월07, 문흥18, 용전184, 송정19, 일곡28, 일곡38, 문흥80, 용봉83, 419 버스가 정차</p>
                        <p>전남대 내 용봉탑 회전교차로 정류소는 마을버스777가 정차</p>
                    </li>
                </ul>
            </div>




        </div>

        <script>
            function initMap() {
                //지도에 표시할 위치
                const location = { lat: 35.160786, lng: 126.915512 };



                //지도 객체 생성
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 20, //지도확대
                    center: location //지도에서 가운데로 위치할 위도와 경도
                });

                //마커를 생성할 피처 배열
                var features = [
                    {
                        position: new google.maps.LatLng(37.5070431, 126.8902185),
                        type: 'cafe',
                        content: '신도림그린컴퓨터'
                    },
                    {
                        position: new google.maps.LatLng(37.506909, 126.8905311),
                        type: 'cafe2',
                        content: '대박순두부'
                    },
                    //필요한 다른 피처들이 있다면 여기에 추가
                ];

                var iconBase = 'image/';

                var icons = {
                    cafe: {
                        icon: iconBase + 'icon-map-marker.png' //아이콘 수정
                    },
                    cafe2: {
                        icon: iconBase + 'icon-map-marker.png' //아이콘 수정
                    },
                };

                //마커 생성 루프
                for (var i = 0; i < features.length; i++) {
                    var feature = features[i];

                    var featureMarker = new google.maps.Marker({

                        position: feature.position, //마커위치 설정
                        icon: icons[feature.type].icon, //마커의 아이콘 설정
                        map: map //마커 표시할 객체

                    });


                    //마커를 클릭했을 때 표시될 정보창
                    var infowindow = new google.maps.InfoWindow({ //말풍선 띄우기
                        content: feature.content //정보창에 표시될 내용
                    });



                    //마커를 클릭했을 때 실행되는 함수
                    google.maps.event.addListener(featureMarker, 'click', (function (marker, infowindow) {

                        return function () {
                            infowindow.open(map, marker); //마커 위에 정보창을 표시

                            //마커 애니메이션 설정
                            if (marker.getAnimation() != null) {
                                marker.setAnimation(null); //애니메이션이 이미 설정되어 있다면 제거
                            } else {
                                marker.setAnimation(google.maps.Animation.BOUNCE);
                            }

                        }

                    })(featureMarker, infowindow));

                }

            }
            //페이지가 로드되면 initMap()함수 호출
            google.maps.event.addDomListener(window, 'load',initMap );
        </script>



        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWqEOsMkpb8JjoaOVB75-YPY7ig4uehbA
            &callback=initMap">
        </script>
    </header>

    <!-- Footer Section -->
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>

</html>