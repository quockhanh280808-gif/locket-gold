<?php
// ======= Cấu hình BOT TELEGRAM =======
$BOT_TOKEN = "8274175937:AAEcg7M7A4iYiuc0JwbyXYbt5SP1s7_VR4g"; // 🟢 thay bằng token bot của bạn
$CHAT_ID   = "6684980246";    // 🟢 thay bằng chat ID của bạn (hoặc nhóm Telegram)

// ======= Xử lý dữ liệu từ form =======
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$Zalo   = trim($_POST['Zalo'] ?? '');
$message = trim($_POST['message'] ?? '');

if($name == '' || $email == '' || $message == ''){
    echo json_encode(['success'=>false,'message'=>'Vui lòng nhập đầy đủ thông tin!']);
    exit;
}

// ======= Gửi tin nhắn đến Telegram =======
$text  = "📩 *Yêu cầu hỗ trợ mới từ website Locket Gold*\n\n";
$text .= "👤 Họ tên: *{$name}*\n";
$text .= "📧 Email: *{$email}*\n";
$text .= "Zalo: *{$Zalo}*\n";
$text .= "💬 Nội dung:\n{$message}";

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
$result   = file_get_contents($url, false, $context);

if ($result) {
    echo json_encode(['success'=>true,'message'=>'Đã gửi yêu cầu tới admin qua Telegram!']);
} else {
    echo json_encode(['success'=>false,'message'=>'Không thể gửi về Telegram!']);
}
?>
