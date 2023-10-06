<?php
require_once '../../config.php';
$servername = "localhost";
$dbname = "PhongMach";
$username = "root";
$password = "123";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Nhận dữ liệu từ biểu mẫu
        $tenBenhNhan = $_POST['tenBenhNhan'];
        $trieuChung = $_POST['trieuChung'];
        $ngayKham = date('Y-m-d', strtotime($_POST['ngayKham']));

        // Kết nối đến cơ sở dữ liệu và thêm bệnh nhân mới
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Tìm ID mới
        $sql = "SELECT MAX(id) AS max_id FROM BenhNhan";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $newId = $result['max_id'] + 1;

        // Thêm bệnh nhân mới vào cơ sở dữ liệu
        $sql = "INSERT INTO BenhNhan (id, tenBenhNhan, trieuChung, ngayKham) VALUES (:id, :tenBenhNhan, :trieuChung, :ngayKham)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $newId);
        $stmt->bindParam(':tenBenhNhan', $tenBenhNhan);
        $stmt->bindParam(':trieuChung', $trieuChung);
        $stmt->bindParam(':ngayKham', $ngayKham);
        $stmt->execute();

        // Đóng kết nối cơ sở dữ liệu
        $conn = null;

        // Chuyển hướng người dùng đến trang danh sách bệnh nhân hoặc trang thông báo thành công
        header("Location: list_benhnhan.php?success=1");
        exit();
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
?>
