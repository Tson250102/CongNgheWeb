<?php
require_once '../models/BacSiModel.php';

class BacSiController {
    private $db;
    private $bacsiModel;

    public function __construct($db) {
        $this->db = $db;
        $this->bacsiModel = new BacSiModel($this->db);
    }

    // Hiển thị danh sách bác sĩ
    public function listBacSi() {
        $bacsiList = $this->bacsiModel->getAllBacSi();
        // Hiển thị danh sách bác sĩ bằng cách sử dụng một view
        require_once '../views/bacsi/list_bacsi.php';
    }

    // Hiển thị biểu mẫu thêm bác sĩ mới
    public function addBacSiForm() {
        // Hiển thị biểu mẫu thêm bác sĩ mới bằng cách sử dụng một view
        require_once '../views/bacsi/add_bacsi.php';
    }

    // Xử lý việc thêm bác sĩ mới
    public function addBacSi() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tenBacSi = $_POST['tenBacSi'];
            $chuyenKhoa = $_POST['chuyenKhoa'];
            
            $this->bacsiModel->addBacSi($tenBacSi, $chuyenKhoa);
            header('Location: index.php'); // Chuyển hướng về trang danh sách bác sĩ
        }
    }

    // Hiển thị biểu mẫu chỉnh sửa thông tin bác sĩ
    public function editBacSiForm($id) {
        $bacsi = $this->bacsiModel->getBacSiById($id);
        // Hiển thị biểu mẫu chỉnh sửa thông tin bác sĩ bằng cách sử dụng một view
        require_once '../views/bacsi/edit_bacsi.php';
    }

    // Xử lý việc chỉnh sửa thông tin bác sĩ
    public function editBacSi($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tenBacSi = $_POST['tenBacSi'];
            $chuyenKhoa = $_POST['chuyenKhoa'];
            
            $this->bacsiModel->editBacSi($id, $tenBacSi, $chuyenKhoa);
            header('Location: index.php'); // Chuyển hướng về trang danh sách bác sĩ
        }
    }

    // Hiển thị biểu mẫu xác nhận xóa bác sĩ
    public function deleteBacSiForm($id) {
        $bacsi = $this->bacsiModel->getBacSiById($id);
        // Hiển thị biểu mẫu xác nhận xóa bác sĩ bằng cách sử dụng một view
        require_once '../views/bacsi/delete_bacsi.php';
    }

    // Xử lý việc xóa bác sĩ
    public function deleteBacSi($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->bacsiModel->deleteBacSi($id);
            header('Location: index.php'); // Chuyển hướng về trang danh sách bác sĩ
        }
    }
}

?>