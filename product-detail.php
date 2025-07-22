<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<style>

body {
    background-color: #f5f5f5;
}

/* ---------- GLOBAL PRODUCT TYPOGRAPHY ---------- */
.product-title {
    font-size: 20px;
    font-weight: 600;
}

/* Legacy price styles (kept for backward compatibility) */
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

/* ---------- REQUEST QUOTE BUTTON ---------- */
.request-btn {
    background-color: #73c0a8;
    color: #fff;
    border: none;
    padding: 10px 20px;
}
.request-btn:hover {
    background-color: #5ea68f;
}

/* ---------- THUMBNAILS ---------- */
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

/* ---------- CAROUSEL CONTROLS ---------- */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 50%;
    background-size: 50%, 50%;
    padding: 15px;
}

/* ---------- ZOOM VIEW (Right Column) ---------- */
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

/* ---------- ACCORDION CUSTOM ICONS ---------- */
.accordion-button::after {
    display: none;
}

.toggle-icon {
    font-size: 28px;
    margin-left: auto;
    color: #878787; /* Same color as original */
    transition: transform 0.2s ease;
}

.accordion-item {
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    border-left: none;
    border-right: none;
}

.section-title {
    text-transform: uppercase;
    font-size: 16px !important;
    color: #737373;
    font-weight: 400;
    letter-spacing: .7px;
    line-height: 50px;
    margin: 0 -20px;
    padding: 0;
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

#collapseTechnical table tbody tr td  {
    background-color: #f5f5f5 !important;
}

/* =========================================================
   PRODUCT INFO BLOCK  (Styled per reference image)
   ========================================================= */
.product-info {
    max-width: 520px;
    color: #1a1a1a;
    font-size: 16px;
    line-height: 1.35;
}
.product-info h1.pi-title {
    font-size: 28px;
    line-height: 1.25;
    font-weight: 700;
    margin-bottom: 8px;
    color: #000;
}
.product-info .pi-sku {
    font-size: 14px;
    color: #9a9a9a;
    margin-bottom: 16px;
}
.product-info .pi-mrp {
    font-size: 26px;
    font-weight: 700;
    color: #d00;
    margin-bottom: 4px;
}
.product-info .pi-rrp {
    font-size: 16px;
    color: #222;
    margin-bottom: 16px;
}
.product-info .pi-availability-label {
    display: block;
    font-size: 13px;
    line-height: 1;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #737373;
    margin-top: 20px;
    margin-bottom: 6px;
}
.product-info .pi-availability-logo {
    height: 28px;
    width: auto;
    display: inline-block;
    margin-bottom: 16px;
}

/* Bullet list styled w/ red dot like screenshot */
.product-info .pi-feature-list {
    margin: 0;
    padding: 0;
    list-style: none;
    font-size: 15px;
    color: #1a1a1a;
}
.product-info .pi-feature-list li {
    position: relative;
    padding-left: 18px;
    margin-bottom: 10px;
}
.product-info .pi-feature-list li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 7px;
    width: 8px;
    height: 8px;
    background: #d00;
    border-radius: 50%;
}

/* Space before CTA */
.product-info .pi-cta-wrap {
    margin-top: 20px;
}

