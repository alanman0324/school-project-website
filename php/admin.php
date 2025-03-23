<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 查詢資料
$sql = "SELECT id, name, email, message, created_at FROM contacts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>聯絡我們 - 後台</title>
</head>
<body>
    <h2>聯絡我們 - 訊息列表</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>Email</th>
            <th>訊息</th>
            <th>時間</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["message"]; ?></td>
                <td><?php echo $row["created_at"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
