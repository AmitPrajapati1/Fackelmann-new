<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<style>
    /* sustainability page */
    .sustainability-main {
        width: 100%;
        box-sizing: border-box;
    }

    .sustainability-section-padding {
        padding-left: 15px;
        padding-right: 15px;
    }

    .sustainability-main .sustainability-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 15px;
        padding-right: 15px;
    }

    .sustainability-b {
        background-image: url('assets/images/banners/sustainability/header-sustainability.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: var(--white);
        width: 100%;
    }

    .sustainability-b h2 {
        font-size: 65px;
        font-weight: bold;
        line-height: 1.2;
        margin: 0;
        padding: 0px;
    }

    @media (min-width: 768px) {
        .sustainability-section-padding {
            padding-left: 30px;
            padding-right: 30px;
        }

        .sustainability-b {
            min-height: 100px;
        }

        .sustainability-b h2 {
            font-size: 65px;
        }
    }

    @media (min-width: 992px) {

        .sustainability-section-padding {
            padding-left: 45px;
            padding-right: 45px;
        }
    }

    @media (max-width: 576px) {
        .sustainability-section-padding {
            padding-left: 10px;
            padding-right: 10px;
        }

        .sustainability-b {
            min-height: 200px;
        }

        .sustainability-b h2 {
            font-size: 1.5rem;
        }
    }

    .sustainability-nav.sustainability-nav-pills.mb-3 .nav-link {
        border-left: 1px var(--white) solid;
        border-right: 1px var(--white) solid;
        border-bottom: none;
        border-top: none;
    }

    .sustainability-nav.sustainability-nav-pills.mb-3 .nav-link.active {
        border-left: 1px var(--white) solid;
        border-right: 1px var(--white) solid;
        border-bottom: none;
        border-top: none;
    }

    @media (max-width: 768px) {
        .sustainability-nav.sustainability-nav-pills.mb-3 {
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .sustainability-nav.sustainability-nav-pills.mb-3 .nav-item {
            margin: 5px;
            flex: 1 1 auto;
        }

        .sustainability-nav.sustainability-nav-pills.mb-3 .nav-link {
            font-size: 0.9rem;
            padding: 8px 15px;
            border: 1px var(--white) solid;
        }

        .sustainability-nav.sustainability-nav-pills.mb-3 .nav-link.active {
            border: 1px var(--white) solid;
        }
    }

    @media (max-width: 576px) {
        .sustainability-nav.sustainability-nav-pills.mb-3 {
            flex-direction: column;
            align-items: stretch;
            gap: 8px;
        }

        .sustainability-nav.sustainability-nav-pills.mb-3 .nav-item {
            margin: 0;
            width: 100%;
        }

        .sustainability-nav.sustainability-nav-pills.mb-3 .nav-link {
            font-size: 0.85rem;
            padding: 10px;
            width: 100%;
            text-align: left;
            border: 1px var(--white) solid;
        }

        .sustainability-nav.sustainability-nav-pills.mb-3 .nav-link.active {
            border: 1px var(--white) solid;
        }
    }

    .sustainability-materials h4 {
        padding-top: 15px;
        color: black;
    }

    .sustainability-about-com h2 {
        color: black;
        line-height: normal;
    }

    .strategy-business {
        color: black;
        font-weight: 500;
    }

    .certifications-section-sustainability {
        margin: 0 auto;
        padding: 40px 20px;
        text-align: center;
        background: var(--white);
    }

    .certifications-section-sustainability h2 {
        font-size: 28px;
        font-weight: 700;
        color: #333;
        margin-bottom: 30px;
        text-transform: uppercase;
    }

    .certifications-grid {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .certification-item {
        position: relative;
        width: 335px;
        height: 335px;
        background-color: white;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .certification-item img {
        max-width: 80%;
        max-height: 80%;
    }

    .certification-info {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 128, 128, 0.9);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 10px;
        font-size: 14px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .certification-item:hover .certification-info {
        opacity: 2;
    }

    @media (max-width: 991px) {
        .certification-item {
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            height: auto;
            border: none;
            background-color: var(--bg-gray);
        }

        .certification-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .certification-info {
            position: static;
            background-color: #2f958e;
            color: white;
            opacity: 1;
            font-size: 14px;
            line-height: 1.5;
            display: block;
            padding: 15px;
            width: 100%;
        }

        .certification-info p {
            margin: 0;
        }

        .certification-item img {
            max-width: unset;
            max-height: unset;
        }

        .certifications-grid {
            padding: 20px;
        }

        .mega-title {
            font-size: 40px;
        }

        .info-p {
            font-size: 17px;
        }
    }

    .title-wrapper {
        margin-right: auto;
        width: 90%;
    }

    .info-p {
        text-align: justify;
    }

    .mega-title {
        font-weight: 500;
        font-size: 60px;
        line-height: 1;
    }

    .cn-mint {
        color: #9ac3ba;
    }

    .cn-mintdark {
        color: #2f958e;
    }

    .sustainability-btn-type-1 {
        background: #2f958e;
    }

    .sustainability-btn-type-1:hover {
        color: var(--white);
        background: #9ac3ba;
        text-decoration: none;
    }

    .bcn-mintlight {
        background-color: #e4f1ee;
    }
</style>


<section class="sustainability-banner sustainability-b">
    <h2>Let's start <br>
        together</h2>
</section>

<section class="journey pt-70 sustainability-section-padding" data-aos="fade-up">
    <div class="container sustainability-container">
        <div class="row">
            <div class="col-md-4">

                <div class="about-com sustainability-about-com"> <img
                        src="{{ asset('images/sustainability/download.webp') }}" alt="">
                    <h2>Fackelmann Brands: One of 50 climate leader companies worldwide</h2>
                    <p>The 50 Climate Leaders initiative has set itself the task of highlighting companies that are
                        committed to sustainable business and climate protection. Fackelmann Brands is part of the
                        initiative and is helping to gradually get closer to the 17 UN climate goals for sustainable
                        development.</p>
                    <p><strong>Come with us on a journey into a greener future.</strong></p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="video-controls" style="padding: 20px;">
                    <video controls="controls" style="aspect-ratio:710/440; object-fit: cover;"
                        poster="{{ asset('/images/home_page/sustainability_poster.png') }}" <source type="video/mp4"
                        src="https://www.fackelmann.co.in/assets/img/SUSTAINABILITY.mp4" style="width: 100%">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer.php'); ?>