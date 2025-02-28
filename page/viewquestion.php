<?php

require_once '../config.php';

// `wr_id` 값이 전달되지 않았다면 경고창 띄우고 list.php로 이동
if (!isset($_GET['author'])) {
    echo "<script>alert('잘못된 접근입니다.'); location.href='qustion.php';</script>";
    exit;
}

$wr_id = $_GET['author'];

try {
    $sql = "SELECT title, content, created_at, updated_at FROM board WHERE author = :author";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':author', $author, PDO::PARAM_INT);
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

<a href="/page/qustion.php">목록</a>
<a href="/page/writequstion.php?w=update">수정</a>