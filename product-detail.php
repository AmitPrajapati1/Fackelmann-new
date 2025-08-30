<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>
<link rel="stylesheet" href="assets/css/style.css">

<style>
    .size-option {
        background: #fff;
        border: 1px solid #888c8c;
        border-radius: 5px;
        padding: 6px 10px;
        text-align: center;
        min-width: 90px;
        max-width: 90px;
        cursor: pointer;
        font-size: 13px;
        transition: all 0.2s ease-in-out;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 60px;
        font-weight: 600;
    }

    .size-option:hover {
        border-color: #007bff;
    }

    .size-option.active {
        border: 2px solid #007bff;
        background: #fff;
    }
</style>

<div class="px-4 py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Cookware</a></li>
            <li class="breadcrumb-item"><a href="product-listing.php">Kadai</a></li>
            <li class="breadcrumb-item active" aria-current="page">Quartz Kadai</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-6">
            <div id="productCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/product_highlight/kadai/product-detail/kadai/QK_1.jpg" class="d-block w-100 zoom-image" alt="Product 1">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/product_highlight/kadai/product-detail/kadai/QK_2.jpg" class="d-block w-100 zoom-image" alt="Product 2">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/product_highlight/kadai/product-detail/kadai/QK_3.jpg" class="d-block w-100 zoom-image" alt="Product 3">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/product_highlight/kadai/product-detail/kadai/QK_4.jpg" class="d-block w-100 zoom-image" alt="Product 4">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="d-flex gap-2">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/QK_1.jpg" class="thumb-img active" data-bs-target="#productCarousel" data-bs-slide-to="0" alt="Thumb 1">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/QK_2.jpg" class="thumb-img" data-bs-target="#productCarousel" data-bs-slide-to="1" alt="Thumb 2">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/QK_3.jpg" class="thumb-img" data-bs-target="#productCarousel" data-bs-slide-to="2" alt="Thumb 3">
                <img src="assets/images/product_highlight/kadai/product-detail/kadai/QK_4.jpg" class="thumb-img" data-bs-target="#productCarousel" data-bs-slide-to="3" alt="Thumb 4">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="product-info">
                <h1 class="pi-title">Fackelmann Triply Stainless Steel Kadhai with Designer Lid- 20 cm, 1.5 litres</h1>
                <div class="pi-content">
                    <div class="pi-sku">SKU ID: 5568481</div>
                    
                    <div class="pi-mrp">MRP ₹ 2,749.00</div>
                    <span class="pi-availability-label">Available At</span>
                    <a href="https://www.amazon.in/dp/B07X24NQTX?th=1" target="_blank" title="Order Now" class="pi-availability-logo" aria-label="Amazon">
                        <img src="assets/images/icons/amazon.svg" alt="Amazon">
                    </a>
                    <div class="py-2">
                        <p class="mb-2"><span style="color: #565959">Size:</span> <span class="fw-bold" style="font-size: 14px">20cm</span></p>
                        <div class="d-flex flex-wrap gap-2 overflow-auto flex-nowrap">                            
                            <div class="size-option active">
                                <div>20cm</div>
                            </div>                          
                            <div class="size-option">
                                <div>24cm</div>
                            </div>                            
                            <div class="size-option">
                                <div>26cm</div>
                            </div>                           
                            <div class="size-option">
                                <div>28cm</div>
                            </div>
                           
                        </div>
                    </div>
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
                            <button class="request-btn">REQUEST QUOTE</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="zoom-view">
                <img id="zoomedImage" src="" alt="Zoom Image">
            </div>
        </div>
    </div>
    <div class="accordion py-4" id="productDetailsAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingDescription">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDescription" aria-expanded="false" aria-controls="collapseDescription">
                    <span class="section-title">Description</span>
                    <i class="toggle-icon bi bi-plus"></i>
                </button>
            </h2>
            <div id="collapseDescription" class="accordion-collapse collapse" aria-labelledby="headingDescription" data-bs-parent="#productDetailsAccordion">
                <div class="accordion-body text-muted">
                    Designed to meet the rigorous demands of the toughest kitchens. Innovative BI-PLY construction combines an extremely durable hard anodised exterior with premium 18/10 stainless steel interior.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingCare">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCare" aria-expanded="false" aria-controls="collapseCare">
                    <span class="section-title">Care Instructions</span>
                    <i class="toggle-icon bi bi-plus"></i>
                </button>
            </h2>
            <div id="collapseCare" class="accordion-collapse collapse" aria-labelledby="headingCare" data-bs-parent="#productDetailsAccordion">
                <div class="accordion-body">
                    <div class="care-instruction">Dishwasher safe, hand wash recommended.</div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTechnical">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTechnical" aria-expanded="false" aria-controls="collapseTechnical">
                    <span class="section-title">Technical Data</span>
                    <i class="toggle-icon bi bi-plus"></i>
                </button>
            </h2>
            <div id="collapseTechnical" class="accordion-collapse collapse" aria-labelledby="headingTechnical" data-bs-parent="#productDetailsAccordion">
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
const carousel = document.querySelector('#productCarousel');
const thumbs = document.querySelectorAll('.thumb-img');
const zoomImages = document.querySelectorAll('.zoom-image');
const zoomedImage = document.getElementById('zoomedImage');
const piContent = document.querySelector('.pi-content');
const zoomView = document.querySelector('.zoom-view');
const accordionButtons = document.querySelectorAll('.accordion-button');

