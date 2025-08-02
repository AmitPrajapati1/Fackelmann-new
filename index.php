<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="assets/css/style.css">  


<?php include('includes/nav.php'); ?>

<div class="slider-area" id="home-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 768px)" srcset="assets/images/banners/hero_banner_mob_1.jpg">
                    <img src="assets/images/banners/hero_banner_desktop_1.jpg" alt="Banner 1">
                </picture>
            </div>
            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 768px)" srcset="assets/images/banners/hero_banner_mob_2.jpg">
                    <img src="assets/images/banners/hero_banner_desktop_2.jpg" alt="Banner 2">
                </picture>
            </div>
            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 768px)" srcset="assets/images/banners/hero_banner_mob_3.jpg">
                    <img src="assets/images/banners/hero_banner_desktop_3.jpg" alt="Banner 3">
                </picture>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="custom-nav custom-prev">&#10094;</div>
        <div class="custom-nav custom-next">&#10095;</div>
    </div>
</div>

<div class="container-flex">
    <div class="new-cat-title">
        <div>
            <h2>Shop by categories</h2>
            <p>Fresh styles just in! Elevate your look.</p>
        </div>
        <!-- <a href="category-listing.php" class="cat-view-all">VIEW ALL CATEGORIES</a> -->
    </div>

    <div class="content-flex">
        <a href="product-listing.php" class="new-category-card cookware">
            <picture>
                <source media="(max-width: 768px)"
                    srcset="assets/images/home_page/our_categories/new/c1_mobile_400x720.jpg">
                <img src="assets/images/home_page/our_categories/new/cookware_720x400_desktop.jpg" alt="Cookware">
            </picture>
            <div class="category-label">Cookware</div>
        </a>

        <div class="right-flex">
            <div class="right-top">
                <a href="javascript:void(0)" class="new-category-card kitchen-tools">
                    <picture>
                        <source media="(max-width: 768px)"
                            srcset="assets/images/home_page/our_categories/new/c2_mobile_400x720.jpg">
                        <img src="assets/images/home_page/our_categories/cat_10.jpg" alt="Bakeware">
                    </picture>
                    <div class="category-label">Bakeware</div>
                </a>

                <a href="javascript:void(0)" class="new-category-card cutlery">
                    <picture>
                        <source media="(max-width: 768px)"
                            srcset="assets/images/home_page/our_categories/new/c3_mobile_400x720.jpg">
                        <img src="assets/images/home_page/our_categories/cat_11.jpg" alt="Knives">
                    </picture>
                    <div class="category-label">Knives</div>
                </a>
            </div>

            <a href="javascript:void(0)" class="new-category-card sinks">
                <picture>
                    <source media="(max-width: 768px)"
                        srcset="assets/images/home_page/our_categories/new/c4_mobile_400x720.jpg">
                    <img src="assets/images/home_page/our_categories/new/kitchen_desktop_720x400.jpg"
                        alt="Kitchen Tools">
                </picture>
                <div class="category-label">Kitchen Tools</div>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background-color: #f5f5f5;">
    <div class="text-center mb-4 fw-bold text-uppercase" style="letter-spacing: 1px;">
        Cleverly Combined - Save in the Set
    </div>

    <div class="custom-nav custom-prev">❮</div>
    <div class="custom-nav custom-next">❯</div>

    <div class="discover-carousel owl-carousel owl-theme">
        <div class="item">
            <a href="product-listing.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_4.jpeg"
                            alt="Non-Stick" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_4.jpeg"
                            alt="Non-Stick Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Non-Stick Cookware</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="product-listing.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_1.jpeg"
                            alt="Saucepans Set" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_1.jpeg"
                            alt="Saucepans Set Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Saucepans</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="product-listing.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_2.jpeg"
                            alt="Lightweight Tawa" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_2.jpeg"
                            alt="Lightweight Tawa Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Lightweight Tawa</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="product-listing.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_3.jpeg"
                            alt="Stainless Steel Frypan" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_3.jpeg"
                            alt="Stainless Steel Frypan Hover" loading="lazy">
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
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_5.jpg"
                            alt="Kadai" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_5.jpg"
                            alt="Kadai Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Kadai</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Water Bottle" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Water Bottle Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Water Bottle</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Water Bottle" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Water Bottle Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Water Bottle</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_2.jpeg"
                            alt="Cake Pan Tin" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_2.jpeg"
                            alt="Cake Pan Tin Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Cake Pan Tin</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_3.jpeg"
                            alt="Strainer" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_3.jpeg"
                            alt="Strainer Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Strainer</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_4.jpeg"
                            alt="Gas Stove Lighter" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_4.jpeg"
                            alt="Gas Stove Lighter Hover" loading="lazy">
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

