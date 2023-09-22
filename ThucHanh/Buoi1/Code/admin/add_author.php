<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid h-100">
    <a class="navbar-brand" href="#">Administration</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Trang ngoài</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category.php">Thể loại</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#">Tác giả</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.php">Bài viết</a>
        </li>
    </div>
  </div>
</nav>
    <div class="container vh-100 text-center mt-5">
    <label class="form-label fw-bold" for="customFile">THÊM MỚI TÁC GIẢ</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tên tác giả</span>
            <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="button-add text-end mt-2">
            <button type="submit" class="btn btn-success">Thêm</button>
            <button type="submit" class="btn btn-warning">Quay lại</button>
        </div>
    </div>
<?php 
    include("../layout/layout-footer.php")
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>