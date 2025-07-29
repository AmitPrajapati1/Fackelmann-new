<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
        font-weight: 500 !important;
    }

    .custom-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: clamp(1rem, 2vw, 1.5rem);
        color: #bf0019;
        border-radius: 50%;
        background-color: #fff;
        width: clamp(2rem, 5vw, 2.5rem);
        height: clamp(2rem, 5vw, 2.5rem);
        line-height: clamp(2rem, 5vw, 2.5rem);
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
        border-color: #fff;
    }

    .custom-prev {
        left: clamp(0.5rem, 2vw, 1rem);
    }

    .custom-next {
        right: clamp(0.5rem, 2vw, 1rem);
    }

    .highlight-prev {
        left: clamp(0.5rem, 2vw, 1rem);
    }

    .highlight-next {
        right: clamp(0.5rem, 2vw, 1rem);
    }

    @media (min-width: 768px) {
        #categoryCarousel~.custom-prev {
            left: 0;
        }

        #categoryCarousel~.custom-next {
            right: 0;
        }

        #categoryCarousel~.custom-nav {
            top: 40%;
        }

        .custom-prev {
            left: clamp(1rem, 3vw, 2rem);
        }

        .custom-next {
            right: clamp(1rem, 3vw, 2rem);
        }

        .highlight-prev {
            left: clamp(1.5rem, 4vw, 3rem);
        }

        .highlight-next {
            right: clamp(1.5rem, 4vw, 3rem);
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
        max-width: clamp(8rem, 20vw, 10rem);
    }

    .zoom-container {
        border-radius: clamp(0.8rem, 2vw, 1.25rem);
        overflow: hidden;
        display: inline-block;
        width: 100%;
    }

    .zoom-container img {
        transition: transform 1s ease;
        display: block;
        width: 100%;
        height: auto;
    }

    .zoom-container:hover img {
        transform: scale(1.1);
    }

    .custom-card-style {
        border-radius: 6px;
        overflow: hidden;
        max-width: 100%;
        align-items: center;
        margin: 0 auto;
    }

    .custom-card-style .image-wrapper {
        width: 100%;
        aspect-ratio: 4/3;
        overflow: hidden;
        border-radius: 6px;
        position: relative;
    }

    .custom-card-style img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        background: white;
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
        padding: clamp(0.5rem, 1.5vw, 0.5625rem) clamp(1rem, 3vw, 1.6875rem);
        font-size: clamp(0.75rem, 1.5vw, 0.875rem);
        border: none;
        border-radius: 5px;
        margin: 0 auto;
        width: clamp(8rem, 20vw, 10rem);
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
            font-size: clamp(0.7rem, 1.5vw, 0.8125rem);
        }
    }

    @media (min-width: 768px) {
        .main-sub-cat {
            padding: clamp(1rem, 3vw, 2rem);
        }
    }

    .swiper-pagination-bullet {
        background-color: #c51a30 !important;
    }

    .swiper-pagination-bullet.active,
    .swiper-pagination-bullet:hover {
        background-color: #7a001c !important;
    }

    .product-flex {
        display: flex;
        flex-wrap: wrap;
        gap: clamp(0.5rem, 2vw, 1.25rem);
        padding: 0 clamp(0.5rem, 2vw, 1rem);
        justify-content: center;
    }

    .flex-item {
        flex: 1 1 clamp(12rem, 30vw, 18.75rem);
        max-width: clamp(15rem, 40vw, 18.75rem);
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
        aspect-ratio: 4/3;
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
        display: block;
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
    }

    .image-container:hover .img-hover {
        opacity: 1;
    }

    .product-button {
        position: absolute;
        bottom: clamp(0.5rem, 2vw, 1rem);
        left: 50%;
        transform: translateX(-50%);
        background-color: white;
        color: #bf0019;
        padding: clamp(0.4rem, 1.5vw, 0.5625rem) 0;
        width: clamp(8rem, 20vw, 10rem);
        text-align: center;
        z-index: 10;
        cursor: pointer;
        font-size: clamp(0.75rem, 1.5vw, 0.875rem);
        font-weight: 500;
        pointer-events: none;
    }

    .product-button:hover {
        background-color: #bf0019;
        color: white;
    }

    .view-more-button {
        text-align: center;
        border: 1px solid #bf0019;
        color: #bf0019;
        padding: clamp(0.4rem, 1.5vw, 0.5625rem) clamp(2rem, 5vw, 5.9375rem);
        font-weight: 500;
        font-size: clamp(0.75rem, 1.5vw, 0.875rem);
    }

    .view-more-button:hover {
        background-color: #bf0019;
        color: white;
    }

    /* .combined-section {
        display: flex;
        flex-wrap: wrap;
        gap: clamp(1rem, 3vw, 2rem);
        justify-content: space-between;
        align-items: stretch;
    } */

    .newsletter-section {
        /* flex: 1 1 100%; */
        /* max-width: clamp(20rem, 50vw, 37.5rem); */
        text-align: center;
        padding: clamp(1rem, 3vw, 1.25rem);
        border-radius: 9px;
    }

    .brand-presence-section {
        /* flex: 1 1 100%; */
        /* max-width: clamp(20rem, 50vw, 37.5rem); */
        text-align: center;
    }

    .newsletter-button {
        font-size: clamp(0.7rem, 1.5vw, 0.875rem);
        letter-spacing: 1px;
        border: 1px solid #bf0019;
        color: #bf0019;
        padding: clamp(0.4rem, 1.5vw, 0.5625rem) clamp(1rem, 3vw, 1.5rem);
        font-weight: 500;
    }

    .newsletter-button:hover {
        border: 1px solid #bf0019;
        color: #bf0019;
    }

    @media (min-width: 1024px) {
        .flex-item {
            flex: 0 0 calc(25% - clamp(0.5rem, 2vw, 0.9375rem));
            max-width: calc(25% - clamp(0.5rem, 2vw, 0.9375rem));
        }
    }

    @media (max-width: 575.98px) {
        .flex-item {
            flex: 1 1 clamp(10rem, 25vw, 15.625rem);
            max-width: clamp(12rem, 30vw, 15.625rem);
        }

        .product-button,
        .view-more-button {
            font-size: clamp(0.7rem, 1.5vw, 0.8125rem);
        }

        .newsletter-button {
            font-size: clamp(0.65rem, 1.5vw, 0.75rem);
            padding: clamp(0.3rem, 1vw, 0.375rem) clamp(0.8rem, 2vw, 1.125rem);
        }
    }

    /* @media (min-width: 768px) {
        .newsletter-section {
            flex: 1 1 calc(40% - clamp(0.5rem, 2vw, 0.9375rem));
            max-width: calc(40% - clamp(0.5rem, 2vw, 0.9375rem));
        }

        .brand-presence-section {
            flex: 1 1 calc(60% - clamp(0.5rem, 2vw, 0.9375rem));
            max-width: calc(60% - clamp(0.5rem, 2vw, 0.9375rem));
        }
    } */

    a {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .philosophy-main {
        background-color: #bf0019;
        border-radius: clamp(0.8rem, 2vw, 1.25rem);
        border: 1px solid white;
        max-width: clamp(30rem, 80vw, 56.25rem);
        box-shadow: clamp(0.3rem, 1vw, 0.5rem) clamp(0.3rem, 1vw, 0.5rem) 0 white;
    }

    .video-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 16/9;
    }

    .video-wrapper img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }

    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        width: clamp(2.5rem, 5vw, 4rem);
        height: clamp(2.5rem, 5vw, 4rem);
        background-color: #bf0019;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        transform: translate(-50%, -50%);
        cursor: pointer;
        z-index: 2;
        opacity: 0.9;
        transition: opacity 0.3s;
    }

    .play-button::before {
        content: '';
        display: block;
        width: 0;
        height: 0;
        border-left: clamp(0.8rem, 2vw, 1rem) solid #fff;
        border-top: clamp(0.5rem, 1.5vw, 0.625rem) solid transparent;
        border-bottom: clamp(0.5rem, 1.5vw, 0.625rem) solid transparent;
        margin-left: clamp(0.2rem, 0.5vw, 0.25rem);
    }

    .container-flex {
        display: flex;
        flex-direction: column;
        padding: clamp(1rem, 3vw, 2rem);
    }

    .new-cat-title {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: clamp(0.5rem, 2vw, 0.625rem);
        margin-left: clamp(1rem, 3vw, 2.5rem);
        margin-right: clamp(1rem, 3vw, 2.5rem);
    }

    .new-cat-title h2 {
        font-size: clamp(1rem, 2.5vw, 1.125rem);
        margin: 0 0 clamp(0.2rem, 1vw, 0.25rem);
    }

    .new-cat-title p {
        font-size: clamp(0.7rem, 1.5vw, 0.8125rem);
        margin: 0;
        color: #555;
    }

    .cat-view-all {
        font-size: clamp(0.7rem, 1.5vw, 0.8125rem);
        font-weight: 500;
        color: #bf0019;
        text-decoration: underline;
        white-space: nowrap;
    }

    .content-flex {
        display: flex;
        gap: clamp(0.5rem, 2vw, 0.625rem);
        flex: 1;
        padding: clamp(0.5rem, 2vw, 1.5rem) clamp(1rem, 3vw, 2.5rem);
    }

    .cookware {
        flex: 1 1 50%;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
    }

    .right-flex {
        display: flex;
        flex-direction: column;
        gap: clamp(0.5rem, 2vw, 0.625rem);
        flex: 1 1 50%;
    }

    .right-top {
        display: flex;
        gap: clamp(0.5rem, 2vw, 0.625rem);
        flex: 2 0 auto;
    }

    .kitchen-tools,
    .cutlery {
        flex: 1 1 50%;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
    }

    .sinks {
        flex: 1 1 auto;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
    }

    .new-category-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 2s cubic-bezier(0.20, 0.5, 0.5, 1);
        object-position: center;
    }

    .new-category-card:hover img {
        transform: scale(1.2);
    }

    .new-category-card {
        position: relative;
        height: 100%;
    }

    .category-label {
        color: #bf0019;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
        pointer-events: none;
        position: absolute;
        bottom: clamp(0.5rem, 2vw, 0.75rem);
        left: clamp(0.5rem, 2vw, 0.75rem);
        background: #fff;
        border-radius: 4px;
        display: inline-block;
        font-size: clamp(0.75rem, 1.5vw, 0.875rem);
        font-style: normal;
        font-weight: 500;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding: clamp(0.4rem, 1.5vw, 0.5625rem) 0;
        width: clamp(8rem, 20vw, 10rem);
        z-index: 10;
        cursor: pointer;
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .category-label {
            padding: clamp(0.2rem, 1vw, 0.1875rem) clamp(0.5rem, 1.5vw, 0.6875rem);
            font-size: clamp(0.7rem, 1.5vw, 0.875rem);
            width: clamp(6rem, 15vw, 7.5rem);
        }
    }

    @media (max-width: 768px) {
        .content-flex {
            flex-wrap: wrap;
            flex-direction: row;
            padding: clamp(0.05rem, 0.5vw, 0.0625rem);
        }

        .right-flex {
            flex: 1 1 100% !important;
            display: contents;
        }

        .right-top {
            display: contents;
        }

        .new-category-card {
            flex: 1 1 48%;
            aspect-ratio: 4/3;
        }

        .new-cat-title {
            flex-direction: column;
            align-items: flex-start;
            gap: clamp(0.3rem, 1vw, 0.5rem);
            margin: clamp(0.5rem, 2vw, 0.625rem) 0;
        }

        .new-cat-title>div,
        .new-cat-title>a.cat-view-all {
            width: 100%;
        }

        .category-label {
            left: clamp(0.3rem, 1vw, 0.375rem);
            padding: clamp(0.3rem, 1vw, 0.5rem) clamp(0.5rem, 2vw, 1.25rem);
            font-size: clamp(0.65rem, 1.5vw, 0.75rem);
            line-height: 1.1;
            width: clamp(6rem, 15vw, 7.125rem);
        }

        .container-flex {
            padding: clamp(0.5rem, 2vw, 1.0625rem);
        }
    }
