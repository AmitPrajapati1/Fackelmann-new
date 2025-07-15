<!-- Add this in head -->
<style>
   /* Remove default Bootstrap angle arrow */
  .accordion-button::after {
    content: "+"; /* custom icon */
    font-weight: bold;
    font-size: 1.2rem;
    color: white;
    background-image: none !important;
    transform: none !important;
  }

  /* Change to minus when expanded */
  .accordion-button:not(.collapsed)::after {
    content: "−";
  }

  .accordion-item {
    color: #c0c0c0 !important;
   } 

   .accordion-button:not(.collapsed) {
    box-shadow: none !important;
   }
   
.accordion-button:focus {
  box-shadow: none !important;
 }

</style>


<footer class="bg-secondary text-white pt-5">
  <div class="container">
    <div class="accordion accordion-flush d-md-none" id="footerAccordionMobile">
      <!-- Section Start -->
      <div class="accordion-item bg-secondary border-0">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed bg-secondary text-white fw-semibold" type="button"
            data-bs-toggle="collapse" data-bs-target="#footerCollapse1">
            Just Email Us!
          </button>
        </h2>
        <div id="footerCollapse1" class="accordion-collapse collapse" data-bs-parent="#footerAccordionMobile">
          <div class="accordion-body">
            <p>Let the yeast rise.<br>We’ll respond in the meantime.</p>
            <a href="#" class="text-white text-decoration-none d-inline-flex align-items-center gap-2 mt-2">
              <i class="fas fa-envelope border border-white p-1 rounded-1"></i> Contact form
            </a>
          </div>
        </div>
      </div>

      <div class="accordion-item bg-secondary border-0">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed bg-secondary text-white fw-semibold" type="button"
            data-bs-toggle="collapse" data-bs-target="#footerCollapse2">
            Help & Services
          </button>
        </h2>
        <div id="footerCollapse2" class="accordion-collapse collapse" data-bs-parent="#footerAccordionMobile">
          <div class="accordion-body">
            <ul class="list-unstyled mb-0">
              <li><a href="#" class="text-white text-decoration-none d-block mb-1">Warranty Claim</a></li>
              <li><a href="#" class="text-white text-decoration-none d-block mb-1">Download</a></li>
              <li><a href="#" class="text-white text-decoration-none d-block mb-1">Newsletter</a></li>
              <li><a href="#" class="text-white text-decoration-none d-block">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item bg-secondary border-0">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed bg-secondary text-white fw-semibold" type="button"
            data-bs-toggle="collapse" data-bs-target="#footerCollapse3">
            About Fackelmann
          </button>
        </h2>
        <div id="footerCollapse3" class="accordion-collapse collapse" data-bs-parent="#footerAccordionMobile">
          <div class="accordion-body">
            <ul class="list-unstyled mb-0">
              <li><a href="#" class="text-white text-decoration-none d-block mb-1">Our History</a></li>
              <li><a href="#" class="text-white text-decoration-none d-block mb-1">Sustainability</a></li>
              <li><a href="#" class="text-white text-decoration-none d-block mb-1">Careers</a></li>
              <li><a href="#" class="text-white text-decoration-none d-block">Locations</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Desktop Grid Layout -->
    <div class="row gy-4 d-none d-md-flex">
      <div class="col-md-4">
        <h6 class="text-uppercase fw-semibold mb-2">Just Email Us!</h6>
        <p class="mb-1">Let the yeast rise.<br>We’ll respond in the meantime.</p>
        <a href="#" class="text-white text-decoration-none d-inline-flex align-items-center gap-2 mt-2">
          <i class="fas fa-envelope border border-white p-1 rounded-1"></i> Contact form
        </a>
      </div>
      <div class="col-md-4">
        <h6 class="text-uppercase fw-semibold mb-2">Help & Services</h6>
        <ul class="list-unstyled mb-0">
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">Warranty Claim</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">Download</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">Newsletter</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h6 class="text-uppercase fw-semibold mb-2">About Fackelmann</h6>
        <ul class="list-unstyled mb-0">
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">Our History</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">Sustainability</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block mb-1">Careers</a></li>
          <li><a href="#" class="text-white text-decoration-none d-block">Locations</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="bg-dark text-center text-white py-4 mt-4">
    <div class="mb-3">
      <a href="#" class="btn btn-outline-light btn-sm me-2 rounded-1"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="btn btn-outline-light btn-sm rounded-1"><i class="fab fa-instagram"></i></a>
    </div>

    <div class="small text-uppercase fw-semibold">
      <a href="#" class="text-white text-decoration-none mx-1">Imprint</a> •
      <a href="#" class="text-white text-decoration-none mx-1">Data Protection</a> •
      <a href="#" class="text-white text-decoration-none mx-1">Terms and Conditions</a> •
      <a href="#" class="text-white text-decoration-none mx-1">Privacy Policy</a>
    </div>

    <div class="small mt-2">
      © 2025 Copyright <strong>Fackelmann India Kitchenware Pvt. Ltd.</strong> – All rights reserved.
    </div>
  </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    // Swiper Initialization
    const swiper = new Swiper('.swiper', {
         loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.custom-next',
            prevEl: '.custom-prev',
        },
    });

    // Image responsive switching
    function updateBannerImages() {
        const isDesktop = window.innerWidth > 767;
        document.querySelectorAll('[data-mobile-src]').forEach(img => {
            img.src = isDesktop ? img.getAttribute('data-desktop-src') : img.getAttribute('data-mobile-src');
        });
    }

    window.addEventListener('resize', updateBannerImages);
    window.addEventListener('load', updateBannerImages);
