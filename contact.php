<?php include 'includes/header.php'; ?>

<div class="container py-5 d-flex flex-column align-items-center">
  <div class="locket-card p-4 rounded-4 shadow-lg bg-white" style="max-width:700px;">
    <div class="locket-header py-4 rounded-top-4 text-white text-center mb-4">
      <i class="fa-solid fa-comments fa-2x mb-2"></i>
      <h3 class="fw-bold mb-1">Liên hệ Hỗ trợ</h3>
      <p>Gửi yêu cầu của bạn, hệ thống sẽ báo về Telegram Admin</p>
    </div>

    <form id="contactForm" class="text-start">
      <label>Họ và tên</label>
      <input type="text" class="form-control mb-3" name="name" placeholder="Nhập họ và tên của bạn" required>

      <label>Email</label>
      <input type="email" class="form-control mb-3" name="email" placeholder="Nhập email của bạn" required>

      <label>Zalo</label>
      <input type="Zalo" class="form-control mb-3" name="Zalo" placeholder="Nhập Số Zalo của bạn" required>

      <label>Nội dung yêu cầu</label>
      <textarea class="form-control mb-3" rows="4" name="message" placeholder="Nhập nội dung yêu cầu..." required></textarea>

      <button type="submit" class="btn btn-warning w-100 fw-bold text-white py-2">
        <i class="fa-solid fa-paper-plane"></i> Gửi yêu cầu
      </button>
    </form>

    <div id="result" class="alert mt-4 d-none"></div>
  </div>
</div>

<script>
document.getElementById("contactForm").addEventListener("submit", function(e){
  e.preventDefault();
  let formData = new FormData(this);

  fetch("send_tele.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    let result = document.getElementById("result");
    result.classList.remove("d-none", "alert-success", "alert-danger");
    if(data.success){
      result.classList.add("alert-success");
      result.innerHTML = "✅ " + data.message;
      document.getElementById("contactForm").reset();
    } else {
      result.classList.add("alert-danger");
      result.innerHTML = "❌ " + data.message;
    }
  })
  .catch(err => {
    let result = document.getElementById("result");
    result.classList.remove("d-none");
    result.classList.add("alert-danger");
    result.innerHTML = "❌ Lỗi hệ thống: " + err;
  });
});
</script>

<?php include 'includes/footer.php'; ?>
