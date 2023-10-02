<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy mã token và mật khẩu mới từ biểu mẫu
    $token = $_POST["token"];
    $new_password = $_POST["new_password"];

    try {
        // Kết nối đến cơ sở dữ liệu
        $pdo = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root", "123");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Kiểm tra xem mã token tồn tại trong cơ sở dữ liệu
        $stmt = $pdo->prepare("SELECT * FROM nguoidung WHERE reset_token = :token");
        $stmt->bindParam(':token', $token);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            // Token hợp lệ, đặt lại mật khẩu
            $hashed_password = password_hash($new_password, PASSWORD_BCRYPT); // Băm mật khẩu mới

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $user_id = $row["userid"];

            $update_stmt = $pdo->prepare("UPDATE nguoidung SET pass = :hashed_password, reset_token = NULL, reset_token_expire = NULL WHERE userid = :user_id");
            $update_stmt->bindParam(':hashed_password', $hashed_password);
            $update_stmt->bindParam(':user_id', $user_id);
            $update_stmt->execute();

            // Chuyển hướng người dùng đến trang thông báo đã đặt lại mật khẩu thành công
            header("Location: password_reset_success.php");
            exit();
        } else {
            // Token không hợp lệ
            echo "Mã token không hợp lệ. Vui lòng thử lại hoặc yêu cầu đặt lại mật khẩu mới.";
        }
    } catch (PDOException $e) {
        die("Lỗi kết nối đến cơ sở dữ liệu: " . $e->getMessage());
    }
}

?>
