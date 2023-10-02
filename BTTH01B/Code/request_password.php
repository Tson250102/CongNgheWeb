<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy email từ biểu mẫu
    $email = $_POST["email"];

    try {
        // Kết nối đến cơ sở dữ liệu
        $pdo = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root", "123");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Kiểm tra xem email tồn tại trong cơ sở dữ liệu
        $stmt = $pdo->prepare("SELECT * FROM nguoidung WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            // Tạo mã đặt lại mật khẩu và lưu vào cơ sở dữ liệu
            $token = bin2hex(random_bytes(16)); // Mã ngẫu nhiên
            $expire_time = date('Y-m-d H:i:s', strtotime('+1 hour')); // Thời gian hết hạn, ví dụ: 1 giờ sau

            $update_stmt = $pdo->prepare("UPDATE nguoidung SET reset_token = :token, reset_token_expire = :expire_time WHERE email = :email");
            $update_stmt->bindParam(':token', $token);
            $update_stmt->bindParam(':expire_time', $expire_time);
            $update_stmt->bindParam(':email', $email);
            $update_stmt->execute();            

            // Gửi email chứa liên kết đặt lại mật khẩu tới địa chỉ email này
            // Sử dụng thư viện gửi email, ví dụ PHPMailer, để gửi email với liên kết đặt lại mật khẩu
            // Code gửi email sẽ phức tạp hơn và phụ thuộc vào cấu hình máy chủ email của bạn.

            // Chuyển hướng người dùng về trang thông báo đã gửi yêu cầu
            header("Location: password_reset_sent.php");
            exit();
        } else {
            // Không tìm thấy email trong cơ sở dữ liệu
            echo "Không tìm thấy email trong hệ thống. Vui lòng kiểm tra lại.";
        }
    } catch (PDOException $e) {
        die("Lỗi kết nối đến cơ sở dữ liệu: " . $e->getMessage());
    }
}
?>
