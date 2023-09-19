<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid d-flex">
        <?php
            include "../admin/layout/layout.php"
        ?>
        <div class="row col-md-8 ms-2 d-block">
            <div class="header d-flex justify-content-between">
                <h3 class="title">DASHBOARDS</h3>
                <div class="search">
                    <input type="text" name="search" placeholder="Looking for something..?">
                </div>
            </div>
            <div class="main-content">
                <h4 class="title-content text-center">
                    DASHBOARDS
                </h4>
                <table border="1" style="text-align: center; margin: 0 auto">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
                <th>Details</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
        // Kết nối đến cơ sở dữ liệu MySQL
        $servername = "localhost"; // Tên máy chủ MySQL
        $username = "root"; // Tên người dùng MySQL
        $password = "123"; // Mật khẩu MySQL
        $dbname = "admin"; // Tên cơ sở dữ liệu MySQL

        // Tạo kết nối đến cơ sở dữ liệu
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }

        // Số bản ghi trên mỗi trang
        $records_per_page = 10;

        // Xác định trang hiện tại
        if (isset($_GET['page']) && is_numeric($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }

        // Tính OFFSET dựa trên trang hiện tại
        $offset = ($page - 1) * $records_per_page;

        // Truy vấn dữ liệu từ cơ sở dữ liệu với LIMIT và OFFSET
        $sql = "SELECT userid, username, password FROM user LIMIT $offset, $records_per_page";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Hiển thị dữ liệu trong bảng
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["userid"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo '<td><a href="#"><i class="bi bi-eye-fill btn btn-info"></i></a></td>';
                echo '<td><a href="#"><i class="bi bi-pencil-fill btn btn-warning"></i></a></td>'; 
                echo '<td><a href="#"><i class="bi bi-trash-fill btn btn-danger"></i></a></td>'; 
                echo "</tr>";
            }
        } else {
            echo "Không có dữ liệu trong cơ sở dữ liệu.";
        }

        // Đóng kết nối đến cơ sở dữ liệu
        $conn->close();

        
        ?>

        </table>
        <?php 
            // Hiển thị liên kết Previous và Next
            echo '<nav aria-label="Page navigation example">';
            echo '<ul class="pagination justify-content-end mt-3">';
            if ($page > 1) {
                echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '">Previous</a></li>';
            }
            echo '<li class="page-item"><a class="page-link" href="?page=' . $page . '">' . $page . '</a></li>';
            echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '">Next</a></li>';
            echo '</ul>';
            echo '</nav>';
        ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>