<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

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

    .contact-us-banner {
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
        .contact-us-banner {
            height: auto;
            min-height: 150px;
            background-size: cover;
            background-position: center;
        }
    }

    .form-control-contact {
        border: 1px solid var(--bg-gray);
        border-radius: 0;
        color: var(--text-gray);
        font-weight: 400;
        height: 35px;
        padding: 10px 14px;
        background-color: var(--white);
        width: 100%;
        outline: none;
    }

    .form-control-contact:focus {
        background-color: var(--bg-gray);
        border-color: var(--text-gray);
        box-shadow: none;
        color: var(--text-gray);
    }

    .form-control-msg {
        border: 1px solid var(--bg-gray);
        border-radius: 0;
        color: var(--text-gray);
        font-weight: 400;
        background-color: var(--white);
        width: 100%;
        padding: 10px 14px;
        outline: none;
        margin: 5px 0px;
    }

    .form-control-msg:focus {
        background-color: var(--bg-gray);
        border-color: var(--text-gray);
        box-shadow: none;
        color: var(--text-gray);
    }

    .form-control-dropdown {
        border: 1px solid var(--bg-gray);
        border-radius: 0;
        color: var(--text-gray);
        font-weight: 400;
        height: 35px;
        padding: 8px 14px;
        background-color: var(--white);
        width: 100%;
        font-size: 14px;
        outline: none;
    }

    /* .form-control-dropdown:focus {
        background-color: var(--bg-gray);
        border-color: var(--text-gray);
        box-shadow: none;
        color: var(--text-gray);
    } */

    .form-control-dropdown option[disabled] {
        color: #b0b0b0;
        background-color: var(--bg-gray);
    }


    .form-control-dropdown,
    .form-control-dropdown:focus,
    .form-control-dropdown:valid {
        background-color: var(--bg-gray);
        border-color: var(--black);
        color: var(--text-gray);
        box-shadow: none;
    }


    .contact-main {
        padding: 35px;
    }

    .add-details {
        padding: 35px;
    }

    .add-details h3 {
        color: var(--text-red);
    }

    .g-map {
        padding: 20px;
    }

    @media (max-width: 576px) {
        .contact-main {
            padding: 40px;
        }

        .leave-msg {
            font-size: 25px;
        }

        .add-details h3 {
            font-size: 25px;
        }
    }

    .leave-msg {
        font-size: 32px;
        color: var(--text-red);
        text-transform: uppercase;
        padding-bottom: 25px;
    }

    /* .add-details table td {
        color: var(--text-gray);
    } */

    .add-details table td a {
        color: var(--text-red);
        text-decoration: none;
    }

    .add-details table td a:hover {
        text-decoration: underline;
    }

    input::placeholder,
    textarea::placeholder {
        color: var(--text-gray);
        opacity: 1;
        font-size: 13px;
    }

    .form-control-dropdown:invalid {
        color: var(--text-gray);
        font-size: 13px;
    }

    .contact-custom-select {
        background-color: var(--white);
        border: 1px solid var(--bg-gray);
        border-radius: 0;
        color: var(--text-gray);
        font-weight: 400;
        height: 35px;
        padding: 8px 11px;
        font-size: 14px;
    }

    .contact-main input[type="text"],
    .contact-main input[type="tel"],
    .contact-main input[type="email"],
    .contact-main select {
        margin: 5px 0;
    }


    input.is-invalid,
    select.is-invalid,
    textarea.is-invalid {
        border: 1px solid #e2e2e2;
    }

    .form-control.is-invalid {
        border-color: #e2e2e2 !important;
    }

    .contact-msg {
        font-size: 0.75rem;
        color: red;
        margin-top: 0px;
        margin-left: 2px;
        display: block;
        margin-bottom: 5px;

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

    .custom-label-contact {
        /* color: var(--text-gray); */
        font-weight: 400;
        margin-bottom: 2px;
        display: inline-block;
        font-size: 14px;
    }

    .custom-label-contact a {
        color: var(--text-red);
        text-decoration: none;
    }

    .custom-label-contact a:hover {
        text-decoration: underline;
    }

    .privacy-policy-container {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        flex-wrap: nowrap;
    }

    .required-field {
        color: var(--text-gray);
        font-weight: 400;
        margin-bottom: 10px;
    }

    @media (max-width: 576px) {
        .privacy-policy-container {
            flex-wrap: wrap;
        }
    }

    .form-control-dropdown:focus {
        background-color: var(--bg-gray);
        border-color: var(--black);
        box-shadow: none;
        color: var(--text-gray) !important;
    }

    .add-details table td.icon-cell {
        vertical-align: top;
        color: var(--text-red);
    }

    /* banner */
    .slider-area-contact-us {
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

<div class="slider-area-contact-us" id="home-slider">
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

<main id="main" style="background-color: #F5F5F5">
    <section class="sec-padding">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12" id="contact-msg-box">
                    <form id="contact-frm">
                        <input type="hidden" name="action_type" value="contact-enquiry" />
                        <div class="contact-form contact-main">
                            <p class="leave-msg">Leave a Message</p>
                            <div id="formAlert"
                                style="display: none; padding: 10px 15px; margin-bottom: 20px; border-radius: 4px; font-weight: 500;">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Your Name*"
                                        class="form-control form-control-contact" required>
                                    <span class="message contact-msg" id="msgname"></span>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Your Email*"
                                        class="form-control form-control-contact" required>
                                    <span class="message contact-msg" id="msgemail"></span>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="mobile" placeholder="Your Mobile No.*"
                                        class="form-control form-control-contact" required>
                                    <span class="message contact-msg" id="msgmobile"></span>
                                </div>
                                <div class="col-md-6">
                                    <select name="state"
                                        class="form-control-dropdown custom-select contact-custom-select" required>
                                        <option value="" disabled selected>State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                    <span class="message contact-msg" id="msgstate"></span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="pincode" placeholder="Your Pincode*"
                                        class="form-control form-control-contact" required>
                                    <span class="message contact-msg" id="msgpincode"></span>
                                </div>
                                <div class="col-md-6">
                                    <select name="subject"
                                        class="form-control-dropdown custom-select contact-custom-select" required>
                                        <option value="" disabled selected>Subject</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <span class="message contact-msg" id="msgsubject"></span>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="comment" placeholder="Message" class="form-control-msg"></textarea>
                                    <!-- <span class="message contact-msg" id="msgcomment"></span> -->
                                </div>
                                <div class="col-md-12">
                                    <p
                                        style="font-size: large; font-weight: 600; color: var(--text-gray); margin-top: 10px;">
                                        Privacy Policy</p>
                                    <div class="privacy-policy-container">
                                        <label class="custom-label-contact">
                                            <input type="checkbox" name="terms" value="1" required /> I have read and
                                            understood the <a href="privacy-policy.php" target="_blank"
                                                class="custom-label-contact">Privacy Policy</a>
                                            <span class="required-field">*</span>
                                        </label>
                                    </div>
                                    <span class="message contact-msg" id="msgterms"></span>
                                    <label class="custom-label-contact">
                                        <input type="checkbox" name="news" value="1" /> I wish to receive the latest
                                        news and offers from Fackelmann India
                                    </label>
                                    <span class="message contact-msg" id="msgnews"></span>
                                </div>
                                <div class="col-md-12 d-flex">
                                    <button class="btn-type-1 contact-btn" type="button"
                                        id="authenticateContact">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="address add-details">
                        <h3>Contact Details</h3>
                        <table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td colspan='2'>
                                        <h4>Gurgaon</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="icon-cell"><i class='bx bx-map bx-sm'></i></td>
                                    <td>
                                        <p>Corporate Office:<br />
                                            Fackelmann India Kitchenware Pvt. Ltd.<br />
                                            7th Floor, Building No 5, Tower-A, DLF Cyber City,<br />
                                            DLF Phase-3, Gurugram - 122002,<br />
                                            Haryana</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="icon-cell"><i class='bx bx-envelope bx-sm'></i></td>
                                    <td><a href="mailto:consumer@fackelmann.co.in">consumer@fackelmann.co.in</a></td>
                                </tr>
                                <tr>
                                    <td class="icon-cell"><i class='bx bx-phone bx-sm'></i></td>
                                    <td><a href="tel:+91-8800997550">+91-8800997550</a></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p>(Weekdays: 9:30 AM to 6:00 PM (Saturday, Sunday & National Holidays Closed))
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6">
                    <section class="pt-70 google-map g-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.4745137179543!2d77.08709131507949!3d28.495367982472132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16c7fa556d1d8e2b!2sFackelmann%20India!5e0!3m2!1sen!2sin!4v1649070181180!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </section>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>

<script>
    document.getElementById("authenticateContact").addEventListener("click", function () {
        const form = document.getElementById("contact-frm");

        // Reset messages
        document.querySelectorAll(".contact-msg").forEach(el => el.textContent = "");
        document.querySelectorAll(".is-invalid").forEach(el => el.classList.remove("is-invalid"));

        const alertBox = document.getElementById("formAlert");
        alertBox.style.display = "none";
        alertBox.textContent = "";
        alertBox.className = "";

        let isValid = true;

        function showError(name, message) {
            const input = form[name];
            input.classList.add("is-invalid");
            document.getElementById("msg" + name).textContent = message;
            isValid = false;
        }

        // Form validations
        const name = form["name"].value.trim();
        if (!name) showError("name", "Name is required.");

        const email = form["email"].value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email) {
            showError("email", "Email is required.");
        } else if (!emailRegex.test(email)) {
            showError("email", "Invalid email format.");
        }

        const mobile = form["mobile"].value.trim();
        const mobileRegex = /^[6-9]\d{9}$/;
        if (!mobile) {
            showError("mobile", "Mobile number is required.");
        } else if (!mobileRegex.test(mobile)) {
            showError("mobile", "Enter a valid 10-digit mobile number.");
        }

        const state = form["state"].value;
        if (!state) showError("state", "Please select a state.");

        const pincode = form["pincode"].value.trim();
        const pincodeRegex = /^[1-9][0-9]{5}$/;
        if (!pincode) {
            showError("pincode", "Pincode is required.");
        } else if (!pincodeRegex.test(pincode)) {
            showError("pincode", "Invalid pincode.");
        }

        const subject = form["subject"].value;
        if (!subject) showError("subject", "Please select a subject.");

        // const comment = form["comment"].value.trim();
        // if (!comment) showError("comment", "Message cannot be empty.");

        const terms = form["terms"].checked;
        if (!terms) showError("terms", "You must agree to the privacy policy.");

        if (isValid) {
            // Simulate success
            alertBox.style.display = "block";
            alertBox.style.backgroundColor = "#d4edda";
            alertBox.style.color = "#155724";
            alertBox.textContent = "Your message has been successfully submitted!";

            form.reset();

            // Optional: auto-hide the message after 5 seconds
            setTimeout(() => {
                alertBox.style.display = "none";
            }, 5000);
        } else {
            // Show error message
            alertBox.style.display = "block";
            alertBox.style.backgroundColor = "#f8d7da";
            alertBox.style.color = "#721c24";
            alertBox.textContent = "Please correct the highlighted errors and try again.";
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