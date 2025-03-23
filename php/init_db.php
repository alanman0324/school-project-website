<?php
$servername = "localhost";
$username = "root";  // 你的 MySQL 帳號
$password = "";  // 你的 MySQL 密碼
$dbname = "contact_form_db";  // 改成你的資料庫名稱

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 建立資料表
$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "資料表建立成功！";
} else {
    echo "錯誤：" . $conn->error;
}

$conn->close();
?>
