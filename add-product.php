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

    <div class="container">
    <h1 class="text-center mt-5">Add Product</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="productName" name="productName" required>
      </div>
      <div class="mb-3">
        <label for="productDescription" class="form-label">Product Description</label>
        <textarea class="form-control" id="productDescription" name="productDescription" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="productPrice" class="form-label">Price</label>
        <input type="number" class="form-control" id="productPrice" name="productPrice" min="0.01" step="0.01" required>
      </div>
      <div class="mb-3">
        <label for="productImage" class="form-label">Product Image</label>
        <input type="file" class="form-control" id="productImage" name="productImage" accept="image/*" required>
      </div>
      <div class="mb-3 d-grid gap-2 d-md-flex justify-content-center">
        <button type="submit" class="btn btn-primary me-md-2">Add Product</button>
        <button type="submit" class="btn btn-success">Save & Add Another</button>
      </div>
    </form>
  </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- lottie script` -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- custom js -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>