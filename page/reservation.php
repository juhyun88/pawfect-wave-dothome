<?php 
include_once("../config.php");
include_once("../layout/top.php"); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<body>

    <section class="reservation-wrapper">
        <div class="reservation-container">
            <p>장례예약</p>
            <p><i class="bi bi-calendar2-check me-2"></i>24시간 장례가 가능합니다. 365일 연중무휴 운영합니다.</p>
            <div class="button-group">
                <button data-section="reservation" class="active">예약하기</button>
                <button data-section="details">상세정보</button>
                <button data-section="review">리뷰</button>
            </div>

            <!-- Dynamic content area -->
            <div id="dynamic-content">
                <!-- Default content for "예약하기" -->
                <h5><i class="bi bi-calendar2-check me-2"></i>날짜 선택</h5>
                <div class="calendar">
                    <input type="text" id="date-picker">
                </div>
                <div id="selected-date" class="selected-date"></div>
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
                <h5 class="mt-5 text-start"><i class="bi bi-check2-circle me-2"></i>예약시 꼭 확인해 주세요</h5>
                <textarea placeholder=" 예약 신청하신 시간대에 예약이 불가할 경우 별도의 연락을 드립니다.
(별도의 연락이 없으면 예약 신청하신 시간대에 방문하시면 됩니다.)
                        
