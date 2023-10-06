<?php
require_once '../../config.php';
$servername = "localhost";
$dbname = "PhongMach"; // 
$username = "root";
$password = "123";

// Kiểm tra nếu có tham số 'id' trên URL
if (isset($_GET['id'])) {
    // Lấy ID của bệnh nhân từ tham số URL
    $id = $_GET['id'];

    // Kết nối đến cơ sở dữ liệu và truy vấn thông tin bệnh nhân
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM BenhNhan WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Lấy thông tin bệnh nhân từ kết quả truy vấn
    $benhnhan = $stmt->fetch(PDO::FETCH_ASSOC);

    // Đóng kết nối cơ sở dữ liệu
    $conn = null;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa thông tin bệnh nhân</title>
    <!-- Bao gồm thư viện Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Chỉnh sửa thông tin bệnh nhân</h1>
        <form action="process_edit_benhnhan.php?id=<?php echo $benhnhan['id']; ?>" method="POST">
            <div class="form-group">
                <label for="tenBenhNhan">Tên bệnh nhân:</label>
                <input type="text" class="form-control" id="tenBenhNhan" name="tenBenhNhan" value="<?php echo $benhnhan['tenBenhNhan']; ?>" required>
                <input type="text" class="form-control" id="trieuChung" name="trieuChung" value="<?php echo $benhnhan['trieuChung']; ?>" required>
            </div>
            <!-- Các trường dữ liệu khác của bệnh nhân -->
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
    </div>

    <!-- Bao gồm thư viện Bootstrap JavaScript (tùy chọn) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
