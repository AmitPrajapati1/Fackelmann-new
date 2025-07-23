<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>


<style>
body {
    background-color: #f5f5f5;
}

.filter-title {
    font-size: 16px;
    padding: 10px 0;
    text-transform: uppercase;
    font-weight: 400;
    letter-spacing: 0;
    color: #737373;
    cursor: pointer;
}

.product-category {
    color: #bf0019;
    font-size: 12px;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    font-weight: 700;
    height: auto;
    letter-spacing: 1.19px;
    line-height: 16px;
    margin-bottom: 3px;
    margin-top: 10px;
    font-style: normal
}

.product-description {
    padding-left: 0px;
    font-size: 12px;
    padding-top: 9px;
    margin-bottom: 10px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 16px;
    color: #444
}

.product-price {
    font-size: 21px;
    margin-top: 3px;
    font-weight: 600;
    color: #bf0019 !important;
}

.product-card {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.product-card img {
    width: 100%;
    display: block;
    transition: opacity 2s ease, transform 2s ease;
}

.product-card img.main-img {
    opacity: 1;
    position: relative;
    z-index: 1;
    transform: scale(1);
}

.product-card img.hover-img {
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    transform: scale(1.05);
}

.product-card:hover img.main-img {
    opacity: 0;
    transform: scale(1.05);
}

.product-card:hover img.hover-img {
    opacity: 1;
    transform: scale(1);
}

.product-card a,
.product-card a:hover,
.product-card a:focus {
    text-decoration: none;
    color: inherit;
}

.custom-sort-btn {
    background-color: #fff;
    border: none;
    color: #737373;
    font-weight: 600;
    font-size: 12px;
    letter-spacing: 1px;
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    padding: 6px 12px;
    width: 200px;
    text-transform: uppercase;
    box-shadow: none;
    border-radius: 0;
}

.custom-sort-btn:focus,
.custom-sort-btn:hover {
    background-color: #fff;
    color: #737373;
    box-shadow: none;
}

.dropdown-menu.match-button-width {
    min-width: unset;
    width: 200px;
    line-height: 30px;
    font-size: 13px;
}

.custom-sort-btn i {
    font-size: 0.85rem;
    color: #7fb1ae;
    margin-left: 8px;
}

.btn-white {
    background-color: #fff;
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.dropdown-menu {
    --bs-dropdown-padding-y: 0rem !important;
    --bs-dropdown-link-active-bg: #fff;
    border-radius: 0rem;
    color: #444;
    z-index: 4;
}

.dropdown-item:active {
    color: #000 !important;
}

.form-check-label {
    display: block;
    padding: 5px 0;
    color: #444;
    padding-left: 0;
    text-transform: capitalize;
    font-size: 14px;
    font-weight: unset !important;
}

.form-check-label:hover {
    color: #8bc7c0
}

.form-check-input{
    color: #444;
}

.form-check-input[type=checkbox] {
    border-radius: 0rem !important;
    opacity: 0.8;
}

.form-check-input:checked,
.form-check-input:focus,
.form-check-input:focus:checked {
  box-shadow: none !important;
  outline: none !important; 
}

.form-check-input {
    width: 13px;
    height: 13px;
    margin-top: 8px;
}

.dropdown-item.active{
    color: #444;
    background-color: #f5f5f5;
}

/* check icon */
.dropdown-item .check-icon {
    float: right;
    font-size: 0.85rem;
    color: #444;
    background-color: #f5f5f5;
    visibility: hidden;
}
.dropdown-item.active .check-icon {
    visibility: visible;
}
@media (max-width: 767.98px) {
    .product-price {
        font-size: 16px;
    }
}
</style>

<!-- Hero Section -->
<section style="position: relative; overflow: hidden;">
    <div style="width: 100%; position: relative;">
        <video autoplay muted loop playsinline style="width: 100%; height: auto; object-fit: cover; display: block;">
            <!-- Mobile Video -->
            <source src="assets/images/banners/videos/kitchenware 640 x 795px.mp4" type="video/mp4" media="(max-width: 767px)">
            <!-- Desktop Video -->
            <source src="assets/images/banners/videos/kitchenware.mp4" type="video/mp4" media="(min-width: 768px)">
            Your browser does not support the video tag.
        </video>
    </div>
</section>

<div class="px-4 py-3 px-lg-5 py-lg-4">
    <!-- Mobile Filter & Sort Buttons -->
    <div class="row mb-3">
        <!-- Mobile Only -->
        <div class="col-12 d-flex d-lg-none gap-2">
            <button class="btn btn-white border w-50 d-flex align-items-center justify-content-between"
                data-bs-toggle="modal" data-bs-target="#mobileFilterModal">
                <span class="me-2">FILTER</span>
                <i class="bi bi-sliders"></i>
            </button>

            <div class="dropdown w-50">
                <button class="btn btn-white border w-100 d-flex align-items-center justify-content-between"
                    id="sortDropdownMobile" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2">SORT</span>
                    <i class="bi bi-chevron-down"></i>
                </button>
                <ul class="dropdown-menu w-100" aria-labelledby="sortDropdownMobile">
                    <li><a class="dropdown-item active" href="#">Relevance <i class="bi bi-check check-icon"></i></a></li>
                    <li><a class="dropdown-item" href="#">Newest first <i class="bi bi-check check-icon"></i></a></li>
                    <li><a class="dropdown-item" href="#">Price ascending <i class="bi bi-check check-icon"></i></a></li>
                    <li><a class="dropdown-item" href="#">Price descending <i class="bi bi-check check-icon"></i></a></li>
                    <li><a class="dropdown-item text-center text-white bg-secondary" href="#" onclick="closeDropdown(event)">CLOSE</a></li>
                </ul>
            </div>
        </div>

        <!-- Desktop Sort Button -->
        <div class="col-12 text-end d-none d-lg-block">
            <div class="dropdown">
                <button class="custom-sort-btn" type="button" id="sortDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    SORT <i class="bi bi-chevron-down"></i>
                </button>
                <ul class="dropdown-menu match-button-width dropdown-menu-end" aria-labelledby="sortDropdown">
                    <li><a class="dropdown-item active" href="#">Relevance <i class="bi bi-check check-icon"></i></a></li>
                    <li><a class="dropdown-item" href="#">Newest first <i class="bi bi-check check-icon"></i></a></li>
                    <li><a class="dropdown-item" href="#">Price ascending <i class="bi bi-check check-icon"></i></a></li>
                    <li><a class="dropdown-item" href="#">Price descending <i class="bi bi-check check-icon"></i></a></li>
                    <li><a class="dropdown-item text-center text-white bg-secondary" href="#" onclick="closeDropdown(event)">CLOSE</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sidebar Filter (Desktop Only) -->
        <div class="col-lg-3 mb-4 d-none d-lg-block">
            <div class="bg-white p-4">
                <!-- SHOP BY CATEGORIES -->
                <div class="mb-4 border-bottom pb-2">
                    <div class="filter-title d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#filter1" aria-expanded="true"
                        aria-controls="filter1">
                        SHOP BY CATEGORIES
                        <i class="bi bi-chevron-up ms-1" id="icon1"></i>
                    </div>
                    <div class="collapse show" id="filter1">
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="pots">
                            <label class="form-check-label" for="pots">Pots</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="pans">
                            <label class="form-check-label" for="pans">Pans</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="new_launches">
                            <label class="form-check-label" for="new_launches">New Launches</label>
                        </div>
                    </div>
                </div>

                <!-- SHOP BY BRAND -->
                <div class="mb-4 border-bottom pb-2">
                    <div class="filter-title d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#filter2" aria-expanded="true"
                        aria-controls="filter2">
                        SHOP BY BRAND
                        <i class="bi bi-chevron-up ms-1" id="icon2"></i>
                    </div>
                    <div class="collapse show" id="filter2">
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="fackelmann">
                            <label class="form-check-label" for="fackelmann">Fackelmann</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="stanley_rogers">
                            <label class="form-check-label" for="stanley_rogers">Stanley Rogers</label>
                        </div>
                    </div>
                </div>

                <!-- SHOP BY TYPE -->
                <div class="mb-4 border-bottom pb-2">
                    <div class="filter-title d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#filter3" aria-expanded="true"
                        aria-controls="filter3">
                        SHOP BY TYPE
                        <i class="bi bi-chevron-up ms-1" id="icon3"></i>
                    </div>
                    <div class="collapse show" id="filter3">
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="uncoated">
                            <label class="form-check-label" for="uncoated">Uncoated</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="stainless_steel_bi-ply">
                            <label class="form-check-label" for="stainless_steel_bi-ply">Stainless Steel BI-PLY</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="stainless_steel_tri-ply">
                            <label class="form-check-label" for="stainless_steel_tri-ply">Stainless Steel TRI-PLY</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="non-stick">
                            <label class="form-check-label" for="non-stick">Non-Stick</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="non-stick_granite">
                            <label class="form-check-label" for="non-stick_granite">Non-Stick Granite</label>
                        </div>
                    </div>
                </div>

                <!-- SHOP BY SIZES -->
                <div class="mb-4 border-bottom pb-2">
                    <div class="filter-title d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#filter4" aria-expanded="true"
                        aria-controls="filter4">
                        SHOP BY SIZES
                        <i class="bi bi-chevron-up ms-1" id="icon4"></i>
                    </div>
                    <div class="collapse show" id="filter4">
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="24cm">
                            <label class="form-check-label" for="24cm">24cm</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="28cm">
                            <label class="form-check-label" for="28cm">28cm</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="32cm">
                            <label class="form-check-label" for="32cm">32cm</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="col-lg-9 pb-4">
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-6 col-md-4">
                    <a href="product-detail.php" class="text-decoration-none text-dark">
                        <div class="product-card">
                            <img src="assets/images/product_highlight/kadai/1.jpg" class="img-fluid main-img" alt="">
                            <img src="assets/images/product_highlight/kadai/2.jpg" class="img-fluid hover-img" alt="">
                            <div class="product-category text-uppercase">Quartz Kadai</div>
                            <div class="product-description">Fackelmann Triply Stainless Steel Kadhai with Designer Lid- 20 cm, 1.5 litres</div>
                            <div class="product-price">₹ 2,749.00</div>
                        </div>
                    </a>
                </div>
                <!-- Product 5 -->
                <div class="col-6 col-md-4">
                    <a href="product-detail-2.php" class="text-decoration-none text-dark">
                        <div class="product-card">
                            <img src="assets/images/product_highlight/kadai/kadai_5.jpg" class="img-fluid main-img" alt="">
                            <img src="assets/images/product_highlight/kadai/kadai_overlay_5.jpg" class="img-fluid hover-img" alt="">
                            <div class="product-category text-uppercase">Fackelmann</div>
                            <div class="product-description">Fackelmann Non-Stick Aluminum Deep Kadhai with Glass Lid 26.5 cm</div>
                            <div class="product-price">₹ 1,799.00</div>
                        </div>
                    </a>
                </div>
                <!-- Product 2 -->
                <div class="col-6 col-md-4">
                    <div class="product-card">
                        <img src="assets/images/product_highlight/kadai/kadai_2.jpg" class="img-fluid main-img" alt="">
                        <img src="assets/images/product_highlight/kadai/kadai_overlay_2.jpg" class="img-fluid hover-img" alt="">
                        <div class="product-category text-uppercase">Fackelmann</div>
                        <div class="product-description">Fackelmann Triply Stainless Steel Kadhai with Designer Lid- 22 cm, 2.0 litres</div>
                        <div class="product-price">₹ 3,049.00</div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-6 col-md-4">
                    <div class="product-card">
                        <img src="assets/images/product_highlight/kadai/kadai_3.jpg" class="img-fluid main-img" alt="">
                        <img src="assets/images/product_highlight/kadai/kadai_overlay_3.jpg" class="img-fluid hover-img" alt="">
                        <div class="product-category text-uppercase">Fackelmann</div>
                        <div class="product-description">Fackelmann Triply Stainless Steel Kadhai with Designer Lid- 24 cm, 2.5 litres</div>
                        <div class="product-price">₹ 3,449.00</div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-6 col-md-4">
                    <div class="product-card">
                        <img src="assets/images/product_highlight/kadai/kadai_4.jpg" class="img-fluid main-img" alt="">
                        <img src="assets/images/product_highlight/kadai/kadai_overlay_4.jpg" class="img-fluid hover-img" alt="">
                        <div class="product-category text-uppercase">Fackelmann</div>
                        <div class="product-description">Fackelmann Triply Stainless Steel Kadhai with Designer Lid- 26 cm, 3.25 litres</div>
                        <div class="product-price">₹ 3,699.00</div>
                    </div>
                </div>
                
                <!-- Product 6 -->
                <div class="col-6 col-md-4">
                    <div class="product-card">
                        <img src="assets/images/product_highlight/kadai/kadai_6.jpg" class="img-fluid main-img" alt="">
                        <img src="assets/images/product_highlight/kadai/kadai_overlay_6.jpg" class="img-fluid hover-img" alt="">
                        <div class="product-category text-uppercase">Fackelmann</div>
                        <div class="product-description">Fackelmann Nonstick Kadai with Glass Lid 24 cm Grey</div>
                        <div class="product-price">₹ 1,649.00</div>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="col-6 col-md-4">
                    <div class="product-card">
                        <img src="assets/images/product_highlight/kadai/kadai_7.jpg" class="img-fluid main-img" alt="">
                        <img src="assets/images/product_highlight/kadai/kadai_overlay_7.jpg" class="img-fluid hover-img" alt="">
                        <div class="product-category text-uppercase">Fackelmann</div>
                        <div class="product-description">Fackelmann Nonstick Kadai with Glass Lid 28 cm Grey</div>
                        <div class="product-price">₹ 1,999.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-ish wrapper -->

<!-- Mobile Filter Modal -->
<div class="modal fade" id="mobileFilterModal" tabindex="-1" aria-labelledby="mobileFilterModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filters</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- SHOP BY CATEGORIES (Mobile) -->
                <div class="mb-4 border-bottom pb-2">
                    <div class="filter-title d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#modalFilter1" aria-expanded="true"
                        aria-controls="modalFilter1">
                        SHOP BY CATEGORIES
                        <i class="bi bi-chevron-up ms-1" id="modalIcon1"></i>
                    </div>
                    <div class="collapse show" id="modalFilter1">
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_pots">
                            <label class="form-check-label" for="modal_pots">Pots</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_pans">
                            <label class="form-check-label" for="modal_pans">Pans</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_new_launches">
                            <label class="form-check-label" for="modal_new_launches">New Launches</label>
                        </div>
                    </div>
                </div>

                <!-- SHOP BY BRAND (Mobile) -->
                <div class="mb-4 border-bottom pb-2">
                    <div class="filter-title d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#modalFilter2" aria-expanded="true"
                        aria-controls="modalFilter2">
                        SHOP BY BRAND
                        <i class="bi bi-chevron-up ms-1" id="modalIcon2"></i>
                    </div>
                    <div class="collapse show" id="modalFilter2">
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_fackelmann">
                            <label class="form-check-label" for="modal_fackelmann">Fackelmann</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_stanley_rogers">
                            <label class="form-check-label" for="modal_stanley_rogers">Stanley Rogers</label>
                        </div>
                    </div>
                </div>

                <!-- SHOP BY TYPE (Mobile) -->
                <div class="mb-4 border-bottom pb-2">
                    <div class="filter-title d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#modalFilter3" aria-expanded="true"
                        aria-controls="modalFilter3">
                        SHOP BY TYPE
                        <i class="bi bi-chevron-up ms-1" id="modalIcon3"></i>
                    </div>
                    <div class="collapse show" id="modalFilter3">
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_uncoated">
                            <label class="form-check-label" for="modal_uncoated">Uncoated</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_stainless_steel_bi-ply">
                            <label class="form-check-label" for="modal_stainless_steel_bi-ply">Stainless Steel BI-PLY</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_stainless_steel_tri-ply">
                            <label class="form-check-label" for="modal_stainless_steel_tri-ply">Stainless Steel TRI-PLY</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_non-stick">
                            <label class="form-check-label" for="modal_non-stick">Non-Stick</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_non-stick_granite">
                            <label class="form-check-label" for="modal_non-stick_granite">Non-Stick Granite</label>
                        </div>
                    </div>
                </div>

                <!-- SHOP BY SIZES (Mobile) -->
                <div class="mb-4 border-bottom pb-2">
                    <div class="filter-title d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#modalFilter4" aria-expanded="true"
                        aria-controls="modalFilter4">
                        SHOP BY SIZES
                        <i class="bi bi-chevron-up ms-1" id="modalIcon4"></i>
                    </div>
                    <div class="collapse show" id="modalFilter4">
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_24cm">
                            <label class="form-check-label" for="modal_24cm">24cm</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_28cm">
                            <label class="form-check-label" for="modal_28cm">28cm</label>
                        </div>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox" id="modal_32cm">
                            <label class="form-check-label" for="modal_32cm">32cm</label>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-body -->
        </div>
    </div>
</div>

<script>
function closeDropdown(event) {
    event.preventDefault();
    const dropdown = bootstrap.Dropdown.getInstance(event.target.closest('.dropdown').querySelector('button'));
    dropdown.hide();
}

// Toggle icons for collapse
// (unchanged)
document.querySelectorAll('.collapse').forEach(collapse => {
    collapse.addEventListener('show.bs.collapse', function() {
        const icon = this.previousElementSibling.querySelector('i');
        icon.classList.remove('bi-chevron-down');
        icon.classList.add('bi-chevron-up');
    });
    collapse.addEventListener('hide.bs.collapse', function() {
        const icon = this.previousElementSibling.querySelector('i');
        icon.classList.remove('bi-chevron-up');
        icon.classList.add('bi-chevron-down');
    });
});

// -----------------------------
// SINGLE-SELECT SORT MENUS
// -----------------------------
document.addEventListener('DOMContentLoaded', function () {
    function setupSingleSelect(menuSelector, buttonSelector) {
        const menuEl = document.querySelector(menuSelector);
        const btnEl  = document.querySelector(buttonSelector);
        if (!menuEl || !btnEl) return;

        // Attach click handlers to each sortable option (skip CLOSE row)
        menuEl.querySelectorAll('.dropdown-item').forEach(item => {
            if (item.classList.contains('text-center')) return; // skip CLOSE
            item.addEventListener('click', function (e) {
                e.preventDefault();

                // Clear any existing active state in this menu
                menuEl.querySelectorAll('.dropdown-item.active').forEach(activeItem => {
                    activeItem.classList.remove('active');
                });

                // Set the clicked item active
                this.classList.add('active');

                // Hide the dropdown after selection (standard single-select behavior)
                bootstrap.Dropdown.getOrCreateInstance(btnEl).hide();
            });
        });
    }

    // Desktop & Mobile sort dropdowns
    setupSingleSelect('[aria-labelledby="sortDropdown"]', '#sortDropdown');
    setupSingleSelect('[aria-labelledby="sortDropdownMobile"]', '#sortDropdownMobile');
});
</script>

<?php include('includes/footer.php'); ?>
