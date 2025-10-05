<?php include 'includes/header.php'; ?>
<?php
$email = $_GET['email'] ?? 'ẩn danh@example.com';
$random = strtoupper("LKT".rand(10000000000000,99999999999999));
?>
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
        <li><b>BƯỚC 1:</b> Sau khi có thông báo mail hoặc ở đây báo nâng cấp thành công thì vào app Locket kiểm tra.</li>
        <li><b>BƯỚC 2:</b> Đọc hướng dẫn cài profile theo hướng dẫn bên dưới.</li>
      </ul>
    </div>

    <div class="bg-success-subtle p-4 mt-4 rounded-3">
      <i class="fa-solid fa-circle-check fa-2x text-success mb-3"></i>
      <h5 class="fw-bold text-success">Nâng cấp Gold thành công!</h5>
      <p class="small mb-1">Mã đơn hàng: <b>#<?= $random ?></b></p>
      <a href="index.php" class="btn btn-primary mt-3">
        <i class="fa-solid fa-user-plus"></i> Nâng cấp tài khoản khác
      </a>
    </div>

    <div class="guide-box bg-white p-4 rounded-4 shadow-sm mt-4">
      <h6><i class="fa-solid fa-book"></i> Hướng dẫn hoàn tất nâng cấp</h6>
      <ol class="text-start small orange-steps mt-2">
        <li>Tải profile về máy bằng cách nhấn nút bên dưới</li>
        <li>Vào <b>Cài đặt iPhone</b></li>
        <li>Chọn <b>Cài đặt chung</b> → <b>Quản lý VPN & Thiết bị</b></li>
        <li>Cài đặt profile vừa tải về</li>
        <li>Mở app Locket kiểm tra đã lên Gold</li>
      </ol>

      <div class="alert alert-warning small mt-3">
        <i class="fa-solid fa-triangle-exclamation"></i> Không xóa profile sau khi cài đặt xong, nếu xóa sẽ mất Gold!
      </div>
      <a href="#" class="btn btn-success w-100"><i class="fa-solid fa-download"></i> Tải Profile</a>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
