<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

<style>
  .owl-carousel .item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    height: 200px;
  }

  .owl-carousel .item img {
    width: 140px;
    height: 140px;
    object-fit: contain;
    margin-bottom: 10px;
    border-radius: 50%;
    border: 2px solid transparent;
    transition: border 0.3s;
  }

  .owl-carousel .item.active-category img {
    border-color: #bf0019;
  }

  .owl-nav button.owl-next,
  .owl-nav button.owl-prev {
    background-color: #bf0019 !important;
    color: #fff !important;
    border-radius: 50% !important;
    width: 40px;
    height: 40px;
    font-size: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    position: absolute;
    top: 35%;
    transform: translateY(-50%);
  }

  .owl-nav button.owl-prev {
    left: 10px;
  }

  .owl-nav button.owl-next {
    right: 10px;
  }

  .owl-nav button span {
    font-size: 24px;
    line-height: 1;
  }

  a {
    text-decoration: none;
  }
</style>

<section class="pt-5 text-center">
  <h5 class="text-uppercase text-secondary fw-medium mb-4">Cookware</h5>

  <div class="owl-carousel category-carousel owl-theme">
    <!-- Slides -->
    <div class="item">
      <a href="#">
        <img src="assets/images/categories/cookware/kadai.jpg" alt="Kadai">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Kadai</div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <img src="assets/images/categories/cookware/Frypan.webp" alt="Frypan">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Frypan</div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <img src="assets/images/categories/cookware/Tawa.webp" alt="Tawa">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Tawa</div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <img src="assets/images/categories/cookware/pressure_cooker.jpg" alt="Pressure Cooker">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Pressure Cooker</div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <img src="assets/images/categories/cookware/casserole.jpg" alt="Casserole">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Casserole</div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <img src="assets/images/categories/cookware/tope.jpg" alt="Tope">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Tope</div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <img src="assets/images/categories/cookware/tadkapan.jpg" alt="Tadka Pan">
        <div class="fw-semibold text-uppercase small" style="color: #bf0019">Tadka Pan</div>
      </a>
    </div>
  </div>
</section>

<!-- jQuery and Owl Carousel JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function () {
    const $carousel = $(".category-carousel");

    $carousel.owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: false,
      responsive: {
        0: { items: 2 },
        576: { items: 3 },
        768: { items: 4 },
        992: { items: 5 },
        1200: { items: 6 }
      }
    });

    // Handle active border class
    $carousel.on("click", ".item a", function (e) {
      e.preventDefault();

      $carousel.find(".item").removeClass("active-category");
      $(this).closest(".item").addClass("active-category");

      const href = $(this).attr("href");
      if (href && href !== "#") {
        setTimeout(() => {
          window.location.href = href;
        }, 100);
      }
    });
  });
</script>