</script>

<script>
  $(document).ready(function () {
  // Initialize the highlight carousel
  var highlightCarousel = $(".highlight-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    smartSpeed: 600,
    responsive: {
      0: { items: 1 },
      576: { items: 2 },
      992: { items: 3 },
      1200: { items: 4 }
    }
  });

  $('.highlight-carousel').closest('.container-fluid').find('.custom-next').click(function () {
    highlightCarousel.trigger('next.owl.carousel');
  });
  $('.highlight-carousel').closest('.container-fluid').find('.custom-prev').click(function () {
    highlightCarousel.trigger('prev.owl.carousel');
  });

  // Initialize the discover carousel
  var discoverCarousel = $(".discover-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    smartSpeed: 600,
    responsive: {
      0: { items: 1 },
      576: { items: 2 },
      992: { items: 3 },
      1200: { items: 4 }
    }
  });

  $('.discover-carousel').closest('.container-fluid').find('.custom-next').click(function () {
    discoverCarousel.trigger('next.owl.carousel');
  });
  $('.discover-carousel').closest('.container-fluid').find('.custom-prev').click(function () {
    discoverCarousel.trigger('prev.owl.carousel');
  });
});

</script>


<script>
$(document).ready(function () {
  const $carousel = $("#categoryCarousel");
  const $container = $carousel.closest(".position-relative");
  const $prevBtn = $container.find(".custom-prev");
  const $nextBtn = $container.find(".custom-next");

  $carousel.owlCarousel({
    loop: false,
    margin: 20,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    smartSpeed: 600,
    responsive: {
      0: { items: 1 },
      576: { items: 2 },
      768: { items: 3 },
      992: { items: 4 },
    },
    onInitialized: function (event) {
      // Show buttons only if more than 4 items
      if (event.item.count > 4) {
        $prevBtn.removeClass("d-none");
        $nextBtn.removeClass("d-none");
      }
    }
  });

  $nextBtn.click(function () {
    $carousel.trigger("next.owl.carousel");
  });

  $prevBtn.click(function () {
    $carousel.trigger("prev.owl.carousel");
  });
});
</script>

</body>
</html>
