<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>TH01</title>
</head>
<body>
  <?php 
    include("layout/layout-header.php")
  ?>
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/slider1.jpg" class="d-block w-100" alt="slider1">
      </div>
      <div class="carousel-item">
        <img src="./img/slider 2.jfif" class="d-block w-100" alt="slider2">
      </div>
      <div class="carousel-item">
        <img src="./img/slider3.jfif" class="d-block w-100" alt="slider3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="love-song-title">
    <h3 class="text-center">Top bài hát yêu thích</h3>
    <div class="container">
      <div class="row">
        <div class="col">
      <div class="card" style="width: 18rem;">
      <img src="./img/baihat1.jfif" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
      </div>
      <div class="col">
      <div class="card" style="width: 18rem;">
      <img src="./img/baihat1.jfif" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
      </div>
      <div class="col">
      <div class="card" style="width: 18rem;">
      <img src="./img/baihat1.jfif" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
      </div>
      <div class="col">
      <div class="card" style="width: 18rem;">
      <img src="./img/baihat1.jfif" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
      </div>
      <div class="col">
      <div class="card" style="width: 18rem;">
      <img src="./img/baihat1.jfif" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
      </div>
    </div>
    
    <!-- Thêm 3 thẻ .col và .card khác tương tự tại đây -->
    
  </div>
</div>
  </div>
  
  <?php 
    include("layout/layout-footer.php")
  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>