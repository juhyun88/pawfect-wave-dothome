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
                    item.style.display = "table-row";
                } else {
                    item.style.display = "none";
                }
            });
        }
    </script>


    <section class="d-flex flex-column justify-content-start align-items-center px-6 mt-5" >
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
                <table class="table table-striped table-hover table-bordered bg-white shadow-md rounded-lg overflow-hidden">
                    <thead>
                        <tr class="text-center bg-gray-200">
                            
                            <th class="px-4 py-2 border-b ">제목</th>
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
                                    echo "<tr class='author faq-item text-center " . htmlspecialchars($board['category']) . "'>";
                                    echo "<td class='title px-4 py-2 text-center'><a href='/page/viewquestion.php?id=" . $board['id'] . "' class='text-blue-500 hover:underline'>" . htmlspecialchars($board['title']) . "</a></td>";
                                    echo "<td class='writer px-4 py-2 text-center'>" . htmlspecialchars($board['author']) . "</td>"; // 중앙 정렬
                                    echo "<td class='date px-4 py-2 text-center'>" . $board['created_at'] . "</td>"; // 중앙 정렬
                                    echo "</tr>";
                                }
                            } catch (PDOException $e) {
                                die("Query Failed: " . $e->getMessage());
                            }
                        ?>
                    </tbody>
                </table>
                    <div class="d-flex justify-content-end"style="width: 100%;">
                    <button class="btn btn-success ml-auto" data-bs-toggle="modal" data-bs-target="#writeModal">글쓰기</button>
                    </div>
            </div>
        
            
        </div>
        <div class="modal fade" id="writeModal" tabindex="-1" aria-labelledby="writeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="writeModalLabel">Q&A 글쓰기</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="faqForm" action="submit_faq.php" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">제목</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">카테고리</label>
                    <select class="form-select" id="category" name="category" required>
                    <option value="a">기초수습</option>
                    <option value="b">장례서비스</option>
                    <option value="c">부가 서비스</option>
                    <option value="d">기타</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">내용</label>
                    <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">제출</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </section>

<?php include_once("../layout/bottom.php"); ?>
