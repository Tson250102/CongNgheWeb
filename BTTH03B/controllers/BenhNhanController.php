<?php
require_once '../models/BenhNhanModel.php';

class BenhNhanController {
    private $db;
    private $benhnhanModel;

    public function __construct($db) {
        $this->db = $db;
        $this->benhnhanModel = new BenhNhanModel($this->db);
    }

    // Hiển thị danh sách bệnh nhân
    public function listBenhNhan() {
        $benhnhanList = $this->benhnhanModel->getAllBenhNhan();
        // Hiển thị danh sách bệnh nhân bằng cách sử dụng một view
        require_once '../views/benhnhan/list_benhnhan.php';
    }

    // Hiển thị biểu mẫu thêm bệnh nhân mới
    public function addBenhNhanForm() {
        // Hiển thị biểu mẫu thêm bệnh nhân mới bằng cách sử dụng một view
        require_once '../views/benhnhan/add_benhnhan.php';
    }

    // Xử lý việc thêm bệnh nhân mới
    public function addBenhNhan() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tenBenhNhan = $_POST['tenBenhNhan'];
            $ngayKham = $_POST['ngayKham'];
            $trieuChung = $_POST['trieuChung'];
            $idBacSi = $_POST['idBacSi'];
            
            $this->benhnhanModel->addBenhNhan($tenBenhNhan, $ngayKham, $trieuChung, $idBacSi);
            header('Location: index.php'); // Chuyển hướng về trang danh sách bệnh nhân
        }
    }

    // Hiển thị biểu mẫu chỉnh sửa thông tin bệnh nhân
    public function editBenhNhanForm($id) {
        $benhnhan = $this->benhnhanModel->getBenhNhanById($id);
        // Hiển thị biểu mẫu chỉnh sửa thông tin bệnh nhân bằng cách sử dụng một view
        require_once '../views/benhnhan/edit_benhnhan.php';
    }

    // Xử lý việc chỉnh sửa thông tin bệnh nhân
    public function editBenhNhan($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tenBenhNhan = $_POST['tenBenhNhan'];
            $ngayKham = $_POST['ngayKham'];
            $trieuChung = $_POST['trieuChung'];
            $idBacSi = $_POST['idBacSi'];
            
            $this->benhnhanModel->editBenhNhan($id, $tenBenhNhan, $ngayKham, $trieuChung, $idBacSi);
            header('Location: index.php'); // Chuyển hướng về trang danh sách bệnh nhân
        }
    }

    // Hiển thị biểu mẫu xác nhận xóa bệnh nhân
    public function deleteBenhNhanForm($id) {
        $benhnhan = $this->benhnhanModel->getBenhNhanById($id);
        // Hiển thị biểu mẫu xác nhận xóa bệnh nhân bằng cách sử dụng một view
        require_once '../views/benhnhan/delete_benhnhan.php';
    }

    // Xử lý việc xóa bệnh nhân
    public function deleteBenhNhan($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->benhnhanModel->deleteBenhNhan($id);
            header('Location: index.php'); // Chuyển hướng về trang danh sách bệnh nhân
        }
    }
}

?>