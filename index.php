<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

<style>
    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
        font-weight: 500 !important;
    }

    .custom-nav {
        position: absolute;
        top: 52%;
        transform: translateY(-50%);
        font-size: 24px;
        color: #bf0019;
        border-radius: 50%;
        background-color: #fff;
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
        right: 25px;
    }

    .highlight-prev {
        left: 15px;
    }

    .highlight-next {
        right: 25px;
    }

    @media (min-width: 768px) {
        #categoryCarousel~.custom-prev {
            left: 0px;
        }

        #categoryCarousel~.custom-next {
            right: 0px;
        }

        #categoryCarousel~.custom-nav {
            top: 40%;
        }
    }

    @media (min-width: 768px) {
        .custom-prev {
            left: 31px;
        }

        .custom-next {
            right: 31px;
        }

        .highlight-prev {
            left: 50px;
        }

        .highlight-next {
            right: 50px;
        }
    }

    .product-card {
        height: 100%;
        /* display: flex; */
        flex-direction: column;
        justify-content: space-between;
        /* align-items: center; */
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
        transition: transform 1s ease;
        display: block;
    }

    .zoom-container:hover img {
        transform: scale(1.1);
    }

    /* custom card */
    .custom-card-style {
        border-radius: 6px;
        overflow: hidden;
        max-width: 100%;
        align-items: center;
        margin: 0 auto;
    }

    .custom-card-style .image-wrapper {
        /* width: 450px;
        height: 300px; */
        /* width: 300px; */
        /* height: 300px; */
        overflow: hidden;
        border-radius: 6px;
        position: relative;
    }

    .custom-card-style img {
        width: 100%;
        height: 100%;
        /* object-fit: contain; */
        object-fit: fill;
        background: white;
        /* transition: transform 2s ease; */
        transition: transform 3s cubic-bezier(0.25, 1.5, 0.5, 1);
        display: block;
        object-position: center;
    }

    .custom-card-style:hover img {
        transform: scale(1.2);
    }

    .custom-btn-style {
        background-color: #bf0019;
        color: white;
        padding: 9px 27px;
        font-size: 14px;
        border: none;
        border-radius: 5px;
        margin: 0 auto;
        width: 160px;
        /* width: 100%;
        max-width: 160px; */
        transition: background-color 0.3s ease;
        display: block;

    }

    :not(.custom-btn-style)+.btn:active {
        background-color: #bf0019 !important;
        color: white !important;
        border: 1px solid #bf0019;
    }

    .custom-btn-style:hover {
        background-color: #bf0019;
    }

    @media (max-width: 575.98px) {
        .custom-btn-style {
            font-size: 13px;
        }

    }

    @media (min-width: 768px) {
        .main-sub-cat {
            padding: 30px;
        }
    }

    .swiper-pagination-bullet {
        background-color: #c51a30 !important;
    }

    .swiper-pagination-bullet.active {
        background-color: #7a001c !important;
    }

    .swiper-pagination-bullet:hover {
        background-color: #7a001c !important;
    }

    .product-flex {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding: 0 15px;
        justify-content: center;
    }

    .flex-item {
        flex: 1 1 250px;
        max-width: 300px;
        background-color: #f5f5f5;
    }

    .item-card {
        height: 100%;
        border-radius: 9px;
        overflow: hidden;
        background: transparent;
        padding: 0;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .image-container {
        width: 100%;
        height: 100%;
        position: relative;
        border-radius: 9px;
        overflow: hidden;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
        display: block;
    }

    .image-container:hover img {
        transform: scale(1.1);
    }

    /* .image-container {
        width: 100%;
        height: 300px;
        position: relative;
        border-radius: 9px;
        overflow: hidden;
    }

    .image-container .img-main,
    .image-container .img-hover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: opacity 0.4s ease, transform 0.3s ease;
        display: block;
        transform: scale(1);
        transform-origin: center center;
        backface-visibility: hidden;
        will-change: transform, opacity;
    }

    .image-container .img-hover {
        opacity: 0;
        z-index: 1;
    }

    .image-container:hover .img-main {
        opacity: 0;
        transform: scale(1.1);
    }

    .image-container:hover .img-hover {
        opacity: 1;
        transform: scale(1.1);
    } */



    .product-button {
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        background-color: white;
        color: #bf0019;
        padding: 9px 0;
        width: 160px;
        text-align: center;
        z-index: 10;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        pointer-events: none;
        /* Prevent hover shift */
    }



    /* .product-button {
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        background-color: white;
        color: #bf0019;
        padding: 9px 0;
        width: 160px;
        text-align: center;
        z-index: 10;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;

    } */

    .product-button:hover {
        background-color: #bf0019;
        color: white;
    }

    .view-more-button {
        text-align: center;
        border: 1px solid #bf0019;
        color: #bf0019;
        padding: 9px 95px;
        font-weight: 500;
    }

    .view-more-button:hover {
        background-color: #bf0019;
        color: white;
    }

    .combined-section {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: space-between;
        align-items: stretch;
    }


    .newsletter-section {
        flex: 1 1 100%;
        max-width: 600px;
        text-align: center;
        padding: 20px;
        border-radius: 9px;
    }

    .brand-presence-section {
        flex: 1 1 100%;
        max-width: 600px;
        text-align: center;
    }

    .newsletter-button {
        font-size: 0.875rem;
        letter-spacing: 1px;
        border: 1px solid #bf0019;
        color: #bf0019;
        padding: 9px 24px;
        font-weight: 500;
    }

    .newsletter-button:hover {

        border: 1px solid #bf0019;
        color: #bf0019;

    }


    @media (min-width: 1024px) {
        .flex-item {
            flex: 0 0 calc(25% - 15px);
            max-width: calc(25% - 15px);
        }
    }

    @media (max-width: 575.98px) {
        .flex-item {
            flex: 1 1 200px;
            max-width: 250px;
        }

        .product-button,
        .view-more-button {
            font-size: 0.8125rem;
        }

        .newsletter-button {
            font-size: 0.75rem;
            padding: 6px 18px;
        }
    }

    @media (min-width: 768px) {
        .newsletter-section {
            flex: 1 1 calc(40% - 15px);
            max-width: calc(40% - 15px);
        }

        .brand-presence-section {
            flex: 1 1 calc(60% - 15px);
            max-width: calc(60% - 15px);
        }
    }

    a {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .philosophy-main {
        background-color: #bf0019;
        border-radius: 20px;
        border: 1px solid white;
        max-width: 900px;
        box-shadow: 8px 8px 0 white;
    }
</style>


<?php include('includes/nav.php'); ?>

<div class="slider-area" id="home-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img data-desktop-src="assets/images/banners/hero_banner_desktop_1.jpg"
                    data-mobile-src="assets/images/banners/hero_banner_mob_1.jpg" alt="Banner 1">
            </div>
            <div class="swiper-slide">
                <img data-desktop-src="assets/images/banners/hero_banner_desktop_2.jpg"
                    data-mobile-src="assets/images/banners/hero_banner_mob_2.jpg" alt="Banner 2">
            </div>
            <div class="swiper-slide">
                <img data-desktop-src="assets/images/banners/hero_banner_desktop_3.jpg"
                    data-mobile-src="assets/images/banners/hero_banner_mob_3.jpg" alt="Banner 3">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="custom-nav custom-prev">&#10094;</div>
        <div class="custom-nav custom-next">&#10095;</div>
    </div>
</div>


<div class="container-fluid py-5 main-sub-cat" style="background: #EDE8E2">
    <div class="row g-4 justify-content-center">
        <div class="col-md-6 col-12 col-lg-4">
            <a href="category-listing.php">
                <div class="product-card custom-card-style">
                    <div class="image-wrapper">
                        <img src="assets/images/home_page/our_categories/cat_9.jpg" alt="Cookware">
                    </div>
                    <div class="text-center mt-3">
                        <button class="custom-btn-style text-uppercase">Cookware</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-12 col-lg-4">
            <a href="javascript:void(0)">
                <div class="product-card custom-card-style">
                    <div class="image-wrapper">
                        <img src="assets/images/home_page/our_categories/cat_10.jpg" alt="Bakeware">
                    </div>
                    <div class="text-center mt-3">
                        <button class="custom-btn-style text-uppercase">Bakeware</button>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row g-4 justify-content-center mt-3">
        <div class="col-md-6 col-12 col-lg-4">
            <a href="javascript:void(0)">
                <div class="product-card custom-card-style">
                    <div class="image-wrapper">
                        <img src="assets/images/home_page/our_categories/cat_11.jpg" alt="Knives">
                    </div>
                    <div class="text-center mt-3">
                        <button class="custom-btn-style text-uppercase">Knives</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-12 col-lg-4">
            <a href="javascript:void(0)">
                <div class="product-card custom-card-style">
                    <div class="image-wrapper">
                        <img src="assets/images/home_page/our_categories/cat_12.jpg" alt="Kitchen Tools">
                    </div>
                    <div class="text-center mt-3">
                        <button class="custom-btn-style text-uppercase">Kitchen Tools</button>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>


<!-- <div class="container-fluid py-5 main-sub-cat" style="background: #EDE8E2">
    <div class="row g-4 justify-content-center">
        <div class="col-md-6 col-12 col-lg-4">
            <div class="product-card custom-card-style">
                <div class="image-wrapper">
                    <img src="assets/images/home_page/our_categories/cat_1.jpeg" alt="Cookware">
                </div>
                <div class="text-center mt-3">
                    <button class="custom-btn-style text-uppercase">Cookware</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 col-lg-4">
            <div class="product-card custom-card-style">
                <div class="image-wrapper">
                    <img src="assets/images/home_page/our_categories/cat_2.jpeg" alt="Bakeware">
                </div>
                <div class="text-center mt-3">
                    <button class="custom-btn-style text-uppercase">Bakeware</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 justify-content-center mt-3">
        <div class="col-md-6 col-12 col-lg-4">
            <div class="product-card custom-card-style">
                <div class="image-wrapper">
                    <img src="assets/images/home_page/our_categories/cat_3.jpeg" alt="Knives">
                </div>
                <div class="text-center mt-3">
                    <button class="custom-btn-style text-uppercase">Knives</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 col-lg-4">
            <div class="product-card custom-card-style">
                <div class="image-wrapper">
                    <img src="assets/images/home_page/our_categories/cat_4.jpeg" alt="Kitchenware">
                </div>
                <div class="text-center mt-3">
                    <button class="custom-btn-style text-uppercase">Kitchenware</button>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background-color: #f5f5f5;">
    <div class="text-center mb-4 fw-bold text-uppercase" style="letter-spacing: 1px;">
        Cleverly Combined - Save in the Set
    </div>

    <div class="custom-nav custom-prev">❮</div>
    <div class="custom-nav custom-next">❯</div>

    <div class="discover-carousel owl-carousel owl-theme">
        <!-- <div class="item">
            <a href="product-listing.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_4.jpeg"
                            alt="Non-Stick" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_1.jpeg"
                            alt="Non-Stick Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Non-Stick Cookware</button>
                </div>
            </a>
        </div> -->
        <div class="item">
            <a href="category-listing.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_4.jpeg"
                            alt="Non-Stick" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Non-Stick Cookware</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_1.jpeg"
                            alt="Saucepans Set" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Saucepans</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_2.jpeg"
                            alt="Frypan" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Lightweight Tawa</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_3.jpeg"
                            alt="Tawa" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Stainless Steel Frypan</button>
                </div>
            </a>
        </div>

    </div>

    <div class="text-center mt-5">
        <button class="view-more-button btn btn-sm">Browse All Sets</button>
    </div>
</div>


<div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background-color: #EDE8E2;">
    <div class="text-center mb-4 fw-bold text-uppercase" style="letter-spacing: 1px;">
        Now Discover - Our Highlights
    </div>

    <div class="custom-nav custom-prev">❮</div>
    <div class="custom-nav custom-next">❯</div>

    <div class="highlight-carousel owl-carousel owl-theme">
        <div class="item">
            <a href="product-detail.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-fluid" src="assets/images/home_page/our_highlights/highlight_5.jpg" alt="Kadai"
                            loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Kadai</button>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Water Bottle" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Water Bottle</button>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-fluid" src="assets/images/home_page/our_highlights/highlight_2.jpeg"
                            alt="cake pan tin" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Cake Pan Tin</button>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-fluid" src="assets/images/home_page/our_highlights/highlight_3.jpeg"
                            alt="strainer" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Strainer</button>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-fluid" src="assets/images/home_page/our_highlights/highlight_4.jpeg"
                            alt="gas stove lighter" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Gas Stove Lighter</button>
                </div>
            </a>
        </div>
    </div>

    <div class="text-center mt-5">
        <button class="view-more-button btn btn-sm">Explore Highlights</button>
    </div>
</div>


<!-- <div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background: #EDE8E2">
    <div class="text-center mb-4 fw-bold text-uppercase" style="letter-spacing: 1px;">
        Now Discover - Our Highlights
    </div>

    <div class="product-flex">
        <div class="flex-item">
            <div class="item-card">
                <div class="image-container">
                    <img class="img-fluid" src="assets/images/product_highlight/conical_tri_ply_frypan_24_cm.webp"
                        alt="Water Bottle">
                </div>
                <button class="product-button btn btn-sm mt-2">Water Bottle</button>
            </div>
        </div>

        <div class="flex-item">
            <div class="item-card">
                <div class="image-container">
                    <img class="img-fluid"
                        src="assets/images/product_highlight/conical_tri_ply_saucepan_20_cm_2_5_litres.webp"
                        alt="Frypan">
                </div>
                <button class="product-button btn btn-sm mt-2">Frypan</button>
            </div>
        </div>

        <div class="flex-item">
            <div class="item-card">
                <div class="image-container">
                    <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_rice_spoon_23_cm.webp"
                        alt="Tawa">
                </div>
                <button class="product-button btn btn-sm mt-2">Tawa</button>
            </div>
        </div>

        <div class="flex-item">
            <div class="item-card">
                <div class="image-container">
                    <img class="img-fluid"
                        src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp" alt="Kadai">
                </div>
                <button class="product-button btn btn-sm mt-2">Kadai</button>
            </div>
        </div>
    </div>
</div> -->


<!-- <div class="container-fluid px-2 px-md-5 py-5" style="background-color: #f5f5f5;">
    <div>
        <div class="position-relative">
            <div class="owl-carousel owl-theme abcd" id="categoryCarousel">
                <div class="text-center">
                    <div>
                        <div class="zoom-container mb-3">
                            <img src="assets/images/categories/cookware-1.jpg" alt="Cookware" class="img-fluid mb-3"
                                style="border-radius: 20px;">
                        </div>
                        <div>
                            <button
                                class="btn btn-danger rounded-pill category-btn text-uppercase">Cookware</button>
                        </div>
                    </div>
                </div>
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
            <div class="custom-nav custom-prev d-none">&#10094;</div>
            <div class="custom-nav custom-next d-none">&#10095;</div>
        </div>
    </div>
</div> -->


<!-- <div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background-color: #f5f5f5;">
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
</div> -->


<!-- <div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background-color: #f5f5f5;">
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
</div> -->

<div style="background-color: #DFE9E8; padding-top: 10px; padding-bottom: 10px;">
    <div class="container py-5">
        <div class="row align-items-start">

            <div class="col-lg-6 mb-4 mb-lg-0" style="margin-top: 12px">
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

                <a href="javascript:void(0)" class="btn btn-sm fw-semibold text-uppercase"
                    style="font-size: 0.875rem; letter-spacing: 1px;border: 1px solid #bf0019;color: #bf0019; font-weight: 500 !important">MORE
                    INFORMATION</a>
            </div>

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

<div class="container-fluid px-0">
    <div class="combined-section">
        <div class="newsletter-section p-5" style="background-color: #ede8e2;border-radius: 0px">
            <h5 class="fw-bold text-black mb-3 mt-5">
                Sign up for our <span class="fw-bold"></span>
            </h5>
            <a href="newsletter.php" class="btn text-uppercase fw-semibold newsletter-button">
                Newsletter
            </a>
        </div>
        <div class="brand-presence-section p-5">
            <h6 class="text-uppercase fw-semibold mb-2">International Brand Presence</h6>
            <div class="d-flex justify-content-center">
                <div class="bg-danger" style="width: 30px; height: 3px;"></div>
            </div>
            <div class="mt-4">
                <img src="assets/images/logos/all-brands-logo-desktop.webp" alt="International Brand Logos"
                    class="img-fluid mx-auto d-block" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>

<!-- <section class="d-flex justify-content-center align-items-center text-center px-3"
    style="background-color: #ede8e2; min-height: 300px;">
    <div>
        <h5 class="fw-medium text-black mb-3">
            Sign up for our <span class="fw-bold">Newsletter</span>
        </h5>
        <a href="#" class="btn text-uppercase fw-semibold px-4 py-2"
            style="font-size: 0.875rem; letter-spacing: 1px;border: 1px solid #bf0019;color: #bf0019">
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
</section> -->
<!-- <section class="text-white text-center d-flex align-items-center justify-content-center px-3"
    style="background: repeating-linear-gradient(-45deg, #bf0019, #bf0019 5px, #c51a30 5px, #c51a30 7px); min-height: 203px;">
    <div class="container">
        <h5 class="fw-semibold mb-3 pt-3">Our Philosophy</h5>
        <p class="mb-0 pb-3">
            We have everything you need to cook, bake, and more, at Fackelmann. All our products are characterised by
            the<br class="d-none d-sm-block">
            highest quality standards, led by a century of experience and innovation. Everything you need – and want –
            is<br class="d-none d-sm-block">
            right here.
        </p>
    </div>
</section> -->


<section class="text-white d-flex align-items-center justify-content-center px-3 py-5"
    style="background-color: #bf0019;">
    <div class="container">
        <div class="mx-auto p-4 p-md-4 philosophy-main">
            <div class="row">
                <div class="col-12 col-md-4 text-md-start mb-3 mb-md-0">
                    <h2 class="fw-bold m-0 fs-1" style="line-height: 1.2;">OUR<br>PHILOSOPHY</h2>
                </div>
                <div class="col-12 col-md-8 text-sm-start">
                    <p class="mb-0" style="line-height: 1.7; font-size: 14px">
                        We have everything you need to cook, bake, and more, at Fackelmann. All our products are
                        characterised by the highest quality standards, led by a century of experience and innovation.
                        Everything you need – and want – is right here.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('includes/footer.php'); ?>