
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