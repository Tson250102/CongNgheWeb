<!DOCTYPE html>
<html>
<head>
    <title>Xóa bác sĩ</title>
    <!-- Bao gồm thư viện Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Xóa bác sĩ</h1>
        <p>Bạn có chắc chắn muốn xóa bác sĩ "<?php echo $tenBacSiToDelete; ?>" không?</p>
        <form action="process_delete_bacsi.php?id=<?php echo $idBacSiToDelete; ?>" method="POST">
            <button type="submit" class="btn btn-danger">Xóa</button>
            <a class="btn btn-secondary" href="index.php">Hủy bỏ</a>
        </form>
    </div>

    <!-- Bao gồm thư viện Bootstrap JavaScript (tùy chọn) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
