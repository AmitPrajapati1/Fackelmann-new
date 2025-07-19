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
    }

    .form-control-dropdown {
        border: 1px solid var(--bg-gray);
        border-radius: 0;
        color: var(--text-gray);
        font-weight: 400;
        height: 39px;
        background-color: var(--white);
        width: 100%;
        font-size: 14px;
    }

    .form-control-dropdown:focus {
        background-color: var(--bg-gray);
        border-color: var(--text-gray);
        box-shadow: none;
        color: var(--text-gray);
    }

    .form-control-msg:focus {
        background-color: var(--bg-gray);
        border-color: var(--text-gray);
        box-shadow: none;
        color: var(--text-gray);
    }

    .btn-type-2 {
        border: none;
        text-transform: uppercase;
        font-size: 20px;
        letter-spacing: 2px;
    }

    .contact-main {
        padding: 50px;
    }

    .add-details {
        padding: 40px;
    }

    .add-details h3 {
        color: var(--secondary-color);
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

        color: var(--secondary-color);

        text-transform: uppercase;
        padding-bottom: 25px;
    }

    tr td a {
        color: #c51a30;
    }

    input::placeholder {
        color: var(--text-gray);
    }

    .form-control-msg::placeholder {
        color: var(--text-gray);
        opacity: 1;
    }

    .contact-custom-select {
        background-color: var(--white);
        border: 0;
        border-radius: 0;
        color: var(--text-gray);
        font-weight: 400;
        height: 2.1875rem;
        line-height: 1.2;
        padding-left: .9rem;
    }

    .custom-label-contact {
        font-weight: 400;
    }

    .form-control-dropdown.contact-custom-select {
        background-color: var(--white);
        /* border: 1px solid #ccc; */
        color: #333;
    }

    .form-control-dropdown.contact-custom-select option:hover {
        background-color: #d3d3d3;
        color: #333;
    }

    .form-control-dropdown.contact-custom-select option:checked {
        background-color: #a9a9a9;
        color: var(--white);
    }

    .form-control-dropdown.contact-custom-select option:focus {
        border-color: #a9a9a9;
        box-shadow: 0 0 5px rgba(169, 169, 169, 0.5);
        outline: none;
    }

    .contact-main input[type="text"] {
        margin: 5px 0;
    }

    .contact-main input[type="tel"] {
        margin: 5px 0;
    }

    .contact-main select {
        margin: 5px 0;
        padding: 10px 14px;
        height: 35px;
    }

    .contact-main input[type="email"] {
        margin: 5px 0;
    }

    .contact-btn {
        background: var(--secondary-color);
    }

    .contact-btn:hover {
        color: var(--white);
        background: var(--btn-hover-gray);
    }

    input.is-invalid,
    select.is-invalid,
    textarea.is-invalid {
        border: 1px solid red;
    }

    .contact-msg {
        font-size: 0.75rem;
        color: red;
        margin-top: 0px;
        margin-left: 2px;
        display: block;
    }

    .btn-type-1 {
        padding: 15px 25px;
        margin: 15px 0;
        color: white;
        background: repeating-linear-gradient(-45deg, #bf0019, #bf0019 5px, #c51a30 5px, #c51a30 7px);
        font-weight: bold;
        display: inline-block;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .btn-type-1:hover {
        color: white;
        background: #c51a30;
    }
</style>

<section class="contact-us-banner"></section>


<main id="main" style="background-color: #F5F5F5">
    <section class="sec-padding">
        <div class="container" data-aos="fade-up">
            <div class="row" style="padding-bottom: 40px;">
                <div class="col-md-12" id="contact-msg-box">
                    <form id="contact-frm">
                        <input type="hidden" name="action_type" value="contact-enquiry" />
                        <div class="contact-form contact-main">
                            <p class="leave-msg">Leave a Message</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Your Name*"
                                        class="form-control form-control-contact" Required>
                                    <span class="message contact-msg" id="msgname"></span>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Your Email*"
                                        class="form-control form-control-contact" Required>
                                    <span class="message contact-msg" id="msgemail"></span>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="mobile" placeholder="Your Mobile No.*"
                                        class="form-control form-control-contact" Required>
                                    <span class="message contact-msg" id="msgmobile"></span>
                                </div>
                                <div class="col-md-6">
                                    <select name="state"
                                        class="form-control-dropdown custom-select contact-custom-select" Required>
                                        <option value="" selected>State</option>
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
                                        class="form-control form-control-contact" Required>
                                    <span class="message contact-msg" id="msgpincode"></span>
                                </div>
                                <div class="col-md-6">
                                    <select name="subject"
                                        class="form-control-dropdown custom-select contact-custom-select" Required>
                                        <option>Sales</option>
                                        <option>Other</option>
                                    </select>
                                    <span class="message contact-msg" id="msgsubject"></span>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="comment" placeholder="Message"
                                        class="form-control-msg mb-0"></textarea>
                                    <span class="message contact-msg" id="msgcomment"></span>
                                </div>
                                <div class="col-md-12">
                                    <p style="font-size: large; font-weight: 600; margin-top: 10px;">Privacy Policy</p>
                                    <div class="clearfix"></div>
                                    <label class="custom-label-contact mb-0">
                                        <input type="checkbox" name="terms" value="1" />&nbsp;I
                                        have read and
                                        understood the Privacy Policy.
                                    </label>
                                    <label class="mb-0">*Required field</label>

                                    <a href="#" target="_blank" class="custom-label-contact">Read More</a>
                                    <div class="clearfix"></div>
                                    <span class="message contact-msg" id="msgterms"></span>
                                    <div class="clearfix"></div>
                                    <label class="custom-label-contact">
                                        <input type="checkbox" name="news" value="1" />&nbsp;I wish
                                        to receive the
                                        latest news and offers from Fackelmann India</label>
                                    <div class="clearfix"></div>
                                    <span class="message contact-msg" id="msgnews"></span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-12 d-flex ">
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
                                        <h4 style="color: black">Gurgaon</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="bx bx-map bx-sm text-primary"></i></td>

                                    <td>
                                        <p style="color: black">Corporate Office:<br />
                                            Fackelmann Inda Kitchenware Pvt. Ltd.<br />
                                            7th Floor, Building No 5, Tower- A, DLF Cyber City, <br />
                                            DLF Phase- 3, Gurugram - 122002,<br />
                                            Haryana </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="bx bx-envelope bx-sm text-primary"></i></td>
                                    <td><a href="mailto:consumer@fackelmann.co.in">consumer@fackelmann.co.in</a></td>
                                </tr>
                                <tr>
                                    <td><i class="bx bx-phone-call bx-sm text-primary"></i></td>
                                    <td><a href="tel:+91-8800997550"> +91-8800997550</a></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="color: black">
                                        <p>(Weekdays:- 9: 30 AM to 6:00 PM (Saturday, Sunday & National Holidays
                                            Closed))
                                        </p>
                                    </td>
                                    <td>&nbsp;</td>
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
    <div class="clearfix"></div>
    </section>
</main>

<?php include('includes/footer.php'); ?>