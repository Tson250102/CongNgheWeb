<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Index0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
          <a class="nav-link active fw-bold" aria-current="page" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Trang ngoài</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category.php">Thể loại</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="author.php">Tác giả</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.php">Bài viết</a>
        </li>
    </div>
  </div>
</nav>
<div class="container mt-5 vh-100">
        <div class="row">
            <div class="col-12 col-md-6 mx-auto text-center border border-primary p-4" style="height: 100px; width: 300px;">
                <h5>Người dùng</h5>
                <p class="fs-3 text">110</p>
            </div>
            <div class="col-12 col-md-6 mx-auto text-center border border-primary p-4" style="height: 100px; width: 300px;">
                <h5>Thể loại</h5>
                <p class="fs-3 text">20</p>
            </div>
            <div class="col-12 col-md-6 mx-auto text-center border border-primary p-4" style="height: 100px; width: 300px;">
                <h5>Tác giả</h5>
                <p class="fs-3 text">110</p>
            </div>
            <div class="col-12 col-md-6 mx-auto text-center border border-primary p-4" style="height: 100px; width: 300px;">
                <h5>Bài viết</h5>
                <p class="fs-3 text">110</p>
            </div>
        </div>
    </div>

    <?php 
        include("../layout/layout-footer.php")
    ?>
</body>
</html>