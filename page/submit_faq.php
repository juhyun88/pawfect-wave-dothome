<?php
include_once("../config.php");

// 폼 데이터를 받기
$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];
$author = "사용자"; // 이 부분은 실제 로그인된 사용자로 처리해야 합니다.

try {
    // DB 연결
    $pdo = new PDO('mysql:host=localhost;dbname=pawfectwave;charset=utf8mb4', 'pawfectwave', 'js241219!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // INSERT 쿼리 실행
    $sql = "INSERT INTO board (title, category, content, author, created_at) 
            VALUES (:title, :category, :content, :author, NOW())";
    $stmt = $pdo->prepare($sql);
    
    // 바인딩 파라미터
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':author', $author);
    
    // 쿼리 실행
    $stmt->execute();

    // 글쓰기 완료 후 FAQ 목록으로 리다이렉트
    header("Location: /faq"); // 글쓰기 후 FAQ 페이지로 돌아가게
    exit;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
