<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

<style>
  .category .item img {
    height: 100px;
    object-fit: contain;
    margin-bottom: 10px;
  }
  .category .item {
    text-align: center;
  }
</style>

<section class="py-5 bg-light text-center">
  <div class="container">
    <h5 class="text-uppercase text-secondary fw-medium mb-4">Cookware</h5>
    <div class="owl-carousel category owl-theme">

      <!-- Slide 1: Kadai -->
      <div class="item">
        <img src="assets/images/categories/cookware/kadai.png" alt="Kadai" class="img-fluid">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Kadai</div>
      </div>

      <!-- Slide 2: Frypan -->
      <div class="item">
        <img src="assets/images/categories/cookware/frypan.png" alt="Frypan" class="img-fluid">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Frypan</div>
      </div>

      <!-- Slide 3: Tawa -->
      <div class="item">
        <img src="assets/images/categories/cookware/tawa.png" alt="Tawa" class="img-fluid">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Tawa</div>
      </div>

      <!-- Slide 4: Pressure Cooker -->
      <div class="item">
        <img src="assets/images/categories/cookware/pressurecooker.png" alt="Pressure Cooker" class="img-fluid">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Pressure Cooker</div>
      </div>

      <!-- Slide 5: Casserole -->
      <div class="item">
        <img src="assets/images/categories/cookware/casserole.png" alt="Casserole" class="img-fluid">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Casserole</div>
      </div>

      <!-- Slide 6: Tope -->
      <div class="item">
        <img src="assets/images/categories/cookware/tope.png" alt="Tope" class="img-fluid">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Tope</div>
      </div>

      <!-- Slide 7: Tadka Pan -->
      <div class="item">
        <img src="assets/images/categories/cookware/tadkapan.png" alt="Tadka Pan" class="img-fluid">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Tadka Pan</div>
      </div>

    </div>
  </div>
</section>

<!-- jQuery (required by Owl Carousel) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function(){
    $('.category').owlCarousel({
      loop: true,
      dots: false,
      margin: 20,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: { items: 2 },
        576: { items: 3 },
        768: { items: 4 },
        992: { items: 5 },
        1200: { items: 6 }
      }
    });
  });
</script>

<?php include('includes/footer.php'); ?>
