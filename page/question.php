<?php include_once("../layout/top.php"); ?>

<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function filterFAQ(category) {
            const items = document.querySelectorAll(".faq-item");
            items.forEach(item => {
                if (category === "전체" || item.classList.contains(category)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        }
    </script>
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body class="bg-gray-100">
    <section class="vh-100 mt-16 px-6">
        <div class="faqwrap text-center" style="margin-top: 150px;">
            <h1 class="faqtext font-semibold">FAQ</h1>
            <h2 class="text-lg mt-3">자주 문의하는 질문에 대한 답변을 확인하실 수 있습니다.</h2>
            <div class="servicecategory flex justify-center mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2">
                        <button onclick="filterFAQ('전체')" class="btn btn-outline-secondary btn-lg w-100 d-flex justify-content-center align-items-center text-nowrap px-5 py-2" style="font-size: 0.9rem;">전체</button>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2">
                        <button onclick="filterFAQ('기초수습')" class="btn btn-outline-secondary btn-lg w-100 d-flex justify-content-center align-items-center text-nowrap px-5 py-2" style="font-size: 0.9rem;">기초수습</button>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2">
                        <button onclick="filterFAQ('장례서비스')" class="btn btn-outline-secondary btn-lg w-100 d-flex justify-content-center align-items-center text-nowrap px-5 py-2" style="font-size: 0.9rem;">장례서비스</button>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2">
                        <button onclick="filterFAQ('부가서비스')" class="btn btn-outline-secondary btn-lg w-100 d-flex justify-content-center align-items-center text-nowrap px-5 py-2" style="font-size: 0.9rem;">부가 서비스</button>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-2">
                        <button onclick="filterFAQ('기타')" class="btn btn-outline-secondary btn-lg w-100 d-flex justify-content-center align-items-center text-nowrap px-5 py-2" style="font-size: 0.9rem;">기타</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="faq-section">
                <div class="faq-item 기초수습">
                    <div class="faq-title d-flex justify-content-between align-items-center">
                        <span class="category">기초수습</span>
                        <span class="question">AVERE 이용하려면 어떻게 해야 해요?</span>
                        <div class="arrow"></div>
                    </div>
                    <div class="faq-content">
                        <p>AVERE 이용을 위해 회원가입 후 로그인을 진행하세요.</p>
                    </div>
                </div>

                <div class="faq-item 장례서비스">
                    <div class="faq-title d-flex justify-content-between align-items-center">
                        <span class="category">장례서비스</span>
                        <span class="question">AVERE 가 뭐예요?</span>
                        <div class="arrow"></div>
                    </div>
                    <div class="faq-content">
                        <p>AVERE는 온라인 추모관 서비스입니다.</p>
                    </div>
                </div>

                <div class="faq-item 부가서비스">
                    <div class="faq-title d-flex justify-content-between align-items-center">
                        <span class="category">부가 서비스</span>
                        <span class="question">온라인 추모관'걸어온'2개 만들고 싶은데 가능한가요?</span>
                        <div class="arrow"></div>
                    </div>
                    <div class="faq-content">
                        <p>AVERE는 온라인 추모관 서비스입니다.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">&#60;</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">&#62;</a></li>
                </ul>
            </nav>
        </div>
    </section>

       <script>
        document.addEventListener("DOMContentLoaded", function() {
            const questions = document.querySelectorAll(".faq-title");

            questions.forEach(function(question) {
                question.addEventListener("click", function() {
                    const content = this.nextElementSibling;
                    const arrow = this.querySelector('.arrow');

                    // 클릭된 항목의 답변을 토글 (열거나 닫기)
                    content.style.display = content.style.display === "block" ? "none" : "block";
                    
                    // 화살표 회전
                    arrow.style.transform = content.style.display === "block" ? 'rotate(135deg)' : 'rotate(-50deg)';
                    
                    // 다른 항목들 닫기
                    questions.forEach(function(otherQuestion) {
                        if (otherQuestion !== question) {
                            otherQuestion.nextElementSibling.style.display = "none";
                            otherQuestion.querySelector('.arrow').style.transform = 'rotate(-45deg)';
                        }
                    });

                    return false;  // 기본 동작을 막기
                });
            });

            // 첫 번째 항목 자동으로 트리거 (첫 번째 항목이 열리도록)
            // questions[0].click();
        });
    </script>
  
</body>
</html>

<?php include_once("../layout/bottom.php"); ?>