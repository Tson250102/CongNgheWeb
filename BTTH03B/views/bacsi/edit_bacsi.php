<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa thông tin bác sĩ</title>
    <!-- Bao gồm thư viện Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
    require_once '../../config.php';
    require_once '../../models/BacSiModel.php';

    if (isset($_GET['id'])) {
        $bacsiId = $_GET['id'];
        
        // Khởi tạo đối tượng Model và lấy thông tin của bác sĩ theo id
        $bacsiModel = new BacSiModel($conn);
        $bacsi = $bacsiModel->getBacSiById($bacsiId);
        
        if ($bacsi) {
            // Hiển thị thông tin của bác sĩ trong biểu mẫu chỉnh sửa
        } else {
            echo "Không tìm thấy thông tin bác sĩ.";
        }
    } else {
        echo "Thiếu tham số id trong URL.";
    }
    ?>

    <div class="container">
        <h1>Chỉnh sửa thông tin bác sĩ</h1>
        <form action="process_edit_bacsi.php?id=<?php echo $bacsi['id']; ?>" method="POST">
            <div class="form-group">
                <label for="tenBacSi">Tên bác sĩ:</label>
                <input type="text" class="form-control" id="tenBacSi" name="tenBacSi" value="<?php echo $bacsi['tenBacSi']; ?>" required>
            </div>
            <div class="form-group">
                <label for="chuyenKhoa">Chuyên khoa:</label>
                <input type="text" class="form-control" id="chuyenKhoa" name="chuyenKhoa" value="<?php echo $bacsi['chuyenKhoa']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
    </div>

    <!-- Bao gồm thư viện Bootstrap JavaScript (tùy chọn) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
