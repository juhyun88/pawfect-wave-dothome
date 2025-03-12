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

<section class='vh-100'>
    <h2>예약 신청</h2>
    <form action="submit_reservation.php" method="POST">
        <label for="customer_name">고객 이름:</label>
        <input type="text" name="customer_name" id="customer_name" required><br><br>

        <label for="phone">휴대폰 번호:</label>
        <input type="text" name="phone" id="phone" required><br><br>

        <label for="email">이메일:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="pet_name">반려동물 이름:</label>
        <input type="text" name="pet_name" id="pet_name" required><br><br>

        <label for="pet_weight">반려동물 체중:</label>
        <input type="number" step="0.01" name="pet_weight" id="pet_weight" required><br><br>

        <label for="pet_species">반려동물 종:</label>
        <select name="pet_species[]" id="pet_species" multiple required>
            <option value="강아지">강아지</option>
            <option value="고양이">고양이</option>
            <option value="기타">기타</option>
            
        </select><br><br>

        <label for="selected_branches">지점 선택:</label>
        <select name="selected_branches[]" id="selected_branches" multiple required>
            <option value="본점">본점</option>
            <option value="경기점">경기점</option>
            <option value="인천점">인천점</option>
            <option value="대구점">대구점</option>
        </select><br><br>

        <label for="additional_services">부가 서비스:</label>
        <select name="additional_services[]" id="additional_services" multiple required>
            <option value="없음">없음</option>
            <option value="동행">동행</option>
            <option value="비동행">비동행</option>
           
        </select><br><br>

        <input type="submit" value="예약하기">
    </form>

</section>

<?php include_once("../layout/bottom.php"); ?>