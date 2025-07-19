<style>
  .accordion-button::after {
    content: "+";
    font-weight: bold;
    font-size: 1.1rem;
    color: white;
    background-image: none !important;
    transform: none !important;
    padding-bottom: 35px;
  }

  .accordion-button:not(.collapsed)::after {
    content: "−";
    color: white;
  }

  .accordion-button:hover {
    background-color: #56575c;
    color: white;
  }

  .accordion-item {
    color: white;
  }

  .accordion-button:not(.collapsed) {
    background-color: #56575c;
    color: #ffffff !important;
    box-shadow: none !important;

  }

  .accordion-button:focus {
    box-shadow: none !important;
  }

  .footer-title {
    color: #c0c0c0;
    font-family: "Roboto Condensed", sans-serif;
    font-size: 16px;
    font-weight: bold;
    letter-spacing: 1.88px;
    line-height: 38px;
    text-transform: uppercase;
    padding: 20px 0 0 0;
  }

  .footer-detail {
    color: #c0c0c0;
    font-size: 15px;
  }

  .footer-main {
    background: #56575c;
  }

  .accordion-button {
    background-color: #56575c;
    color: white;
  }

  .footer-btm-bg {
    background: repeating-linear-gradient(-45deg, #333a45, #333a45 5px, #333a45 5px, #333a45 7px);

  }

  /*  */

  .footer-section {
    display: flex;
    flex-direction: column;
    padding-bottom: 5px;
    /* gap: 1.5rem; */
  }

  @media (max-width: 576px) {
    .footer-section {
      padding: 10px 18px 0px;
    }
  }

  @media (min-width: 768px) {
    .footer-section {
      flex-direction: row;
      justify-content: space-between;
    }

    .footer-block {
      flex: 1;
    }
  }

  /*  */
  /* Style accordion-like toggle button only on mobile */
  .footer-toggle {
    width: 100%;
    background: #56575c;
    color: white;
    border: none;
    text-align: left;
    font-weight: bold;
    position: relative;
    font-size: 16px;
    font-family: "Roboto Condensed", sans-serif;
    letter-spacing: 1.88px;
    line-height: 38px;
    text-transform: uppercase;
    padding: 10px 0 10px 0;
  }

  /* 
  .footer-toggle .toggle-icon {
    float: right;
    font-size: 18px;
  } */

  .footer-toggle .toggle-icon {
    float: right;
    font-size: 24px;
    color: #878787;
    transition: transform 0.2s ease;
    margin-left: 8px;
    width: 22px;
    height: 22px;
  }

  /* Optional: rotate on open (e.g. for animated + to ×) */
  .footer-toggle .toggle-icon.rotate {
    transform: rotate(180deg);
  }

  .social-footer-icons {
    padding: 14px 20px 20px;
  }

  .footer-quick-access {
    padding: 20px 11px 10px;
  }

  .footer-quick-access a {
    font-family: "Roboto Condensed", sans-serif;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1.7px;
    padding: 0 4px;
    text-transform: uppercase;
  }

  .copyright-info {
    padding: 0 0 10px;
    text-align: center;
  }

  .copyright {
    display: inline-block;
    font-size: 10.5px;
    letter-spacing: -0.1px;
    text-align: center;
    text-transform: uppercase;
    color: white;
    /* padding: 10px; */
  }
</style>


<footer class="footer-main text-white lg:pt-5 md:pt-5">


  <div class="px-4 pb-1">
    <div class="footer-section">
      <div class="footer-block">
        <button class="footer-toggle d-md-none" data-bs-toggle="collapse" data-bs-target="#footerCollapse1">
          Just Email Us! <span class="toggle-icon float-end">+</span>
        </button>
        <h6 class="text-uppercase fw-semibold mb-2 footer-title d-none d-md-block">Just Email Us!</h6>

        <div class="collapse d-md-block" id="footerCollapse1">
          <p class="footer-detail">Let the yeast rise.<br>We’ll respond in the meantime.</p>
          <a href="#" class="footer-detail text-decoration-none d-inline-flex align-items-center gap-2 mt-2">
            <i class="fas fa-envelope border border-white p-1 rounded-1"></i> Contact form
          </a>
        </div>
      </div>

      <div class="footer-block">
        <button class="footer-toggle d-md-none" data-bs-toggle="collapse" data-bs-target="#footerCollapse2">
          Help & Services<span class="toggle-icon float-end">+</span>
        </button>
        <h6 class="text-uppercase fw-semibold mb-2 footer-title d-none d-md-block">Help & Services</h6>

        <div class="collapse d-md-block" id="footerCollapse2">
          <ul class="list-unstyled mb-0">
            <li><a href="#" class="footer-detail text-decoration-none d-block mb-1">Warranty Claim</a></li>
            <li><a href="#" class="footer-detail text-decoration-none d-block mb-1">Download</a></li>
            <li><a href="#" class="footer-detail text-decoration-none d-block mb-1">Newsletter</a></li>
            <li><a href="#" class="footer-detail text-decoration-none d-block">Contact</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-block">
        <button class="footer-toggle d-md-none" data-bs-toggle="collapse" data-bs-target="#footerCollapse3">
          About Fackelmann<span class="toggle-icon float-end">+</span>
        </button>
        <h6 class="text-uppercase fw-semibold mb-2 footer-title d-none d-md-block">About Fackelmann</h6>

        <div class="collapse d-md-block" id="footerCollapse3">
          <ul class="list-unstyled mb-0">
            <li><a href="#" class="footer-detail text-decoration-none d-block mb-1">Our History</a></li>
            <li><a href="#" class="footer-detail text-decoration-none d-block mb-1">Sustainability</a></li>
            <li><a href="#" class="footer-detail text-decoration-none d-block mb-1">Careers</a></li>
            <li><a href="#" class="footer-detail text-decoration-none d-block">Locations</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-btm-bg text-center footer-detail py-3 px-4 mt-4">
    <div class="social-footer-icons">
      <a href="#" class="btn btn-outline-light btn-sm me-2 rounded-1" style="font-size: 20px"><i
          class="fab fa-facebook-f" style="font-size: 20px"></i></a>
      <a href="#" class="btn btn-outline-light btn-sm rounded-1" style="font-size: 20px"><i class="fab fa-instagram"
          style="font-size: 20px"></i></a>
    </div>

    <div class="text-uppercase fw-semibold footer-quick-access" style="font-size: 13px">
      <a href="#" class="text-white text-decoration-none mx-1">Imprint</a> •
      <a href="#" class="text-white text-decoration-none mx-1">Data Protection</a> •
      <a href="#" class="text-white text-decoration-none mx-1">Terms and Conditions</a> •
      <a href="#" class="text-white text-decoration-none mx-1">Privacy Policy</a>
    </div>

    <div class="small mt-2">
      <!-- © 2025 Copyright <strong>Fackelmann India Kitchenware Pvt. Ltd.</strong> – All rights reserved. -->
      <div class="copyright-info">
        <span class="copyright">© 2025 Copyright <strong><span>Fackelmann Inda Kitchenware
              Pvt. Ltd.</span></strong>.</span>
        <span class="copyright">• All Rights Reserved.</span>
      </div>
    </div>
  </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>





<!-- <script>
  $(document).ready(function () {
    function initializeCarousel(carouselSelector, prevSelector, nextSelector, options = {}) {
      const $carousel = $(carouselSelector);
      const $container = $carousel.closest('.container-fluid');
      const $prevBtn = $container.find(prevSelector);
      const $nextBtn = $container.find(nextSelector);

      // Debug logs
      if (!$carousel.length) {
        console.warn(`Carousel not found: ${carouselSelector}`);
        return;
      }
      if (!$prevBtn.length || !$nextBtn.length) {
        console.warn(`Navigation buttons not found for ${carouselSelector}`);
      }

      // Calculate visible items based on screen width
      function getVisibleItems() {
        const width = document.documentElement.clientWidth;
        if (width >= 1200) return 4;
        if (width >= 768) return 3;
        if (width >= 576) return 2;
        return 1;
      }

      // Default carousel options
      const defaultOptions = {
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplayHoverPause: true,
        smartSpeed: 600,
        responsive: {
          0: { items: 1 },
          576: { items: 2 },
          768: { items: 3 },
          1200: { items: 4 }
        },
        onInitialized: function (event) {
          const visibleItems = getVisibleItems();
          console.log(`Initialized ${carouselSelector}: ${event.item.count} items, ${event.page.size} visible (calculated: ${visibleItems}), clientWidth: ${document.documentElement.clientWidth}`);
          if (event.item.count > event.page.size || event.item.count > visibleItems) {
            $prevBtn.removeClass('d-none');
            $nextBtn.removeClass('d-none');
          } else {
            $prevBtn.addClass('d-none');
            $nextBtn.addClass('d-none');
          }
        },
        onResized: function (event) {
          const visibleItems = getVisibleItems();
          console.log(`Resized ${carouselSelector}: ${event.item.count} items, ${event.page.size} visible (calculated: ${visibleItems}), clientWidth: ${document.documentElement.clientWidth}`);
          if (event.item.count > event.page.size || event.item.count > visibleItems) {
            $prevBtn.removeClass('d-none');
            $nextBtn.removeClass('d-none');
          } else {
            $prevBtn.addClass('d-none');
            $nextBtn.addClass('d-none');
          }
        }
      };

      // Merge user-provided options with defaults
      const carouselOptions = { ...defaultOptions, ...options };

      // Initialize Owl Carousel
      $carousel.owlCarousel(carouselOptions);

      // Force resize to ensure correct button visibility
      setTimeout(() => {
        $carousel.trigger('refresh.owl.carousel');
        console.log(`Forced refresh for ${carouselSelector}`);
      }, 100);

      // Bind custom navigation buttons
      $nextBtn.click(function () {
        $carousel.trigger('next.owl.carousel');
        console.log(`Next button clicked for ${carouselSelector}`);
      });

      $prevBtn.click(function () {
        $carousel.trigger('prev.owl.carousel');
        console.log(`Prev button clicked for ${carouselSelector}`);
      });
    }

    // Initialize carousels
    initializeCarousel('.highlight-carousel', '.owl-prev', '.owl-next');
    initializeCarousel('.discover-carousel', '.owl-prev', '.owl-next');
    initializeCarousel('#categoryCarousel', '.owl-prev', '.owl-next', {
      loop: false,
      margin: 10,
      responsive: {
        0: { items: 1 },
        576: { items: 2 },
        768: { items: 2 },
        992: { items: 3 }
      }
    });

    // Swiper initialization for home slider
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

    // Debounced resize for banner images
    let resizeTimeout;
    function updateBannerImages() {
      const isDesktop = window.innerWidth > 767;
      document.querySelectorAll('[data-mobile-src]').forEach(img => {
        img.src = isDesktop ? img.getAttribute('data-desktop-src') : img.getAttribute('data-mobile-src');
      });
    }
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => {
        updateBannerImages();
        $('.owl-carousel').trigger('refresh.owl.carousel');
        console.log('Window resized, carousels refreshed');
      }, 100);
    });
    window.addEventListener('load', updateBannerImages);
  });