</style>

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
        <a href="category-listing.php" class="new-category-card cookware">
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
                    <img src="assets/images/home_page/our_categories/new/kitchen_desktop_720x400.jpg" alt="Kitchen Tools">
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

<div style="background-color: #DFE9E8; padding-top: clamp(0.5rem, 2vw, 0.625rem); padding-bottom: clamp(0.5rem, 2vw, 0.625rem);">
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
                <a href="javascript:void(0)" class="btn btn-sm fw-semibold text-uppercase newsletter-button">MORE INFORMATION</a>
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

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    const swiper = new Swiper('#home-slider .swiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.custom-next',
            prevEl: '.custom-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
        },
    });

    $('.discover-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 4,
            },
        },
    });

    $('.highlight-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 4,
            },
        },
    });

    // Custom navigation for Owl Carousel
    $('.custom-prev').click(function () {
        $(this).closest('.position-relative').find('.owl-carousel').trigger('prev.owl.carousel');
    });

    $('.custom-next').click(function () {
        $(this).closest('.position-relative').find('.owl-carousel').trigger('next.owl.carousel');
    });

    // YouTube video play button functionality
    $('#youtubePlayBtn').click(function () {
        const videoId = 'YOUR_YOUTUBE_VIDEO_ID'; // Replace with actual YouTube video ID
        const iframe = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/${videoId}?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>`;
        $('#youtubeWrapper').html(iframe);
    });
</script>