// Thumbnail and Carousel Sync
thumbs.forEach((thumb, index) => {
    thumb.addEventListener('click', () => {
        thumbs.forEach(t => t.classList.remove('active'));
        thumb.classList.add('active');
    });
});

carousel.addEventListener('slide.bs.carousel', e => {
    thumbs.forEach(t => t.classList.remove('active'));
    thumbs[e.to]?.classList.add('active');
});

// Zoom Effect
zoomImages.forEach(img => {
    img.addEventListener('mouseenter', () => {
        zoomedImage.src = img.src;
        piContent.style.display = 'none';
        zoomView.style.display = 'block';
    });

    img.addEventListener('mouseleave', () => {
        piContent.style.display = 'block';
        zoomView.style.display = 'none';
    });

    img.addEventListener('mousemove', e => {
        const rect = e.target.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width) * 100;
        const y = ((e.clientY - rect.top) / rect.height) * 100;
        zoomedImage.style.transform = `translate(-${x}%, -${y}%) scale(2)`;
    });
});

// Accordion Icon Toggle
accordionButtons.forEach(button => {
    button.addEventListener('click', () => {
        setTimeout(() => {
            document.querySelectorAll('.toggle-icon').forEach(icon => icon.classList.replace('bi-dash', 'bi-plus'));
            if (!button.classList.contains('collapsed')) {
                button.querySelector('.toggle-icon')?.classList.replace('bi-plus', 'bi-dash');
            }
        }, 0);
    });
});
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sizeOptions = document.querySelectorAll(".size-option");
        const selectedSize = document.getElementById("selected-size");

        sizeOptions.forEach(option => {
            option.addEventListener("click", function () {
                // Remove active class from all
                sizeOptions.forEach(opt => opt.classList.remove("active"));
                
                // Add active to clicked one
                this.classList.add("active");
                
                // Update size text
                selectedSize.textContent = this.textContent.trim();
            });
        });
    });
</script>
<script>
    const slider = document.querySelector('.d-flex.overflow-auto');

    let isDown = false;
    let startX;
    let scrollLeft;

    // Mouse Events
    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
        slider.classList.add('active');
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 1.5;
        slider.scrollLeft = scrollLeft - walk;
    });

    // Touch Events
    slider.addEventListener('touchstart', (e) => {
        isDown = true;
        startX = e.touches[0].pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('touchend', () => {
        isDown = false;
    });

    slider.addEventListener('touchmove', (e) => {
        if (!isDown) return;
        const x = e.touches[0].pageX - slider.offsetLeft;
        const walk = (x - startX) * 1.5;
        slider.scrollLeft = scrollLeft - walk;
    });
</script>


<?php include('includes/footer.php'); ?>