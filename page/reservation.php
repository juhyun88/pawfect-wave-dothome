<?php 
include_once("../config.php");
include_once("../layout/top.php"); ?>


<body>
<section class="reservation-wrapper">
        <div class="reservation-container">
            <p>장례예약</p>
            <p>24시간 장례가 가능합니다. 365일 연중무휴 운영합니다.</p>
            <div class="button-group">
                <button>예약하기</button>
                <button>상세정보</button>
                <button>리뷰</button>
            </div>

            <h5>일자를 선택해 주세요</h5>
            <select>
                <option>1일</option>
                <option>2일</option>
                <option>3일</option>
                <option>4일</option>
                <option>5일</option>
                <option>6일</option>
                <option>7일</option>
                <option>8일</option>
                <option>9일</option>
                <option>10일</option>
                <option>11일</option>
                <option>12일</option>
                <option>13일</option>
                <option>14일</option>
                <option>15일</option>
                <option>16일</option>
                <option>17일</option>
                <option>18일</option>
                <option>19일</option>
                <option>20일</option>
                <option>21일</option>
                <option>22일</option>
                <option>23일</option>
                <option>24일</option>
                <option>25일</option>
                <option>26일</option>
                <option>27일</option>
                <option>28일</option>
                <option>29일</option>
                <option>30일</option>
                <option>31일</option>
              
            </select>

            <h5>시간을 선택해 주세요</h5>
            <select>
                <option>오전 10:00</option>
                <option>오전 11:00</option>
                <option>오후 13:00</option>
                <option>오후 15:00</option>
            </select>

            <h5>날짜 선택</h5>
            <div class="calendar">
                <input type="date">
            </div>

            <button>예약 확인</button>
        </div>
    </section>
</body>


<?php include_once("../layout/bottom.php"); ?>