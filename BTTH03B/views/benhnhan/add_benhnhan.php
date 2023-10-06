<?php
require_once '../../config.php';
$servername = "localhost";
$dbname = "PhongMach";
$username = "root";
$password = "123";


// Tạo kết nối đến cơ sở dữ liệu
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Truy vấn danh sách bác sĩ từ cơ sở dữ liệu
$sql = "SELECT id, tenBacSi FROM BacSi";
$stmt = $conn->prepare($sql);
$stmt->execute();
$bacsiList = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thêm bệnh nhân mới</title>
    <!-- Bao gồm thư viện Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Thêm bệnh nhân mới</h1>
        <form action="process_add_benhnhan.php" method="POST">
            <div class="form-group">
                <label for="tenBenhNhan">Tên bệnh nhân:</label>
                <input type="text" class="form-control" id="tenBenhNhan" name="tenBenhNhan" required>
            </div>
            <div class="form-group">
                <label for="trieuChung">Triệu chứng:</label>
                <input type="text" class="form-control" id="trieuChung" name="trieuChung" required>
            </div>
            <div class="form-group">
                <label for="ngayKham">Ngày khám:</label>
                <input type="date" class="form-control" id="ngayKham" name="ngayKham" required>
            </div>
            <div class="form-group">
                <label for="idBacSi">Bác sĩ:</label>
                <select class="form-control" id="idBacSi" name="idBacSi" required>
                    <option value="" disabled selected>Chọn bác sĩ</option>
                    <?php foreach ($bacsiList as $bacsi): ?>
                        <option value="<?php echo $bacsi['id']; ?>"><?php echo $bacsi['tenBacSi']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>

    <!-- Bao gồm thư viện Bootstrap JavaScript (tùy chọn) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
