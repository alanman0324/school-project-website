<?php
// 連接 MySQL
$servername = "localhost";
$username = "root";
$password = ""; // 如果有設定密碼，請填入
$dbname = "contact_form_db"; // 改成你的資料庫名稱

$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 檢查是否有表單提交
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // 準備 SQL 語句
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    
    if ($stmt->execute()) {
        header("Location: thankyou.html"); // 重新導向
        exit(); // 確保後續代碼不會執行
    } else {
        echo "❌ 錯誤：" . $stmt->error; // 只有發生錯誤時才顯示訊息
    }

    $stmt->close();
}

$conn->close();
?>
