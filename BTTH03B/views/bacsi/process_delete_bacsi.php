<?php
if (isset($_GET['id'], $_GET['tenBacSi'])) {
    $idBacSiToDelete = $_GET['id'];
    $tenBacSiToDelete = $_GET['tenBacSi'];
    
    // Kết nối đến cơ sở dữ liệu và xóa bác sĩ cùng với các bệnh nhân của họ
    try {
        $servername = "localhost";
        $dbname = "PhongMach";
        $username = "root";
        $password = "123";

        // Kết nối đến cơ sở dữ liệu
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Xóa tất cả các bệnh nhân có idBacSi tương ứng
        $sqlDeletePatients = "DELETE FROM BenhNhan WHERE idBacSi = :idBacSi";
        $stmtDeletePatients = $conn->prepare($sqlDeletePatients);
        $stmtDeletePatients->bindParam(':idBacSi', $idBacSiToDelete);
        $stmtDeletePatients->execute();

        // Tiếp theo, bạn có thể xóa bác sĩ mà bạn muốn
        $sqlDeleteBacSi = "DELETE FROM BacSi WHERE id = :idBacSi";
        $stmtDeleteBacSi = $conn->prepare($sqlDeleteBacSi);
        $stmtDeleteBacSi->bindParam(':idBacSi', $idBacSiToDelete);
        $stmtDeleteBacSi->execute();

        // Đóng kết nối cơ sở dữ liệu
        $conn = null;

        // Sau khi xóa thành công, bạn có thể chuyển hướng người dùng đến trang danh sách bác sĩ hoặc hiển thị thông báo thành công
        header("Location: list_bacsi.php");
        exit();
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
} else {
    echo "Thiếu thông tin cần thiết.";
}
?>
