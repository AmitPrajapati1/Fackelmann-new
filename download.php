<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

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

    .slider-area-downloads {
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
        background-color: #c51a30;
    }

    .swiper-pagination-bullet-active {
        background-color: #7a001c;
    }

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



    .downloads-page {
        padding: 10px 100px 50px;
    }

    .downloads-page .section-header {
        width: 100%;
        padding: 0 1rem;
    }

    .downloads-page .heading-level-1 {
        font-size: clamp(28px, 4vw, 35px);
        font-weight: 400;
        color: #54565a;
        margin-bottom: 1rem;
        margin-top: 20px;
    }

    .downloads-page .heading-level-2 {
        font-size: clamp(22px, 3.5vw, 28px);
        font-weight: 400;
        color: #54565a;
        margin-top: 2rem;
    }

    .downloads-page a {
        color: #54565a;
        text-decoration: underline;
    }

    .downloads-page a:hover {
        color: var(--text-red);
        text-decoration: underline;
    }

    .downloads-page .banner-placeholder {
        background-color: #f4f4f4;
        height: 120px;
    }

    .downloads-page .download-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }

    .downloads-page .download-table th,
    .downloads-page .download-table td {
        padding: 12px 15px;
        border: none;
        text-align: left;
    }

    .downloads-page .download-table thead tr {
        background-color: #E8E8E8;
        color: #54565a;
    }

    .downloads-page .download-table tbody tr:nth-child(odd) {
        background-color: var(--bg-gray);
        color: #54565a;
    }

    .downloads-page .download-table tbody tr:nth-child(even) {
        color: #54565a;
    }

    .links-title {
        margin-top: 10px;
    }

    .downloads-main {
        background: var(--white) !important;
    }

    @media (max-width: 768px) {

        .downloads-page {
            padding: 8px !important;
        }

        .downloads-page .heading-level-1 {
            font-size: clamp(22px, 6vw, 28px) !important;
        }

        .downloads-page .heading-level-2 {
            font-size: clamp(18px, 5vw, 22px) !important;
        }

        .downloads-page .download-table,
        .downloads-page .download-table thead,
        .downloads-page .download-table tbody,
        .downloads-page .download-table th,
        .downloads-page .download-table td,
        .downloads-page .download-table tr {
            display: block;
        }

        .downloads-page .download-table thead {
            display: none;
        }

        .downloads-page .download-table tr {
            margin-bottom: 1rem;
            border-bottom: 1px solid #ccc;
        }

        .downloads-page .download-table td {
            position: relative;
            padding-left: 50%;
            text-align: left;
        }

        .downloads-page .download-table td::before {
            position: absolute;
            top: 12px;
            left: 15px;
            width: 45%;
            font-weight: bold;
            color: #555;
            content: attr(data-th);
            white-space: nowrap;
        }
    }

    @media (max-width: 1024px) {
        .downloads-page {
            padding: 16px;
        }
    }
</style>



<section class="breadcrumb-new downloads-banner"></section>
<div class="slider-area-downloads" id="home-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img data-desktop-src="assets/images/contact/contact-banner.webp"
                    data-mobile-src="assets/images/contact/contact-banner.webp" alt="downloads-banner">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="banner-nav banner-prev">&#10094;</div>
        <div class="banner-nav banner-next">&#10095;</div>
    </div>
</div>

<main class="downloads-main">
    <section class="downloads-page">
        <div class="section-header">
            <div class="heading-level-1">Downloads</div>

            <div class="heading-level-2">General Terms and Conditions of Purchase</div>
            <p class="links-title">
                <a href="#" target="_blank">
                    General terms and conditions of purchase (PDF)
                </a>
            </p>

            <div class="heading-level-2">General Terms and Conditions of Sale</div>
            <p class="links-title">
                <a href="#" target="_blank">
                    General terms and conditions of sale (PDF)
                </a>
            </p>

            <div class="heading-level-2">Code of Conduct</div>
            <p class="links-title">
                <a href="#" target="_blank">
                    Code of Conduct (PDF) <small>Version 12/22</small>
                </a>
            </p>

            <div class="heading-level-2">Policy Statement</div>
            <p class="links-title">
                <a href="#" target="_blank">
                    Policy Statement (PDF) <small>Version 02/23</small>
                </a>
            </p>

            <div class="heading-level-2">Safety Data Sheets</div>
            <table class="download-table">
                <thead>
                    <tr>
                        <th>Article Number</th>
                        <th>English</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-th="Article Number">11111</td>
                        <td data-th="English">
                            <a href="#" target="_blank">
                                Baking release spray 200 ml (PDF)
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Article Number">22222</td>
                        <td data-th="English">
                            <a href="#" target="_blank">
                                Gas lighter flexible tube (PDF)
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Article Number">232324</td>
                        <td data-th="English">
                            <a href="#" target="_blank">
                                Gas lighter refillable 27.5 cm (PDF)
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="heading-level-2">Declaration of Conformity</div>
            <table class="download-table">
                <thead>
                    <tr>
                        <th>Article Number</th>
                        <th>English</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-th="Article Number">324424</td>
                        <td data-th="English">
                            <a href="#" target="_blank">
                                Kitchen torch, adjustable (PDF)
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Article Number">44444</td>
                        <td data-th="English">
                            <a href="#" target="_blank">
                                Kitchen torch big flame (PDF)
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Article Number">55555</td>
                        <td data-th="English">
                            <a href="#" target="_blank">
                                Baking scale digital (PDF)
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Article Number">66666</td>
                        <td data-th="English">
                            <a href="#" target="_blank">
                                Digital baking scale Exclusive (PDF)
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="heading-level-2">Statements of Principle</div>
            <table class="download-table">
                <thead>
                    <tr>
                        <th>Document Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-th="Document Name">
                            <a href="#" target="_blank">
                                Statement of Principles (PDF)
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>

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