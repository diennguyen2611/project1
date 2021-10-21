<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!--Bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--font-awesome icon-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <!--Bootstrap gồm 2 thành phần: Phân chia bố ccuj + Thành phần nội dung - gọi à component-->
    <!--Để hiểu các bootstrap ohana chia bố cục > tìm hiểu về lưới-->

    <div class = "container">
        <div class="row">
            <div class="col-md-12">

               <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Disabled</a>
  </li>
</ul>
            </div>
        </div>
        <!--Nav-->
        <div class="row">
          <ul class="nav justify-content-center">
            <li class="nav-item">
            <a class="nav-link active text-black" aria-current="page" href="#" ><i class="bi bi-house-door"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>

        <!--Slider-->
        <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slider01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slider02.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slider03.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
        </div>

      <div class="row">
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
  <img src="images/slider_1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-md-3">
<div class="card" style="width: 18rem;">
  <img src="images/slider_1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-md-3">
<div class="card" style="width: 18rem;">
  <img src="images/slider_1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-md-3">
<div class="card" style="width: 18rem;">
  <img src="images/slider_1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
        </div>
      </div>
    </div>


<div class = "container">
    <div class="row">
      
      <div class="col-md-4">
      <div class="card bg-dark text-white">
  <img src="images/menu-burger.jpg" class="card-img" alt="..." width="100%">
  <div class="card-img-overlay">
    <h3 class="card-title">burger</h3>
  </div>
</div>
      </div>
      <div class="col-md-4">
      <div class="card bg-dark text-white">
  <img src="images/menu-burger.jpg" class="card-img" alt="..." width="100%">
  <div class="card-img-overlay">
    <h3 class="card-title">burger</h3>
  </div>
</div>
      </div>
      <div class="col-md-4">
      <div class="card bg-dark text-white">
  <img src="images/menu-burger.jpg" class="card-img" alt="..." width="100%">
  <div class="card-img-overlay">
    <h3 class="card-title">burger</h3>
  </div>
</div>
      </div>   
    </div>
</div>
<br>

<div class = "container">
    <div class="row">
      
      <div class="col-md-4">
      <div class="card bg-dark text-white">
  <img src="images/menu-burger.jpg" class="card-img" alt="..." width="100%">
  <div class="card-img-overlay">
    <h3 class="card-title">burger</h3>
  </div>
</div>
      </div>
      <div class="col-md-4">
      <div class="card bg-dark text-white">
  <img src="images/menu-burger.jpg" class="card-img" alt="..." width="100%">
  <div class="card-img-overlay">
    <h3 class="card-title">burger</h3>
  </div>
</div>
      </div>
      <div class="col-md-4">
      <div class="card bg-dark text-white">
  <img src="images/menu-burger.jpg" class="card-img" alt="..." width="100%">
  <div class="card-img-overlay">
    <h3 class="card-title">burger</h3>
  </div>
</div>
      </div>   
    </div>
</div>

<br>
<div class = "container">
    <div class="row">
      
      <div class="col-md-4">
      <div class="card bg-dark text-white">
  <img src="images/menu-burger.jpg" class="card-img" alt="..." width="100%">
  <div class="card-img-overlay">
    <h3 class="card-title">burger</h3>
  </div>
</div>
      </div>
      <div class="col-md-4">
      <div class="card bg-dark text-white">
  <img src="images/menu-burger.jpg" class="card-img" alt="..." width="100%">
  <div class="card-img-overlay">
    <h3 class="card-title">burger</h3>
  </div>
</div>
      </div>
      <div class="col-md-4">
      <div class="card bg-dark text-white">
  <img src="images/menu-burger.jpg" class="card-img" alt="..." width="100%">
  <div class="card-img-overlay">
    <h3 class="card-title">burger</h3>
  </div>
</div>
      </div>   
    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>