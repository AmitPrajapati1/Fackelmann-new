<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
<style>
    .container-flex {
        display: flex;
        flex-direction: column;
        height: 100vh;
        padding: 30px;
    }

    .new-cat-title {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 10px;
        margin-left: 39px;
        margin-right: 39px;
    }

    .new-cat-title h2 {
        font-size: 18px;
        margin: 0 0 4px;
    }

    .new-cat-title p {
        font-size: 13px;
        margin: 0;
        color: #555;
    }

    .cat-view-all {
        font-size: 13px;
        font-weight: 500;
        color: #bf0019;
        text-decoration: underline;
        white-space: nowrap;
    }

    .content-flex {
        display: flex;
        gap: 10px;
        flex: 1;
        height: 100%;
        min-height: 0;
        padding: 25px 40px;
    }

    .cookware {
        flex: 1 1 50%;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        min-height: 0;
    }

    .right-flex {
        display: flex;
        flex-direction: column;
        gap: 10px;
        flex: 1 1 50%;
        min-height: 0;
        height: 100%;
    }

    .right-top {
        display: flex;
        gap: 10px;
        flex: 2 0 auto;
        min-height: 0;
    }

    .kitchen-tools,
    .cutlery {
        flex: 1 1 50%;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        min-height: 0;
    }

    .sinks {
        flex: 1 1 auto;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        min-height: 0;
    }

    .new-category-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 2s cubic-bezier(0.20, 0.5, 0.5, 1);
        object-position: center;
        position: relative;
        text-decoration: none;
        color: inherit;
    }


    .new-category-card:hover img {
        transform: scale(1.2);
    }

    .new-category-card {
        position: relative;
        height: 100%;
    }

    .category-label {
        color: #bf0019;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
        pointer-events: none;
        position: absolute;
        bottom: 12px;
        left: 12px;
        background: #fff;
        border-radius: 4px;
        display: inline-block;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        height: auto;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding: 9px 0;
        width: 160px;
        z-index: 10;
        cursor: pointer;
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .category-label {
            padding: 3px 11px;
            font-size: 14px;
            width: 120px;
        }
    }


    @media (max-width: 768px) {
        .content-flex {
            flex-wrap: wrap;
            flex-direction: row;
            padding: 1px 1px;
        }

        .right-flex {
            flex: 1 1 100% !important;
            display: contents;
        }

        .right-top {
            display: contents;
        }

        .new-category-card {
            flex: 1 1 48%;
            height: 200px;
            margin-bottom: 10px;
        }

        .new-cat-title {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
            margin: 10px 0px;
        }

        .new-cat-title>div,
        .new-cat-title>a.cat-view-all {
            width: 100%;
        }

        .category-label {
            left: 6px;
            padding: 8px 20px;
            font-size: 12px;
            line-height: 1.1;
            width: 114px;
        }

        .container-flex {
            padding: 17px;
        }
    }
</style>

<div class="container-flex">
    <div class="new-cat-title">
        <div>
            <h2>Shop by categories</h2>
            <p>Fresh styles just in! Elevate your look.</p>
        </div>
        <a href="category-listing.php" class="cat-view-all">VIEW ALL CATEGORIES</a>
    </div>

    <div class="content-flex">
        <a href="category-listing.php" class="new-category-card cookware">
            <img src="assets/images/home_page/our_categories/cat_9.jpg" alt="Cookware" />
            <div class="category-label">Cookware</div>
        </a>

        <div class="right-flex">
            <div class="right-top">
                <a href="javascript:void(0)" class="new-category-card kitchen-tools">
                    <img src="assets/images/home_page/our_categories/cat_10.jpg" alt="Bakeware" />
                    <div class="category-label">Bakeware</div>
                </a>

                <a href="javascript:void(0)" class="new-category-card cutlery">
                    <img src="assets/images/home_page/our_categories/cat_11.jpg" alt="Knives" />
                    <div class="category-label">Knives</div>
                </a>
            </div>

            <a href="javascript:void(0)" class="new-category-card sinks">
                <img src="assets/images/home_page/our_categories/cat_12.jpg" alt="Kitchen Tools" />
                <div class="category-label">Kitchen Tools</div>
            </a>
        </div>
    </div>

</div>



<div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background-color: #f5f5f5;">
    <div class="text-center mb-4 fw-bold text-uppercase" style="letter-spacing: 1px;">
        Cleverly Combined - Save in the Set
    </div>

    <div class="custom-nav custom-prev">❮</div>
    <div class="custom-nav custom-next">❯</div>

    <div class="discover-carousel owl-carousel owl-theme">
        <div class="item">
            <a href="product-listing.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_4.jpeg"
                            alt="Non-Stick" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_1.jpeg"
                            alt="Non-Stick Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Non-Stick Cookware</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="product-listing.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_1.jpeg"
                            alt="Saucepans Set" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_1.jpeg"
                            alt="Saucepans Set Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Saucepans</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="product-listing.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_2.jpeg"
                            alt="Lightweight Tawa" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_2.jpeg"
                            alt="Lightweight Tawa Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Lightweight Tawa</button>
                </div>
            </a>
        </div>
        <div class="item">
            <a href="product-listing.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_3.jpeg"
                            alt="Stainless Steel Frypan" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/cleverly_combined_sets/set_3.jpeg"
                            alt="Stainless Steel Frypan Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Stainless Steel Frypan</button>
                </div>
            </a>
        </div>
    </div>

    <div class="text-center mt-5">
        <button class="view-more-button btn btn-sm">Browse All Sets</button>
    </div>
</div>


<div class="container-fluid px-2 px-md-5 py-5 position-relative" style="background-color: #EDE8E2;">
    <div class="text-center mb-4 fw-bold text-uppercase" style="letter-spacing: 1px;">
        Now Discover - Our Highlights
    </div>

    <div class="custom-nav custom-prev">❮</div>
    <div class="custom-nav custom-next">❯</div>

    <div class="highlight-carousel owl-carousel owl-theme">

        <div class="item">
            <a href="product-detail.php">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_5.jpg"
                            alt="Kadai" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_5.jpg"
                            alt="Kadai Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Kadai</button>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Water Bottle" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Water Bottle Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Water Bottle</button>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Water Bottle" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Water Bottle Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Water Bottle</button>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_2.jpeg"
                            alt="Cake Pan Tin" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Cake Pan Tin Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Cake Pan Tin</button>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_3.jpeg"
                            alt="Strainer" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Strainer Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Strainer</button>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="javascript:void(0)">
                <div class="item-card">
                    <div class="image-container">
                        <img class="img-main img-fluid" src="assets/images/home_page/our_highlights/highlight_4.jpeg"
                            alt="Gas Stove Lighter" loading="lazy">
                        <img class="img-hover img-fluid" src="assets/images/home_page/our_highlights/highlight_1.jpeg"
                            alt="Gas Stove Lighter Hover" loading="lazy">
                    </div>
                    <button class="product-button btn btn-sm mt-2">Gas Stove Lighter</button>
                </div>
            </a>
        </div>
    </div>

    <div class="text-center mt-5">
        <button class="view-more-button btn btn-sm">Explore Highlights</button>
    </div>
</div>