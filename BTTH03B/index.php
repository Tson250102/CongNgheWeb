<?php
require_once 'config.php';
require_once 'models/BacSiModel.php';
require_once 'models/BenhNhanModel.php';

// Khởi tạo các đối tượng Model
$bacsiModel = new BacSiModel($conn);
$benhnhanModel = new BenhNhanModel($conn);

// Lấy danh sách bác sĩ và bệnh nhân
$bacsiList = $bacsiModel->getAllBacSi();
$benhnhanList = $benhnhanModel->getAllBenhNhan();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý phòng mạch</title>
    <!-- Bao gồm thư viện Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 style="text-align:center">Quản lý phòng mạch</h1>
        
        <!-- Danh sách bác sĩ -->
        <h2>Danh sách bác sĩ</h2>
        <a href="./views/bacsi/add_bacsi.php" class="btn btn-primary">Thêm bác sĩ</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên bác sĩ</th>
                    <th>Chuyên khoa</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bacsiList as $bacsi): ?>
                <tr>
                    <td><?php echo $bacsi['id']; ?></td>
                    <td><?php echo $bacsi['tenBacSi']; ?></td>
                    <td><?php echo $bacsi['chuyenKhoa']; ?></td>
                    <td>
                        <a href="./views/bacsi/edit_bacsi.php?id=<?php echo $bacsi['id']; ?>" class="btn btn-warning">Sửa</a>
                        <a href="./views/bacsi/delete_bacsi.php?id=<?php echo $bacsi['id']; ?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Danh sách bệnh nhân -->
        <h2>Danh sách bệnh nhân</h2>
        <a href="./views/benhnhan/add_benhnhan.php" class="btn btn-primary">Thêm bệnh nhân</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên bệnh nhân</th>
                    <th>Ngày khám</th>
                    <th>Triệu chứng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($benhnhanList as $benhnhan): ?>
                <tr>
                    <td><?php echo $benhnhan['id']; ?></td>
                    <td><?php echo $benhnhan['tenBenhNhan']; ?></td>
                    <td><?php echo $benhnhan['ngayKham']; ?></td>
                    <td><?php echo $benhnhan['trieuChung']; ?></td>
                    <td>
                        <a href="./views/benhnhan/edit_benhnhan.php?id=<?php echo $benhnhan['id']; ?>" class="btn btn-warning">Sửa</a>
                        <a href="./views/benhnhan/delete_benhnhan.php?id=<?php echo $benhnhan['id']; ?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bao gồm thư viện Bootstrap JavaScript (tùy chọn) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
