<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
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
          <a class="nav-link " href="author.php">Tác giả</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#">Bài viết</a>
        </li>
    </div>
  </div>
</nav>
<div class="container vh-100 mt-5">
    <a href= "add_post.php" class="btn btn-success">Thêm mới</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên bài viết</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
      <tr>
        <th scope="row"><?php echo $i; ?></th>
        <td>Bài viết <?php echo $i; ?></td>
        <td><a href=""><i class="bi bi-pencil-square"></i></a></td>
        <td><a href=""><i class="bi bi-trash-fill"></i></a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<?php 
    include("../layout/layout-footer.php")
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>