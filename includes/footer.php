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

</body>
</html>
