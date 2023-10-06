<?php
class BacSiModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Thêm bác sĩ mới vào bảng BacSi
    public function addBacSi($tenBacSi, $chuyenKhoa) {
        $query = "INSERT INTO BacSi (tenBacSi, chuyenKhoa) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$tenBacSi, $chuyenKhoa]);
    }

    // Lấy danh sách tất cả bác sĩ từ bảng BacSi
    public function getAllBacSi() {
        $query = "SELECT * FROM BacSi";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy thông tin chi tiết của một bác sĩ dựa trên ID
    public function getBacSiById($id) {
        $query = "SELECT * FROM BacSi WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Chỉnh sửa thông tin của một bác sĩ dựa trên ID
    public function editBacSi($id, $tenBacSi, $chuyenKhoa) {
        $query = "UPDATE BacSi SET tenBacSi = ?, chuyenKhoa = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$tenBacSi, $chuyenKhoa, $id]);
    }

    // Xóa một bác sĩ dựa trên ID
    public function deleteBacSi($id) {
        $query = "DELETE FROM BacSi WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
    }
}

?>