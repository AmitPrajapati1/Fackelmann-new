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

    /* banner */
    .slider-area-careers {
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

    .main-career {
        padding: 40px 0;
    }

    .career-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .career-main-form .input-file {
        height: 35px;
        line-height: 26px;
        padding: 8px;
    }

    .career-main-form {
        margin: 0 auto;
        padding: 20px;
        background: #ecf0f1;
        border: 1px solid #ddd;
        border-radius: 5px;
        text-align: left;
    }

    .career-main-form h2 {
        font-size: 32px;
        color: var(--text-red);
        text-transform: uppercase;
        padding-bottom: 25px;
        /* margin-bottom: 20px; */
        text-align: center;
    }

    .career-form {
        margin-bottom: 0;
    }

    .career-main-form input[type="text"],
    .career-main-form input[type="email"],
    .career-main-form input[type="tel"],
    .career-main-form input[type="file"],
    .career-main-form select {
        width: 100%;
        padding: 6px 12px;
        margin-bottom: 3px;
        border: 1px solid #ccc;
        font-size: 14px;
        background-color: var(--white);
        color: #969191;
        border-radius: 4px;
        height: 34px;
    }

    .career-main-form select {
        background-color: #f5f5f5 !important;
    }

    .career-main-form input:focus,
    .career-main-form select:focus {
        border: 1px solid #000;
        outline: none;
        box-shadow: none;
    }

    .career-main-form .input-file {
        display: block;
        width: 100%;
        padding: 6px 12px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        font-size: 14px;
        background-color: #f8f9fa;
        text-align: left;
        cursor: pointer;
        border-radius: 4px;
        color: #969191;
    }

    .career-main-form .career-msg {
        display: block;
        font-size: 12px;
        color: #ff0000;
        margin-bottom: 10px;
    }

    .career-msg {
        color: red;
        font-size: 0.75rem;
        margin-top: 0px;
        display: block;
    }

    .spacer {
        height: 20px;
    }

    .career-form>label,
    .career-label {
        font-weight: 500;
        font-size: 16px;
        color: #333;
        margin-bottom: 1px;
        display: block;
    }



    @media (max-width: 576px) {
        .main-career {
            padding: 20px 0;
        }

        .career-main-form {
            padding: 15px;
        }

        .career-main-form h2 {
            font-size: 20px;
        }

        .career-main-form input[type="text"],
        .career-main-form input[type="email"],
        .career-main-form input[type="tel"],
        .career-main-form input[type="file"],
        .career-main-form select {
            padding: 8px;
            font-size: 12px;
        }

        .career-main-form .input-file {
            font-size: 12px;
        }

        .career-main-form .career-msg {
            font-size: 10px;
        }

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

    #form-status-msg.success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    #form-status-msg.error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
</style>

<div class="slider-area-careers" id="home-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img data-desktop-src="assets/images/career/Careers_banner.webp"
                    data-mobile-src="assets/images/career/Careers_banner.webp" alt="">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="banner-nav banner-prev">&#10094;</div>
        <div class="banner-nav banner-next">&#10095;</div>
    </div>
</div>


<main>
    <section class="main-career">
        <div class="container career-container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7">
                    <div class="newsleter-form career-main-form" id="job-msg-box">
                        <h2>Apply Now</h2>
                        <div id="form-status-msg"
                            style="display: none; font-size: 14px; margin-bottom: 15px; padding: 10px; border-radius: 4px;">
                        </div>

                        <form id="jobs-frm">
                            <input type="hidden" name="action_type" value="job-enquiry">
                            <div class="form-group career-form required">
                                <label class="control-label career-label" for="name">Name</label>
                                <input type="text" name="name" id="name">
                                <span class="message career-msg" id="msgname"></span>
                            </div>
                            <div class="form-group career-form required">
                                <label class="control-label career-label" for="email">Email</label>
                                <input type="text" name="email" id="email">
                                <span class="message career-msg" id="msgemail"></span>
                            </div>
                            <div class="form-group career-form required">
                                <label class="control-label career-label" for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile">
                                <span class="message career-msg" id="msgmobile"></span>
                            </div>
                            <div>
                                <label class="control-label career-label" for="designation">Applying for</label>
                                <select name="designation" id="designation">
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="Human Resource">Human Resource</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Sales">Sales</option>
                                    <option value="IT">IT</option>
                                    <option value="Warehouse">Warehouse</option>
                                    <option value="Supply Chain">Supply Chain</option>
                                </select>
                                <span class="message career-msg" id="msgdesignation"></span>
                            </div>

                            <div class="form-group career-form required">
                                <label class="control-label career-label" for="file_1">Upload Resume</label>
                                <label for="file_1" class="input-file">Upload Resume (PDF only)
                                    <input type="file" name="file_1" id="file_1" accept=".pdf"
                                        placeholder="Attach Resume" style="visibility:hidden;">
                                </label>
                                <span class="message career-msg" id="msgfile_1"></span>
                                <span id="file-name-display"
                                    style="font-size: 13px; color: #333; display: block; margin-top: 5px;"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <button type="button" id="authenticateJob"
                                    class="btn btn-type-1 d-inline-block mt-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="spacer"></div>
    <div class="spacer"></div>
</main>


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

<script>
    function showStatusMessage(type, message) {
        const msgBox = document.getElementById('form-status-msg');
        msgBox.className = '';
        msgBox.classList.add(type === 'success' ? 'success' : 'error');
        msgBox.textContent = message;
        msgBox.style.display = 'block';
        msgBox.scrollIntoView({ behavior: 'smooth' });
    }

    document.getElementById('authenticateJob').addEventListener('click', function () {
        let isValid = true;

        document.querySelectorAll('.career-msg').forEach(msg => msg.textContent = '');
        document.getElementById('form-status-msg').style.display = 'none';

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const mobile = document.getElementById('mobile').value.trim();
        const designation = document.getElementById('designation').value.trim();
        const fileInput = document.getElementById('file_1');
        const file = fileInput.files[0];

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const mobileRegex = /^[0-9]{10}$/;

        if (name === '') {
            document.getElementById('msgname').textContent = 'Please enter your name.';
            isValid = false;
        }

        if (email === '') {
            document.getElementById('msgemail').textContent = 'Please enter your email.';
            isValid = false;
        } else if (!emailRegex.test(email)) {
            document.getElementById('msgemail').textContent = 'Please enter a valid email.';
            isValid = false;
        }

        if (mobile === '') {
            document.getElementById('msgmobile').textContent = 'Please enter your mobile number.';
            isValid = false;
        } else if (!mobileRegex.test(mobile)) {
            document.getElementById('msgmobile').textContent = 'Enter a valid 10-digit number.';
            isValid = false;
        }

        if (designation === '') {
            document.getElementById('msgdesignation').textContent = 'Please select a designation.';
            isValid = false;
        }

        if (!file) {
            document.getElementById('msgfile_1').textContent = 'Please upload your resume.';
            isValid = false;
        } else if (file.type !== 'application/pdf') {
            document.getElementById('msgfile_1').textContent = 'Only PDF files allowed.';
            isValid = false;
        }

        if (isValid) {
            showStatusMessage('success', 'Your application has been submitted successfully.');
        } else {
            showStatusMessage('error', 'Please fill in all required fields before submitting the form.');
        }
    });

    document.getElementById('file_1').addEventListener('change', function () {
        const fileDisplay = document.getElementById('file-name-display');
        const file = this.files[0];
        if (file) {
            const fileSize = (file.size / 1024).toFixed(1); // size in KB
            fileDisplay.textContent = `${file.name} (${fileSize} KB)`;
        } else {
            fileDisplay.textContent = '';
        }
    });
</script>


<?php include('includes/footer.php'); ?>