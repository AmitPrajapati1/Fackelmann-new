<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

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

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 50%;
    background-size: 50%, 50%;
    padding: 15px;
}

/* ✅ Zoom View on Right Column */
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
            <!-- Bootstrap Carousel -->
            <div id="productCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-1.webp"
                            class="d-block w-100 zoom-image" alt="Product 1">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-2.webp"
                            class="d-block w-100 zoom-image" alt="Product 2">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-3.webp"
                            class="d-block w-100 zoom-image" alt="Product 3">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-4.webp"
                            class="d-block w-100 zoom-image" alt="Product 4">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-5.webp"
                            class="d-block w-100 zoom-image" alt="Product 5">
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- Thumbnail Images -->
            <div class="d-flex justify-content-start gap-2">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-1.webp"
                    class="thumb-img active" data-bs-target="#productCarousel" data-bs-slide-to="0"
                    onclick="setActiveThumb(this)">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-2.webp"
                    class="thumb-img" data-bs-target="#productCarousel" data-bs-slide-to="1"
                    onclick="setActiveThumb(this)">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-3.webp"
                    class="thumb-img" data-bs-target="#productCarousel" data-bs-slide-to="2"
                    onclick="setActiveThumb(this)">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-4.webp"
                    class="thumb-img" data-bs-target="#productCarousel" data-bs-slide-to="3"
                    onclick="setActiveThumb(this)">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-5.webp"
                    class="thumb-img" data-bs-target="#productCarousel" data-bs-slide-to="4"
                    onclick="setActiveThumb(this)">
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
                    <li>✔ Innovative BI-PLY construction. Hard anodised aluminium exterior. Premium 18/10 stainless steel interior</li>
                    <li>✔ Induction and all cooktop compatible. Solid induction plate gives optimum connectivity and heat transfer on induction cooktops</li>
                    <li>✔ Double riveted, Cool Touch™ brushed stainless steel handles. Reduce heat transfer during cooktop use. Riveted for durability</li>
                    <li>✔ Metal utensil safe</li>
                    <li>✔ Oven safe 200°C</li>
                </ul>
                <button class="request-btn mt-3">REQUEST QUOTE</button>
            </div>

            <!-- Zoom View (Hidden by default) -->
            <div class="zoom-view">
                <img id="zoomedImage" src="" alt="Zoom Image">
            </div>
        </div>
    </div>
</div>

<script>
// Active thumbnail highlight on click
function setActiveThumb(element) {
    document.querySelectorAll('.thumb-img').forEach(img => img.classList.remove('active'));
    element.classList.add('active');
}

// Update active thumbnail on carousel slide
const carousel = document.querySelector('#productCarousel');
carousel.addEventListener('slide.bs.carousel', function(event) {
    const index = event.to;
    const thumbs = document.querySelectorAll('.thumb-img');
    thumbs.forEach(img => img.classList.remove('active'));
    thumbs[index].classList.add('active');
});

// ✅ Zoom effect replaces product-info for ALL images
const zoomImages = document.querySelectorAll('.zoom-image');
const zoomedImage = document.getElementById('zoomedImage');
const productInfo = document.querySelector('.product-info');
const zoomView = document.querySelector('.zoom-view');

zoomImages.forEach(img => {
    img.addEventListener('mouseenter', () => {
        const src = img.getAttribute('src');
        zoomedImage.src = src; // Update zoom image with hovered image
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
