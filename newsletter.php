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

    .newsletter-banner {
        background-image: url('assets/images/contact/contact-banner.webp');
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

    @media (max-width: 767px) {
        .newsletter-banner {
            height: auto;
            min-height: 150px;
            background-size: cover;
            background-position: center;
        }
    }


    /* newsletter page */

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
    }

    .form-control-newsletter:focus {
        background-color: var(--bg-gray);
        border-color: var(--text-gray);
        box-shadow: none;
        color: var(--text-gray);
    }

    .newsletter-form-main {
        background-color: #ececec !important;
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
        color: var(--white);
        background: #c51a30;
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
        background: var(--white);
    }

    .newsleter-form h2 {
        color: var(--text-red);
        text-align: center;
        padding-bottom: 25px;
    }

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
    
    }

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
</style>

<section class="newsletter-banner"></section>
<div>
    <section class="newsletter">
        <div class="container">
            <div class="row dflex justify-content-center">
                <div class="col-md-7"> <img src='{{ asset(' images/newsletter/service_newsletter.webp') }}'
                        class="img-fluid"></div>
            </div>
            <div class="nesletter-header newsletter-h-custom">
                <h2> Your exclusive newsletter advantages:</h2>
                <p>+ Benefit from special promotions for newsletter subscribers</p>
                <p>+ Receive all the latest news from fackelmann.de 2-3 times a week </p>
                <p>+ Look forward to a 15% welcome discount after successful newsletter registration</p>
                <p>+ Receive a discount for the 1-year newsletter anniversary and also if you specify your date of birth
                    for birthday</p>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-md-7">
                    <div class="newsleter-form newsletter-form-main" id="subscribe-msg-box">
                        <h2>SUBSCRIBE TO NEWSLETTER</h2>
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