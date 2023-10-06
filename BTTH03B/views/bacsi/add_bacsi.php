<!DOCTYPE html>
<html>
<head>
    <title>Thêm bác sĩ mới</title>
    <!-- Bao gồm thư viện Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Thêm bác sĩ mới</h1>
        <form action="process_add_bacsi.php" method="POST">
            <div class="form-group">
                <label for="tenBacSi">Tên bác sĩ:</label>
                <input type="text" class="form-control" id="tenBacSi" name="tenBacSi" required>
            </div>
            <div class="form-group">
                <label for="chuyenKhoa">Chuyên khoa:</label>
                <input type="text" class="form-control" id="chuyenKhoa" name="chuyenKhoa" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>

    <!-- Bao gồm thư viện Bootstrap JavaScript (tùy chọn) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
