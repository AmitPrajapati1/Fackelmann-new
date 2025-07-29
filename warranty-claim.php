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
        --text-red: #c51a30;
    }

    .slider-area-warranty-claim {
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

    .warranty-form {
        background-color: var(--bg-gray) !important;
        padding: 20px;
    }

    .warranty-form h2 {
        color: var(--text-red);
        font-weight: 500 !important;
    }

    .form-control-warranty {
        border: 1px solid var(--bg-gray) !important;
        border-radius: 0 !important;
        color: var(--text-gray) !important;
        font-weight: 400 !important;
        height: 35px !important;
        padding: 10px 14px !important;
        background-color: var(--white) !important;
        margin: 5px 0 !important;
        width: 100% !important;
    }

    .form-control-warranty:focus {
        background-color: var(--bg-gray) !important;
        border-color: var(--text-gray) !important;
        box-shadow: none !important;
        color: var(--text-gray) !important;
    }

    .warranty-form .input-file,
    .newsleter-form .input-file {
        border: none !important;
        background-color: white !important;
        margin: 3px 0px !important;
        color: #595959 !important;
        font-weight: 100;
    }

    .input-file.errorWarranty {
        border: 1px dashed red;
        border-radius: 4px;
    }

    .warranty-form .input-file {
        height: 35px !important;
        line-height: 24px !important;
    }

    .warranty-form textarea {
        border: 1px solid var(--bg-gray) !important;
        border-radius: 0 !important;
    }

    .custom-label-warranty {
        font-weight: 400 !important;
    }

    .warranty-msg {
        color: red;
        font-size: 12px;
        margin-top: 0px;
        margin-left: 3px;
        display: block;
    }

    .errorWarranty {
        border: 1px solid red !important;
    }

    @media (max-width: 576px) {
        .container {
            padding: 10px !important;
        }

        .warranty-form {
            padding: 15px !important;
        }

        .form-control-warranty,
        textarea {
            font-size: 0.85rem !important;
            height: 30px !important;
            padding: 10px 12px !important;
            margin: 5px 0 !important;
        }

        textarea {
            min-height: 80px !important;
        }

        .warranty-form h2 {
            font-size: 1.3rem !important;
        }

        .warranty-form .input-file {
            line-height: 26px !important;
            font-size: 0.85rem !important;
            padding: 7px 12px !important;
            margin: 5px 0 !important;
            font-weight: 100;
        }
    }

    @media (max-width: 768px) {

        .warranty-form h2 {
            font-size: 1.5rem !important;
        }

        .col-md-6,
        .col-md-12 {
            margin-bottom: 1px !important;
        }

        .warranty-button {
            width: 100% !important;
            padding: 12px !important;
        }

        .warranty-input-file {
            font-size: 0.85rem !important;
            padding: 4px !important;
        }
    }

    input::placeholder,
    textarea::placeholder {
        font-size: 0.85rem;
        color: var(--text-gray);
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    textarea,
    select {
        background-color: #fff !important;
        border-color: var(--bg-gray) !important;
        color: var(--text-gray) !important;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="tel"]:focus,
    input[type="date"]:focus,
    textarea:focus,
    select:focus {
        background-color: #fff !important;
        border-color: var(--text-gray) !important;
        outline: none;
        box-shadow: none !important;
    }

    



    .btn-type-1 {
        padding: 12px 30px;
        margin: 15px 0;
        color: var(--white);
        background: repeating-linear-gradient(-45deg, #bf0019, #bf0019 5px, #c51a30 5px, #c51a30 7px);
        font-weight: 600;
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        border-radius: 0;
        display: inline-block;
        transition: background 0.15s ease-in-out;
        width: 100%;
        max-width: 200px;
        text-align: center;
    }

    .btn-type-1:hover {
        color: var(--white) !important;
    }

    @media (max-width: 480px) {
        .btn-type-1 {
            padding: 10px 20px;
            font-size: 14px;
            max-width: 160px;
        }

    }


    .input-file {
        position: relative;
        display: block;
        border: 1px dashed var(--silver);
        padding: 8px 12px;
        background-color: var(--white);
        color: var(--text-gray) !important;
        font-size: 0.85rem;
        cursor: pointer;
        width: 100%;
        text-align: left;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        border-radius: 4px;
    }

    /* Hide actual file input */
    .input-file input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        height: 100%;
        width: 100%;
        cursor: pointer;
    }

    /* On hover */
    .input-file:hover {
        background-color: var(--bg-gray);
        color: var(--black);
        border-color: var(--text-gray);
    }


    textarea[name="comment"] {
        width: 100%;
        min-height: 120px;
        resize: vertical;
        padding: 10px 14px;
        font-size: 0.85rem;
        color: var(--text-gray);
    }


    @media (max-width: 576px) {
        .input-file {
            font-size: 0.8rem;
            padding: 6px 10px;
        }

        textarea[name="comment"] {
            min-height: 100px;
            font-size: 0.8rem;
        }
    }

    .warranty-alert {
        padding: 10px 15px;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
        margin: 15px 0;
    }

    .warranty-alert.success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .warranty-alert.error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .custom-label-contact {
        color: var(--text-red) !important;
        font-weight: 400;
        margin-bottom: 2px;
        display: inline-block;
        font-size: 14px;
        text-decoration: none !important;
    }

    .custom-label-contact a {
        color: var(--text-red);
        text-decoration: none;
    }

    .custom-label-contact a:hover {
        text-decoration: underline;
    }

    input[type="date"] {
        font-size: 0.85rem;
        height: 35px;
        padding: 10px 14px;
        color: var(--text-gray);
        background-color: var(--white);
        border: 1px solid var(--bg-gray);
    }

    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px var(--white) inset !important;
        box-shadow: 0 0 0px 1000px var(--white) inset !important;
        -webkit-text-fill-color: var(--text-gray) !important;
        transition: background-color 9999s ease-in-out 0s !important;
    }

</style>
<div class="slider-area-warranty-claim" id="home-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img data-desktop-src="assets/images/banners/warranty-claim-banner.jpeg"
                    data-mobile-src="assets/images/banners/warranty-claim-banner.jpeg" alt="">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="banner-nav banner-prev">&#10094;</div>
        <div class="banner-nav banner-next">&#10095;</div>
    </div>
</div>

<main id="main">
    <div class="container" style="padding: 70px 0 !important;">
        <div class="row dflex justify-content-center">
            <div class="col-md-8" id="complaint-msg-box">
                <form id="complaint-frm">
                    <input type="hidden" name="action_type" value="complaint-enquiry">
                    <div class="return-form warranty-form">
                        <h2>Warranty Claim Registration</h2>
                        <div id="success-msg" class="warranty-alert success" style="display:none;">
                            Your warranty claim has been submitted successfully.
                        </div>
                        <div id="error-msg" class="warranty-alert error" style="display:none;">
                            There was an error submitting your claim. Please check the form and try again.
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Your Name*"
                                    class="form-control form-control-warranty" required>
                                <span class="message warranty-msg" id="msgname"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Your Email*"
                                    class="form-control form-control-warranty" required>
                                <span class="message warranty-msg" id="msgemail"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" name="mobile" placeholder="Your Mobile No.*"
                                    class="form-control form-control-warranty" required>
                                <span class="message warranty-msg" id="msgmobile"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="address" placeholder="Your Address*"
                                    class="form-control form-control-warranty" required>
                                <span class="message warranty-msg" id="msgaddress"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="pincode" placeholder="Your Pincode*"
                                    class="form-control form-control-warranty" required>
                                <span class="message warranty-msg" id="msgpincode"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="product_number" placeholder="Product Number*"
                                    class="form-control form-control-warranty">
                                <span class="message warranty-msg" id="msgproduct_number"></span>
                            </div>

                            <div class="col-md-6">
                                <input id="date" class="form-control form-control-warranty" type="date"
                                    name="purchase_date" required>
                                <span class="message warranty-msg" id="msgpurchase_date"></span>
                            </div>


                            <div class="col-md-6">
                                <label for="file_1" class="input-file warranty-input-file">Upload Bill (PDF or Image)
                                    <input type="file" name="file_1" id="file_1" placeholder="Attach Bill/Invoice Here"
                                        accept=".pdf,.jpeg,.jpg" style="visibility:hidden;">
                                </label>
                                <span class="message warranty-msg" id="msgfile_1"></span>
                            </div>
                            <small id="file-name-display" style="display:block; margin-top:5px; color:#595959;"></small>



                            <div class="col-md-12 pt-1">
                                <textarea name="comment" placeholder="Complaint Remark"></textarea>
                                <span class="message warranty-msg" id="msgcomment"></span>
                            </div>
                            <div class="col-md-12">
                                <p style="font-weight: 500;">Privacy Policy</p>
                                <label class="custom-label-warranty mb-0"
                                    style="font-size: 14px !important; display:block;">
                                    <input type="checkbox" name="terms" value="1" />&nbsp;I have read and understood the
                                    Privacy Policy.<span class="required-field">*</span>
                                    <a href="#" target="_blank" class="custom-label-contact">Read More</a>
                                </label>
                                <span class="message warranty-msg" id="msgterms" style="display:block;"></span>


                                <label class="custom-label-warranty" style="font-size: 14px !important">
                                    <input type="checkbox" name="news" value="1" />&nbsp;I wish to receive the latest
                                    news and offers from Fackelmann India
                                </label>
                                <span class="message warranty-msg" id="msgnews"></span>
                            </div>

                            <div class="col-md-12 d-flex justify-content-center">
                                <button class="btn btn-type-1 warranty-button" type="button"
                                    id="authenticateComplaint">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php'); ?>
<script>
    window.addEventListener("load", function () {
        // Banner
        function updateBannerImages() {
            const isDesktop = window.innerWidth > 767;
            document.querySelectorAll('[data-mobile-src]').forEach(img => {
                img.src = isDesktop
                    ? img.getAttribute('data-desktop-src')
                    : img.getAttribute('data-mobile-src');
            });
        }

        window.addEventListener('resize', updateBannerImages);
        updateBannerImages();


        const slideCount = document.querySelectorAll('.swiper-slide').length;
        const swiper = new Swiper('.swiper', {
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
        });

        if (slideCount <= 1) {
            document.querySelector('.banner-prev')?.classList.add('d-none');
            document.querySelector('.banner-next')?.classList.add('d-none');
            document.querySelector('.swiper-pagination')?.classList.add('d-none');
        }
        // Banner

        const fileInput = document.getElementById('file_1');
        const fileNameDisplay = document.getElementById('file-name-display');

        if (fileInput) {
            fileInput.addEventListener('change', function () {
                fileNameDisplay.textContent = fileInput.files.length > 0
                    ? `Selected file: ${fileInput.files[0].name}`
                    : '';
            });
        }

        const submitBtn = document.getElementById('authenticateComplaint');
        if (submitBtn) {
            submitBtn.addEventListener('click', function () {
                let isValid = true;

                const successMsg = document.getElementById('success-msg');
                const errorMsg = document.getElementById('error-msg');
                successMsg.style.display = 'none';
                errorMsg.style.display = 'none';

                function validateField(name, validator = null, errorMessage = 'This field is required.') {
                    const field = document.querySelector(`[name="${name}"]`);
                    const errorSpan = document.getElementById(`msg${name}`);
                    if (!field || !errorSpan) return;

                    field.classList.remove('errorWarranty');
                    errorSpan.textContent = '';

                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('errorWarranty');
                        errorSpan.textContent = errorMessage;
                    } else if (validator && !validator(field.value.trim())) {
                        isValid = false;
                        field.classList.add('errorWarranty');
                        errorSpan.textContent = errorMessage;
                    }
                }

                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const mobileRegex = /^\d{10}$/;

                validateField('name');
                validateField('email', val => emailRegex.test(val), 'Enter a valid email.');
                validateField('mobile', val => mobileRegex.test(val), 'Enter a valid 10-digit mobile number.');
                validateField('address');
                validateField('pincode');
                validateField('product_number');
                validateField('purchase_date');
                validateField('file_1', () => fileInput.files.length > 0, 'Please upload a file.');

                const terms = document.querySelector('[name="terms"]');
                const msgterms = document.getElementById('msgterms');
                msgterms.textContent = '';
                if (!terms || !terms.checked) {
                    isValid = false;
                    if (msgterms) msgterms.textContent = 'Please accept the Privacy Policy.';
                }

                if (isValid) {
                    successMsg.style.display = 'block';
                    errorMsg.style.display = 'none';
                } else {
                    errorMsg.style.display = 'block';
                    successMsg.style.display = 'none';
                }
            });
        }
    });
</script>