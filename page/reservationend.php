<?php 
include_once("../config.php");
include_once("../page/submit_reservation.php"); 
include_once("../layout/top.php"); 
?>
<?php
try {
    // DB 연결
    $pdo = new PDO('mysql:host=localhost;dbname=pawfectwave;charset=utf8mb4', 'pawfectwave', 'js241219!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 게시판 데이터 가져오기
    $sql = "SELECT * FROM reservations";
    $stmt = $pdo->query($sql);
    $board_list = $stmt->fetchAll(PDO::FETCH_ASSOC);



} catch (PDOException $e) {
    // 예외 처리
    echo "데이터베이스 오류: " . $e->getMessage();
}
?>

<section class="vh-100 d-flex justify-content-center align-items-center" id="reservationend">
    <form class="reservation-form" action="submit_reservation.php" method="POST">
        <h2 class="text-center">예약 신청</h2>

        <div class="form-columns">
            <!-- Left Column -->
            <div class="left-column">
                <label for="customer_name">고객 이름:</label>
                <input type="text" name="customer_name" id="customer_name" placeholder="이름을 입력하세요" required>

                <label for="phone">휴대폰 번호:</label>
                <input type="text" name="phone" id="phone" placeholder="휴대폰 번호를 입력하세요" required>

                <label for="email">이메일:</label>
                <input type="email" name="email" id="email" placeholder="이메일을 입력하세요" required>

                <label for="selected_branches">지점 선택:</label>
                <div class="dropdown-container">
                    <div class="custom-dropdown" id="branchDropdown">
                        <span class="dropdown-selected">지점을 선택해주세요</span>
                        <ul class="dropdown-options" id="branchOptions">
                            <li data-value="본점">본점</li>
                            <li data-value="경기점">경기점</li>
                            <li data-value="인천점">인천점</li>
                            <li data-value="대구점">대구점</li>
                        </ul>
                    </div>
                </div>
                <input type="hidden" name="selected_branches[]" id="selected_branch_hidden" required>

                <label for="additional_services">부가 서비스:</label>
                <div class="dropdown-container">
                    <div class="custom-dropdown" id="servicesDropdown">
                        <span class="dropdown-selected">부가서비스를 선택해주세요</span>
                        <ul class="dropdown-options" id="servicesOptions">
                            <li data-value="없음">없음</li>
                            <li data-value="동행">동행</li>
                            <li data-value="비동행">비동행</li>
                        </ul>
                    </div>
                </div>
                <input type="hidden" name="additional_services[]" id="selected_services_hidden" required>
            </div>

            <!-- Right Column -->
            <div class="right-column">
                <label for="pet_name">반려동물 이름:</label>
                <input type="text" name="pet_name" id="pet_name" placeholder="반려동물 이름을 입력하세요" required>

                <label for="pet_weight">반려동물 체중:</label>
                <input type="number" step="0.01" name="pet_weight" id="pet_weight" placeholder="반려동물 체중을 입력하세요" required>

                <label for="pet_species">반려동물 종:</label>
                <div class="dropdown-container">
                    <div class="custom-dropdown" id="speciesDropdown">
                        <span class="dropdown-selected">종을 선택해주세요</span>
                        <ul class="dropdown-options" id="speciesOptions">
                            <li data-value="강아지">강아지</li>
                            <li data-value="고양이">고양이</li>
                            <li data-value="기타">기타</li>
                        </ul>
                    </div>
                </div>
                <input type="hidden" name="pet_species[]" id="selected_species_hidden" required>
            </div>
        </div>

        <!-- Agreement Section -->
        <div class="agreement-section">
            <h3>예약 시 동의</h3>
            <label>
                <input type="checkbox" id="select_all"> 전체 선택
            </label>
            <label>
                <input type="checkbox" required> (필수) 서비스 이용 약관 보기
            </label>
            <label>
                <input type="checkbox" required> (필수) 비회원 개인정보수집 이용 동의 보기
            </label>
            <label>
                <input type="checkbox"> (선택) 개인정보 제3자 정보 제공 동의 보기
            </label>
            <label>
                <input type="checkbox"> (선택) 마케팅 정보 수신 동의 보기
            </label>
        </div>

        <!-- Submit Button -->
        <div class="submit-section text-center">
            <input type="submit" value="예약하기">
        </div>
    </form>

    <!-- Preview Section -->
    <div class="preview-section">
        <h3>선택 정보</h3>
        <p id="preview-content">여기에 선택 정보가 표시됩니다.</p>
    </div>
</section>



<script>
document.addEventListener("DOMContentLoaded", () => {
    const dropdownConfigs = [
        {
            dropdownId: "branchDropdown",
            optionsId: "branchOptions",
            selectedClass: "dropdown-selected",
            hiddenInputId: "selected_branch_hidden",
            label: "지점"
        },
        {
            dropdownId: "servicesDropdown",
            optionsId: "servicesOptions",
            selectedClass: "dropdown-selected",
            hiddenInputId: "selected_services_hidden",
            label: "부가 서비스"
        },
        {
            dropdownId: "speciesDropdown",
            optionsId: "speciesOptions",
            selectedClass: "dropdown-selected",
            hiddenInputId: "selected_species_hidden",
            label: "반려동물 종"
        }
    ];

    const previewContent = document.getElementById("preview-content");

    const updatePreview = () => {
        let previewText = "";
        dropdownConfigs.forEach(config => {
            const value = document.getElementById(config.hiddenInputId).value;
            if (value) {
                previewText += `${config.label}: ${value} `;
            }
        });
        previewContent.textContent = previewText.trim() || "여기에 선택 정보가 표시됩니다.";
    };

    dropdownConfigs.forEach(config => {
        const dropdown = document.getElementById(config.dropdownId);
        const options = document.getElementById(config.optionsId);
        const selectedDisplay = dropdown.querySelector(`.${config.selectedClass}`);
        const hiddenInput = document.getElementById(config.hiddenInputId);

        dropdown.addEventListener("click", () => {
            const isVisible = options.style.display === "block";
            options.style.display = isVisible ? "none" : "block";
        });

        options.addEventListener("click", (e) => {
            if (e.target.tagName === "LI") {
                const value = e.target.getAttribute("data-value");
                const text = e.target.textContent;

                // Update the visible selected value and hidden input
                selectedDisplay.textContent = text;
                hiddenInput.value = value;

                // Collapse the dropdown menu
                options.style.display = "none";
                updatePreview();
            }
        });

        // Close dropdown if clicked outside
        document.addEventListener("click", (e) => {
            if (!dropdown.contains(e.target)) {
                options.style.display = "none";
            }
        });
    });

    // Agreement Section Logic
    const selectAllCheckbox = document.getElementById("select_all");
    const allCheckboxes = document.querySelectorAll(".agreement-section input[type='checkbox']");

    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener("change", (event) => {
            const isChecked = event.target.checked;
            allCheckboxes.forEach((checkbox) => {
                if (checkbox !== selectAllCheckbox) {
                    checkbox.checked = isChecked;
                }
            });
        });
    }
});






</script>
<?php include_once("../layout/bottom.php"); ?>