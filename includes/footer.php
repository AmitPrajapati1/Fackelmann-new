<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function(){
    var owl = $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      autoplayHoverPause: true,
      smartSpeed: 600,
      responsive:{
        0:{ items:1 },
        576:{ items:2 },
        992:{ items:3 },
        1200:{ items:4 }
      }
    });

    $('.custom-next').click(function() { owl.trigger('next.owl.carousel'); });
    $('.custom-prev').click(function() { owl.trigger('prev.owl.carousel'); });

  });
</script>

</body>
</html>
