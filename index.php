
<?php include('includes/header.php'); ?>

  <style>
    .custom-nav {
      position: absolute;
      top: 47%;
      transform: translateY(-50%);
      font-size: 24px;
      color: #000;
      background-color: #f5f5f5;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      line-height: 38px;
      text-align: center;
      cursor: pointer;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      z-index: 1000;
    }
    .custom-prev { left: 15px; }
    .custom-next { right: 15px; }

    @media (min-width: 768px) {
      .custom-prev { left: 50px; }
      .custom-next { right: 50px; }
    }

    .product-card {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background-color: #fff;
      padding: 1rem;
    }

    .item{
        background-color: #ffffff;
    }
  </style>
</head>


<?php include('includes/nav.php'); ?>


<div class="container-fluid px-2 px-md-5 py-5 position-relative style="background-color: #f5f5f5;">
  <div class="text-center mb-4 fw-medium text-uppercase" style="letter-spacing: 1px;">
    Cleverly Combined - Save in the Set
  </div>

  <div class="custom-nav custom-prev">&#10094;</div>
  <div class="custom-nav custom-next">&#10095;</div> 

  <div class="owl-carousel owl-theme">

    <div class="item">
      <div class="product-card">
        <img class="img-fluid" src="https://picsum.photos/300/200?random=1" alt="Frypan">
        <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

        <div class="description-wrapper small mt-1">
          <div class="description">Conical Tri-ply Frypan 24 Cm with extra durable</div>
        </div>

        <div class="fw-bold mt-1">MRP ₹ 7,999.00</div>
      </div>
    </div>

    <div class="item">
      <div class="product-card">
        <img class="img-fluid" src="https://picsum.photos/300/200?random=2" alt="Frypan">
        <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

        <div class="description-wrapper small mt-1">
          <div class="description">Matrix Non-stick Frypan 32cm</div>
        </div>

        <div class="fw-bold mt-1">MRP ₹ 13,990.00</div>
      </div>
    </div>

    <div class="item">
      <div class="product-card">
        <img class="img-fluid" src="https://picsum.photos/300/200?random=3" alt="Frypan">
        <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

        <div class="description-wrapper small mt-1">
          <div class="description">Stanley Rogers Matrix Non-stick Frypan</div>
        </div>

        <div class="fw-bold mt-1">MRP ₹ 9,990.00</div>
      </div>
    </div>

    <div class="item">
      <div class="product-card">
        <img class="img-fluid" src="https://picsum.photos/300/200?random=4" alt="Saucepan">
        <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

        <div class="description-wrapper small mt-1">
          <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
        </div>

        <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
      </div>
    </div>

  </div>
</div>

<?php include('includes/footer.php'); ?>
