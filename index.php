<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

<style>
body {
    background-color: #fff;
}

.product-title {
    font-size: 20px;
    font-weight: 600;
}

.price {
    color: #d00;
    font-size: 24px;
    font-weight: bold;
}

.old-price {
    text-decoration: line-through;
    font-size: 16px;
    color: #666;
}

.request-btn {
    background-color: #73c0a8;
    color: #fff;
    border: none;
    padding: 10px 20px;
}

.request-btn:hover {
    background-color: #5ea68f;
}

.thumb-img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border: 2px solid transparent;
    cursor: pointer;
    transition: border 0.3s ease;
}

.thumb-img.active {
    border: 2px solid #73c0a8;
}

.zoom-view {
    display: none;
    width: 100%;
    height: 450px;
    overflow: hidden;
    border: 1px solid #ccc;
}

.zoom-view img {
    position: relative;
    width: 200%;
    height: auto;
    transform: translate(0, 0);
    transition: transform 0.1s ease;
    cursor: crosshair;
}

/* Swiper Navigation Buttons */
.swiper-button-next,
.swiper-button-prev {
    color: #000;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 50%;
    width: 40px;
    height: 40px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

.swiper-button-next::after,
.swiper-button-prev::after {
    font-size: 16px;
    font-weight: bold;
}

.swiper-pagination {
    bottom: 5px;
}
</style>

<style>
.section-title {
    font-weight: 600;
    text-transform: uppercase;
    font-size: 14px;
    color: #555;
    margin-bottom: 10px;
}

.divider {
    border-top: 1px solid #ddd;
    margin: 1rem 0;
}

.care-icon {
    width: 40px;
    margin-right: 10px;
}

.tech-data td:first-child {
    font-weight: 600;
    width: 120px;
    color: #444;
}

.tech-data td:last-child {
    color: #555;
}

.section-block {
    padding: 10px 0;
}
</style>

<div class="container py-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Cook</a></li>
            <li class="breadcrumb-item"><a href="#">Pans</a></li>
            <li class="breadcrumb-item active" aria-current="page">Frypan</li>
        </ol>
    </nav>

    <div class="row">
        <!-- Product Image Section -->
        <div class="col-lg-6">
            <!-- Swiper Main Slider -->
            <div class="swiper mySwiperMain mb-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img
                            src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-1.webp"
                            class="w-100 zoom-image" alt="Product 1"></div>
                    <div class="swiper-slide"><img
                            src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-2.webp"
                            class="w-100 zoom-image" alt="Product 2"></div>
                    <div class="swiper-slide"><img
                            src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-3.webp"
                            class="w-100 zoom-image" alt="Product 3"></div>
                    <div class="swiper-slide"><img
                            src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-4.webp"
                            class="w-100 zoom-image" alt="Product 4"></div>
                    <div class="swiper-slide"><img
                            src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-5.webp"
                            class="w-100 zoom-image" alt="Product 5"></div>
                </div>

                <!-- Navigation Buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>

            <!-- Thumbnail Images -->
            <div class="d-flex justify-content-start gap-2">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-1.webp"
                    class="thumb-img active" onclick="slideToIndex(0, this)">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-2.webp"
                    class="thumb-img" onclick="slideToIndex(1, this)">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-3.webp"
                    class="thumb-img" onclick="slideToIndex(2, this)">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-4.webp"
                    class="thumb-img" onclick="slideToIndex(3, this)">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-5.webp"
                    class="thumb-img" onclick="slideToIndex(4, this)">
            </div>
        </div>

        <!-- Product Info Section -->
        <div class="col-lg-6">
            <h2 class="product-title mb-2">SR BI-PLY Professional Frypan 24 Cm</h2>

            <!-- Product Info -->
            <div class="product-info">
                <p class="mb-2">
                    <span class="price">MRP ₹ 7,990.00</span><br>
                    <span class="old-price">RRP: ₹ 8,490.00</span> &nbsp; <span>(6% Off)</span>
                </p>
                <ul class="feature-list list-unstyled">
                    <li>✔ Innovative BI-PLY construction. Hard anodised aluminium exterior. Premium 18/10 stainless
                        steel interior</li>
                    <li>✔ Induction and all cooktop compatible. Solid induction plate gives optimum connectivity and
                        heat transfer on induction cooktops</li>
                    <li>✔ Double riveted, Cool Touch™ brushed stainless steel handles. Reduce heat transfer during
                        cooktop use. Riveted for durability</li>
                    <li>✔ Metal utensil safe</li>
                    <li>✔ Oven safe 200°C</li>
                </ul>
                <button class="request-btn mt-3">REQUEST QUOTE</button>
            </div>

            <!-- Zoom View -->
            <div class="zoom-view">
                <img id="zoomedImage" src="" alt="Zoom Image">
            </div>
        </div>
    </div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
// ✅ Swiper Initialization
const swiper = new Swiper('.mySwiperMain', {
    loop: false,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    on: {
        slideChange: () => {
            const thumbs = document.querySelectorAll('.thumb-img');
            thumbs.forEach(img => img.classList.remove('active'));
            thumbs[swiper.activeIndex].classList.add('active');
        }
    }
});

// ✅ Thumbnail Click Function
function slideToIndex(index, element) {
    swiper.slideTo(index);
    document.querySelectorAll('.thumb-img').forEach(img => img.classList.remove('active'));
    element.classList.add('active');
}

// ✅ Zoom effect
const zoomImages = document.querySelectorAll('.zoom-image');
const zoomedImage = document.getElementById('zoomedImage');
const productInfo = document.querySelector('.product-info');
const zoomView = document.querySelector('.zoom-view');

zoomImages.forEach(img => {
    img.addEventListener('mouseenter', () => {
        zoomedImage.src = img.getAttribute('src');
        productInfo.style.display = 'none';
        zoomView.style.display = 'block';
    });

    img.addEventListener('mouseleave', () => {
        productInfo.style.display = 'block';
        zoomView.style.display = 'none';
    });

    img.addEventListener('mousemove', (e) => {
        const rect = e.target.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width) * 100;
        const y = ((e.clientY - rect.top) / rect.height) * 100;
        zoomedImage.style.transform = `translate(-${x}%, -${y}%) scale(2)`;
    });
});
</script>

<?php include('includes/footer.php'); ?>