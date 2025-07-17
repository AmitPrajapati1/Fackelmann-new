<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bootstrap Product Zoom</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Drift Zoom CSS -->
<link rel="stylesheet" href="https://unpkg.com/drift-zoom/dist/drift-basic.min.css">

<style>
  body {
    font-family: Arial, sans-serif;
  }

  h1 {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 5px;
  }

  .price {
    font-size: 20px;
    color: #777474;
    margin-bottom: 10px;
  }

  .buy-button {
    background: #ff6900;
    color: white;
    border: none;
  }

  .buy-button:hover {
    opacity: 0.9;
    color: white;
  }

  .small-text {
    font-size: 14px;
  }

  .small-text span {
    font-weight: bold;
  }

  #header {
    width: 100%;
    text-align: center;
    background: white;
    padding: 10px;
    box-shadow: 0 5px 10px 0px #dbd7d7;
  }

  #header img {
    max-width: 30px;
  }

  .product-section {
    margin-top: 30px;
  }

  .product-img img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
  }

  @media (max-width: 767.98px) {
    .btn-block-mobile {
      width: 100%;
      margin-bottom: 15px;
    }
  }
</style>
</head>
<body>

<!-- Header -->
<header id="header">
  <img src="https://awik.io/demo/webshop-zoom/star_logo.png" alt="Logo">
</header>

<!-- Product Section -->
<div class="container product-section">
  <div class="row g-4">
    <!-- Product Image -->
    <div class="col-md-6 product-img text-center">
      <img class="img-fluid drift-demo-trigger"
           data-zoom="https://awik.io/demo/webshop-zoom/shoe-large.jpg"
           src="https://awik.io/demo/webshop-zoom/shoe-small.jpg"
           alt="Air Jordan Shoe">
    </div>

    <!-- Product Details -->
    <div class="col-md-6 d-flex flex-column justify-content-start">
      <h1>Air Jordan 1 Retro</h1>
      <p class="price">$95.99</p>
      <p class="description">A remarkable shoe that's naturally soft, cozy all over, and fits your every move.</p>

      <!-- Buttons -->
      <div class="row mt-4">
        <div class="col-12 col-md-6 mb-2">
          <button class="btn btn-outline-secondary w-100">
            <i class="fas fa-heart me-2"></i> ADD TO WISHLIST
          </button>
        </div>
        <div class="col-12 col-md-6">
          <button class="btn buy-button w-100">
            <i class="fas fa-shopping-bag me-2"></i> ADD TO BAG
          </button>
        </div>
      </div>

      <!-- Delivery Info -->
      <div class="mt-3">
        <p class="small-text"><span>Standard delivery</span> 2-5 working days</p>
        <p class="small-text"><span>Next day delivery</span> order before 2pm ($5.79)</p>
      </div>
    </div>
  </div>

  <!-- Zoom Plugin Info -->
  <p class="small-text text-center pt-4 pb-3">
    Zoom plugin: <a href="#" target="_blank">Drift</a>
  </p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<!-- Drift JS -->
<script src="https://unpkg.com/drift-zoom/dist/Drift.min.js"></script>
<script>
  new Drift(document.querySelector('.drift-demo-trigger'), {
    paneContainer: document.querySelector('.col-md-6.d-flex'),
    inlinePane: 767,
    inlineOffsetY: -85,
    containInline: true,
    hoverBoundingBox: true
  });
</script>

</body>
</html>
