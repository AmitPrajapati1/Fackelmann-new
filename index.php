<?php include('includes/header.php'); ?>

<style>
.custom-nav {
    position: absolute;
    top: 47%;
    transform: translateY(-50%);
    font-size: 24px;
    color: #bf0019;
    /* background-color: #878787; */
    border-radius: 50%;
    width: 40px;
    height: 40px;
    line-height: 38px;
    text-align: center;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    z-index: 2;
}

.custom-nav:hover {
    box-shadow: inset 0 0 0 2px rgba(191, 0, 25, 1);
    background-color: #fff;
    border-color: #fff
}

.custom-prev {
    left: 15px;
}

.custom-next {
    right: 15px;
}

@media (min-width: 768px) {
    .custom-prev {
        left: 50px;
    }

    .custom-next {
        right: 50px;
    }
}

.product-card {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* background-color: #fff; */
    /* padding: 1rem; */
}

.item {
    background-color: #f5f5f5;
}
</style>
</head>


<?php include('includes/nav.php'); ?>


<div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background-color: #f5f5f5;">
    <div class="text-center mb-4 fw-medium text-uppercase" style="letter-spacing: 1px;">
        Cleverly Combined - Save in the Set
    </div>

    <div class="custom-nav custom-prev">&#10094;</div>
    <div class="custom-nav custom-next">&#10095;</div>

    <div class="owl-carousel owl-theme">

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/conical_tri_ply_frypan_24_cm.webp"
                    alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Conical Tri-ply Frypan 24 Cm with extra durable</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 7,999.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid"
                    src="assets/images/product_highlight/conical_tri_ply_saucepan_20_cm_2_5_litres.webp" alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Matrix Non-stick Frypan 32cm</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 13,990.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_rice_spoon_23_cm.webp"
                    alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Matrix Non-stick Frypan</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 9,990.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_solid_spoon_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background-color: #f5f5f5;">
    <div class="text-center mb-4 fw-medium text-uppercase" style="letter-spacing: 1px;">
        Now Discover - Our Highlights
    </div>

    <div class="custom-nav custom-prev">&#10094;</div>
    <div class="custom-nav custom-next">&#10095;</div>

    <div class="owl-carousel owl-theme">

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/conical_tri_ply_frypan_24_cm.webp"
                    alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Conical Tri-ply Frypan 24 Cm with extra durable</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 7,999.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid"
                    src="assets/images/product_highlight/conical_tri_ply_saucepan_20_cm_2_5_litres.webp" alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Matrix Non-stick Frypan 32cm</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 13,990.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_rice_spoon_23_cm.webp"
                    alt="Frypan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Frypan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Matrix Non-stick Frypan</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 9,990.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_solid_spoon_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

        <div class="item">
            <div class="product-card">
                <img class="img-fluid" src="assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp"
                    alt="Saucepan">
                <div class="text-uppercase text-danger fw-semibold small mt-2">Saucepan</div>

                <div class="description-wrapper small mt-1">
                    <div class="description">Stanley Rogers Conical TRL-PLY Saucepan 20 Cm, 2.5 Litres</div>
                </div>

                <div class="fw-bold mt-1">MRP ₹ 8,149.00</div>
            </div>
        </div>

    </div>
</div>

<div style="background-color: #ede8e2; padding-top: 10px; padding-bottom: 10px;">
    <div class="container py-5">
        <div class="row align-items-start">

            <!-- Left Content -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/logos/sustainability_img.webp" alt="50 Sustainability & Climate Leaders"
                    class="mb-3 img-fluid">

                <div class="fw-semibold mb-2" style="font-size: 1rem;">
                    Fackelmann Brands: One of 50 climate leader companies worldwide
                </div>

                <p class="text-muted small">
                    The 50 Climate Leaders initiative has set itself the task of highlighting companies that are
                    committed to sustainable business and climate protection. Fackelmann Brands is part of the
                    initiative and is helping to gradually get closer to the 17 UN climate goals for sustainable
                    development.
                </p>

                <p class="text-muted small">Come with us on a journey into a greener future.</p>

                <a href="#" class="btn btn-outline-dark btn-sm">MORE INFORMATION</a>
            </div>

            <!-- Right Video Section -->
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <video controls poster="assets/images/logos/sustainability_poster.png">
                        <source src="https://www.fackelmann.co.in/assets/img/SUSTAINABILITY.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>