</script> -->

<script>
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

  function updateBannerImages() {
    const isDesktop = window.innerWidth > 767;
    document.querySelectorAll('[data-mobile-src]').forEach(img => {
      img.src = isDesktop ? img.getAttribute('data-desktop-src') : img.getAttribute('data-mobile-src');
    });
  }

  window.addEventListener('resize', updateBannerImages);
  window.addEventListener('load', updateBannerImages);

  $(document).ready(function () {
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

<script>
  // quick links footer
  const toggles = document.querySelectorAll(".footer-toggle");
  toggles.forEach((btn) => {
    const targetId = btn.getAttribute("data-bs-target");
    const target = document.querySelector(targetId);
    const icon = btn.querySelector(".toggle-icon");

    target.addEventListener("show.bs.collapse", () => {
      icon.textContent = "−";
      icon.classList.add("rotate");

      if (window.innerWidth < 768) {
        toggles.forEach((otherBtn) => {
          const otherTargetId = otherBtn.getAttribute("data-bs-target");
          const otherTarget = document.querySelector(otherTargetId);
          const otherIcon = otherBtn.querySelector(".toggle-icon");

          if (otherTarget !== target) {
            const bsCollapse = bootstrap.Collapse.getInstance(otherTarget);
            if (bsCollapse) {
              bsCollapse.hide();
            }
            otherIcon.textContent = "+";
            otherIcon.classList.remove("rotate");
          }
        });
      }
    });
    target.addEventListener("hide.bs.collapse", () => {
      icon.textContent = "+";
      icon.classList.remove("rotate");
    });
  });

</script>



</body>

</html>