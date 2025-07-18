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
        padding: 70px 15px;
    }

    /* .journey {
        padding: 70px 0;
    } */

    .sustainability-about-com {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .sustainability-about-com img {
        width: 100%;
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
    }

    .video-controls video {
        width: 100%;
        aspect-ratio: 16/9;
        object-fit: contain;
        display: block;
    }

    .strategy {
        background-color: #e4f1ee;
    }

    .title-wrapper {
        width: 100%;
        /* padding: 40px 0; */
    }

    .mega-title {
        font-weight: 500;
        font-size: 60px;
        line-height: 1;
        margin: 0;
        text-align: justify;
    }

    .cn-mint {
        /* color: #9ac3ba; */
        color: #c75b5b;

    }

    .cn-mintdark {
        /* color: #2f958e; */
        color: #bf0019;
    }

    .info-p {
        text-align: justify;
        /* text-align: center; */
        color: #54565a;
        font-size: 16px;
        line-height: 1.6;
        margin: 0;
    }

    .strategy-nav-panel {
        margin-top: 30px;
        background-color: #ffffff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .tabs {
        display: flex;
        justify-content: space-between;
    }

    .tab-button {
        flex: 1;
        padding: 10px 20px;
        cursor: pointer;
        background: white;
        border: none;
        font-size: 16px;
        font-weight: 500;
        color: #333;
        text-align: center;
    }

    .tab-button.active {
        /* background: #8bc7c0; */
        background: #cf939b;
        color: white;
        padding: 0.7rem 1rem;
    }

    .tab-content {
        display: none;
        padding: 25px;
    }

    .tab-content.active {
        display: block;
    }

    .strg-left {
        text-align: left;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .strg-left img {
        width: 100%;
        max-width: 300px;
        margin-bottom: 10px;
        object-fit: contain;
    }

    .strg-left ul {
        list-style: disc;
        padding: 10px;
        margin: 10px 0 16px;
    }

    .strg-left ul li {
        /* color: #8bc7c0; */
        color: #cf939b;
        font-size: 17px;
        margin: 0;
    }

    .tab-detail {
        color: #54565a;
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    @media (min-width: 768px) {
        /* .sustainability-section-padding {
            padding: 0 30px;
        } */

        .sustainability-b-container {
            padding: 0 30px;
        }

        .sustainability-about-com img {
            max-width: 250px;
        }

        .tab-button {
            font-size: 16px;
        }

        .strg-left img {
            max-width: 250px;
        }
    }

    @media (min-width: 992px) {
        /* .sustainability-section-padding {
            padding: 0 45px;
        } */

        .strg-left img {
            max-width: 300px;
        }
    }

    @media (max-width: 767px) {
        .sustainability-banner {
            background-attachment: scroll;
            height: 30vh;
            min-height: 150px;
            background-size: cover;
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
            flex-direction: column;
            padding: 10px 0;
        }

        .tab-button {
            width: 100%;
            margin-bottom: 10px;
            padding: 12px 20px;
            font-size: 14px;
            background-color: #f5f5f5;
        }

        .tab-button.active {
            background-color: #e0f2f0;
            color: #2f958e;
            /* color: #bf0019; */
        }

        .sustainability-b-container {
            padding: 0 10px;
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
            font-size: 44px;
        }

        .strg-left img {
            max-width: 100%;
        }

        .tab-content {
            padding: 9px;
        }

        .sustainability-section-padding {
            padding: 30px 10px;
        }


    }

    .bcn-mintlight {
        /* background-color: #e4f1ee; */
        background-color: #f4e6e7
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .tabs {
            flex-wrap: nowrap;
            justify-content: space-between;
            padding: 0 0 10px;
        }

        .tab-button {
            flex: 1;
            padding: 8px 10px;
            font-size: 14px;
        }

        .strg-left img {
            max-width: 200px;
        }

        .certifications-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 10px;
        }

        .certification-item {
            width: 100%;
            height: auto;
            border: 1px solid #ddd;
            background-color: white;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .certification-item img {
            max-width: 80%;
            height: auto;
            object-fit: contain;
        }

        .certification-info {
            position: absolute;
            background-color: rgba(0, 128, 128, 0.9);

            opacity: 0;
            transition: opacity 0.1s ease;
        }

        .certification-item:hover .certification-info {
            opacity: 1;
        }
    }

    /* Our Certifications */
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
        width: 100%;
        max-width: 100%;
        height: auto;
        max-height: 100%;
        object-fit: contain;
    }

    .certification-info {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background-color: rgba(0, 128, 128, 0.9); */
        background-color: #bf0019;
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
        opacity: 1;
    }

    @media (max-width: 767px) {
        .certification-item {
            width: 100%;
            height: auto;
            border: none;
            background-color: var(--bg-gray);
            flex-direction: column;
            align-items: stretch;
            justify-content: flex-start;
            padding: 0;
            transition: opacity 0.3s ease;
        }

        .certification-info {
            position: static;
            /* background-color: #2f958e; */
            background-color: #bf0019;
            opacity: 1;
            font-size: 13px;
            line-height: 1.5;
            padding: 15px 5px;
            width: 100%;
        }

        .certification-item {
            width: 100%;
        }

        .certification-item img {
            width: 100%;
            max-width: 100%;
            max-height: 100%;
        }

        .certifications-grid {
            padding: 5px;
            gap: 30px;
        }

        .certifications-section-sustainability {
            padding: 20px 10px;
        }
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

    a {
        text-decoration: none;
    }

    .sust-banner {
        width: 100%;
        position: relative;
        margin: 0;
        padding: 0;
        /* float: left; */
        align-items: center;
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

<section class="strategy sustainability-section-padding bcn-mintlight">
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
                        <div class="strg-left">
                            <img src="assets/images/sustainability/icon-umwelt-mint.svg" alt="Environment & Resources">
                            <ul>
                                <li>Future-oriented alternatives for packaging</li>
                                <li>Intelligent manufacturing management</li>
                                <li>Efficient production processes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="tab-detail">Deeply rooted in Germany and at home all over the world: This applies
                            equally to our products and their manufacture. At our headquarters in Hersbruck and Aichach
                            in Bavaria, we set the highest standards in our production and on the most closed energy and
                            recyclable material cycles: The wood waste from furniture production in Hersbruck is burned
                            in a biomass boiler and used to heat the entire site. The waste heat from plastics
                            production is used in a heat recovery system to heat the service water. We also use
                            photovoltaic systems in Aichach and Hersbruck to generate solar power.</p>
                        <p class="tab-detail">At our production sites around the world, we attach great importance to
                            using the appropriate measures. The Hersbruck location has been climate-neutral since 2020,
                            with further locations to follow. We produce 6,387 tons of CO2 a year, which we offset
                            accordingly. This also includes transport routes from products to the customer and back to
                            us and, for example, business trips.</p>
                    </div>
                </div>
            </div>

            <div id="pills-profile" class="tab-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="strg-left">
                            <img src="assets/images/sustainability/icon-produkte-mint.svg" alt="Products & Materials">
                            <ul>
                                <li>Sustainable materials for products and packaging</li>
                                <li>Long-term use</li>
                                <li>Easy recycling</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="tab-detail">As a manufacturer, we want our products to be as durable, resource- and
                            energy-efficient as possible, as well as repair-friendly and recyclable. We always want to
                            manufacture products for a long service life and pursue the ideal of circular economy. That
                            is why we rely on materials without complex composition and easy to use. In order to reduce
                            the consumption of fossil raw materials, we are initially focusing on converting many
                            materials to materials that are completely or at least partially made from renewable or
                            recycled raw materials. Our goal is to offer the most competent range of sustainable
                            products in Europe. We started our development over 10 years ago with the so-called
                            "greens", kitchen gadgets made of plastic.</p>
                        <p class="tab-detail">Today we use PE made from renewable raw materials and FSC ™ certified wood
                            for our “Ecolution” series. We are currently working on completely avoiding the use of feed
                            plants for sustainable materials. We are also taking the first steps with baking molds: With
                            our “Green Vision” baking molds, the wax from the Brazilian carnauba palm is being used for
                            coatings for the first time.</p>
                    </div>
                </div>
            </div>

            <div id="pills-contact" class="tab-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="strg-left">
                            <img src="assets/images/sustainability/icon-menschen-mint.svg" alt="People & Social">
                            <ul>
                                <li>Certified manufacturing standards (BSCI, Sedex)</li>
                                <li>Certified social and labor standards</li>
                                <li>Social and social engagement</li>
                                <li>Corporate Health Management</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="tab-detail">Of course for us: As a family company, the company family is particularly
                            important. Compliance with social standards and optimal working conditions for employees as
                            well as creating a positive working atmosphere are the focus in Germany and at our more than
                            40 company locations around the world. These standards are certified and approved both by
                            detailed internal audit systems and by higher-level regulations such as the BSCI. At our
                            headquarters in Hersbruck and Aichach, in particular, we benefit from above-average years of
                            service - our employees have been with the company for around 14 years on average - but
                            attach just as much importance to a balanced mix. 30% of our employees at the headquarters
                            in Hersbruck are under 30 years of age, the average age is 42 years. In individual employee
                            appraisals and regular feedback rounds, we jointly evaluate possible areas of development in
                            order to continuously develop. We also support the “By bike to work” initiative, subsidize
                            the use of public transport and promote company health management with various sports and
                            preventive measures such as yoga, Nordic walking and running courses, lectures on topics
                            such
                            as healthy sleep or non-smoking, health days or Pedometer Actions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="certifications-section-sustainability sustainability-section-padding">
    <h2>OUR STANDARDS AND CERTIFICATIONS</h2>
    <div class="certifications-grid">
        <div class="certification-item">
            <img src="assets/images/sustainability/label-oekotex-450x450.webp" alt="FSC Certification">
            <div class="certification-info">
                <p>If a textile article has been awarded the STANDARD 100 label, all components of the article
                    have been tested for harmful substances and are therefore harmless.</p>
            </div>
        </div>
        <div class="certification-item">
            <img src="assets/images/sustainability/icsc-450x450.webp" alt="OEKO-TEX Certification">
            <div class="certification-info">
                <p>International Sustainability and Carbon Certification (ISCC), based in Cologne, is a
                    certification system that distinguishes agricultural raw materials in Germany, the EU and
                    third countries that comply with the sustainability regulations for bioenergy</p>
            </div>
        </div>
        <div class="certification-item">
            <img src="assets/images/sustainability/label-fsc-450x450.webp" alt="Maximizing Green">
            <div class="certification-info">
                <p>The 50 Sustainability and Climate Pioneers project is the international economy’s response to
                    the climate challenges of our time: it shows how climate change can be combated actively and
                    efficiently.</p>
            </div>
        </div>
        <div class="certification-item">
            <img src="assets/images/sustainability/label-klimaneutral-450x450.webp" alt="amfori BSCI">
            <div class="certification-info">
                <p>Companies inevitably cause CO2 emissions, even if sustainable management is already taken
                    into account in many areas. As part of the climate-neutral company, all emissions are
                    recorded and continuously assessed. All other unavoidable emissions can be offset through
                    climate protection projects.</p>
            </div>
        </div>
        <div class="certification-item">
            <img src="assets/images/sustainability/label-maxi-green-450x450.webp" alt="amfori BSCI">
            <div class="certification-info">
                <p>The MAXIMIZING GREEN standard in connection with the ILAG coating fulfills central
                    requirements for environmental and health protection. Only raw materials that reduce the
                    ecological footprint are used for this product range - and not only in the coating itself,
                    but also in the entire value chain.</p>
            </div>
        </div>
        <div class="certification-item">
            <img src="assets/images/sustainability/label-climatepartner-450x450.webp" alt="amfori BSCI">
            <div class="certification-info">
                <p>Our Green Vision baking molds are climate neutral. With ClimatePartner, we have calculated
                    the carbon footprint of our Green Vision baking molds and offset it through climate
                    protection projects. This means that all Green Vision baking molds produced by us are
                    climate-neutral and labeled with the “climate-neutral” label.</p>
            </div>
        </div>
        <div class="certification-item">
            <img src="assets/images/sustainability/label-fes-450x450.webp" alt="amfori BSCI">
            <div class="certification-info">
                <p>Our guarantee for ethically and ecologically sound products. All of our products are of
                    course produced under fair conditions, we are constantly working on using the materials as
                    ecologically as possible and guarantee the highest product safety, which we ensure through
                    our standards and regular audits.</p>
            </div>
        </div>
    </div>
</section>

<section class="sustainability-section-padding" data-aos="fade-up">
    <div class="container sustainability-container">
        <div class="video-ecoluton">
            <video controls="" src="https://www.fackelmann.com/videos/NACHHALTIGKEIT-MAIN-1_15.mp4"
                poster="assets/images/sustainability/sustain_vid_poster.jpg" width="100%"></video>
        </div>
    </div>
</section>

<section class="sustainability-section-padding bcn-mintlight">
    <div class="container sustainability-container">
        <div class="title-wrapper p-bL">
            <h1 class="mega-title">
                <span class="cn-mint">SUSTAINABLE MATERIALS</span><br><span class="cn-mintdark">FOR A GREENER
                    FUTURE</span>
            </h1>
            <p class="info-p">Kitchen gadgets and baking pans have to be robust, versatile and reliable. That is why
                we are
                constantly on the lookout for the most suitable materials for the individual areas of application
                and are constantly developing them further. We are currently using different materials to meet all
                requirements.</p>
        </div>

        <div class="material-card" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6"><img src="assets/images/sustainability/material-greenpe-960.webp" alt=""
                        class="img-fluid"></div>
                <div class="col-md-6">
                    <div class="sustainability-materials">
                        <h4>Green PE</h4>
                        <p>Green PE is a natural plastic that is obtained from sugar cane and is used in kitchen
                            utensils. During the production of the raw material, oxygen is also produced and the
                            bagasse, i.e. the waste, can be converted into energy, e.g. to operate the sugar cane
                            mills. In its pure form, Green PE is dishwasher-safe, but not heat-resistant. It is
                            therefore ideal for products such as butter dishes, spoons, cutting boards, egg cups or
                            lemon squeezers.</p>
                        <a class="btn-type-1 sustainability-btn-type-1" href="javascript:void(0)">TO THE RANGE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="material-card" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6 order-sm-2"><img src="assets/images/sustainability/material-ecolution-960.webp"
                        alt="" class="img-fluid">
                </div>
                <div class="col-md-6 order-sm-1">
                    <div class="sustainability-materials">
                        <h4>Ecolution</h4>
                        <p>The products of the Ecolution series made from renewable PE and FSC ™ certified wood
                            stand for natural materials such as wood fibers and sugar cane, which are combined in a
                            new material that is particularly resistant - all products can be safely used in the
                            usual areas of application and are easy to use in the dishwasher. There is a combination
                            of wood fibers and bioplastics in the handle of Ecolution products. This consists of
                            almost 100% renewable raw materials. The functional part is 30% bio-based.</p>
                        <a class="btn-type-1 sustainability-btn-type-1" href="javascript:void(0)">TO THE RANGE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="material-card" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6"><img src="assets/images/sustainability/material-fsc-960.webp" alt=""
                        class="img-fluid"></div>
                <div class="col-md-6">
                    <div class="sustainability-materials">
                        <h4>FSC wood-paper</h4>
                        <p>FSC ™ is the abbreviation for Forest Stewardship Council ™, ie the promotion of
                            environmentally friendly, socially beneficial and economically viable management of
                            forests. From wooden spoons to cutting boards, around 140 wooden items are manufactured
                            at Fackelmann Brands in accordance with FSC ™ standards. The range is gradually being
                            completed. This also applies to the packaging - this will be changed accordingly.
                            Wherever possible, we minimize packaging and avoid unnecessary material.</p>
                        <a class="btn-type-1 sustainability-btn-type-1" href="javascript:void(0)">TO THE RANGE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="material-card" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6 order-sm-2"><img src="assets/images/sustainability/material-carnauba-960.webp"
                        alt="" class="img-fluid">
                </div>
                <div class="col-md-6 order-sm-1">
                    <div class="sustainability-materials">
                        <h4>Carnauba wax</h4>
                        <p>Baking molds have to withstand particularly high requirements: They have to be
                            heat-resistant and have an excellent coating so that baked goods can easily be removed
                            from the mold. The coating consists partly of the wax of the carnauba palm and makes up
                            about 5% of the same - the currently possible maximum so as not to impair the functions
                            of the baking pan. The wax comes from palm trees in Fairtrade-certified plantations and
                            has excellent non-stick properties, is vegan, is extracted in a resource-saving manner
                            and enables the production of our first climate-neutral baking molds.</p>
                        <p><strong>Available from autumn 2021</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="material-card" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6"><img src="assets/images/sustainability/material-kakao-960.webp" alt=""
                        class="img-fluid"></div>
                <div class="col-md-6">
                    <div class="sustainability-materials">
                        <h4>Cocoa shell</h4>
                        <p>The shell of the cocoa bean is the natural "packaging" of the valuable kernel, which is
                            processed in many individual steps into cocoa mass and then into fine chocolate as we
                            know it. Once the shell is broken, it is considered a vegetable waste product and is
                            normally disposed of. An alternative that breathes new life into the cocoa shell is
                            processing it into organic fibers as a raw material for packaging material - in our case
                            for muffin paper liners. In the manufacture of paper, some of the cellulose is replaced
                            by the bio-fibers. The result: a distinctive, innovative and sustainable type of
                            packaging that transforms the natural shell of the cocoa bean into a timeless and
                            individually patterned shape for your favorite baking creations.</p>
                        <a class="btn-type-1 sustainability-btn-type-1" href="javascript:void(0)">TO THE RANGE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-padding sustainability-section-padding" data-aos="fade-up">
    <div class="container sustainability-container">
        <div class="title-wrapper p-bL text-center">
            <h1 class="mega-title">
                <span class="cn-mint">INTELLIGENT</span><br>
                <span class="cn-mintdark">PACKAGING MANAGEMENT</span>
            </h1>
            <div class="sustainability-image-wrapper my-4">
                <img src="assets/images/sustainability/sustain-pkg.webp" alt="intelligent packaging"
                    class="img-fluid mx-auto d-block" style="max-width: 100%; height: auto;">
            </div>
            <p class="info-p">
                It is very important to us to get by with as little packaging as possible. That is why
                we are constantly working on optimizing our packaging solutions. For packaging made of paper and
                cardboard,
                we use raw materials from sustainable forestry that are certified by FSC ™ or PEFC or made from
                recycled material (e.g. Blue Angel). All packaging will gradually be converted in this way by 2025.
            </p>
        </div>
    </div>
</section>


<section class="sustainability-section-padding mt-n3">
    <div class="container sustainability-container">
        <div class="title-wrapper">
            <h1 class="mega-title">
                <span class="cn-mint">SOCIAL ENGAGEMENT</span><br><span class="cn-mintdark"> AND PARTNERSHIPS</span>
            </h1>
            <p class="info-p">We are also active outside of our organization: with the Fackelmann Children's Fund,
                we take
                our responsibility as a family company into account. We support regional and international
                projects that primarily benefit needy children and families.</p>
        </div>
        <div class="social-afa" data-aos="fade-up">
            <div class="row">
                <div class="col-md-3"><img src="assets/images/sustainability/social-engagement-icons.webp"
                        class="img-fluid" alt=""></div>
                <div class="col-md-9">
                    <p style="font-size: 15px;" class="info-p">Another affair of the heart is the support of the
                        Hersbruck regional
                        group of
                        the project
                        “Europe Mini Chefs”, whose patron has been Alexander Fackelmann since 2010. The exceptional
                        project on a non-profit basis has been changing the eating habits of children and families
                        for over 30 years. For two years, the “Europe Mini Chefs” learn everything to do with the
                        topics of kitchen, cooking and nutrition, from cultivation, harvesting and preparation to
                        service.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    function openTab(tabName, event) {
        event.preventDefault();
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

    document.addEventListener('DOMContentLoaded', function () {
        openTab('pills-home', { currentTarget: document.querySelector('.tab-button.active') || document.querySelector('.tab-button') });
    });
</script>

<?php include('includes/footer.php'); ?>