<?php
// Thông tin kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost"; // Tên máy chủ MySQL
$username = "root"; // Tên đăng nhập MySQL
$password = "123"; // Mật khẩu MySQL
$database = "PhongMach"; // Tên cơ sở dữ liệu

try {
    // Tạo kết nối đến cơ sở dữ liệu bằng PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Đặt chế độ lỗi PDO để bắt lỗi và ném ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    die("Kết nối đến CSDL thất bại: " . $e->getMessage());
}
?>