.request-btn {
    padding: 15px 25px;
    margin: 15px 0;
    color: white;
    background: repeating-linear-gradient(-45deg, #bf0019, #bf0019 5px, #c51a30 5px, #c51a30 7px);
    font-weight: bold;
    display: inline-block;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.pi-availability-logo img {
    display:block;
    height:22px;
    width:auto;
}
.accordion-body {
    padding: 0px 0px 10px 5px !important;
    background-color: #f5f5f5 !important;

}

.accordion-button {
    background-color: #f5f5f5 !important;
}

/* Responsive tweaks */
@media (max-width: 575.98px) {
    .product-info h1.pi-title {
        font-size: 22px;
    }
    .product-info .pi-mrp {
        font-size: 22px;
    }
}
</style>

<div class="px-4 py-4">
    <!-- Breadcrumb -->
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Cookware</li>
            <li class="breadcrumb-item" aria-current="page">Kadai</li>
        </ol>
    </div>

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
                     onclick="setActiveThumb(this)" alt="Thumb 1">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-2.webp"
                     class="thumb-img" data-bs-target="#productCarousel" data-bs-slide-to="1"
                     onclick="setActiveThumb(this)" alt="Thumb 2">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-3.webp"
                     class="thumb-img" data-bs-target="#productCarousel" data-bs-slide-to="2"
                     onclick="setActiveThumb(this)" alt="Thumb 3">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-4.webp"
                     class="thumb-img" data-bs-target="#productCarousel" data-bs-slide-to="3"
                     onclick="setActiveThumb(this)" alt="Thumb 4">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/product-detail-5.webp"
                     class="thumb-img" data-bs-target="#productCarousel" data-bs-slide-to="4"
                     onclick="setActiveThumb(this)" alt="Thumb 5">
            </div>
        </div>

        <!-- Product Info Section -->
        <div class="col-lg-6">
            <div class="product-info">
                <h1 class="pi-title">Fackelmann Triply Stainless Steel Kadhai with Designer Lid- 20 cm, 1.5 litres</h1>
                <!-- NEW WRAPPER: Everything below stays hideable; title stays visible -->
                <div class="pi-content">
                    <div class="pi-sku">SKU ID: 5568481</div>
                    <div class="pi-mrp">MRP ₹ 2,749.00</div>

                    <span class="pi-availability-label">Available At</span>
                        <a href="https://www.amazon.in/dp/B07X24NQTX?th=1" target="_blank" class="pi-availability-logo" aria-label="Amazon">
                             <img src="assets/images/icons/amazon.svg" alt="">
                        </a>
                    <ul class="pi-feature-list">
                        <li>Material: 18/10 Stainless Steel Base | Color: Silver</li>
                        <li>The inside layer (the one that touches your food) is premium 18/10 stainless steel base, giving durability &amp; high stain / non-stick resistance.</li>
                        <li>Aluminium core in between layer is made of fine grade aluminium and extends from base up through the top edges to ensure even heating.</li>
                        <li>Exterior cookware surface is high-density 430-series magnetic stainless steel for use on any cooktop (gas, glass, induction, etc.).</li>
                        <li>5 Years warranty on all stainless steel cookware.</li>
                        <li>Less Oil. No Burning. Induction Cookware.</li>
                        <li>Perfect grip handles for better hold.</li>
                        <li>Package Content: 1 Stainless Steel Kadhai and 1 Designer Lid.</li>
                    </ul>

                    <div class="pi-cta-wrap">
                        <a href="contact-us.php">
                            <button class="request-btn mt-3">REQUEST QUOTE</button>
                        </a>
                    </div>
                </div><!-- /.pi-content -->
            </div>

            <!-- Zoom View -->
            <div class="zoom-view">
                <img id="zoomedImage" src="" alt="Zoom Image">
            </div>
        </div>
    </div>

    <!-- Accordion -->
    <div class="accordion py-4" id="productDetailsAccordion">
        <!-- Description -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingDescription">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseDescription" aria-expanded="false" aria-controls="collapseDescription">
                    <span class="section-title">Description</span>
                    <i class="toggle-icon bi bi-plus"></i>
                </button>
            </h2>
            <div id="collapseDescription" class="accordion-collapse collapse" aria-labelledby="headingDescription"
                 data-bs-parent="#productDetailsAccordion">
                <div class="accordion-body text-muted">
                    Designed to meet the rigorous demands of the toughest kitchens. Innovative BI-PLY construction
                    combines an extremely durable hard anodised exterior with premium 18/10 stainless steel interior.
                </div>
            </div>
        </div>

        <!-- Care Instructions -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingCare">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseCare" aria-expanded="false" aria-controls="collapseCare">
                    <span class="section-title">Care Instructions</span>
                    <i class="toggle-icon bi bi-plus"></i>
                </button>
            </h2>
            <div id="collapseCare" class="accordion-collapse collapse" aria-labelledby="headingCare"
            data-bs-parent="#productDetailsAccordion">
            <div class="accordion-body d-flex align-items-center text-muted">
                 <i class="fas fa-hands-wash"></i>
                    Dishwasher safe, hand wash recommended.
                </div>
            </div>
        </div>

        <!-- Technical Data -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTechnical">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTechnical" aria-expanded="false" aria-controls="collapseTechnical">
                    <span class="section-title">Technical Data</span>
                    <i class="toggle-icon bi bi-plus"></i>
                </button>
            </h2>
            <div id="collapseTechnical" class="accordion-collapse collapse" aria-labelledby="headingTechnical"
                 data-bs-parent="#productDetailsAccordion">
                <div class="accordion-body">
                    <div class="table-responsive">
                        <table class="table table-borderless tech-data mb-0">
                            <tbody>
                                <tr>
                                    <td>Color:</td>
                                    <td>Dark grey exterior, stainless steel interior</td>
                                </tr>
                                <tr>
                                    <td>Material:</td>
                                    <td>3.5mm hard anodised aluminium and premium 18/10 stainless steel</td>
                                </tr>
                                <tr>
                                    <td>Size:</td>
                                    <td>24 cm</td>
                                </tr>
                                <tr>
                                    <td>Finish:</td>
                                    <td>Matte exterior, satin interior</td>
                                </tr>
                                <tr>
                                    <td>Handle:</td>
                                    <td>Cool Touch® cast stainless steel</td>
                                </tr>
                                <tr>
                                    <td>Guarantee:</td>
                                    <td>50 Years</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
    if (thumbs[index]) {
        thumbs[index].classList.add('active');
    }
});

// Zoom effect
const zoomImages = document.querySelectorAll('.zoom-image');
const zoomedImage = document.getElementById('zoomedImage');
const piContent = document.querySelector('.pi-content'); // NEW: only hide content, keep title visible
const zoomView = document.querySelector('.zoom-view');

zoomImages.forEach(img => {
    img.addEventListener('mouseenter', () => {
        const src = img.getAttribute('src');
        zoomedImage.src = src;
        if (piContent) piContent.style.display = 'none';
        zoomView.style.display = 'block';
    });

    img.addEventListener('mouseleave', () => {
        if (piContent) piContent.style.display = 'block';
        zoomView.style.display = 'none';
    });

    img.addEventListener('mousemove', (e) => {
        const rect = e.target.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width) * 100;
        const y = ((e.clientY - rect.top) / rect.height) * 100;
        zoomedImage.style.transform = `translate(-${x}%, -${y}%) scale(2)`;
    });
});

// Accordion icon toggle
// Reset all icons to plus when any header clicked, then set the active one based on collapse state
const accordButtons = document.querySelectorAll('.accordion-button');

accordButtons.forEach(button => {
    button.addEventListener('click', function () {
        // Wait a tick for Bootstrap to update classes, then adjust icons
        setTimeout(() => {
            document.querySelectorAll('.toggle-icon').forEach(i => i.classList.replace('bi-dash', 'bi-plus'));
            if (!this.classList.contains('collapsed')) {
                const icon = this.querySelector('.toggle-icon');
                if (icon) icon.classList.replace('bi-plus', 'bi-dash');
            }
        }, 0);
    });
});
</script>

<?php include('includes/footer.php'); ?>
