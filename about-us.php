<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<link rel="stylesheet" type="text/css" href="assets/css/about-us.css">

<style>
    :root {
        --primary-color: #80001d;
        --secondary-color: #8bc7c0;
        --white: #fff;
        --black: #000;
        --btn-hover-gray: #c4c4c4;
        --text-gray: #737373;
        --bg-gray: #f5f5f5;
        --silver: #c0c0c0;
        --text-red: #bf0019;
    }

    .c-weiss {
        color: var(--white) !important;
    }

    .condensed {
        color: var(--white) !important;
    }

    .megamenu-link,
    .megamenu-link:visited {
        color: var(--white);
        text-decoration: none;
    }

    .header-action-col {
        height: 40px;
    }

    .fackelmann-action-container,
    .searchbutton-display,
    .action-account,
    .header-nav-main-toggle {
        height: 100%;
    }

    .navigation-offcanvas-list-item a,
    .navigation-offcanvas-list-item a:visited {
        color: var(--text-gray);
        ;
        text-decoration: none;
    }

    .header-search-input {
        border: none !important;
        margin-top: 0px !important;
        height: 20px !important;
    }

    .fam-offcanvas .btn.offcanvas-close {
        margin-bottom: 0px;
    }

    .navigation-offcanvas-list {
        margin: 0 0 1.625em;
    }

    .icon-arrow-up {
        width: 22px !important;
        height: 22px !important;
        overflow: unset !important;
    }

    .icon-arrow-up svg {
        width: 100% !important;
        height: 100% !important;
    }

    .is-main-link a,
    .is-main-link a:visited {
        color: var(--white);
        text-decoration: none;
    }

    .contact-us a {
        text-decoration: none;
    }

    .contact-us a:hover {
        color: #57aea4;
        text-decoration: none;
    }

    .categories-list {
        margin-bottom: 0px;
    }

    .modal-main {
        text-align: center !important;
        margin: 20px auto !important;
    }

    .modal-main a {
        display: inline-block !important;
        padding: 10px 20px !important;
        background: var(--secondary-color) !important;
        color: var(--white) !important;
        border-radius: 5px !important;
        text-decoration: none !important;
        font-weight: bold !important;
    }

    .tabs-container.sticky-tabs {
        position: fixed;
        top: var(--navbar-height, 60px);
        /* fallback */
        width: 100%;
        z-index: 999;
        background: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .js-close-megamenu.megamenu-close {
        color: #54565a;
        top: 0px;
    }

    .megamenu-sub-item a,
    .megamenu-sub-item a:visited,
    .megamenu-sub-2-link,
    .megamenu-sub-2-link:visited,
    .fam-subcat-link,
    .fam-subcat-link:visited {
        text-decoration: none;
        color: var(--text-gray)
    }

    .slider-area-about-us {
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

    .swiper-pagination-bullet {
        background-color: #c51a30 !important;
    }

    .swiper-pagination-bullet-active {
        background-color: #7a001c !important;
    }

    /* Nav Arrows */
    .banner-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 24px;
        background-color: #bf0019;
        color: #fff;
        width: 40px;
        height: 40px;
        line-height: 38px;
        text-align: center;
        border-radius: 50%;
        cursor: pointer;
        z-index: 10;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .banner-prev {
        left: 15px;
    }

    .banner-next {
        right: 15px;
    }

    @media (min-width: 768px) {
        .banner-prev {
            left: 50px;
        }

        .banner-next {
            right: 50px;
        }
    }

    @media (max-width: 991px) {
        .fackelmann-brands-logo {
            width: 80%;
            height: auto;
        }
    }

    .about-us-detail {
        font-weight: 400 !important;
    }

    @media (max-width: 991px) {
        .custom-padding-about-us {
            padding-left: 24px !important;
            padding-right: 24px !important;
        }
    }
</style>

<style>
    .stats-section {
        background-color: #bf0019;
        color: #fff;
        padding: 40px 0;
    }

    .stat-box {
        text-align: center;
        padding: 20px 10px;
    }

    .stat-icon {
        font-size: 65px;
        margin-bottom: 10px;
        display: inline-block;
    }

    .stat-number {
        font-weight: 700;
        font-size: 20px;
    }

    .stat-label {
        font-weight: 600;
        font-size: 14px;
    }

    @media (max-width: 575.98px) {
        .stats-section {
            padding: 25px 0;
        }

        .stat-box {
            padding: 15px 5px;
        }

        .stat-icon {
            font-size: 36px;
            margin-bottom: 6px;
        }

        .stat-number {
            font-size: 16px;
        }

        .stat-label {
            font-size: 12px;
        }
</style>

<style>
    .about-us-images,
    .the-world-images {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .image-container img,
    .the-world-container img {
        width: 90%;
        max-width: 350px;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    /* Tablet and Desktop */
    @media (min-width: 768px) {
        .about-us-images {
            flex-direction: row;
            justify-content: center;
            gap: 30px;
        }

        .image-container img {
            width: 100%;
            max-width: 268px;
        }
    }

    @media (min-width: 768px) {
        .the-world-images {
            flex-direction: row;
            justify-content: center;
            gap: 30px;
        }

        .the-world-container img {
            width: 100%;
            max-width: 400px;
        }
    }

    img {
        width: 100% !important;
        height: auto !important;
    }

    .img-fluid-custom {
        display: block;
    }
</style>

<main class="about">
    <div class="slider-area-about-us" id="home-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img data-desktop-src="assets/images/banners/about-us-desktop.jpg"
                        data-mobile-src="assets/images/banners/about_us_top_banner.webp" alt="about-us">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="banner-nav banner-prev">&#10094;</div>
            <div class="banner-nav banner-next">&#10095;</div>
        </div>
    </div>
    <section class="stats-section">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <i class='bx bx-purchase-tag-alt stat-icon'></i>
                        <div class="stat-number">15</div>
                        <div class="stat-label">BRANDS</div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <i class='bx bx-map-pin stat-icon'></i>
                        <div class="stat-number">41</div>
                        <div class="stat-label">LOCATIONS WORLDWIDE</div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <i class='bx bx-cube stat-icon'></i>
                        <div class="stat-number">10.000</div>
                        <div class="stat-label">PRODUCTS</div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <i class='bx bx-buildings stat-icon'></i>
                        <div class="stat-number">8</div>
                        <div class="stat-label">PRODUCTION SITES</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mb-5 pt-3">
        <div class="container pt-3">
            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-5 col-xl-4">
                    <img class="fackelmann-brands-logo d-block mx-auto"
                        src="assets/images/brands/fackelmann-brands-logo.svg" alt="Fackelmann Brands" />
                </div>
            </div>
            <p class="about-us-detail">
                Fackelmann Brands stands for kitchen gadgets, household items, bathroom furniture and much more - and is
                guaranteed to be in every home thanks to the large variety of more than 10,000 items. The diverse range
                is manufactured at the headquarters in Hersbruck and in four other countries around the world at a total
                of
                nine production sites - and is available all over the world.
            </p>
        </div>

        <div class="about-us-images">
            <div class="image-container">
                <img src="assets/images/about_us_page/about-intro-01.jpg" alt="Fackelmann Logistic">
            </div>
            <div class="image-container">
                <img src="assets/images/about_us_page/about-intro-02.jpg" alt="Fackelmann Production">
            </div>
            <div class="image-container">
                <img src="assets/images/about_us_page/about-intro-03.jpg" alt="Fackelmann HQ">
            </div>
        </div>


        <div class="container text-center">
            <h2 class="deko-headline">
                From Franconia to the world
            </h2>
        </div>
        <div class="container">
            <p class="about-us-detail">
                In total, we currently have more than 40 business units in various regions such as Western and Eastern
                Europe, Australia, New Zealand, South Africa, Russia, China, India, Southeast Asia and Brazil. With
                several
                production sites in Germany, one in France, one in Poland, four in China and one in India, our company
                is able to
                supply its customers along the entire supply chain. Be it with our own brand universe or with private
                label
                solutions that are specially tailored to the individual requirements of our customers. With a brand
                awareness of
                80%, we are one of the leading companies in the household goods industry.
            </p>
        </div>

        <div class="container the-world-images">
            <div class="the-world-container">
                <img src="assets/images/about_us_page/about-intro-04.jpg" alt="Fackelmann Production">
            </div>
            <div class="the-world-container">
                <img src="assets/images/about_us_page/about-intro-05.jpg" alt="Fackelmann HQ">
            </div>
        </div>
        <div class="container text-center">
            <h2 class="deko-headline">
                A Big Family
            </h2>
        </div>
        <div class="container pb-5 about-us-detail">
            <p>
                We are a traditional, third-generation German company that is 100% owned by the Fackelmann family.
                Alexander Fackelmann has been managing the company since 1992, succeeding his father Sebastian
                Fackelmann, and has been successfully expanding it at home and abroad for almost three decades.
            </p>
            <p>
                We attach great importance to a decentralized group structure that grants our subsidiaries maximum
                autonomy. This approach ensures that we can adapt quickly to local requirements and market conditions
                and at the same time benefit from our global network. Our management team has extensive operational
                experience with an understanding and connections to the international housewares industry. Thanks to
                our M&A experience, we have successfully carried out 18 acquisitions in the last ten years, including,
                for example, Fackelmann Housewares Australia & NZ, Prestige South Africa and Tomkin Australia. We
                believe that it is this experience and this knowledge that make Fackelmann unique.
            </p>
            <p>
                We always have our finger on the pulse and are highly innovative. What holds us together as a family of
                companies is our view of the future and trust in our collective creativity.
            </p>
        </div>
    </section>

    <section class="container mb-5">
        <h2 class="deko-headline">
            Our Brands
        </h2>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 g-3 justify-content-center">
            <a class="col markenteaser mb-2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="assets/images/logos/about-us/logo-1.webp" alt="FACKELMANN" />
                <img class="markenteaser__logo" src="assets/images/logos/about-us/brands-fackelmann-logo.svg"
                    alt="FACKELMANN" />
            </a>
            <!-- <a class="col markenteaser mb-2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="{{ asset('images/other_images/brands/logo-2.webp') }}"
                    alt="FACKELMANN Badmöbel" />
                <img class="markenteaser__logo"
                    src="{{ asset('images/other_images/about_us_page/brand/brands-badmoebel-logo.svg') }}"
                    alt="FACKELMANN Badmöbel" />
            </a> -->
            <a class="col markenteaser mb-2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="assets/images/logos/about-us/logo-3.webp" alt="NIROSTA" />
                <img class="markenteaser__logo" src="assets/images/logos/about-us/brands-nirosta-logo.png"
                    alt="NIROSTA" />
            </a>
            <a class="col markenteaser mb-2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="assets/images/logos/about-us/logo-4.webp" alt="Zenker" />
                <img class="markenteaser__logo" src="assets/images/logos/about-us/brands-zenker-logo.svg"
                    alt="Zenker" />
            </a>
            <a class="col markenteaser mb-2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="assets/images/logos/about-us/logo-5.webp" alt="Stanley Rogers" />
                <img class="markenteaser__logo" src="assets/images/logos/about-us/brands-stanley-logo.svg"
                    alt="Stanley Rogers" />
            </a>
            <a class="col markenteaser mb-2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="assets/images/logos/about-us/logo-6.webp" alt="Füri" />
                <img class="markenteaser__logo" src="assets/images/logos/about-us/brands-fueri-logo.svg" alt="Füri" />
            </a>
            <a class="col markenteaser mb-2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="assets/images/logos/about-us/logo-7.webp" alt="FMprofessional" />
                <img class="markenteaser__logo" src="assets/images/logos/about-us/brands-fmpro-logo.png"
                    alt="FMprofessional" />
            </a>
            <!-- <a class="col markenteaser mb-2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="{{ asset('images/other_images/brands/logo-8.webp') }}"
                    alt="wiltshire" />
                <img class="markenteaser__logo"
                    src="{{ asset('images/other_images/about_us_page/brand/brands-wiltshire-logo.svg') }}"
                    alt="wiltshire" />
            </a>
            <a class="col markenteaser mb-2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="{{ asset('images/other_images/brands/logo-9.webp') }}"
                    alt="Lanzet" />
                <img class="markenteaser__logo"
                    src="{{ asset('images/other_images/about_us_page/brand/brands-lanzet-logo.svg') }}" alt="Lanzet" />
            </a>
            <a class="col markenteaser mb-2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="{{ asset('images/other_images/brands/logo-9.webp') }}"
                    alt="BADmobil" />
                <img class="markenteaser__logo"
                    src="{{ asset('images/other_images/about_us_page/brand/brands-badmobil-logo.svg') }}"
                    alt="BADmobil" />
            </a> -->
        </div>
    </section>

    <section class="wrapper m-bXL">
        <h2 class="deko-headline">
            Fackelmann's partner brands
        </h2>
        <div class="grd S-gap -t6 -l4 j-c-center">
            <a class="col markenteaser m-bgapS2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="{{ asset('images/other_images/brands/logo-12.webp') }}" alt="Elo" />
                <img class="markenteaser__logo"
                    src="{{ asset('images/other_images/about_us_page/brand/brands-elo-logo.svg') }}" alt="Elo" />
            </a>
            <a class="col markenteaser m-bgapS2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="{{ asset('images/other_images/brands/logo-13.webp') }}"
                    alt="Chef'n" />
                <img class="markenteaser__logo"
                    src="{{ asset('images/other_images/about_us_page/brand/brands-chefn-logo.svg') }}" alt="Chef'n" />
            </a>
            <a class="col markenteaser m-bgapS2">
                <img class="markenteaser__img" src="{{ asset('images/other_images/brands/logo-14.webp') }}"
                    alt="Luigi Bomioli" />
                <img class="markenteaser__logo"
                    src="{{ asset('images/other_images/about_us_page/brand/brands-luigi-logo.svg') }}"
                    alt="Luigi Bomioli" />
            </a>
            <a class="col markenteaser m-bgapS2" target="_blank" href="javascript:void(0)">
                <img class="markenteaser__img" src="{{ asset('images/other_images/brands/logo-15.webp') }}"
                    alt="Bomioli Rocco" />
                <img class="markenteaser__logo"
                    src="{{ asset('images/other_images/about_us_page/brand/brands-rocco-logo.svg') }}"
                    alt="Bomioli Rocco" />
            </a>
        </div>
    </section>





    <section class="p-tXL p-bXL historie">
        <div class='tabs-container'>
            <div class='wrapper--full-l'>
                <nav class='tabs grd no-gap'>
                    <a class='col -m4 -tauto sscroll sscroll--offset select-on-scroll' href='#h1-1919'>
                        1919&nbsp;›
                    </a>
                    <a class='col -m4 -tauto sscroll sscroll--offset select-on-scroll' href='#h3-1948'>
                        1948&nbsp;›
                    </a>
                    <a class='col -m4 -tauto sscroll sscroll--offset select-on-scroll' href='#h5-1981'>
                        1981&nbsp;›
                    </a>
                    <a class='col -m4 -tauto sscroll sscroll--offset select-on-scroll' href='#h9-1993'>
                        1993&nbsp;›
                    </a>
                    <a class='col -m4 -tauto sscroll sscroll--offset select-on-scroll' href='#h12-2011'>
                        2011&nbsp;›
                    </a>
                    <a class='col -m4 -tauto sscroll sscroll--offset select-on-scroll' href='#h16-2018'>
                        2018&nbsp;›
                    </a>
                </nav>
            </div>
        </div>
        <div class='wrapper m-tL p-bL'>
            <div class='grd historie__item' id='h1-1919'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            1919
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-1-1.jpeg') }}"
                            alt='Founding by the Fackelmann brothers' />
                    </div>
                </div>
                <div class='col -t6 historie__text '>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Founding by the Fackelmann brothers
                        </h5>
                        <p>
                            The three brothers August, Ludwig and Heinrich Fackelmann leave their father's farm in Lower
                            Franconia for Nuremberg, Stuttgart and Munich to find happiness there. In 1919, under
                            Heinrich's
                            leadership, the “Fackelmann Works Representatives for Households and Hardware” were founded
                            in
                            Nuremberg.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h2-1921'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            1921
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-2-2.jpeg') }}"
                            alt='Expansion of commercial agencies' />
                    </div>
                </div>
                <div class='col -t6 historie__text  _tfirst _lfirst _dfirst'>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Expansion of commercial agencies
                        </h5>
                        <p>
                            Even then, the various merchandise had one common denominator: making life and work in the
                            kitchen
                            and household easier and more pleasant for people. Further commercial agencies in southern
                            Germany
                            follow.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h3-1948'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            1948
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-3-3.jpeg') }}"
                            alt='Sebastian Fackelmann takes over the business' />
                    </div>
                </div>
                <div class='col -t6 historie__text '>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Sebastian Fackelmann takes over the business
                        </h5>
                        <p>
                            After the early death of the founder Heinrich, Sebastian Fackelmann followed in his father's
                            footsteps
                            and, after the end of the Second World War, initially continued the business as a sales
                            representative.
                            Thanks to his years of apprenticeship at the Nuremberg family business Küchen-Loesch, he is
                            very familiar
                            with kitchen helpers and household issues.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h4-1958'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            1958
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-4-4.jpeg') }}"
                            alt='From wholesale to in-house production' />
                    </div>
                </div>
                <div class='col -t6 historie__text  _tfirst _lfirst _dfirst'>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            From wholesale to in-house production
                        </h5>
                        <p>
                            Sebastian Fackelmann is the sole managing director and is gradually expanding his agency
                            into a
                            wholesale business. In 1958 he starts the series production of wooden goods - such as
                            toothpicks,
                            mixing spoons or breakfast boards and small furniture - in his first own production facility
                            in
                            Altensittenbach near Hersbruck.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h5-1981'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            1981
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-5-5.jpeg') }}"
                            alt='Küchenhelfer für den modernen Haushalt' />
                    </div>
                </div>
                <div class='col -t6 historie__text '>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Kitchen gadgets for the modern household
                        </h5>
                        <p>
                            Modern kitchen gadgets for modern households: At the Hersbruck location, plastic kitchen
                            gadgets are
                            also manufactured from the early 1980s. A great advantage of the long-lasting products is
                            their
                            insensitivity and suitability for the dishwasher.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h6-1984'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            1984
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-6-6.jpeg') }}"
                            alt='The 3rd generation joins the company' />
                    </div>
                </div>
                <div class='col -t6 historie__text  _tfirst _lfirst _dfirst'>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            The 3rd generation joins the company
                        </h5>
                        <p>
                            Alexander Fackelmann, who holds a degree in business administration, began his career in the
                            family-owned company in 1984. His focus is on sales, marketing, business development and
                            internationalization, which he consistently promotes and implements.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h7-1987'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            1987
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-7-7.jpeg') }}"
                            alt='Establishment of the first foreign branch' />
                    </div>
                </div>
                <div class='col -t6 historie__text '>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Establishment of the first foreign branch
                        </h5>
                        <p>
                            An important milestone for the sustainable development of international business is laid at
                            the end
                            of the eighties - with the establishment of EQH (European Quality Housewares) in Hong Kong,
                            the gate
                            to the Far East opens even further.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h8-1989'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            1989
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-8-8.jpeg') }}"
                            alt='Modular system and distinctive logo' />
                    </div>
                </div>
                <div class='col -t6 historie__text  _tfirst _lfirst _dfirst'>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Modular system and distinctive logo
                        </h5>
                        <p>
                            Alexander Fackelmann takes care of the introduction and implementation of the modular
                            Fackelmann
                            shelving system in the trade: The customer-friendly and tidy presentation of the goods is a
                            milestone,
                            both for the company itself and for the entire trade. He also developed the striking company
                            logo,
                            the black Fackelmann lettering on a red bar, which has hardly changed to this day.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h9-1993'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            1993
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-9-9.jpeg') }}"
                            alt='Starting shot for international expansion' />
                    </div>
                </div>
                <div class='col -t6 historie__text '>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Starting shot for international expansion
                        </h5>
                        <p>
                            Fackelmann grew rapidly in the 90s - gradually more and more branches abroad were added. The
                            Czech
                            Republic is the first, followed a year later by France and Bulgaria. 1996 Hungary, Poland,
                            Slovenia,
                            2002 Italy.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h10-2003'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            2003
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-10-10.jpeg') }}"
                            alt='New on board: the baking mold expert Zenker' />
                    </div>
                </div>
                <div class='col -t6 historie__text  _tfirst _lfirst _dfirst'>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            New on board: the baking mold expert Zenker
                        </h5>
                        <p>
                            With the takeover of the baking mold specialist Zenker, the second German production site of
                            Fackelmann Brands is in Aichach, Bavaria. All of the brand's baking molds are manufactured
                            on site
                            under the highest quality tests and using the most modern manufacturing techniques.
                            Innovative coating
                            systems, modern color worlds and assortments for every taste and requirement conquer the
                            whole world
                            starting from the Swabian city.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h11-2004'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            2004
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-11-11.jpeg') }}"
                            alt='Europe and the whole world' />
                    </div>
                </div>
                <div class='col -t6 historie__text '>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Europe and the whole world
                        </h5>
                        <p>
                            The international expansion continues - there are also more branches: Spain, Romania and
                            Croatia, UK
                            (2005), China and India (2007) with large production facilities, UAE (2007), Serbia (2008),
                            Indonesia, Taiwan, Thailand, Singapore ( 2009), Singapore (2009), Ukraine (2010), Australia
                            (2012),
                            Russia and Brazil (2013).
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h12-2011'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            2011
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-12-12.jpeg') }}"
                            alt='Opening of the new logistics center in Hersbruck' />
                    </div>
                </div>
                <div class='col -t6 historie__text  _tfirst _lfirst _dfirst'>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Opening of the new logistics center in Hersbruck
                        </h5>
                        <p>
                            The headquarters in Hersbruck is also growing. With the new logistics center, Fackelmann is
                            taking
                            into account the increasing demands on goods storage spaces and modern technology.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h13-2013'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            2013
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-13-13.jpeg') }}"
                            alt='Backen auf höchstem Niveau: Dr. Oetker Küchenhelfer' />
                    </div>
                </div>
                <div class='col -t6 historie__text '>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Baking at the highest level: Dr. Oetker kitchen helpers
                        </h5>
                        <p>
                            As of 2013, Dr. Oetker baking molds and kitchen aids under a long-term license agreement in
                            the
                            hands of Zenker. Since then, the baking mold specialist from Aichach in Upper Bavaria has
                            been
                            building the top position of Dr. Oetker baking appliances are constantly expanding: creative
                            and
                            innovative product range expansions, original concepts and impulses help new baking habits
                            to break
                            through on the market.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h14-2013'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            2015
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-15-14.jpeg') }}"
                            alt="Let's go down under!" />
                    </div>
                </div>
                <div class='col -t6 historie__text  _tfirst _lfirst _dfirst'>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Let's go down under!
                        </h5>
                        <p>
                            The renowned Australian manufacturer McPherson's becomes Fackelmann Housewares Australia and
                            New
                            Zealand. Fackelmann is thus positioning itself strongly with the brands Wiltshire, Stanley
                            Rogers
                            and Füri. The traditional brands Stanley Rogers - premium kitchen gadgets - and Füri -
                            professional
                            knives, are now also available in Europe. The markets in Singapore and Hong Kong are also
                            increasingly served from Australia.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h15-2015'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            2018
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-18-15.jpeg') }}"
                            alt='Two new additions for Fackelmann Brands' />
                    </div>
                </div>
                <div class='col -t6 historie__text '>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Two new additions for Fackelmann Brands
                        </h5>
                        <p>
                            Tomkin, headquartered in Sydney, has been the market leader in the hospitality industry in
                            Australia
                            for over 40 years with many well-known brands in its portfolio. Tomkin is the perfect
                            complement
                            to Fackelmann Australia. New Wechsler in South Africa has stood for household goods, kitchen
                            gadgets,
                            cutlery and glasses for more than 70 years. With the acquisition of shares, Fackelmann
                            strengthens
                            its position on the African continent.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h16-2018'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            2019
                        </h4>
                        <img class='historie__bild' src="{{ asset('storage/images/about-us/h-19-16.jpeg') }}"
                            alt='Happy Birthday Torchman!' />
                    </div>
                </div>
                <div class='col -t6 historie__text  _tfirst _lfirst _dfirst'>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            Happy Birthday Torchman!
                        </h5>
                        <p>
                            Fackelmann turns 100 - a reason to celebrate! In the anniversary year, the company is not
                            only
                            appearing in a completely new guise at the leading Ambiente trade fair, but is also opening
                            the
                            first flagship store, the Fackelmann Welt, at its headquarters in Hersbruck. There is also a
                            lot
                            going on digitally: The fackelmann.de online shop now offers the opportunity to immerse
                            yourself in
                            the variety of Fackelmann products around the clock.
                        </p>
                    </div>
                </div>
            </div>
            <div class='grd historie__item' id='h17-2019'>
                <div class='historie__bar'>
                </div>
                <div class='historie__dot'>
                </div>
                <div class='col -t6 historie__figure'>
                    <div class='inside'>
                        <h4 class='historie__jahr'>
                            2019
                        </h4>
                        <img class='historie__bild'
                            src="{{ asset('storage/images/about-us/historie-2019_02-17.jpeg') }}"
                            alt='Happy Birthday Fackelmann!' />
                    </div>
                </div>
                <div class='col -t6 historie__text '>
                    <div class='inside'>
                        <h5 class='historie__headline c-rot'>
                            New in the portfolio: pots, pans and roasters
                        </h5>
                        <p>
                            Fackelmann and ELO decide on an international sales cooperation. With this partnership,
                            Fackelmann is
                            expanding its existing product portfolio not only with pots, pans and roasting pans, but
                            also with a
                            partner with more than 80 years of expertise in the manufacture of high-quality cookware.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="b-c-rot p-tXL -dsize150">
        <div class="wrapper center">
            <h2 class="c-weiss upper bold">
                "Enthusiastic Customers and Committed Employees Are the Guarantee for Lasting Success!"
            </h2>
        </div>
        <div class="wrapper--s center">
            <p class="c-weiss">
                Alexander Fackelmann, CEO
            </p>
        </div>
        <img class="m-tXL m-b0" src="{{ asset('images/other_images/about_us_page/statement-trenner.webp') }}" alt="" />
    </section>
    <section class="p-0">
        <picture class='mb-0 HDimg m-bgapS2 block'>
            <source media='(max-width:640px)' srcset="{{ asset('images/banners/about_us_bottom_banner.jpg') }}">
            <img class="mb-0" src="{{ asset('images/banners/about_us_bottom_banner.jpg') }}" alt='Fackelmann Welt' />
        </picture>
    </section>
</main>
<a href="#top" id="top-link" class="button button--rund sscroll" title="nach oben">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="138px" height="138px" viewBox="0 0 138 138" style="enable-background:new 0 0 138 138;"
        xml:space="preserve">
        <path d="M47.3,82.5c-0.7,0-1.4-0.3-1.9-0.8c-1.1-1.1-1.1-2.8,0-3.8l21.7-21.6c1.1-1.1,2.8-1.1,3.8,0l21.6,21.6
            c1.1,1.1,1.1,2.8,0,3.8c-1.1,1.1-2.8,1.1-3.8,0L69.1,62L49.3,81.7C48.7,82.2,48,82.5,47.3,82.5z" />
    </svg>
</a>
<?php include('includes/footer.php'); ?>


<script>
    function updateBannerImages() {
        const isDesktop = window.innerWidth > 767;
        document.querySelectorAll('[data-mobile-src]').forEach(img => {
            img.src = isDesktop
                ? img.getAttribute('data-desktop-src')
                : img.getAttribute('data-mobile-src');
        });
    }

    window.addEventListener('resize', updateBannerImages);
    window.addEventListener('load', updateBannerImages);

    document.addEventListener('DOMContentLoaded', function () {
        const slideCount = document.querySelectorAll('.swiper-slide').length;

        const swiperConfig = {
            loop: slideCount > 1,
            autoplay: slideCount > 1 ? { delay: 4000, disableOnInteraction: false } : false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.banner-next',
                prevEl: '.banner-prev'
            }
        };

        const swiper = new Swiper('.swiper', swiperConfig);

        if (slideCount <= 1) {
            document.querySelector('.banner-prev')?.classList.add('d-none');
            document.querySelector('.banner-next')?.classList.add('d-none');
            document.querySelector('.swiper-pagination')?.classList.add('d-none');
        }
    });
</script>