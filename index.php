<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

<style>
.custom-nav {
    position: absolute;
    top: 47%;
    transform: translateY(-50%);
    font-size: 24px;
    color: #bf0019;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    line-height: 38px;
    text-align: center;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    z-index: 2;
}

#home-slider>.swiper>.custom-nav {
    background-color: #bf0019;
    color: #fff;
}

.custom-nav:hover {
    box-shadow: inset 0 0 0 2px rgba(191, 0, 25, 1);
    background-color: #fff;
    border-color: #fff
}

.custom-prev {
    left: 15px;
}

.custom-next {
    right: 15px;
}

@media (min-width: 768px) {
    #categoryCarousel ~ .custom-prev {
        left: 0px;
    }

    #categoryCarousel ~ .custom-next {
        right: 0px;
    }
    #categoryCarousel ~ .custom-nav {
        top: 40%;
    }
}
@media (min-width: 768px) {
    .custom-prev {
        left: 50px;
    }

    .custom-next {
        right: 50px;
    }
}

.product-card {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.item {
    background-color: #f5f5f5;
}

.slider-area {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.swiper-slide img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
}

.category-btn {
    width: 100%;
    max-width: 160px;
}

.zoom-container {
    border-radius: 20px;
    overflow: hidden;
    display: inline-block;
}

.zoom-container img {
    transition: transform 2s ease;
    display: block;
}

.zoom-container:hover img {
    transform: scale(1.1);
}

</style>
</head>


<?php include('includes/nav.php'); ?>

<div class="slider-area" id="home-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img data-desktop-src="assets/images/banners/banner-1.jpg"
                    data-mobile-src="assets/images/banners/banner-mob-1.jpg" alt="Banner 1">
            </div>
            <div class="swiper-slide">
                <img data-desktop-src="assets/images/banners/banner-2.jpg"
                    data-mobile-src="assets/images/banners/banner-mob-2.jpg" alt="Banner 2">
            </div>
            <div class="swiper-slide">
                <img data-desktop-src="assets/images/banners/banner-3.jpg"
                    data-mobile-src="assets/images/banners/banner-mob-3.jpg" alt="Banner 3">
            </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Custom Prev/Next -->
        <div class="custom-nav custom-prev">&#10094;</div>
        <div class="custom-nav custom-next">&#10095;</div>
    </div>
</div>

<div class="container-fluid px-2 px-md-5 py-5" style="background-color: #f5f5f5;">
    <div>
        <div class="position-relative">
            <!-- Carousel -->
            <div class="owl-carousel owl-theme abcd" id="categoryCarousel">
                <!-- Item 1 -->
                <div class="text-center">
                    <div>
                        <div class="zoom-container mb-3">
                            <img src="assets/images/categories/cookware-1.jpg" alt="Cookware" class="img-fluid mb-3"
                                style="border-radius: 20px;">
                        </div>
                        <div>
                            <button
                                class="btn btn-danger rounded-pill category-btn category-btn text-uppercase">Cookware</button>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="text-center">
                    <div>
                        <div class="zoom-container mb-3">
                            <img src="assets/images/categories/bakeware-2.jpeg" alt="Bakeware" class="img-fluid mb-3"
                                style="border-radius: 20px;">
                        </div>
                        <div>
                            <button class="btn btn-danger rounded-pill category-btn text-uppercase">Bakeware</button>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="text-center">
                    <div>
                        <div class="zoom-container mb-3">
                            <img src="assets/images/categories/kitch-3.jpeg" alt="Kitchenware" class="img-fluid mb-3"
                                style="border-radius: 20px;">
                        </div>
                        <div>
                            <button class="btn btn-danger rounded-pill category-btn text-uppercase">Kitchenware</button>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="text-center">
                    <div>
                        <div class="zoom-container mb-3">
                            <img src="assets/images/categories/knives-4.jpeg" alt="Knives" class="img-fluid mb-3"
                                style="border-radius: 20px;">
                        </div>
                        <div>
                            <button class="btn btn-danger rounded-pill category-btn text-uppercase">Knives</button>
                        </div>
                    </div>
                </div>

                <!-- Item 5 (for demo) -->
                <div class="text-center">
                    <div>
                        <div class="zoom-container mb-3">
                            <img src="assets/images/categories/knives-4.jpeg" alt="Knives" class="img-fluid mb-3"
                                style="border-radius: 20px;">
                        </div>
                        <div>
                            <button class="btn btn-danger rounded-pill category-btn text-uppercase">Knives</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="custom-nav custom-prev d-none">&#10094;</div>
            <div class="custom-nav custom-next d-none">&#10095;</div>
        </div>
    </div>
</div>


<div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background-color: #f5f5f5;">
    <div class="text-center mb-4 fw-medium text-uppercase" style="letter-spacing: 1px;">
        Cleverly Combined - Save in the Set
    </div>

    <div class="custom-nav custom-prev">&#10094;</div>
    <div class="custom-nav custom-next">&#10095;</div>

    <div class="highlight-carousel owl-carousel owl-theme">

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/conical_tri_ply_frypan_24_cm.webp"
                    alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Conical Tri-ply Frypan 24 Cm with extra durable</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 7,999.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid"
                    src="assets/images/product_highlight/conical_tri_ply_saucepan_20_cm_2_5_litres.webp" alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Matrix Non-stick Frypan 32cm</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 13,990.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_rice_spoon_23_cm.webp"
                    alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Matrix Non-stick Frypan</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 9,990.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_solid_spoon_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background-color: #f5f5f5;">
    <div class="text-center mb-4 fw-medium text-uppercase" style="letter-spacing: 1px;">
        Now Discover - Our Highlights
    </div>

    <div class="custom-nav custom-prev">&#10094;</div>
    <div class="custom-nav custom-next">&#10095;</div>

    <div class="discover-carousel owl-carousel owl-theme">

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/conical_tri_ply_frypan_24_cm.webp"
                    alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Conical Tri-ply Frypan 24 Cm with extra durable</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 7,999.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid"
                    src="assets/images/product_highlight/conical_tri_ply_saucepan_20_cm_2_5_litres.webp" alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Matrix Non-stick Frypan 32cm</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 13,990.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_rice_spoon_23_cm.webp"
                    alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Matrix Non-stick Frypan</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 9,990.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_solid_spoon_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

    </div>
</div>

<div style="background-color: #ede8e2; padding-top: 10px; padding-bottom: 10px;">
    <div class="container py-5">
        <div class="row align-items-start">

            <!-- Left Content -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/logos/sustainability_img.webp" alt="50 Sustainability & Climate Leaders"
                    class="mb-3 img-fluid">

                <div class="fw-semibold mb-2" style="font-size: 1rem;">
                    Fackelmann Brands: One of 50 climate leader companies worldwide
                </div>

                <p class="text-muted small">
                    The 50 Climate Leaders initiative has set itself the task of highlighting companies that are
                    committed to sustainable business and climate protection. Fackelmann Brands is part of the
                    initiative and is helping to gradually get closer to the 17 UN climate goals for sustainable
                    development.
                </p>

                <p class="text-muted small">Come with us on a journey into a greener future.</p>

                <a href="#" class="btn btn-outline-dark btn-sm">MORE INFORMATION</a>
            </div>

            <!-- Right Video Section -->
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <video controls poster="assets/images/logos/sustainability_poster.png">
                        <source src="https://www.fackelmann.co.in/assets/img/SUSTAINABILITY.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

        </div>
    </div>
</div>

<section class="d-flex justify-content-center align-items-center text-center px-3"
    style="background-color: #ede8e2; min-height: 300px;">
    <div>
        <h5 class="fw-medium text-danger mb-3">
            Sign up for our <span class="fw-bold">Newsletter</span>
        </h5>
        <a href="#" class="btn btn-danger text-uppercase fw-semibold px-4 py-2"
            style="font-size: 0.875rem; letter-spacing: 1px;">
            Newsletter Registration
        </a>
    </div>
</section>

<section class="py-5 bg-light text-center d-none d-sm-block">
    <div class="container">
        <h6 class="text-uppercase fw-semibold mb-2">International Brand Presence</h6>
        <div class="d-flex justify-content-center">
            <div class="bg-danger" style="width: 30px; height: 3px;"></div>
        </div>
        <div class="mt-4">
            <img src="assets/images/logos/all-brands-logo-desktop.webp" alt="International Brand Logos"
                class="img-fluid mx-auto d-block" style="max-width: 100%; height: auto;">
        </div>
    </div>
</section>

<section class="text-white text-center d-flex align-items-center justify-content-center px-3"
    style="background: repeating-linear-gradient(-45deg, #bf0019, #bf0019 5px, #c51a30 5px, #c51a30 7px); min-height: 250px;">
    <div class="container">
        <h5 class="fw-semibold mb-3">Our Philosophy</h5>
        <p class="mb-0">
            We have everything you need to cook, bake, and more, at Fackelmann. All our products are characterised by
            the<br class="d-none d-sm-block">
            highest quality standards, led by a century of experience and innovation. Everything you need – and want –
            is<br class="d-none d-sm-block">
            right here.
        </p>
    </div>
</section>

<?php include('includes/footer.php'); ?>