- 00시~06시 (야간 타임) 에 예약을 신청할 경우 예약 신청 후 대표번호로 연락을 꼭 주시기 바랍니다.
(주간 타임에 야간 타임으로 미리 예약 신청을 하신 경우는 별도의 연락을 안 주셔도 됩니다.)"></textarea>
                <button class="nextbutton btn-premary mt-5">다음으로 <i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <!-- Flatpickr JS 링크 -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    let selectedDate = "";
    let selectedTime = "";

    // Flatpickr 초기화
    function initializeFlatpickr() {
        flatpickr("#date-picker", {
            inline: true,  
            dateFormat: "Y-m-d",
            onChange: function(selectedDates, dateStr) {
                selectedDate = dateStr; 
                document.getElementById("selected-date").innerText = `선택한 날짜: ${dateStr}`;
            }
        });
    }

    // Dropdown 초기화
    function initializeDropdowns() {
        // Handle dropdown opening and closing
        document.querySelectorAll(".time-button").forEach(button => {
            button.addEventListener("click", function(event) {
                let dropdown = this.parentElement;
                dropdown.classList.toggle("active");
                event.stopPropagation(); // Prevent event bubbling
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener("click", function(event) {
            document.querySelectorAll(".time-dropdown").forEach(dropdown => {
                if (!dropdown.contains(event.target)) {
                    dropdown.classList.remove("active");
                }
            });
        });

        // Handle time selection
        document.querySelectorAll(".dropdown-content button").forEach(button => {
            button.addEventListener("click", function() {
                selectedTime = this.textContent; // Set the selected time
                const dropdown = this.closest(".time-dropdown");
                dropdown.querySelector(".time-button").innerText = selectedTime; // Update button text
                dropdown.classList.remove("active"); // Close dropdown

                // Optionally log or display the selected time
                console.log(`선택된 시간: ${selectedTime}`);
            });
        });
    }

    // 버튼 클릭 시 동적으로 내용 변경
    document.querySelectorAll('.button-group button').forEach(button => {
        button.addEventListener('click', (e) => {
            // Remove 'active' class from all buttons
            document.querySelectorAll('.button-group button').forEach(btn => btn.classList.remove('active'));
            // Add 'active' class to the clicked button
            e.target.classList.add('active');

            const section = e.target.getAttribute('data-section');
            let content = "";

            if (section === "reservation") {
                content = `
                    <h5><i class="bi bi-calendar2-check me-2"></i>날짜 선택</h5>
                    <div class="calendar">
                        <input type="text" id="date-picker">
                    </div>
                    <div id="selected-date" class="selected-date"></div>
                    <div class="time-container d-flex justify-content-center">
                        <div class="time-dropdown" id="dropdown-am">
                            <button class="time-button">오전</button>
                            <div class="dropdown-content">
                                <button>10:00</button>
                                <button>11:00</button>
                            </div>
                        </div>
                        <div class="time-dropdown" id="dropdown-pm">
                            <button class="time-button">오후</button>
                            <div class="dropdown-content">
                                <button>13:00</button>
                                <button>15:00</button>
                            </div>
                        </div>
                    </div>
                    <h5 class="mt-5 text-start"><i class="bi bi-check2-circle me-2"></i>예약시 꼭 확인해 주세요</h5>
                    <textarea placeholder=" 예약 신청하신 시간대에 예약이 불가할 경우 별도의 연락을 드립니다.
(별도의 연락이 없으면 예약 신청하신 시간대에 방문하시면 됩니다.)
                        
- 00시~06시 (야간 타임) 에 예약을 신청할 경우 예약 신청 후 대표번호로 연락을 꼭 주시기 바랍니다.
(주간 타임에 야간 타임으로 미리 예약 신청을 하신 경우는 별도의 연락을 안 주셔도 됩니다.)"></textarea>
                    <button class="nextbutton btn-premary mt-5">다음으로 <i class="bi bi-arrow-right"></i></button>
                `;
            } else if (section === "details") {
                content = `
                <h5 class="mt-5 text-start"><i class="bi bi-check2-circle me-2"></i>예약시 꼭 확인해 주세요</h5>
                <textarea placeholder=" 예약 신청하신 시간대에 예약이 불가할 경우 별도의 연락을 드립니다.
(별도의 연락이 없으면 예약 신청하신 시간대에 방문하시면 됩니다.)
                        
- 00시~06시 (야간 타임) 에 예약을 신청할 경우 예약 신청 후 대표번호로 연락을 꼭 주시기 바랍니다.
(주간 타임에 야간 타임으로 미리 예약 신청을 하신 경우는 별도의 연락을 안 주셔도 됩니다.)"></textarea>
                <h5 class="mt-5 text-start"><i class="bi bi-check2-circle me-2"></i> 주차정보</h5>
                <textarea class="ballet-textarea"  placeholder="주차비무료
발렛파킹 안내
발렛비 무료" ></textarea>
`;
            } else if (section === "review") {
                content = `
                 <div class="review-container">
                    <div class="review-header d-flex justify-content-between">
                        <p>리뷰 211</p>
                        <div class="review-options">
                            <span>📸 사진/영상 리뷰만</span>
                        </div>
                    </div>

                    <div class="review-item">
                        <div class="profile">
                            <div class="avatar"></div>
                            <div class="info">
                                <p class="username">GM초커</p>
                                <p class="stats">리뷰 473 | 사진 117</p>
                            </div>
                        </div>
                        <div class="review-content">
                            <strong>장례 예약</strong>
                            <p>우리 아기 하늘나라 잘 보내줬습니다. 장례 꼼꼼하게 잘 챙겨주셔서 감사합니다.</p>
                            <span class="date">2.19. | 예약</span>
                        </div>
                    </div>

                    <div class="review-item">
                        <div class="profile">
                            <div class="avatar"></div>
                            <div class="info">
                                <p class="username">리뷰야</p>
                                <p class="stats">리뷰 473 | 사진 117</p>
                            </div>
                        </div>
                        <div class="review-content">
                            <strong>장례 예약</strong>
                            <p>가족들이 다 같이 이해해준 애완동마법이 갑작스럽게 떠나서 어떻게 해야 할지 고민하던 중에 해당 업체를 찾았습니다.</p>
                            <span class="date">2.10. | 예약</span>
                        </div>
                    </div>
                </div>
    `;
            }

            // Replace dynamic content
            document.getElementById('dynamic-content').innerHTML = content;

            // Reinitialize functionality if reservation section is loaded
            if (section === "reservation") {
                initializeFlatpickr();
                initializeDropdowns();
            }
        });
    });

    // Initialize Flatpickr and Dropdowns on page load
    initializeFlatpickr();
    initializeDropdowns();
</script>

</body>

<?php include_once("../layout/bottom.php"); ?>




 <!-- 기본적으로 표시할 내용 -->
 <!-- <div id="dynamic-content">
                <h5><i class="bi bi-calendar2-check me-2"></i>날짜 선택</h5>
                <div class="calendar">
                    <input type="text" id="date-picker">
                </div> -->

                <!-- 선택한 날짜 표시 -->
                <!-- <div id="selected-date" class="selected-date"></div> -->

                <!-- 오전/오후 드롭다운 버튼 -->
                <!-- <div class="time-container d-flex justify-content-center">
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
                    </div> -->