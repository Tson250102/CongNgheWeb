-- 3a SELECT * FROM Baiviet WHERE ma_tloai IN (SELECT ma_tloai FROM Theloai WHERE ten_tloai = 'Nhạc trữ tình');
-- 3b SELECT * FROM Baiviet WHERE ma_tgia IN (SELECT ma_tgia FROM Tacgia WHERE ten_tgia = 'Nhacvietplus');
-- 3c SELECT Theloai.* FROM Theloai LEFT JOIN Baiviet ON Theloai.ma_tloai = Baiviet.ma_tloai WHERE Baiviet.ma_bviet IS NULL;
-- 3d SELECT Baiviet.ma_bviet, Baiviet.tieude, Baiviet.ten_bhat, Tacgia.ten_tgia, Theloai.ten_tloai, Baiviet.ngayviet FROM Baiviet INNER JOIN Tacgia ON Baiviet.ma_tgia = Tacgia.ma_tgia INNER JOIN Theloai ON Baiviet.ma_tloai = Theloai.ma_tloai;
-- 3e SELECT Theloai.ten_tloai, COUNT(Baiviet.ma_bviet) AS so_bai_viet FROM Theloai LEFT JOIN Baiviet ON Theloai.ma_tloai = Baiviet.ma_tloai GROUP BY Theloai.ma_tloai ORDER BY so_bai_viet DESC LIMIT 1;
-- 3f SELECT Tacgia.ten_tgia, COUNT(Baiviet.ma_bviet) AS so_bai_viet FROM Tacgia LEFT JOIN Baiviet ON Tacgia.ma_tgia = Baiviet.ma_tgia GROUP BY Tacgia.ma_tgia, Tacgia.ten_tgia ORDER BY so_bai_viet DESC LIMIT 2;
-- 3g SELECT * FROM Baiviet WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%';
-- 3h SELECT * FROM Baiviet WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%' OR ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';
-- 3i CREATE VIEW vw_Music AS SELECT Baiviet.ma_bviet, Baiviet.tieude, Baiviet.ten_bhat, Theloai.ten_tloai, Tacgia.ten_tgia, Baiviet.ngayviet FROM Baiviet INNER JOIN Theloai ON Baiviet.ma_tloai = Theloai.ma_tloai INNER JOIN Tacgia ON Baiviet.ma_tgia = Tacgia.ma_tgia;



