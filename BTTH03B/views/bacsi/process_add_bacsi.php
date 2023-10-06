<?php
require_once '../../config.php';
$servername = "localhost";
$dbname = "PhongMach";
$username = "root";
$password = "123";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Nhận dữ liệu từ biểu mẫu
        $tenBacSi = $_POST['tenBacSi'];
        $chuyenKhoa = $_POST['chuyenKhoa'];

        // Kết nối đến cơ sở dữ liệu
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Tìm ID mới
        $sql = "SELECT MAX(id) AS max_id FROM BacSi";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $newId = $result['max_id'] + 1;

        // Thêm bác sĩ mới vào cơ sở dữ liệu
        $sql = "INSERT INTO BacSi (id, tenBacSi, chuyenKhoa) VALUES (:id, :tenBacSi, :chuyenKhoa)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $newId);
        $stmt->bindParam(':tenBacSi', $tenBacSi);
        $stmt->bindParam(':chuyenKhoa', $chuyenKhoa);
        $stmt->execute();

        // Đóng kết nối cơ sở dữ liệu
        $conn = null;

        // Chuyển hướng người dùng đến trang danh sách bác sĩ hoặc trang thông báo thành công
        header("Location: list_bacsi.php?success=1");
        exit();
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
?>
