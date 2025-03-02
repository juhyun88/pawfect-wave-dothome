<?php

require_once '../config.php';

// `wr_id` 값이 전달되지 않았다면 경고창 띄우고 list.php로 이동
if (!isset($_GET['id'])) {
    echo "<script>alert('잘못된 접근입니다.'); location.href='qustion.php';</script>";
    exit;
}

$id = $_GET['id'];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=pawfectwave;charset=utf8mb4', 'pawfectwave', 'js241219!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT author, title, content, created_at, updated_at FROM board WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $board = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($board) {
        echo "<h1>" . htmlspecialchars($board['title']) . "</h1>";
        echo "<p>작성자: " . htmlspecialchars($board['author']) . "</p>";
        echo "<div>" . nl2br(htmlspecialchars($board['content'])) . "</div>";
    } else {
        echo "<script>alert('게시글을 찾을 수 없습니다.'); location.href='qustion.php';</script>";
        exit;
    }
} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}

?>

<a href="/page/question.php">목록</a>
<a href="/page/writequestion.php?w=update&id=<?= urlencode($_GET['id']) ?>">수정</a>
<!-- <a href="/page/writequestion.php">글쓰기</a> -->