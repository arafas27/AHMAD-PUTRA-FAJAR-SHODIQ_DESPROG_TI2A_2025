<?php
header('Content-Type: application/json; charset=utf-8');

function clean($s) { 
  return trim(htmlspecialchars($s, ENT_QUOTES, 'UTF-8')); 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Ambil data dari form 
  $name = clean($_POST['name'] ?? '');
  $email = clean($_POST['email'] ?? '');
  $message = clean($_POST['message'] ?? '');

  // Validasi 
  if ($name === '' || $email === '' || strlen($message) < 5) {
    echo json_encode(['success' => false, 'error' => 'Invalid data']);
    exit;
  }

  $file = __DIR__ . '/riwayat_pesan.json';

  
  $data = [];

  if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true);
    if (!is_array($data)) $data = [];
  }

  date_default_timezone_set('Asia/Jakarta');

  // data baru 
  $data[] = [
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'time' => date('M d, Y, H:i') 
  ];

  file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

 
  echo json_encode(['success' => true]);
  exit; 
}

echo json_encode(['success' => false]);
?>
