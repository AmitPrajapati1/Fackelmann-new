<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<style>
    /* .global-brands-banner {
        background-image: url('assets/images/brands/banner/brand_banner.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        height: 60vh;
        min-height: 250px;
        max-height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: var(--white);
        width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
    }

    @media (max-width: 767px) {
        .global-brands-banner {
            background-attachment: scroll;
            height: 60vh;
            min-height: 150px;
            background-size: cover;

            
        }
    } */


    .global-brands-banner {
        background-image: url('assets/images/brands/banner/brand_banner.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 60vh;
        min-height: 250px;
        max-height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: var(--white);
        position: relative;
        z-index: 1;
    }

    .global-brands-banner .content {
        padding: 1rem;
        z-index: 2;
        position: relative;
    }

    @media (max-width: 767px) {
        .global-brands-banner {
            height: auto;
            min-height: 150px;
            background-size: cover;
            background-position: center;
        }
    }



    .brands-heading {
        padding: 60px 20px 20px 20px;
        text-align: center;
        color: #737373;
    }

    .brands-sub-heading {
        padding: 20px;
        text-align: center;
        color: #737373;
        font-weight: 300;
    }

    .btn-outline-white {
        color: white;
        background: transparent;
        border: 1px solid white;
        font-family: "Roboto Condensed", sans-serif;
        font-size: 13px;
        font-weight: 700;
        padding: 2px 20px;
        line-height: 44px;
        letter-spacing: 2px;
        text-transform: uppercase;
        border-radius: 0;
        outline: 0;
        box-shadow: none;
        vertical-align: middle;
        position: relative;
        overflow: hidden;
        transition: color 0.2s, background 0.2s;
        text-decoration: none;
    }

    .btn-outline-white:hover {
        background: white;
        color: #333333;
        border: 1px solid white;
    }

    .btn-outline-white:not(:disabled):not(.disabled):active {
        background: transparent;
        color: white;
        border: 1px solid white;
        box-shadow: none;
    }

    .brandlist-main {
        width: 100%;
        box-sizing: border-box;
    }

    .brandlist-section-padding {
        padding-left: 15px;
        padding-right: 15px;
    }


    .brandlist-b {
        background-image: url('../images/brands/brand_banner.jpg');
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

    .brandlist-b h2 {
        font-size: 65px;
        font-weight: bold;
        line-height: 1.2;
        margin: 0;
        padding: 0px;
    }

    @media (min-width: 768px) {
        .brandlist-section-padding {
            padding-left: 30px;
            padding-right: 30px;
        }

        .brandlist-b h2 {
            font-size: 65px;
        }
    }

    @media (min-width: 992px) {
        .brandlist-section-padding {
            padding-left: 45px;
            padding-right: 45px;
        }
    }

    @media (max-width: 576px) {
        .brandlist-section-padding {
            padding-left: 10px;
            padding-right: 10px;
        }

        .brandlist-b h2 {
            font-size: 1.5rem;
        }

        .brand-list-banner {
            height: 70vh;
        }
    }

    @media (max-width: 768px) {
        .brand-list-banner {
            height: 70vh;
        }

    }

    .brandlist-materials h4 {
        padding-top: 15px;
        color: black;
    }

    .brandlist-about-com h2 {
        color: black;
        line-height: normal;
    }

    .strategy-business {
        color: black;
        font-weight: 500;
    }

    .certifications-section-brandlist {
        margin: 0 auto;
        padding: 40px 20px;
        text-align: center;
        background: var(--white);
    }

    .certifications-section-brandlist h2 {
        font-size: 28px;
        font-weight: 700;
        color: #333;
        margin-bottom: 30px;
        text-transform: uppercase;
    }

    .certifications-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 30px 20px;
    }

    .certification-item {
        position: relative;
        width: 100%;
        aspect-ratio: 1 / 1;
        max-width: 100%;
        background-color: white;
        position: relative;
        overflow: hidden;
        background-color: white;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        overflow: hidden;

    }

    .certification-item img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .certification-info {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        padding: 40px 25px 25px 2px;
        font-size: 14px;
        line-height: 1.5;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 2;
        box-sizing: border-box;
        overflow: hidden;
        text-align: left;
    }

    .certification-item.paris-hilton:hover {
        background-color: #e83e8c;
    }

    .certification-info h3,
    .certification-info h4 {
        font-size: 16px;
        font-weight: 600;
        margin: 0 0 10px 0;
        line-height: 1.4;
        text-align: left;
        text-transform: uppercase;
    }

    .certification-info p {
        margin: 0 0 10px 0;
        font-size: 14px;
        line-height: 1.5;
        text-align: left;
    }

    .certification-info a.btn {
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        padding: 10px 15px;
        border: 1px solid #fff;
        color: #fff;
        text-decoration: none;
        margin-top: 10px;
        display: inline-block;
        background: transparent;
    }


    .certification-info button {
        margin-top: 10px;
        padding: 10px 20px;
        border: none;
        color: var(--white);
        cursor: pointer;
        display: none;
    }

    .certification-item:hover .certification-info {
        opacity: 1;

    }

    .certification-item:hover .certification-info button {
        display: block;
    }

    /* 320px to 374px */
    @media (max-width: 374px) {
        .certification-item {
            position: relative;
            overflow: hidden;
            height: 100vw;
        }

        .certification-info {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow-y: auto;
            padding: 16px;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .certification-item:hover .certification-info,
        .certification-item:focus-within .certification-info {
            opacity: 1;
        }

        .certifications-section-brandlist {
            padding: 10px 10px;
        }
    }

    @media (min-width: 375px) and (max-width: 424px) {
        .certification-item {
            position: relative;
            overflow: hidden;
            height: 100vw;
        }

        .certification-info {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow-y: auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .certification-item:hover .certification-info,
        .certification-item:focus-within .certification-info {
            opacity: 1;
        }
    }

    @media (min-width: 425px) and (max-width: 425px) {
        .certification-item {
            position: relative;
            overflow: hidden;
            height: 60vw;
        }

        .certification-info {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow-y: auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .certification-item:hover .certification-info,
        .certification-item:focus-within .certification-info {
            opacity: 1;
        }
    }


    @media (max-width: 991px) {
        .certification-info p {
            margin: 0;
        }

        .certification-info button {
            display: block;
            margin-top: 15px;
        }

        /* .certification-info {
            display: none;
        } */

        .certification-item:hover .certification-info {
            display: flex;
            opacity: 1;
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

    .brandlist-btn-type-1 {
        background: #2f958e;
    }

    .brandlist-btn-type-1:hover {
        color: var(--white);
        background: #9ac3ba;
        text-decoration: none;
    }

    .bcn-mintlight {
        background-color: #e4f1ee;
    }

    .brand-list-banner {
        width: 100%;
        position: relative;
        height: 70vh;
        margin: 0;
        padding: 0;
        float: left;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: top;
        align-items: center;
    }

    .brand-list-banner .about-top-banner {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 100%;
    }

    .brand-list-banner .about-top-banner .col-md-6 {
        float: right;
    }

    .brand-list-banner h2 {
        margin: 0;
        padding: 20% 0 0 0;
        font-size: 65px;
        font-weight: 700;
        color: var(--white);
        text-align: center;
        align-items: center;
    }

    @media (max-width: 576px) {
        .certifications-grid {
            grid-template-columns: 1fr;
            gap: 15px;
            padding: 15px 10px;
        }

        .certification-item {
            max-width: 100%;
            width: 100%;
        }
    }
</style>

<section class="global-brands-banner"></section>

<div>
    <div class="brands-heading">
        <h2>Fackelmann Brands – our brands, our diversity</h2>
        <h4>For everything you need in the kitchen: Discover our iconic own brands and our premium partner range.</h4>
    </div>

    <div class="brands-sub-heading">
        <h2>Our own brands</h2>
        <h4>Over 100 years of manufacturing expertise</h4>
    </div>

    <section class="certifications-section-brandlist brandlist-section-padding">
        <div class="certifications-grid">
            <div class="certification-item">
                <img src="assets/images/brands/brand_list/fackelmann_450.jpg" alt="fackelmann">
                <div class="certification-info fackelmann">
                    <h3 style="padding-left: 20px;text-transform: uppercase;"><span style=" color: #ffffff;">
                            SIMPLE.SUPER.PRACTICAL.</span></h3>
                    <p style="padding-left: 20px; padding-right: 20px;" class="ft-16"><span style="color: #ffffff;">We
                            support your everyday life with sustainable cookware, well-thought-out kitchen and household
                            helpers, tried-and-tested products & smart ideas.</span><br><br></p>
                    <p style="padding-left: 20px;" class="ft-16"><a
                            href="https://www.fackelmann.de/marken/fackelmann"><span class="btn btn-outline-white">to
                                the brand world</span></a></p>

                </div>
            </div>
            <div class="certification-item">
                <img src="assets/images/brands/brand_list/paris-hilton_450X450.jpg" alt="paris hilton">
                <div class="certification-info paris-hilton">
                    <h3 style="padding-left: 20px;text-transform: uppercase;"><span style="color: #ffffff;">Glamour for
                            your kitchen</span></h3>
                    <p style="padding-left: 20px; padding-right: 20px;" class="ft-16"><span style="color: #ffffff;">
                            A dream in pink: Paris Hilton's cookware collection is a real eye-catcher in your kitchen.
                            That's hot - discover glamorous cookware, mugs, & drinking bottles.</span><br><br></p>
                    <p style="padding-left: 20px;" class="ft-16"><a
                            href="https://www.fackelmann.de/marken/paris-hilton"><span class="btn btn-outline-white">to
                                the brand world</span></a></p>

                </div>
            </div>
            <div class="certification-item">
                <img src="assets/images/brands/brand_list/stanley_450.jpg" alt="stanley rogers">
                <div class="certification-info stanley">
                    <h3 style="padding-left: 20px;text-transform: uppercase;"><span style="color: #ffffff;">Cookware,
                            kitchen utensils & cutlery
                            of the highest quality</span></h3>
                    <p style="padding-left: 20px; padding-right: 20px;" class="ft-16"><span style="color: #ffffff;">The
                            Australian premium brand stands for quality & craftsmanship in cutlery, first-class food
                            culture & kitchen products, timeless style & elegant design.</span><br><br></p>
                    <p style="padding-left: 20px;" class="ft-16"><a
                            href="https://www.fackelmann.de/marken/stanley-rogers"><span
                                class="btn btn-outline-white">to the brand world</span></a></p>

                </div>
            </div>
            <div class="certification-item">
                <img src="assets/images/brands/brand_list/tasty_450.jpg" alt="tasty">
                <div class="certification-info tasty">
                    <h3 style="padding-left: 20px;text-transform: uppercase;"><span style="color: #ffffff;">Great tools
                            for your favorite
                            recipes</span></h3>
                    <p style="padding-left: 20px; padding-right: 20px;" class="ft-16"><span
                            style="color: #ffffff;">Clever features, appealing color combinations, and truly excellent
                            quality. Great prices ensure lots of fun while cooking.</span><br><br></p>
                    <p style="padding-left: 20px;" class="ft-16"><a
                            href="https://www.fackelmann.de/marken/tasty?m=c6,t16"><span
                                class="btn btn-outline-white">to the brand world</span></a></p>

                </div>
            </div>
            <div class="certification-item">
                <img src="assets/images/brands/brand_list/cktfm_450.jpg" alt="chefkoch">
                <div class="certification-info chefkoch">
                    <h3 style="padding-left: 20px;text-transform: uppercase;"><span style="color: #ffffff;">Now you can
                            cook anything.</span></h3>
                    <p style="padding-left: 20px; padding-right: 20px;" class="ft-16"><span style="color: #ffffff;">We
                            support your everyday life with sustainable cookware, well-thought-out kitchen and household
                            helpers, tried-and-tested products and smart ideas.</span><br><br></p>
                    <p style="padding-left: 20px;" class="ft-16"><a
                            href="https://www.fackelmann.de/marken/chefkoch-trifft-fackelmann?m=c6,t7"><span
                                class="btn btn-outline-white">to the brand world</span></a></p>

                </div>
            </div>
            <div class="certification-item furi">
                <img src="assets/images/brands/brand_list/furi_450x450.jpg" alt="furi">
                <div class="certification-info">
                    <h3 style="padding-left: 20px;text-transform: uppercase;"><span style="color: #ffffff;">Engineered
                            for design, innovation and
                            performance.</span></h3>
                    <p style="padding-left: 20px; padding-right: 20px;" class="ft-16"><span style="color: #ffffff;">We
                            embrace innovation. It's part of our DNA and at the heart of everything we do. It's time to
                            cut differently.</span><br><br></p>
                    <p style="padding-left: 20px;" class="ft-16"><a
                            href="https://www.fackelmann.de/marken/fueri?m=c6,t4"><span class="btn btn-outline-white">to
                                the brand world</span></a></p>

                </div>
            </div>
            <div class="certification-item ">
                <img src="assets/images/brands/brand_list/oetker_450-neu.jpg" alt="Dr Oetker">
                <div class="certification-info oetker">
                    <h3 style="padding-left: 20px;text-transform: uppercase;"><span style="color: #ffffff;">The whole
                            world of baking
                            accessories</span></h3>
                    <p style="padding-left: 20px; padding-right: 20px;" class="ft-16"><span
                            style="color: #ffffff;">Welcome to the baking world of Dr. Oetker Kitchen Helpers. The
                            product range impresses with expertise, experience, and outstanding quality. Innovation
                            tradition are perfectly combined.</span><br><br></p>
                    <p style="padding-left: 20px;" class="ft-16"><a
                            href="https://www.fackelmann.de/marken/dr.oetker-kuechenhelfer?m=c6,t11"><span
                                class="btn btn-outline-white">to the brand world</span></a></p>

                </div>
            </div>
            <div class="certification-item">
                <img src="assets/images/brands/brand_list/fmpro_450-neu.jpg" alt="FMprofessional">
                <div class="certification-info fmprofessional">
                    <h3 style="padding-left: 20px;text-transform: uppercase;"><span style="color: #ffffff;">Kitchen
                            tools for your passion</span>
                    </h3>
                    <p style="padding-left: 20px; padding-right: 20px;" class="ft-16"><span
                            style="color: #ffffff;">Best-in-class production technology perfect functionality.
                            Discover FMprofessional's high-end quality for your kitchen. Built to last
                            forever!</span><br><br></p>
                    <p style="padding-left: 20px;" class="ft-16"><a
                            href="https://www.fackelmann.de/marken/fmprofessional?m=c6,t5"><span
                                class="btn btn-outline-white">to the brand world</span></a></p>

                </div>
            </div>
            <div class="certification-item">
                <img src="assets/images/brands/brand_list/zenker_450.jpg" alt="Zenker">
                <div class="certification-info zenker">
                    <h3 style="padding-left: 20px;text-transform: uppercase;"><span style="color: #ffffff;">Quality from
                            tradition</span>
                    </h3>
                    <p style="padding-left: 20px; padding-right: 20px;" class="ft-16"><span
                            style="color: #ffffff;">Zenker combines quality, tradition, and innovation with ever-new
                            ideas. Zenker baking pans – great baking results for every occasion.</span><br><br></p>
                    <p style="padding-left: 20px;" class="ft-16"><a
                            href="https://www.fackelmann.de/marken/zenker?m=c6,t3">
                            <span class="btn btn-outline-white">to the brand world</span></a>
                    </p>

                </div>
            </div>
            <div class="certification-item">
                <img src="assets/images/brands/brand_list/nirosta_450x450.jpg" alt="nirosta">
                <div class="certification-info nirosta">
                    <h3 style="padding-left: 20px;text-transform: uppercase;">
                        <span style="color: #ffffff;">Uncompromising like you.</span>
                    </h3>
                    <p style="padding-left: 20px; padding-right: 20px;" class="ft-16">
                        <span style="color: #ffffff;">Knives & cutlery that last. – We stand for uncompromising
                            durability, functionality, and reliability.</span><br><br>
                    </p>
                    <p style="padding-left: 20px;" class="ft-16"><a
                            href="https://www.fackelmann.de/marken/nirosta?m=c6,t2">
                            <span class="btn btn-outline-white">to the brand world</span></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include('includes/footer.php'); ?>
<script>
    $(document).ready(function () {
        $('.certification-info').hover(function () {
            if ($(this).hasClass('fackelmann')) {
                $(this).css('background-color', '#9D2235');
            } else if ($(this).hasClass('paris-hilton')) {
                $(this).css('background-color', '#e83e8c');
            } else if ($(this).hasClass('stanley')) {
                $(this).css('background-color', '#737373');
            } else if ($(this).hasClass('tasty')) {
                $(this).css('background-color', '#17a2b8');
            } else if ($(this).hasClass('chefkoch')) {
                $(this).css('background-color', '#28a745');
            } else if ($(this).hasClass('furi')) {
                $(this).css('background-color', '#9c27b0');
            } else if ($(this).hasClass('oetker')) {
                $(this).css('background-color', '#6f42c1');
            } else if ($(this).hasClass('fmprofessional')) {
                $(this).css('background-color', '#4a545b');
            } else if ($(this).hasClass('zenker')) {
                $(this).css('background-color', '#bf0019');
            } else if ($(this).hasClass('nirosta')) {
                $(this).css('background-color', '#4a545b');
            } else {
                $(this).css('background-color', '#4a545b');
            }
        },
        );
    });

    $(document).ready(function () {
        if (window.innerWidth <= 991) {
            $('.certification-item').on('click', function () {
                $('.certification-info').css('opacity', 0);
                $(this).find('.certification-info').css('opacity', 1);
            });

            $(document).on('click touchstart', function (e) {
                if (!$(e.target).closest('.certification-item').length) {
                    $('.certification-info').css('opacity', 0);
                }
            });
        }
    });

</script>