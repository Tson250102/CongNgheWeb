<?php
require_once '../../config.php';
$servername = "localhost";
$dbname = "PhongMach";
$username = "root";
$password = "123";

// Tiếp theo, bạn có thể sử dụng các biến này trong kết nối đến cơ sở dữ liệu

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Nhận dữ liệu từ biểu mẫu
        $tenBacSi = $_POST['tenBacSi'];
        $chuyenKhoa = $_POST['chuyenKhoa'];

        // Xác định ID của bác sĩ từ tham số URL
        $id = $_GET['id'];

        // Kết nối đến cơ sở dữ liệu
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Tạo truy vấn SQL để cập nhật thông tin bác sĩ
        $sql = "UPDATE BacSi SET tenBacSi = :tenBacSi, chuyenKhoa = :chuyenKhoa WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':tenBacSi', $tenBacSi);
        $stmt->bindParam(':chuyenKhoa', $chuyenKhoa);
        $stmt->bindParam(':id', $id);

        // Thực hiện truy vấn cập nhật
        $stmt->execute();

        // Đóng kết nối cơ sở dữ liệu
        $conn = null;

        // Sau khi cập nhật thành công, chuyển hướng người dùng về trang danh sách bác sĩ và truyền thông báo thành công
        header("Location: list_bacsi.php?success=1");
        exit();

    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
?>
