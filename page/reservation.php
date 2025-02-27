<?php 
include_once("../config.php");
include_once("../layout/top.php"); ?>


<body>
<section class="reservation-wrapper">
        <div class="reservation-container">
            <h2 class="faqtext font-semibold">장례예약</h2>
            <p>24시간 장례가 가능합니다. 365일 연중무휴 운영합니다.</p>
            <div class="button-group">
                <button>예약하기</button>
                <button>상세정보</button>
                <button>리뷰</button>
            </div>

            <h3>일자를 선택해 주세요</h3>
            <select>
                <option>1일</option>
                <option>2일</option>
                <option>3일</option>
                <option>4일</option>
                <option>5일</option>
                <option>7일</option>
            </select>

            <h3>시간을 선택해 주세요</h3>
            <select>
                <option>오전</option>
                <option>오후</option>
            </select>

            <h3>날짜 선택</h3>
            <div class="calendar">
                <input type="date">
            </div>

            <button>예약 확인</button>
        </div>
    </section>
</body>


<?php include_once("../layout/bottom.php"); ?>