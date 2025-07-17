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
    color: #8bc7c0;
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
    color: #bf0019;
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
    z-index: 2;
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
    font-family: Roboto, sans-serif !important;
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

</style>

<!-- Hero Section -->
<section style="position: relative; overflow: hidden;">
    <div style="aspect-ratio: 16 / 9; width: 100%; position: relative;">
        <video autoplay muted loop playsinline
            style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
            <source src="assets/images/banners/videos/kitchenware_video.mp4" type="video/mp4">
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
                    <li><a class="dropdown-item" href="#">Relevance</a></li>
                    <li><a class="dropdown-item" href="#">Newest first</a></li>
                    <li><a class="dropdown-item" href="#">Price ascending</a></li>
                    <li><a class="dropdown-item" href="#">Price descending</a></li>
                    <li><a class="dropdown-item text-center text-white bg-secondary" href="#"
                            onclick="closeDropdown(event)">CLOSE</a></li>
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
                    <li><a class="dropdown-item" href="#">Relevance</a></li>
                    <li><a class="dropdown-item" href="#">Newest first</a></li>
                    <li><a class="dropdown-item" href="#">Price ascending</a></li>
                    <li><a class="dropdown-item" href="#">Price descending</a></li>
                    <li><a class="dropdown-item text-center text-white bg-secondary" href="#"
                            onclick="closeDropdown(event)">CLOSE</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sidebar Filter (Desktop Only) -->
        <div class="col-lg-3 mb-4 d-none d-lg-block">
            <div class="bg-white p-4">
                <?php
        $filters = [
            'SHOP BY CATEGORIES' => ['Pots', 'Pans', 'New Launches'],
            'SHOP BY BRAND' => ['Fackelmann', 'Stanley Rogers'],
            'SHOP BY TYPE' => ['Uncoated', 'Stainless Steel BI-PLY', 'Stainless Steel TRI-PLY', 'Non-Stick', 'Non-Stick Granite'],
            'SHOP BY SIZES' => ['24cm', '28cm', '32cm'],
        ];
        $filterId = 1;
        foreach ($filters as $title => $options): ?>
                <div class="mb-4 border-bottom pb-2">
                    <div class="filter-title d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#filter<?= $filterId ?>" aria-expanded="true"
                        aria-controls="filter<?= $filterId ?>">
                        <?= $title ?>
                        <i class="bi bi-chevron-up ms-1" id="icon<?= $filterId ?>"></i>
                    </div>
                    <div class="collapse show" id="filter<?= $filterId ?>">
                        <?php foreach ($options as $opt): ?>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox"
                                id="<?= strtolower(str_replace(' ', '_', $opt)) ?>">
                            <label class="form-check-label"
                                for="<?= strtolower(str_replace(' ', '_', $opt)) ?>"><?= $opt ?></label>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php $filterId++; endforeach; ?>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="col-lg-9 pb-4">
            <div class="row g-4">
                <?php
        $products = [
            [
                'category' => 'Kadai',
                'img' => 'assets/images/product_highlight/kadai/kadai_1.jpg',
                'overlay' => 'assets/images/product_highlight/kadai/kadai_overlay_1.jpg',
                'desc' => 'Fackelmann Non-Stick Aluminum Deep Kadhai with Glass Lid (26.5 cm) – Ceramik.',
                'price' => '₹ 8,990.00'
            ],
            [
                'category' => 'Kadai',
                'img' => 'assets/images/product_highlight/kadai/kadai_2.jpg',
                'overlay' => 'assets/images/product_highlight/kadai/kadai_overlay_2.jpg',
                'desc' => 'Fackelmann Steel Kadhai with Designer Lid- 26 cm, 3.25 litres – Ceramik.',
                'price' => '₹ 8,149.00'
            ],
            [
                'category' => 'Kadai',
                'img' => 'assets/images/product_highlight/kadai/kadai_3.jpg',
                'overlay' => 'assets/images/product_highlight/kadai/kadai_overlay_3.jpg',
                'desc' => 'Fackelmann Nonstick Kadai with Glass Lid 24 cm Grey – Ceramik.',
                'price' => '₹ 2,899.00'
            ],
            [
                'category' => 'Kadai',
                'img' => 'assets/images/product_highlight/kadai/kadai_4.jpg',
                'overlay' => 'assets/images/product_highlight/kadai/kadai_overlay_4.jpg',
                'desc' => 'Fackelmann Kadhai with Designer Lid- 26 cm, 3.25 litres – Ceramik.',
                'price' => '₹ 6,549.00'
            ],
            [
                'category' => 'Kadai',
                'img' => 'assets/images/product_highlight/kadai/kadai_5.jpg',
                'overlay' => 'assets/images/product_highlight/kadai/kadai_overlay_5.jpg',
                'desc' => 'Fackelmann Nonstick Kadai with Glass Lid 28 cm Grey – Ceramik.',
                'price' => '₹ 6,549.00'
            ],
            [
                'category' => 'Kadai',
                'img' => 'assets/images/product_highlight/kadai/kadai_6.jpg',
                'overlay' => 'assets/images/product_highlight/kadai/kadai_overlay_6.jpg',
                'desc' => 'Fackelmann Kadhai with Designer Lid- 22 cm, 2.0 litres – Ceramik.',
                'price' => '₹ 2,599.00'
            ],
            // Add more products as needed
        ];
        foreach ($products as $product): ?>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="<?= $product['img'] ?>" class="img-fluid main-img" alt="">
                        <img src="<?= $product['overlay'] ?>" class="img-fluid hover-img" alt="">
                        <div class="product-category text-uppercase"><?= $product['category'] ?></div>
                        <div class="product-description"><?= $product['desc'] ?></div>
                        <div class="product-price"><?= $product['price'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

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
                <?php
        $filterId = 1;
        foreach ($filters as $title => $options): ?>
                <div class="mb-4 border-bottom pb-2">
                    <div class="filter-title d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#modalFilter<?= $filterId ?>" aria-expanded="true"
                        aria-controls="modalFilter<?= $filterId ?>">
                        <?= $title ?>
                        <i class="bi bi-chevron-up ms-1" id="modalIcon<?= $filterId ?>"></i>
                    </div>
                    <div class="collapse show" id="modalFilter<?= $filterId ?>">
                        <?php foreach ($options as $opt): ?>
                        <div class="form-check ps-4 text-dark">
                            <input class="form-check-input" type="checkbox"
                                id="modal_<?= strtolower(str_replace(' ', '_', $opt)) ?>">
                            <label class="form-check-label"
                                for="modal_<?= strtolower(str_replace(' ', '_', $opt)) ?>"><?= $opt ?></label>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php $filterId++; endforeach; ?>
            </div>
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
</script>

<?php include('includes/footer.php'); ?>