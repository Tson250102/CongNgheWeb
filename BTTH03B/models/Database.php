<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'PhongMach';
    private $username = 'your_username';
    private $password = 'your_password';

    public function getConnection() {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Kết nối CSDL thất bại: " . $e->getMessage());
        }
        return $conn;
    }
}
?>
