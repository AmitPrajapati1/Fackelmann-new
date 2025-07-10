<style>
    :root {
        --primary-color: #7a001c;
        --white: #ffffff;
    }

    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
    }

    .topbar {
        background-color: var(--primary-color);
        color: var(--white);
        text-align: center;
        padding: 6px 0;
        font-size: 14px;
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: repeating-linear-gradient(45deg, #bf0019, #bf0019 5px, #c51a30 5px, #c51a30 7px);
        padding: 10px 40px;
    }

    .header-left {
        display: flex;
        align-items: center;
    }

    .logo img {
        height: 45px;
    }

    .nav {
        display: flex;
    }

    .nav a {
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        font-size: 14px;
        font-weight: 500;
        color: #fff;
        margin: 0;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        padding: 10px 12px 10px 12px;
        outline: none;
        text-decoration: none;
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .custom-search-wrapper .custom-search-button {
        background: var(--primary-color);
        color: #bc9ca3;
        padding: 5px 12px;
        border-radius: 6px;
        font-size: 13px;
        text-transform: uppercase;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-weight: 700;
        height: 39px;
        min-width: 150px;
        font-family: "Roboto Condensed", sans-serif;
        letter-spacing: 2px;
        border: none;
        cursor: pointer;
        gap: 10px;
    }

    .custom-search-wrapper .custom-search-button:after {
        font-family: "Material Icons";
        content: "\e8b6";
        font-size: 22px;
        margin-left: 8px;
    }

    .custom-search-wrapper .custom-search-button:hover {
        background: #80001d;
        color: var(--white);
    }

    .icon {
        color: var(--white);
        font-size: 22px;
        cursor: pointer;
    }

    .sidenav-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: none;
        z-index: 999;
    }

    .sidenav {
        position: fixed;
        top: 0;
        left: 0;
        width: 360px;
        height: 100%;
        background-color: #fff;
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        transform: translateX(-100%);
        transition: transform 0.5s ease;
        overflow: hidden;
    }

    .sidenav.active {
        transform: translateX(0);
    }

    .sidenav-header {
        background-color: #bf0019;
        color: var(--white);
        padding: 16px;
        font-weight: bold;
        font-size: 14px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .sidenav-search {
        padding: 0px 1px 12px;
        border-bottom: 1px solid #ddd;
    }

    .search-box {
        display: flex;
        align-items: center;
        background: #f3f3f3;
        padding: 12px 10px;
        gap: 10px;
    }

    .search-box i {
        font-size: 18px;
        color: #555;
        flex-shrink: 0;
    }

    .search-box input {
        border: none;
        background: transparent;
        font-size: 14px;
        width: 100%;
        outline: none;
    }

    .panel-wrapper {
        position: relative;
        width: 100%;
        height: calc(100% - 100px);
    }

    .panel {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        transition: transform 0.5s ease;
    }

    #mainMenu {
        transform: translateX(0%);
        z-index: 1;
    }

    #submenuPanel {
        transform: translateX(100%);
        z-index: 2;
    }

    #submenuPanel.active {
        transform: translateX(0%);
    }

    #mainMenu.slide-out {
        transform: translateX(-100%);
    }

    .sidenav-section-title {
        background: #bf0019;
        display: block;
        color: white;
        padding: 10px 16px;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        border-bottom: 1px solid white;
        text-decoration: none;
    }

    .sidenav-links {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .sidenav-links li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 16px;
        border-bottom: 1px solid #eee;
        cursor: pointer;
        font-size: 14px;
    }

    .sidenav-links li:hover {
        background-color: #f8f8f8;
    }

    .sidenav-links li i {
        font-size: 18px;
        color: #888;
    }

    .sidenav-links li span {
        display: flex;
        align-items: center;
    }

    .sidenav-footer {
        display: block;
        color: #333;
        text-decoration: none;
        padding: 12px 16px;
        font-size: 14px;
        border-top: 1px solid #eee;

    }

    .sidenav-footer i {
        font-size: 18px;
        margin-right: 8px;
        vertical-align: middle;
    }

    .submenu-back {
        background: #e2e2e2;
        color: #333;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 13px;
        padding: 12px 16px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .close-btn-sidenav {
        cursor: pointer;
    }

    .submenu-items {
        display: none;
        padding-left: 40px;
        background: #fafafa;
        border-left: 2px solid #ddd;
    }

    .submenu-items li {
        padding: 8px 0;
        border-bottom: none;
        font-size: 13px;
        color: #333;
    }

    .sidenav-links li.active .material-icons.expand-icon {
        transform: rotate(180deg);
        transition: transform 0.3s ease;
    }

    .mega-menu {
        position: absolute;
        left: 0;
        top: 100%;
        width: 100%;
        background-color: #f9f9f9;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px 40px;
        display: none;
        z-index: 998;
    }

    .mega-menu-inner {
        display: flex;
        justify-content: flex-start;
        gap: 40px;
    }

    .mega-menu-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 13px;
        color: #555;
        cursor: pointer;
        min-width: 80px;
        transition: color 0.3s;
    }

    .mega-menu-item i {
        font-size: 26px;
        margin-bottom: 6px;
        color: #888;
    }

    .mega-menu-item:hover {
        color: var(--primary-color);
    }

    .header-left {
        position: relative;
    }

    .sub-cat {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #f5f5f5;
        padding: 20px 0 10px 0;
        position: absolute;
        top: 97px;
        left: 0;
        width: 100%;
        display: none;
        z-index: 999;
    }

    .sub-categories-option {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .sub-categories-option img {
        width: 20px;
        height: 20px;
        margin-right: 5px;
    }

    .dropdown-icon {
        margin-left: 5px;
        font-size: 12px;
    }

    .close-btn {
        cursor: pointer;
        font-size: 20px;
    }

    .dropdown-icon-sub-categories {
        font-size: 20px;
        margin-left: 5px;
        vertical-align: middle;
    }

    .sub-category-icon {
        margin-right: 8px;
        vertical-align: middle;
        font-size: 18px;
    }


    .sub-cat-brands {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #f5f5f5;
        padding: 2px 0 10px 0;
        position: absolute;
        top: 97px;
        left: 0;
        width: 100%;
        display: none;
        z-index: 999;
    }

    .brands-container {
        display: flex;
        justify-content: space-around;
        padding: 20px;
    }

    .brand-item {
        align-items: flex-start;
        cursor: pointer;
        transition: transform 0.3s;
        max-width: 200px;
        width: 100%;
        position: relative;
        padding: 10px;
        box-sizing: border-box;

    }

    .brand-item::before {
        content: "";
        position: absolute;
        top: 9px;
        left: 10px;
        width: 40px;
        height: 2px;
        background-color: #bf0019;
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .brand-item:hover::before {
        visibility: visible;
        opacity: 1;
    }



    .brand-item img {
        max-width: 150px;
        height: auto;
        object-fit: contain;
        display: block;
    }

    .brand-item p {
        margin: 5px 0 0;
        font-size: 13px;
        color: #333;
    }

    .show-more {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        color: #1da1f2;
        cursor: pointer;
        min-height: 100px;
        text-align: center;
    }

    .show-more p {
        margin: 0;
        font-size: 14px;
        font-weight: bold;
    }

    .show-more:hover {
        text-decoration: underline;
    }

    .close-btn-brands {
        position: absolute;
        top: 5px;
        right: 30px;
        cursor: pointer;
        font-weight: 300;
        font-size: 30px;
    }

    .logo-container {
        margin-right: 30px;
    }

    .logo-img {
        height: 45px;
        object-fit: contain;
    }

    @media (min-width: 768px) {
        .logo-container {
            margin-top: 0;
            overflow: visible;
            position: relative;
            line-height: 1;
        }

        .logo-img {
            position: relative;
            height: 60px;
            display: block;
            top: 0;
            margin-bottom: -19px;

        }
    }

    @media (max-width: 991px) {
        .nav {
            display: none !important;
        }
    }

    @media (max-width: 991px) {
        .header {
            flex-direction: row;
            align-items: center;
            padding: 10px 20px;
        }

        .header-left {
            flex: 1;
            justify-content: space-between;
        }


        .header-right {
            gap: 10px;
        }

        .nav {
            display: none !important;
        }

        .sub-cat,
        .sub-cat-brands {
            position: fixed;
            top: 60px;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
            overflow-y: auto;
            max-height: calc(100vh - 60px);
            background-color: #f5f5f5;
        }

        .sub-categories-option {
            width: 100%;
            margin-bottom: 10px;
        }

        .brands-container {
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .brand-item {
            width: 100%;
            max-width: none;
            text-align: center;
        }

        .close-btn,
        .close-btn-brands {
            top: 10px;
            right: 10px;
        }
    }

    @media (max-width: 768px) {
        .sidenav {
            width: 100%;
        }

        .panel-wrapper {
            height: calc(100% - 130px);

            overflow-y: auto;
        }

        .sidenav-links li {
            font-size: 16px;
        }

        .submenu-items li {
            font-size: 15px;
        }

        .sidenav-links li,
        .submenu-items li {
            padding: 16px;
        }

        .sidenav-footer {
            padding: 16px;
        }

    }

    .mobile-search-icon {
        display: none;
        color: var(--white);
        font-size: 28px;
        cursor: pointer;
    }


    @media (max-width: 767px) {
        .custom-search-wrapper {
            display: none;

        }

        .mobile-search-icon {
            display: inline-block;
        }
    }


    @media (min-width: 768px) {
        .custom-search-wrapper {
            display: block;

        }

        .mobile-search-icon {
            display: none;
        }
    }
</style>

<div class="topbar">Life Made Easier, Since 1919!</div>

<header class="header">
    <div class="header-left">
        <div class="logo-container">
            <a href="index.html">
                <img src="assets/images/logo/fackelmann_main_logo.png" alt="Fackelmann Logo" class="logo-img" />
            </a>
        </div>
        <nav class="nav">
            <a href="#">HOME</a>
            <a href="#" data-submenu="productsSubmenu" onclick="toggleSubmenu(event)">PRODUCTS</a>
            <a href="#">SUSTAINABILITY</a>
            <a href="#" data-submenu="brandsSubmenu" onclick="toggleSubmenu(event)">GLOBAL BRANDS</a>
        </nav>


        <div class="mega-menu" id="megaMenu">
            <div class="mega-menu-inner">
                <div class="mega-menu-item">
                    <i class="material-icons">restaurant_menu</i>
                    <span>Cookware</span>
                </div>
                <div class="mega-menu-item">
                    <i class="material-icons">cake</i>
                    <span>Bakeware</span>
                </div>
                <div class="mega-menu-item">
                    <i class="material-icons">kitchen</i>
                    <span>Kitchenware</span>
                </div>
                <div class="mega-menu-item">
                    <i class="material-icons">home</i>
                    <span>At Home</span>
                </div>
            </div>
        </div>

    </div>
    <div class="header-right">
        <div class="custom-search-wrapper">
            <button class="custom-search-button" type="button"><span class="custom-search-text">Search</span></button>
        </div>
        <i class="mobile-search-icon material-icons">search</i>
        <span class="material-icons icon">call</span>
        <span class="material-icons icon" onclick="toggleNav(true)">menu</span>
    </div>
    <div class="sub-cat" id="productsSubmenu" style="display: none;">
        <div class="sub-categories-option">
            <i class='bx bx-bowl-hot sub-category-icon'></i> COOKWARE
            <i class='bx bx-chevron-down dropdown-icon-sub-categories'></i>
        </div>
        <div class="sub-categories-option">
            <i class='bx bx-cake sub-category-icon'></i> BAKEWARE
            <i class='bx bx-chevron-down dropdown-icon-sub-categories'></i>
        </div>
        <div class="sub-categories-option">
            <i class='bx bx-restaurant sub-category-icon'></i> KITCHENWARE
            <i class='bx bx-chevron-down dropdown-icon-sub-categories'></i>
        </div>
        <div class="sub-categories-option">
            <i class='bx bx-home sub-category-icon'></i> AT HOME
            <i class='bx bx-chevron-down dropdown-icon-sub-categories'></i>
        </div>
        <div class="close-btn" onclick="hideSubmenu()">
            <i class='bx bx-x'></i>
        </div>
    </div>

    <div class="sub-cat-brands" id="brandsSubmenu" style="display: none;">
        <div class="brands-container">
            <div class="brand-item">
                <a href="#"><img src="assets/images/brands/cktfm_200x125.jpg" alt="Fackelmann"></a>
                <div class="brand-desc">
                    <p>Popular kitchen helpers & diverse household items</p>
                </div>
            </div>
            <div class="brand-item">
                <a href="#"><img src="assets/images/brands/tasty_200x125.jpg" alt="Paris Hilton"></a>
                <div class="brand-desc">
                    <p>Glamour for the kitchen with Paris Hilton Cookware.</p>
                </div>
            </div>
            <div class="brand-item">
                <a href="#"><img src="assets/images/brands/tasty_200x125.jpg" alt="Stanley Rogers"></a>
                <div class="brand-desc">
                    <p>Cookware, kitchen gadgets & cutlery of the highest quality</p>
                </div>
            </div>
            <div class="brand-item">
                <a href="#"><img src="assets/images/brands/tasty_200x125.jpg" alt="Tasty"></a>
                <div class="brand-desc">
                    <p>Creative & versatile – colorful kitchen tools from Tasty.</p>
                </div>
            </div>
            <div class="brand-item">
                <a href="#"><img src="assets/images/brands/tasty_200x125.jpg" alt="Chefkoch Fackelmann"></a>
                <div class="brand-desc">
                    <p>Chef meets Fackelmann – You can cook anything with this.</p>
                </div>
            </div>
            <div class="brand-item show-more">
                <div class="brand-desc">
                    <p>Show More</p>
                </div>
            </div>
        </div>
        <div class="close-btn-brands" onclick="hideSubmenu()">
            <i class='bx bx-x'></i>
        </div>
    </div>

</header>

<div class="sidenav-overlay" onclick="toggleNav(false)"></div>

<div class="sidenav" id="sidenav">
    <div class="sidenav-header">
        CLOSE MENU
        <span class="material-icons close-btn-sidenav" onclick="toggleNav(false)">close</span>
    </div>

    <div class="sidenav-search">
        <div class="search-box">
            <i class='bx bx-search'></i>
            <input type="text" placeholder="Search term..." />
        </div>
    </div>


    <div class="panel-wrapper">
        <div class="panel" id="mainMenu">
            <div class="sidenav-section-title">Products</div>
            <ul class="sidenav-links">
                <li onclick="showSubmenu()"><span><i class="material-icons"
                            style="margin-right:10px;">restaurant_menu</i>Cookware</span><i
                        class="material-icons">chevron_right</i></li>
                <li><span><i class="material-icons" style="margin-right:10px;">cake</i>Bakeware</span><i
                        class="material-icons">chevron_right</i></li>
                <li><span><i class="material-icons" style="margin-right:10px;">kitchen</i>Kitchenware</span><i
                        class="material-icons">chevron_right</i></li>
                <li><span><i class="material-icons" style="margin-right:10px;">home</i>At Home</span><i
                        class="material-icons">chevron_right</i></li>
            </ul>
            <a href="index.html" class="sidenav-section-title">Home</a>
            <a href="about-us.html" class="sidenav-section-title">About Us</a>
            <a href="global-brands.html" class="sidenav-section-title">Global Brands</a>
            <a href="sustainability.html" class="sidenav-section-title">Sustainability</a>
            <a href="contact.html" class="sidenav-footer">
                <i class="material-icons">mail_outline</i> Contact form
            </a>

        </div>


        <div class="panel" id="submenuPanel">
            <div class="submenu-back" onclick="hideSubmenu()">
                <i class="material-icons">arrow_back</i> BACK
            </div>
            <div class="sidenav-section-title">Cookware</div>
            <ul class="sidenav-links">
                <li onclick="toggleAccordion(this)">
                    <span><i class="material-icons">kitchen</i>Pots</span>
                    <i class="material-icons expand-icon">expand_more</i>
                </li>
                <ul class="submenu-items">
                    <li>Show all in sets</li>
                    <li>Saucepan</li>
                    <li>Casserole</li>
                    <li>Kadai</li>
                    <li>Wok</li>
                </ul>

                <li onclick="toggleAccordion(this)">
                    <span><i class="material-icons">restaurant</i>Pans</span>
                    <i class="material-icons expand-icon">expand_more</i>
                </li>
                <ul class="submenu-items">
                    <li>Frying Pan</li>
                    <li>Grill Pan</li>
                    <li>Crepe Pan</li>
                </ul>

                <li onclick="toggleAccordion(this)">
                    <span><i class="material-icons">local_cafe</i>New Launches</span>
                    <i class="material-icons expand-icon">expand_more</i>
                </li>
                <ul class="submenu-items">
                    <li>Cast Iron Series</li>
                    <li>Induction Friendly</li>
                </ul>
            </ul>
        </div>
    </div>
</div>

<script>
    function toggleNav(show) {
        const sidenav = document.getElementById("sidenav");
        const overlay = document.querySelector(".sidenav-overlay");
        if (show) {
            sidenav.classList.add("active");
            overlay.style.display = "block";
        } else {
            sidenav.classList.remove("active");
            overlay.style.display = "none";
            hideSubmenu();
        }
    }

    function showSubmenu() {
        document.getElementById("submenuPanel").classList.add("active");
        document.getElementById("mainMenu").classList.add("slide-out");
    }

    function hideSubmenu() {
        document.getElementById("submenuPanel").classList.remove("active");
        document.getElementById("mainMenu").classList.remove("slide-out");
    }


    function toggleAccordion(item) {
        const allItems = document.querySelectorAll('.sidenav-links li');
        const submenu = item.nextElementSibling;


        document.querySelectorAll('.submenu-items').forEach(el => {
            if (el !== submenu) el.style.display = 'none';
        });


        allItems.forEach(li => li.classList.remove('active'));


        if (submenu && submenu.classList.contains('submenu-items')) {
            if (submenu.style.display === 'block') {
                submenu.style.display = 'none';
                item.classList.remove('active');
            } else {
                submenu.style.display = 'block';
                item.classList.add('active');
            }
        }
    }

    function toggleSubmenu(event) {
        event.preventDefault();
        const submenu = document.getElementById("brandsSubmenu");
        if (submenu.style.display === "none" || submenu.style.display === "") {
            submenu.style.display = "flex";
        } else {
            submenu.style.display = "none";
        }
    }


    document.addEventListener("click", function (event) {
        const submenu = document.getElementById("brandsSubmenu");
        const nav = document.querySelector(".nav");
        if (!nav.contains(event.target)) {
            submenu.style.display = "none";
        }
    });

</script>

<!-- <script>
    const navLinks = document.querySelectorAll('.nav a[data-submenu]');

    navLinks.forEach(link => {
        const submenuId = link.getAttribute('data-submenu');
        const submenu = document.getElementById(submenuId);

        if (!submenu) return;

        let hideTimeout;

        function showSubmenu() {
            clearTimeout(hideTimeout);
            submenu.style.display = 'flex';
        }

        function hideSubmenu() {
            hideTimeout = setTimeout(() => {
                submenu.style.display = 'none';
            }, 200);
        }

        link.addEventListener('mouseenter', showSubmenu);
        link.addEventListener('mouseleave', hideSubmenu);
        submenu.addEventListener('mouseenter', showSubmenu);
        submenu.addEventListener('mouseleave', hideSubmenu);
    });

    function toggleNav(show) {
        const submenu = document.getElementById('brandsSubmenu');
        submenu.style.display = show ? 'block' : 'none';
    }

    function hideSubmenu() {
        document.getElementById('brandsSubmenu').style.display = 'none';
        document.getElementById('productsSubmenu').style.display = 'none';
    }
</script> -->