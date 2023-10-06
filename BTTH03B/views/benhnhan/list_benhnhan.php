<!DOCTYPE html>
<html>
<head>
    <title>Danh sách bệnh nhân</title>
    <!-- Bao gồm thư viện Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Danh sách bệnh nhân</h1>
        <?php if (!empty($benhnhanList)): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên bệnh nhân</th>
                    <th>Ngày khám</th>
                    <th>Triệu chứng</th>
                    <th>Bác sĩ</th>
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
                    <td><?php echo $benhnhan['tenBacSi']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="edit_benhnhan.php?id=<?php echo $benhnhan['id']; ?>">Chỉnh sửa</a>
                        <a class="btn btn-danger" href="delete_benhnhan.php?id=<?php echo $benhnhan['id']; ?>">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <!-- <p>Không có dữ liệu bệnh nhân.</p> -->
        <?php endif; ?>
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="alert alert-success" role="alert">
            Cập nhật thông tin bệnh nhân thành công!
        </div>
        <?php endif; ?>
    </div>

    <!-- Bao gồm thư viện Bootstrap JavaScript (tùy chọn) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
