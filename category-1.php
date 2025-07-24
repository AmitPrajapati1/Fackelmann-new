<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cookware Scroll</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    h5 {
        color: #6c757d;
        font-weight: 500;
        margin-bottom: 1rem;
        text-transform: uppercase;
    }

    .category-carousel {
        display: flex;
        justify-content: space-evenly;
        overflow-x: auto;
        gap: 20px;
        padding: 10px 20px;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
    }

    .category-carousel::-webkit-scrollbar {
        display: none;
    }

    .category-carousel .item {
        flex: 0 0 auto;
        scroll-snap-align: start;
        width: 160px;
        text-align: center;
    }

    .category-carousel .item img {
        width: 140px;
        height: 140px;
        object-fit: contain;
        margin-bottom: 10px;
        border-radius: 50%;
        border: 2px solid transparent;
        transition: border 0.3s;
    }

    .category-carousel .item.active-category img {
        border-color: #bf0019;
    }

    .category-carousel .item div {
        color: #bf0019;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.8rem;
    }

    a {
        text-decoration: none;
        color: inherit;
    }
    </style>
</head>

<body>

    <div style="padding-top: 2rem; text-align: center;">
        <h5>Cookware</h5>

        <div class="category-carousel" style="width: 100%;">
            <div class="item">
                <a href="#">
                    <img src="assets/images/categories/cookware/kadai.jpg" alt="Kadai">
                    <div>Kadai</div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="assets/images/categories/cookware/Frypan.webp" alt="Frypan">
                    <div>Frypan</div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="assets/images/categories/cookware/Tawa.webp" alt="Tawa">
                    <div>Tawa</div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="assets/images/categories/cookware/pressure_cooker.jpg" alt="Pressure Cooker">
                    <div>Pressure Cooker</div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="assets/images/categories/cookware/casserole.jpg" alt="Casserole">
                    <div>Casserole</div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="assets/images/categories/cookware/tope.jpg" alt="Tope">
                    <div>Tope</div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="assets/images/categories/cookware/tadkapan.jpg" alt="Tadka Pan">
                    <div>Tadka Pan</div>
                </a>
            </div>
            
        </div>
    </div>

    <script>
    // Optional: Add active class on click
    const carousel = document.querySelector(".category-carousel");
    carousel.addEventListener("click", function(e) {
        const item = e.target.closest(".item");
        if (!item) return;

        document.querySelectorAll(".category-carousel .item").forEach(el => {
            el.classList.remove("active-category");
        });

        item.classList.add("active-category");
    });
    </script>

</body>

</html>