<?php 
include_once("../config.php");
include_once("../layout/top.php"); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<body>

        <section class="reservation-wrapper">
                <div class="reservation-container">
                    <p>장례예약</p>
                    <p><i class="bi bi-calendar2-check me-2"></i>24시간 장례가 가능합니다. 365일 연중무휴 운영합니다.</p>
                    <div class="button-group ">
                        <button >예약하기</button>
                        <button >상세정보</button>
                        <button >리뷰</button>
                    </div>

                    <h5><i class="bi bi-calendar2-check me-2"></i>날짜 선택</h5>
                        <div class="calendar">
                            <input type="text" id="date-picker">
                        </div>

                        <!-- 선택한 날짜 표시 -->
                        <div id="selected-date" class="selected-date"></div>

                        <!-- 오전/오후 드롭다운 버튼 -->
                        <div class="time-container d-flex justify-content-center">
                        <div class="time-dropdown" id="dropdown-am">
                            <button class="time-button">오전</button>
                            <div class="dropdown-content">
                                <button onclick="selectTime('오전 10:00')">10:00</button>
                                <button onclick="selectTime('오전 11:00')">11:00</button>
                            </div>
                        </div>

                        <div class="time-dropdown" id="dropdown-pm">
                            <button class="time-button">오후</button>
                            <div class="dropdown-content">
                                <button onclick="selectTime('오후 13:00')">13:00</button>
                                <button onclick="selectTime('오후 15:00')">15:00</button>
                            </div>
                        </div>
                        </div>
                        <h5 class="mt-5 "><i class="bi bi-check2-circle me-2"></i>예약시 꼭 확인해 주세요</h5>
                        <textarea placeholder=" 예약 신청하신 시간대에 예약이 불가할 경우 별도의 연락을 드립니다.
(별도의 연락이 없으면 예약 신청하신 시간대에 방문하시면 됩니다.)
                        
- 00시~06시 (야간 타임) 에 예약을 신청할 경우 예약 신청 후 대표번호로 연락을 꼭 주시기 바랍니다.
(주간 타임에 야간 타임으로 미리 예약 신청을 하신 경우는 별도의 연락을 안 주셔도 됩니다.)"></textarea>


                    <button class="nextbutton btn-premary mt-5">다음으로 <i class="bi bi-arrow-right"></i></button>
                </div>
        </section>

    <!-- Flatpickr JS 링크 -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        let selectedDate = "";
        let selectedTime = "";

        // Flatpickr 초기화
        flatpickr("#date-picker", {
            inline: true,  
            dateFormat: "Y-m-d",
            onChange: function(selectedDates, dateStr) {
                selectedDate = dateStr; 
                document.getElementById("selected-date").innerText = `선택한 날짜: ${dateStr}`;
            }
        });

        // 드롭다운 버튼 클릭 시 열기/닫기
        document.querySelectorAll(".time-button").forEach(button => {
            button.addEventListener("click", function(event) {
                let dropdown = this.parentElement;
                dropdown.classList.toggle("active");
                event.stopPropagation(); // 다른 이벤트 방지
            });
        });

        // 시간 선택 시 버튼에 값 설정
        function selectTime(time) {
            selectedTime = time;
            let period = time.includes("오전") ? "dropdown-am" : "dropdown-pm";
            document.querySelector(`#${period} .time-button`).innerText = time;
            document.querySelectorAll(".time-dropdown").forEach(dropdown => {
                dropdown.classList.remove("active");
            });
        }

        // 페이지 클릭 시 드롭다운 닫기
        document.addEventListener("click", function(event) {
            document.querySelectorAll(".time-dropdown").forEach(dropdown => {
                if (!dropdown.contains(event.target)) {
                    dropdown.classList.remove("active");
                }
            });
        });

        // 예약 확인 버튼 클릭 시 선택한 시간 표시
        document.getElementById("confirm-button").addEventListener("click", function() {
            if (!selectedDate || !selectedTime) {
                alert("날짜와 시간을 선택해주세요!");
            } else {
                alert(`예약 완료: ${selectedDate} ${selectedTime}`);
            }
        });
    </script>




</body>


<?php include_once("../layout/bottom.php"); ?>