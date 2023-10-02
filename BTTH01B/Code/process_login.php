<?php


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu đăng nhập
    $email = $_POST["email"];
    $password = $_POST["pass"];

    try {
        // Kết nối đến cơ sở dữ liệu
        $pdo = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root", "123");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Truy vấn kiểm tra đăng nhập
        $stmt = $pdo->prepare("SELECT * FROM nguoidung WHERE email = :email AND pass = :pass");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $password);
        $stmt->execute();

        // Kiểm tra xem có dòng dữ liệu nào trùng khớp không
        if ($stmt->rowCount() == 1) {
            // Đăng nhập thành công, lưu thông tin người dùng vào session
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION["user_id"] = $user["userid"];
            $_SESSION["user_email"] = $user["email"];
            
            // Chuyển hướng đến trang chính sau khi đăng nhập
            header("Location: index.php");
            exit();
        } else {
            // Đăng nhập thất bại, thông báo lỗi
            echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
        }
    } catch (PDOException $e) {
        die("Lỗi kết nối đến cơ sở dữ liệu: " . $e->getMessage());
    }
}


?>