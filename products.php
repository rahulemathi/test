<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>
   <?php include("./includes/header.php") ?>
</head>
  <body>
    <!-- nav bar start -->
  <?php include("./includes/navbar.php") ?>
    <!-- nav bar end -->

    <div class="container mt-5">
  <h1 class="mb-4">Our Products</h1>
  <div class="row">
    <div class="col-md-4">
      <div class="card product-card">
        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
        <div class="card-body">
          <h5 class="card-title">Product 1</h5>
          <p class="card-text">Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="card-text"><strong>Price:</strong> $XX.XX</p>
          <a href="#" class="btn btn-primary">View Details</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card product-card">
        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
        <div class="card-body">
          <h5 class="card-title">Product 2</h5>
          <p class="card-text">Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="card-text"><strong>Price:</strong> $XX.XX</p>
          <a href="#" class="btn btn-primary">View Details</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card product-card">
        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
        <div class="card-body">
          <h5 class="card-title">Product 3</h5>
          <p class="card-text">Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="card-text"><strong>Price:</strong> $XX.XX</p>
          <a href="#" class="btn btn-primary">View Details</a>
        </div>
      </div>
    </div>
    <!-- Add more product cards as needed -->
  </div>
</div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- lottie script` -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- custom js -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>