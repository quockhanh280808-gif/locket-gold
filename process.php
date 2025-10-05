<?php
$email = $_POST['email'] ?? '';
$time = 60; // 1 phút
?>
<?php include 'includes/header.php'; ?>

<div class="container text-center py-5">
  <div class="p-4 rounded-4 shadow-sm bg-white" style="max-width:600px;margin:auto;">
    <i class="fa-solid fa-clock fa-3x text-warning mb-3"></i>
    <h4 class="fw-bold mb-2">Đang xử lý nâng cấp Gold...</h4>
    <p class="text-secondary">Vui lòng chờ trong giây lát, hệ thống đang xử lý tài khoản:</p>
    <p class="fw-bold text-primary"><?= htmlspecialchars($email) ?></p>
    <h3 id="countdown" class="text-danger fw-bold mt-3">60</h3>
    <p class="small text-muted">Vui lòng không thoát trang trong khi chờ.</p>
  </div>
</div>

<script>
let time = <?= $time ?>;
let countdown = document.getElementById('countdown');

let interval = setInterval(() => {
  time--;
  countdown.textContent = time;
  if (time <= 0) {
    clearInterval(interval);
    window.location.href = 'success.php?email=<?= urlencode($email) ?>';
  }
}, 1000);
</script>

<?php include 'includes/footer.php'; ?>
