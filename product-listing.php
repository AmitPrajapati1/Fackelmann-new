<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<style>
body {
    background-color: #f5f5f5;
}

.filter-title {
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
}

.product-category {
    font-size: 0.75rem;
    letter-spacing: 1px;
    color: #777;
}

.product-description {
    font-size: 0.85rem;
    margin-bottom: 0.5rem;
}

.product-price {
    font-weight: 700;
    color: #e53935;
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

.dropdown-menu {
    --bs-dropdown-padding-y: 0rem !important;
    --bs-dropdown-link-active-bg: #fff;
    border-radius: 0rem;
}

.dropdown-item:active {
    color: #000 !important;
}
</style>



<section style="position: relative; overflow: hidden;">
  <div style="aspect-ratio: 16 / 9; width: 100%; position: relative;">
    <video autoplay muted loop playsinline
      style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
      <source src="assets/images/banners/videos/kitchenware_video.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
</section>

<div class="px-5 py-4">

    <!-- Sort Filter -->
    <div class="row mb-3">
        <div class="col-12 text-end">
            <div class="dropdown">
                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    SORT
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="sortDropdown">
                    <li><a class="dropdown-item active" href="#">relevance</a></li>
                    <li><a class="dropdown-item" href="#">Newest first</a></li>
                    <li><a class="dropdown-item" href="#">Price ascending</a></li>
                    <li><a class="dropdown-item" href="#">Price descending</a></li>
                    <li><a class="dropdown-item text-center text-white bg-secondary" href="#" onclick="closeDropdown(event)">CLOSE</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
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
                    <div class="mb-4" style="border-bottom: 1px solid #ddd; padding: 10px;">
                        <div class="filter-title d-flex justify-content-between align-items-center"
                             data-bs-toggle="collapse"
                             data-bs-target="#filter<?= $filterId ?>"
                             aria-expanded="true"
                             aria-controls="filter<?= $filterId ?>">
                            <?= $title ?>
                            <i class="bi bi-chevron-up ms-1" id="icon<?= $filterId ?>"></i>
                        </div>
                        <div class="collapse show" id="filter<?= $filterId ?>">
                            <?php foreach ($options as $opt): ?>
                                <div class="form-check" style="padding: 5px 1.5rem; color: #444">
                                    <input class="form-check-input" type="checkbox" id="<?= strtolower(str_replace(' ', '_', $opt)) ?>">
                                    <label class="form-check-label" for="<?= strtolower(str_replace(' ', '_', $opt)) ?>"><?= $opt ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php $filterId++; endforeach; ?>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="col-lg-9">
            <div class="row g-4">
                <?php
                $products = [
                    [
                        'img' => 'assets/images/product_highlight/fackelmann_bamboo_rice_spoon_23_cm.webp',
                        'overlay' => 'assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp',
                        'desc' => 'Fackelmann Non-Stick Aluminium Deep Kadhai with Glass Lid (26.5 cm) – Ceramic.',
                        'price' => '₹ 8,990.00'
                    ],
                    [
                        'img' => 'assets/images/product_highlight/fackelmann_bamboo_rice_spoon_23_cm.webp',
                        'overlay' => 'assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp',
                        'desc' => 'Fackelmann Steel Kadhai with Designer Lid- 26 cm, 3.25 litres – Ceramic.',
                        'price' => '₹ 8,149.00'
                    ],
                    [
                        'img' => 'assets/images/product_highlight/fackelmann_bamboo_rice_spoon_23_cm.webp',
                        'overlay' => 'assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp',
                        'desc' => 'Fackelmann Steel Kadhai with Designer Lid- 26 cm, 3.25 litres – Ceramic.',
                        'price' => '₹ 8,149.00'
                    ],
                    [
                        'img' => 'assets/images/product_highlight/fackelmann_bamboo_rice_spoon_23_cm.webp',
                        'overlay' => 'assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp',
                        'desc' => 'Fackelmann Steel Kadhai with Designer Lid- 26 cm, 3.25 litres – Ceramic.',
                        'price' => '₹ 8,149.00'
                    ],
                    [
                        'img' => 'assets/images/product_highlight/fackelmann_bamboo_rice_spoon_23_cm.webp',
                        'overlay' => 'assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp',
                        'desc' => 'Fackelmann Steel Kadhai with Designer Lid- 26 cm, 3.25 litres – Ceramic.',
                        'price' => '₹ 8,149.00'
                    ],
                    [
                        'img' => 'assets/images/product_highlight/fackelmann_bamboo_rice_spoon_23_cm.webp',
                        'overlay' => 'assets/images/product_highlight/fackelmann_bamboo_slotted_turner_30_cm.webp',
                        'desc' => 'Fackelmann Steel Kadhai with Designer Lid- 26 cm, 3.25 litres – Ceramic.',
                        'price' => '₹ 8,149.00'
                    ],
                ];
                foreach ($products as $product): ?>
                    <div class="col-md-4">
                        <div class="product-card">
                            <img src="<?= $product['img'] ?>" class="img-fluid main-img" alt="">
                            <img src="<?= $product['overlay'] ?>" class="img-fluid hover-img" alt="">
                            <div class="product-category">KADAI</div>
                            <div class="product-description"><?= $product['desc'] ?></div>
                            <div class="product-price"><?= $product['price'] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
function closeDropdown(event) {
    event.preventDefault();
    const dropdown = bootstrap.Dropdown.getInstance(document.getElementById('sortDropdown'));
    dropdown.hide();
}

// Toggle icons on collapse
document.querySelectorAll('.collapse').forEach(collapse => {
    collapse.addEventListener('show.bs.collapse', function () {
        const icon = this.previousElementSibling.querySelector('i');
        icon.classList.remove('bi-chevron-down');
        icon.classList.add('bi-chevron-up');
    });
    collapse.addEventListener('hide.bs.collapse', function () {
        const icon = this.previousElementSibling.querySelector('i');
        icon.classList.remove('bi-chevron-up');
        icon.classList.add('bi-chevron-down');
    });
});
</script>

<?php include('includes/footer.php'); ?>
