<!DOCTYPE html>
<html>
<head>
    <title>Danh sách bác sĩ</title>
    <!-- Bao gồm thư viện Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Danh sách bác sĩ</h1>
        <?php if (!empty($bacsiList)): ?>
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
                        <a class="btn btn-primary" href="edit_bacsi.php?id=<?php echo $bacsi['id']; ?>">Chỉnh sửa</a>
                        <a class="btn btn-danger" href="delete_bacsi.php?id=<?php echo $bacsi['id']; ?>&tenBacSi=<?php echo urlencode($bacsi['tenBacSi']); ?>">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
        
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="alert alert-success" role="alert">
            Cập nhật thông tin bác sĩ thành công!
        </div>
        <?php endif; ?>

    </div>

    <!-- Bao gồm thư viện Bootstrap JavaScript (tùy chọn) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
