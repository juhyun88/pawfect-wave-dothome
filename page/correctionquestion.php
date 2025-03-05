<?php
require_once '../config.php';
include_once("../layout/top.php");

// `id` 값이 전달되지 않았다면 경고창 띄우고 question.php로 이동
if (!isset($_GET['id'])) {
    echo "<script>alert('잘못된 접근입니다.'); location.href='question.php';</script>";
    exit;
}

$id = $_GET['id'];

// 수정이 진행될 경우 처리
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['w']) && $_GET['w'] === 'update') {
    // POST로 전달된 제목과 내용을 받음
    $title = isset($_POST['title']) ? trim($_POST['title']) : null;
    $content = isset($_POST['content']) ? trim($_POST['content']) : null;

    // 제목과 내용이 비어있다면 에러 메시지 출력
    if (empty($title) || empty($content)) {
        echo "<script>alert('제목과 내용은 필수 항목입니다.'); history.back();</script>";
        exit;
    }

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=pawfectwave;charset=utf8mb4', 'pawfectwave', 'js241219!');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // 게시글 업데이트 쿼리
        $sql = "UPDATE board SET title = :title, content = :content, updated_at = NOW() WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':content', $content, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // 수정 후 viewquestion.php로 리디렉션
        echo "<script>alert('수정되었습니다.'); location.href='viewquestion.php?id=$id';</script>";
        exit;
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}

// 글 수정 폼을 보여주기 위해 기존 데이터 조회
try {
    $pdo = new PDO('mysql:host=localhost;dbname=pawfectwave;charset=utf8mb4', 'pawfectwave', 'js241219!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT author, title, content, created_at, updated_at FROM board WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $board = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}
?>
<body>
    <section class="d-flex flex-column justify-content-start align-items-center px-6 mt-5">
        <div class="container_correction">
            <?php if ($board): ?>
                <form action="correctionquestion.php?w=update&id=<?= $id ?>" method="POST">
                    <label for="update_title">제목</label>
                    <input id="update_title" type="text" name="title" value="<?= htmlspecialchars($board['title'], ENT_QUOTES) ?>" required>

                    <p>작성자: <?= htmlspecialchars($board['author']) ?></p>

                    <label for="update_content">내용</label>
                    <textarea id="update_content" name="content" required><?= htmlspecialchars($board['content']) ?></textarea>

                    <div class="buttons">
                        <button class="update-btn" type="submit">수정완료</button>
                        <button class="write-btn"><a href="/page/question.php">목록</a></button>
                    </div>
                </form>
            <?php else: ?>
                <script>
                    alert('게시글을 찾을 수 없습니다.');
                    location.href='../page/viewquestion.php';
                </script>
            <?php endif; ?>
        </div>
    </section>
</body>


