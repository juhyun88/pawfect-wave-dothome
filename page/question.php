<?php 
include_once("../config.php");
include_once("../layout/top.php"); 
?>

    <script>
        function filterFAQ(category) {
            const items = document.querySelectorAll(".faq-item");
            console.log("items :: ", items)
            items.forEach(item => {
                if (category === "전체" || item.classList.contains(category)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        }
    </script>


    <section class="d-flex flex-column justify-content-start align-items-center px-6" >
        <div class="faqwrap text-center" >
            <h1 class="faqtext font-semibold">FAQ</h1>
            <h2 class="text-lg mt-3">자주 문의하는 질문에 대한 답변을 확인하실 수 있습니다.</h2>
            <div class="servicecategory flex justify-center mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2">
                        <button onclick="filterFAQ('전체')" class="btn btn-outline-secondary btn-lg w-100 d-flex justify-content-center align-items-center text-nowrap px-5 py-2" style="font-size: 0.9rem;">전체</button>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2">
                        <button onclick="filterFAQ('a')" class="btn btn-outline-secondary btn-lg w-100 d-flex justify-content-center align-items-center text-nowrap px-5 py-2" style="font-size: 0.9rem;">기초수습</button>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2">
                        <button onclick="filterFAQ('b')" class="btn btn-outline-secondary btn-lg w-100 d-flex justify-content-center align-items-center text-nowrap px-5 py-2" style="font-size: 0.9rem;">장례서비스</button>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2">
                        <button onclick="filterFAQ('c')" class="btn btn-outline-secondary btn-lg w-100 d-flex justify-content-center align-items-center text-nowrap px-5 py-2" style="font-size: 0.9rem;">부가 서비스</button>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2">
                        <button onclick="filterFAQ('d')" class="btn btn-outline-secondary btn-lg w-100 d-flex justify-content-center align-items-center text-nowrap px-5 py-2" style="font-size: 0.9rem;">기타</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="faq-section">
                <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                    <thead>
                        <tr class="text-left bg-gray-200">
                            <th class="px-4 py-2 border-b">제목</th>
                            <th class="px-4 py-2 border-b">작성자</th>
                            <th class="px-4 py-2 border-b">작성일</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- <tbody class="faq-item"> -->
                        <?php
                            try {
                                // DB 연결
                                $pdo = new PDO('mysql:host=localhost;dbname=pawfectwave;charset=utf8mb4', 'pawfectwave', 'js241219!');
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                
                                // 게시판 데이터 가져오기
                                $sql = "SELECT * FROM board ORDER BY created_at DESC"; 
                                $stmt = $pdo->query($sql);
                                $board_list = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                // 각 게시물을 출력
                                foreach ($board_list as $board) {
                                    echo "<tr class='author faq-item " . htmlspecialchars($board['category']) . "'>";
                                    echo "<td class='title px-4 py-2'><a href='/page/viewquestion.php?id=" . $board['id'] . "' class='text-blue-500 hover:underline'>" . htmlspecialchars($board['title']) . "</a></td>";
                                    echo "<td class='writer px-4 py-2'>" . htmlspecialchars($board['author']) . "</td>";
                                    echo "<td class='date px-4 py-2'>" . $board['created_at'] . "</td>";
                                    echo "</tr>";
                                }
                            } catch (PDOException $e) {
                                die("Query Failed: " . $e->getMessage());
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


<?php include_once("../layout/bottom.php"); ?>
