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

    .custom-label-newsletter {
        font-weight: 400;
    }

    .newsletter-form-main h2 {
        color: var(--text-red);
        font-weight: 500;
        font-size: 1.8rem;
        margin-bottom: 1rem;
    }

    .newsletter-h-custom h2 {
        color: var(--text-gray);
        padding-bottom: 10px;
        font-size: 1.5rem;
    }

    .newsletter-h-custom p {
        color: var(--text-gray);
        font-size: 1rem;
        margin-bottom: 5px;
    }

    .form-control-newsletter {
        border: 1px solid var(--bg-gray);
        border-radius: 0;
        color: var(--text-gray);
        font-weight: 400;
        height: 35px;
        padding: 10px 14px;
        background-color: var(--bg-gray);
        margin: 5px 0;
        width: 100%;
        box-sizing: border-box;
        font-size: 15px !important;
    }

    .form-control-newsletter:focus {
        background-color: var(--bg-gray);
        border-color: var(--text-gray);
        box-shadow: none;
        color: var(--text-gray);
    }

    .newsletter-form-main {
        background-color: #f2e8e8 !important;
    }

    .custom-label-newsletter {
        font-weight: 400;
        display: flex;
        align-items: center;
        gap: 5px;
        line-height: 1.4;
        margin-top: 10px;
    }

    .custom-label-newsletter input[type="checkbox"] {
        margin: 0;
        width: 14px;
        height: 14px;
        flex-shrink: 0;
    }

    .custom-label-newsletter input[type="email"],
    .custom-label-newsletter input[type="text"] {
        margin: 5px 0;
    }

    .newsletter-msg {
        color: red;
        font-size: 0.75rem;
    }

    .form-control-newsletter.errorNewsletter {
        border-color: red;
    }

    @media (max-width: 768px) {

        .newsletter-h-custom h2,
        .newsletter-h-custom p {
            font-size: 1rem;
            line-height: 1.5;
            text-align: center;
        }

        .newsletter-form-main {
            padding: 1rem;
        }

        .newsletter-button {
            width: 100%;
            float: none;
            margin-top: 20px;
        }

        .custom-label-newsletter {
            /* flex-direction: flex; */
            align-items: flex-start;
            /* gap: 10px; */
        }

        .modal-main {
            margin-top: 30px;
        }
    }

    .custom-label-newsletter {
        display: flex;
        align-items: center;
        gap: 5px;
        line-height: 1.4;
        margin-top: 10px;
    }

    .custom-label-newsletter input[type="checkbox"] {
        margin: 0;
        width: 14px;
        height: 14px;
        flex-shrink: 0;
    }

    .newsletter-form-main .newsletter-button {
        margin: 20px auto 0 auto;
        float: right;
        height: 3rem;
        padding: 0 20px;
        line-height: 3rem;
        font-size: 1.3rem;
        text-align: center;
        transition: all 0.5s;
        color: var(--white);
        border: none;
        background: repeating-linear-gradient(-45deg, #bf0019, #bf0019 5px, #c51a30 5px, #c51a30 7px);
    }

    .newsletter-form-main .newsletter-button:hover {
        color: var(--white) !important;
    }


    .nesletter-header {
        width: 100%;
        margin: 0;
        padding: 75px 0;
        text-align: center;
        float: left;
    }

    .nesletter-header h2 {
        font-size: 2em;
        color: var(--text-red);
    }

    .nesletter-header p {
        font-size: 1.5em;
        color: #54565a;
    }

    .newsleter-form {
        width: 100%;
        margin: 0;
        padding: 70px 100px 100px 100px;
        float: left;
        /* background: var(--white); */
    }

    .newsleter-form h2 {
        color: var(--text-red);
        text-align: center;
        padding-bottom: 25px;
    }

    /* 
    .newsleter-form input[type="text"],
    .newsleter-form input[type="file"],
    .newsleter-form select {
        width: 100%;
        margin: 10px 0;
        padding: 0 15px;
        height: 45px;
        border: 1px solid;
        border-color: rgba(133, 133, 133, 1);
        color: rgba(133, 133, 133, 1);
    
    } */

    .newsleter-form button {
        float: right;
        margin: 0;
        height: 3rem;
        padding: 0 20px;
        line-height: 3rem;
        font-size: 1.3rem;
        text-align: center;
        background: repeating-linear-gradient(-45deg, var(--text-red), var(--text-red) 5px, #c51a30 5px, #c51a30 7px);
        transition: all 0.5s;
        color: var(--white);
        border: none;
    }

    .newsleter-form button:hover {
        background: #000;
    }

    .newsleter-form .input-file {
        width: 100%;
        margin: 10px 0;
        padding: 0 10px;
        line-height: 50px;
        float: left;
        height: 50px;
        border: 1px solid #ccc;
        cursor: pointer;
        color: #6a6b6e;
    }

    .custom-label-newsletter a {
        color: var(--text-red);
        text-decoration: none;
    }

    .newsletter-frm {
        padding-bottom: 70px;
    }

    .success-msg {
        display: none;
        background-color: #d4edda;
        color: #155724;
        padding: 10px 15px;
        margin-bottom: 15px;
        border-radius: 4px;
        font-weight: 500;
        font-size: 13px;
    }

    /* banner */
    .slider-area-newsletter {
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
</style>

<div class="slider-area-newsletter" id="home-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img data-desktop-src="assets/images/contact/contact-banner.webp"
                    data-mobile-src="assets/images/contact/contact-banner.webp" alt="">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="banner-nav banner-prev">&#10094;</div>
        <div class="banner-nav banner-next">&#10095;</div>
    </div>
</div>
<div>
    <section class="newsletter">
        <div class="container">
            <div class="row dflex justify-content-center">
                <!-- <div class="col-md-7"> <img src='assets/images/newsletter/service_newsletter.webp' class="img-fluid">
                </div> -->
            </div>
            <div class="nesletter-header newsletter-h-custom">
                <h2> Your exclusive newsletter advantages:</h2>
                <p>+ Benefit from special promotions for newsletter subscribers</p>
                <p>+ Receive all the latest news from fackelmann 2-3 times a week </p>
                <p>+ Look forward to a 15% welcome discount after successful newsletter registration</p>
                <p>+ Receive a discount for the 1-year newsletter anniversary and also if you specify your date of birth
                    for birthday</p>
            </div>
            <div class="row dflex justify-content-center newsletter-frm">
                <div class="col-md-7">
                    <div class="newsleter-form newsletter-form-main" id="subscribe-msg-box">
                        <h2>SUBSCRIBE TO NEWSLETTER</h2>
                        <div id="success-message" class="success-msg" style="">
                            You have successfully subscribed to our newsletter!
                        </div>
                        <form id="subscribe-frm">
                            <input type="hidden" name="action_type" value="subscribe-enquiry">
                            <input type="text" name="name" placeholder="Your Name*"
                                class="form-control form-control-newsletter" required>
                            <span class="message newsletter-msg" id="msgname"></span>
                            <input type="text" name="email" placeholder="Your Email*"
                                class="form-control form-control-newsletter" required>
                            <span class="message newsletter-msg" id="msgemail"></span>
                            <div class="clearfix"></div>
                            <label class="custom-label-newsletter"><input type="checkbox" name="terms" value="1"
                                    style=""> I have
                                read the
                                <a href="https://www.fackelmann.co.in/privacy-policy">privacy policy </a>.</label>
                            <div class="clearfix"></div>
                            <span class="message newsletter-msg" id="msgterms"></span>
                            <div class="clearfix"></div>
                            <button class="btn-type-1 newsletter-button" type="button"
                                id="authenticateSubscribe">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?php include('includes/footer.php'); ?>


<script>
    document.getElementById('authenticateSubscribe').addEventListener('click', function () {
        document.getElementById('msgname').innerText = '';
        document.getElementById('msgemail').innerText = '';
        document.getElementById('msgterms').innerText = '';
        document.getElementById('success-message').style.display = 'none';

        let name = document.querySelector('input[name="name"]');
        let email = document.querySelector('input[name="email"]');
        let terms = document.querySelector('input[name="terms"]');

        let isValid = true;

        if (name.value.trim() === '') {
            document.getElementById('msgname').innerText = 'Please enter your name.';
            name.classList.add('errorNewsletter');
            isValid = false;
        } else {
            name.classList.remove('errorNewsletter');
        }

        const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (email.value.trim() === '') {
            document.getElementById('msgemail').innerText = 'Please enter your email.';
            email.classList.add('errorNewsletter');
            isValid = false;
        } else if (!emailPattern.test(email.value.trim())) {
            document.getElementById('msgemail').innerText = 'Please enter a valid email address.';
            email.classList.add('errorNewsletter');
            isValid = false;
        } else {
            email.classList.remove('errorNewsletter');
        }

        if (!terms.checked) {
            document.getElementById('msgterms').innerText = 'You must agree to the privacy policy.';
            isValid = false;
        }

        if (isValid) {
            document.getElementById('success-message').style.display = 'block';
            document.getElementById('subscribe-frm').reset();
        }
    });
</script>

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