<div
    style="background-color: #DFE9E8; padding-top: clamp(0.5rem, 2vw, 0.625rem); padding-bottom: clamp(0.5rem, 2vw, 0.625rem);">
    <div class="container py-5">
        <div class="row align-items-start">
            <div class="col-md-6 mb-4 mb-lg-0" style="margin-top: clamp(0.5rem, 2vw, 0.75rem)">
                <img src="assets/images/logos/sustainability_img.webp" alt="50 Sustainability & Climate Leaders"
                    class="mb-3 img-fluid">
                <div class="fw-semibold mb-2" style="font-size: clamp(0.8rem, 2vw, 1rem);">
                    Fackelmann Brands: One of 50 climate leader companies worldwide
                </div>
                <p class="text-muted small">
                    The 50 Climate Leaders initiative has set itself the task of highlighting companies that are
                    committed to sustainable business and climate protection. Fackelmann Brands is part of the
                    initiative and is helping to gradually get closer to the 17 UN climate goals for sustainable
                    development.
                </p>
                <p class="text-muted small">Come with us on a journey into a greener future.</p>
                <a href="javascript:void(0)" class="btn btn-sm fw-semibold text-uppercase newsletter-button">MORE
                    INFORMATION</a>
            </div>
            <div class="col-md-6">
                <div class="video-wrapper" id="youtubeWrapper">
                    <img src="assets/images/logos/sustainability_poster.png" alt="electric bikes in India"
                        title="electric bikes in India" style="cursor: pointer;" id="youtubeThumbnail" />
                    <div class="play-button" id="youtubePlayBtn"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 newsletter-section p-5" style="background-color: #ede8e2; border-radius: 0px">
            <h5 class="fw-bold text-black mb-3 mt-sm-5 mt-0">
                Sign up for our <span class="fw-bold">Newsletter</span>
            </h5>
            <a href="newsletter.php" class="btn text-uppercase fw-semibold newsletter-button">Newsletter</a>
        </div>
        <div class="col-md-7 brand-presence-section p-5">
            <h6 class="text-uppercase fw-semibold mb-2">International Brand Presence</h6>
            <div class="d-flex justify-content-center">
                <div class="bg-danger" style="width: clamp(1rem, 5vw, 1.875rem); height: 3px;"></div>
            </div>
            <div class="mt-4">
                <img src="assets/images/logos/all-brands-logo-desktop.webp" alt="International Brand Logos"
                    class="img-fluid mx-auto d-block" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>

<section class="text-white d-flex align-items-center justify-content-center px-3 py-5"
    style="background-color: #bf0019;">
    <div class="container">
        <div class="mx-auto p-4 p-md-4 philosophy-main">
            <div class="row">
                <div class="col-12 col-md-4 text-md-start mb-3 mb-md-0">
                    <h2 class="fw-bold m-0 fs-1" style="line-height: 1.2;">OUR<br>PHILOSOPHY</h2>
                </div>
                <div class="col-12 col-md-8 text-sm-start">
                    <p class="mb-0" style="line-height: 1.7; font-size: clamp(0.75rem, 1.5vw, 0.875rem)">
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

<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
