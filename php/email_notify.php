<?php
$to = "alaman0324@gmail.com";
$subject = "新聯絡我們表單提交";
$message = "姓名: " . $_POST["name"] . "\n" .
           "Email: " . $_POST["email"] . "\n" .
           "訊息: " . $_POST["message"];

$headers = "From: no-reply@你的網站.com";

// 發送郵件
mail($to, $subject, $message, $headers);
?>
