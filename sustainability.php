<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<style>
    .sustainability-main {
        width: 100%;
        box-sizing: border-box;
    }

    .sustainability-b-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
        overflow-x: visible;
    }

    .sustainability-banner {
        background-image: url('assets/images/banners/sustainability/header-sustainability.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        height: 50vh;
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

    .sustainability-banner h2 {
        font-size: clamp(2rem, 5vw, 4rem);
        font-weight: 700;
        line-height: 1.2;
        margin: 0;
        padding: 0 20px;
    }

    .sustainability-section-padding {
        padding: 0 15px;
    }

    .journey {
        padding: 70px 0;
    }

    .sustainability-about-com {
        display: flex;
        flex-direction: column;
        gap: 15px;
        padding-top: 32px;
    }

    .sustainability-about-com img {
        width: 100%;
        height: auto;
        max-width: 300px;
        object-fit: contain;
    }

    .sustainability-about-com h2 {
        color: black;
        font-size: 20px;
        line-height: 1.3;
        margin: 0;
    }

    .sustainability-about-com p {
        color: #737373;
        font-size: 1rem;
        line-height: 1.6;
        margin: 0;
    }

    .video-controls {
        width: 100%;
        padding: 20px 0;
    }

    .video-controls video {
        width: 100%;
        height: auto;
        aspect-ratio: 16/9;
        object-fit: contain;
        display: block;
    }

    .strategy {
        background-color: #e4f1ee;
        padding: 60px 0;
    }

    .title-wrapper {
        margin-right: auto;
        width: 90%;
        padding: 40px 0px;
    }

    .mega-title {
        font-weight: 500;
        font-size: 60px;
        line-height: 1;
        margin: 0;
    }

    .cn-mint {
        color: #9ac3ba;
    }

    .cn-mintdark {
        color: #2f958e;
    }

    .info-p {
        text-align: justify;
        color: #333;
        font-size: 16px;
        line-height: 1.6;
        margin: 0;
    }

    .strategy-nav-panel {
        margin-top: 30px;
        background-color: #ffffff;
        /* Changed to white background */
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .tabs {
        display: flex;
        justify-content: center;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .tab-button {
        padding: 10px 20px;
        cursor: pointer;
        background: #f5f5f5;
        /* Light gray background for tabs */
        border: none;
        font-size: 16px;
        font-weight: 500;
        transition: all 0.3s ease;
        color: #333;
    }

    .tab-button.active {
        color: #2f958e;
        /* Mint dark for active tab text */
        background-color: #e0f2f0;
        /* Light mint background for active tab */
        /* border-color: #2f958e; */
    }

    .tab-content {
        display: none;
        padding-top: 20px;
    }

    .tab-content.active {
        display: block;
    }

    .strg-left {
        text-align: left;
        padding: 15px;
        /* background-color: #f9f9f9; */
        /* Light gray background for strg-left */
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .strg-left img {
        width: 100%;
        /* Responsive image width */
        max-width: 300px;
        /* Maintain max width for larger screens */
        height: auto;
        margin-bottom: 10px;
        object-fit: contain;
        /* Ensure image fits well */
    }

    .strg-left ul {
        list-style: disc;
        padding: 10px;
        margin: 10px 0px 16px;
    }

    .strg-left ul li {
        color: #8bc7c0;
        /* Mint shade for list items */
        font-size: 17px;
        margin: 0;
        padding: 5px 0;
    }

    .tab-pane p {
        color: #333;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    @media (min-width: 768px) {
        .sustainability-section-padding {
            padding: 0 30px;
        }

        .sustainability-b-container {
            padding: 0 30px;
        }

        .sustainability-about-com img {
            max-width: 250px;
        }

        .tab-button {
            font-size: 18px;
        }

        .strg-left img {
            max-width: 250px;
            /* Adjusted for tablet view */
        }
    }

    @media (min-width: 992px) {
        .sustainability-section-padding {
            padding: 0 45px;
        }

        .strg-left img {
            max-width: 300px;
            /* Restore max width for desktop */
        }
    }

    @media (max-width: 767px) {
        .sustainability-banner {
            background-attachment: scroll;
            height: 30vh;
            min-height: 150px;
            background-size: cover;
        }

        .sustainability-section-padding {
            padding: 0 10px;
        }

        .sustainability-about-com img {
            max-width: 100%;
        }

        .sustainability-about-com {
            padding-top: 1px;
        }

        .journey {
            padding: 40px 0;
        }

        .tabs {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-bottom: none;
            padding: 10px 0;
        }

        .tab-button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 12px 20px;
            font-size: 14px;
            text-align: center;
            /* border-radius: 5px; */
            background-color: #f5f5f5;
        }

        .tab-button.active {
            background-color: #e0f2f0;
            color: #2f958e;
            border-color: #2f958e;
        }

        .sustainability-b-container {
            padding: 0 10px;
            overflow: visible;
        }

        .strg-left {
            margin-bottom: 15px;
        }

        .tab-pane .row {
            flex-direction: column;
        }

        .tab-pane .col-md-4,
        .tab-pane .col-md-8 {
            width: 100%;
        }

        .mega-title {
            font-size: 40px;
        }

        .strg-left img {
            max-width: 100%;
            /* Fully responsive on mobile */
        }
    }

    .bcn-mintlight {
        background-color: #e4f1ee;
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .tabs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px 0;
        }

        .tab-button {
            margin: 5px;
            padding: 10px 15px;
            font-size: 16px;
            min-width: 150px;
            text-align: center;
        }

        .strg-left img {
            max-width: 200px;
            /* Adjusted for tablet view */
        }
    }
</style>

<section class="sustainability-banner">
    <h2>Let's Start<br>Together</h2>
</section>

<section class="journey sustainability-section-padding" data-aos="fade-up">
    <div class="container sustainability-b-container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="about-com sustainability-about-com">
                    <img src="assets/images/sustainability/climate_leaders.webp" alt="Fackelmann Brands">
                    <h2 class="fw-lighter">Fackelmann Brands: One of 50 Climate Leader Companies Worldwide</h2>
                    <p>The 50 Climate Leaders initiative highlights companies committed to sustainable business and
                        climate protection. Fackelmann Brands is part of this initiative, working toward the 17 UN
                        climate goals for sustainable development.</p>
                    <p><strong>Come with us on a journey into a greener future.</strong></p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="video-controls">
                    <video controls poster="assets/images/sustainability/sustainability_poster.png">
                        <source src="https://www.fackelmann.co.in/assets/img/SUSTAINABILITY.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="strategy white-bkg sec-padding sustainability-section-padding bcn-mintlight">
    <div class="container sustainability-container">
        <div class="title-wrapper pb-2">
            <h1 class="mega-title">
                <span class="cn-mint">OUR STRATEGY: THREE PILLARS</span><br><span class="cn-mintdark">FOR SUSTAINABLE
                    BUSINESS</span>
            </h1>
            <p class="info-p">Sustainable action is a matter of course for us. Many of our around 10,000 Fackelmann
                products are already designed for long-term use. We have been living the principle of sustainability
                since our foundation around 100 years ago: Heinrich Fackelmann laid the foundation for this as early as
                1919 with the first wooden kitchen gadgets. Our goal: We want to convert a large part of our products
                and packaging to sustainable materials by 2025. But not only that. So that we always stay focused on
                this path, we build on three points, which form the basis for all our activities:</p>
        </div>
        <div class="strategy-nav-panel" data-aos="fade-up">
            <div class="tabs">
                <button class="tab-button active" onclick="openTab('pills-home', event)">ENVIRONMENT &
                    RESOURCES</button>
                <button class="tab-button" onclick="openTab('pills-profile', event)">PRODUCTS & MATERIALS</button>
                <button class="tab-button" onclick="openTab('pills-contact', event)">PEOPLE & SOCIAL</button>
            </div>

            <div id="pills-home" class="tab-content active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="strg-left"> <img src="assets/images/sustainability/icon-umwelt-mint.svg"
                                alt="Environment & Resources">
                            <ul>
                                <li>Future-oriented alternatives for packaging</li>
                                <li>Intelligent manufacturing management</li>
                                <li>Efficient production processes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p>Deeply rooted in Germany and at home all over the world: This applies equally to our
                            products and their manufacture. At our headquarters in Hersbruck and Aichach in Bavaria,
                            we set the highest standards in our production and on the most closed energy and
                            recyclable material cycles: The wood waste from furniture production in Hersbruck is
                            burned in a biomass boiler and used to heat the entire site. The waste heat from
                            plastics production is used in a heat recovery system to heat the service water. We also
                            use photovoltaic systems in Aichach and Hersbruck to generate solar power.</p>
                        <p>At our production sites around the world, we attach great importance to using the
                            appropriate measures. The Hersbruck location has been climate-neutral since 2020, with
                            further locations to follow. We produce 6,387 tons of CO2 a year, which we offset
                            accordingly. This also includes transport routes from products to the customer and back
                            to us and, for example, business trips.</p>
                    </div>
                </div>
            </div>

            <div id="pills-profile" class="tab-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="strg-left"> <img src="assets/images/sustainability/icon-produkte-mint.svg"
                                alt="Products & Materials">
                            <ul>
                                <li>Sustainable materials for products and packaging</li>
                                <li>Long-term use</li>
                                <li>Easy recycling</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p>As a manufacturer, we want our products to be as durable, resource- and energy-efficient
                            as possible, as well as repair-friendly and recyclable. We always want to manufacture
                            products for a long service life and pursue the ideal of circular economy. That is why
                            we rely on materials without complex composition and easy to use. In order to reduce the
                            consumption of fossil raw materials, we are initially focusing on converting many
                            materials to materials that are completely or at least partially made from renewable or
                            recycled raw materials. Our goal is to offer the most competent range of sustainable
                            products in Europe. We started our development over 10 years ago with the so-called
                            "greens", kitchen gadgets made of plastic.</p>
                        <p>Today we use PE made from renewable raw materials and FSC ™ certified wood for our
                            “Ecolution” series. We are currently working on completely avoiding the use of feed
                            plants for sustainable materials. We are also taking the first steps with baking molds:
                            With our “Green Vision” baking molds, the wax from the Brazilian carnauba palm is being
                            used for coatings for the first time.</p>
                    </div>
                </div>
            </div>

            <div id="pills-contact" class="tab-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="strg-left"> <img src="assets/images/sustainability/icon-menschen-mint.svg"
                                alt="People & Social">
                            <ul>
                                <li>Certified manufacturing standards (BSCI, Sedex)</li>
                                <li>Certified social and labor standards</li>
                                <li>Social and social engagement</li>
                                <li>Corporate Health Management</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p>Of course for us: As a family company, the company family is particularly important.
                            Compliance with social standards and optimal working conditions for employees as well as
                            creating a positive working atmosphere are the focus in Germany and at our more than 40
                            company locations around the world. These standards are certified and approved both by
                            detailed internal audit systems and by higher-level regulations such as the BSCI. At our
                            headquarters in Hersbruck and Aichach, in particular, we benefit from above-average
                            years of service - our employees have been with the company for around 14 years on
                            average - but attach just as much importance to a balanced mix. 30% of our employees at
                            the headquarters in Hersbruck are under 30 years of age, the average age is 42 years. In
                            individual employee appraisals and regular feedback rounds, we jointly evaluate possible
                            areas of development in order to continuously develop. We also support the “By bike to
                            work” initiative, subsidize the use of public transport and promote company health
                            management with various sports and preventive measures such as yoga, Nordic walking and
                            running courses, lectures on topics such as healthy sleep or non-smoking, health days or
                            Pedometer Actions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function openTab(tabName, event) {
        event.preventDefault(); // Prevent any default behavior if applicable
        var i, tabcontent, tabbuttons;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.remove("active");
        }
        tabbuttons = document.getElementsByClassName("tab-button");
        for (i = 0; i < tabbuttons.length; i++) {
            tabbuttons[i].classList.remove("active");
        }
        document.getElementById(tabName).classList.add("active");
        event.currentTarget.classList.add("active");
    }

    // Initialize tabs on page load
    document.addEventListener('DOMContentLoaded', function () {
        openTab('pills-home', { currentTarget: document.querySelector('.tab-button.active') || document.querySelector('.tab-button') });
    });
</script>

<?php include('includes/footer.php'); ?>