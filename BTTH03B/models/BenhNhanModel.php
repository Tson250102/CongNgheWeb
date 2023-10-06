<?php
class BenhNhanModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Thêm bệnh nhân mới vào bảng BenhNhan
    public function addBenhNhan($tenBenhNhan, $ngayKham, $trieuChung, $idBacSi) {
        $query = "INSERT INTO BenhNhan (tenBenhNhan, ngayKham, trieuChung, idBacSi) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$tenBenhNhan, $ngayKham, $trieuChung, $idBacSi]);
    }

    // Lấy danh sách tất cả bệnh nhân từ bảng BenhNhan
    public function getAllBenhNhan() {
        $query = "SELECT * FROM BenhNhan";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy thông tin chi tiết của một bệnh nhân dựa trên ID
    public function getBenhNhanById($id) {
        $query = "SELECT * FROM BenhNhan WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Chỉnh sửa thông tin của một bệnh nhân dựa trên ID
    public function editBenhNhan($id, $tenBenhNhan, $ngayKham, $trieuChung, $idBacSi) {
        $query = "UPDATE BenhNhan SET tenBenhNhan = ?, ngayKham = ?, trieuChung = ?, idBacSi = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$tenBenhNhan, $ngayKham, $trieuChung, $idBacSi, $id]);
    }

    // Xóa một bệnh nhân dựa trên ID
    public function deleteBenhNhan($id) {
        $query = "DELETE FROM BenhNhan WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
    }
}

?>
