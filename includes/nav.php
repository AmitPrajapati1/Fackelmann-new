<style>
    :root {
        --primary-color: #7a001c;
        --white: #ffffff;
    }

    body.no-scroll {
        overflow: hidden;
        /* disable scrolling when sidenav is open */
    }


    .noscroll {
        padding-right: 15px;
    }


    html.noscroll,
    body.noscroll {
        overflow: hidden;
        padding-right: var(--scrollbar-width);
    }

    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
        font-weight: 500 !important;
        overflow-y: scroll;
    }

    .topbar {
        display: block;
        position: relative;
        background-color: var(--primary-color);
        color: var(--white);
        text-align: center;
        padding: 6px 0;
        font-size: 14px;
        z-index: 999;
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: repeating-linear-gradient(45deg, #bf0019, #bf0019 5px, #c51a30 5px, #c51a30 7px);
        padding: 10px 40px;
        position: sticky;
        top: 0;
        z-index: 999;
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
        align-items: center;
        font-size: 14px;
        font-weight: 500;
        color: #fff !important;
        margin: 0;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        padding: 10px 12px;
        outline: none;
        text-decoration: none;
        cursor: pointer;
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 0px 0px;
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
        overflow-x: hidden;
    }

    .search-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 998;
    }

    .sidenav {
        position: fixed;
        top: 0;
        left: 0;
        width: 360px;
        height: 100%;
        background-color: #fff;
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1050;
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
        overflow-y: scroll;
    }

    .panel-wrapper {
        scrollbar-width: thin;
        scrollbar-color: #bf0019 transparent;
        overflow-x: hidden
    }

    .panel-wrapper::-webkit-scrollbar {
        width: 5px;
        height: 6px;
    }

    .panel-wrapper::-webkit-scrollbar-track {
        background: transparent;
    }

    .panel-wrapper::-webkit-scrollbar-thumb {
        background-color: #bf0019;
        border-radius: 5px;
    }


    .panel {
        position: absolute;
        width: 100%;
        max-width: 100%;
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
        position: absolute;
        top: 61px;
        left: 0;
        width: 100%;
        background-color: #f5f5f5;
        padding: 20px 0;
        display: none;
        z-index: 999;
    }

    .sub-cat-row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        padding: 0 20px;
    }

    .sub-categories-option {
        display: flex;
        align-items: center;
        cursor: pointer;
        padding: 10px 20px;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        color: #737373;
        transition: color 0.3s;
    }

    .sub-categories-option.active {
        color: var(--primary-color);
    }

    .sub-categories-option img {
        width: 20px;
        height: 20px;
        margin-right: 5px;
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

    .category-submenu {
        width: 100%;
        background: #f5f5f5;
        padding: 25px 38px;
        display: none;
        position: relative;
        left: 0;
        z-index: 998;
        overflow-x: auto;
    }

    .category-submenu::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 96%;
        height: 2px;
        background-color: #bf0019;
    }

    .category-submenu-inner {
        max-width: 1400px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .category-item {
        min-width: 200px;
        display: flex;
        flex-direction: column;
    }

    .category-heading {
        display: flex;
        align-items: center;
        font-weight: 500;
        font-size: 14px;
        color: #737373;
        padding: 10px 0;
        text-transform: uppercase;
        gap: 0px;
    }

    .category-heading-icon {
        width: 18px;
        height: 18px;
        margin-right: 8px;
        vertical-align: middle;
        object-fit: contain;
    }

    .category-heading .material-icons {
        font-size: 18px;
        color: #555;
    }

    .category-sub-items {
        list-style: none;
        padding: 0 0 0 10px;
        margin: 0;
    }

    .category-sub-items li {
        display: flex;
        align-items: center;
        padding: 8px 0;
        font-size: 13px;
        color: #737373;
        cursor: pointer;
        font-weight: 400;
    }

    .category-sub-items li:hover {
        color: var(--primary-color);
    }

    .sub-item-icon {
        margin-right: 8px;
        font-size: 16px;
        color: #555;
        vertical-align: middle;
    }

    .sub-cat-brands {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #f5f5f5;
        padding: 2px 0px;
        position: absolute;
        top: 61px;
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
        width: 100%;
        height: auto;
        object-fit: contain;
        display: block;
    }

    .brand-item p {
        margin: 5px 0 0;
        font-size: 12px;
        color: #333;
    }

    .brand-desc {
        max-width: 150px;
        width: 100%;
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
        padding-top: 30px;
    }

    .show-more p {
        margin: 0;
        font-size: 14px;
        font-weight: bold;
    }


    .close-btn-brands {
        position: absolute;
        top: 5px;
        right: 30px;
        cursor: pointer;
        font-weight: 300;
        font-size: 30px;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        font-size: 27px;
    }

    @media (min-width: 768px) {
        .logo-container {
            margin-top: -31px;
            border-bottom-right-radius: 12px;
            padding: 2px 12px 0;
            position: relative;
            z-index: 1001;
            line-height: 1;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo-img {
            height: 65px;
            object-fit: contain;
            display: block;
            margin-bottom: -33px;
            border-bottom-right-radius: 8px;
            border-bottom-left-radius: 8px;
            background-color: #fff;
        }

        .header {
            overflow: visible;
        }

        .sub-cat {
            top: 61px;
        }

        .category-submenu-inner {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .searchbar-ui {
            top: 61px;

        }
    }

    @media (min-width: 992px) {
        .searchbar-ui {
            padding-left: 270px;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .searchbar-ui {
            padding-left: 100px;
        }
    }

    @media (max-width: 767px) {
        .logo-container {
            margin-right: 30px;
        }

        .logo-img {
            height: 52px;
            position: absolute;
            top: -24px;
            left: -27px;
            object-fit: contain;
            border-bottom-right-radius: 8px;
            border-bottom-left-radius: 8px;
            background-color: #fff;
        }

        .searchbar-ui {
            padding-left: 0px !important;
        }
    }



    @media (max-width: 991px) {
        .nav {
            display: none !important;
        }


        .sub-cat-row {
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
        }

        .sub-categories-option {
            width: 100%;
            margin-bottom: 10px;
        }

        .category-submenu {
            display: none !important;

        }

        .sub-cat {
            display: none !important;
        }

        .category-submenu-inner {
            flex-direction: column;
            gap: 10px;
        }

        .category-item {
            min-width: 100%;
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

        .searchbar-ui {
            position: fixed;
            top: 48px;
        }
    }

    /* Tablet view (768px–991px) */
    @media (min-width: 768px) and (max-width: 991.98px) {
        .searchbar-ui {
            top: 59px;

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

        .searchbar-inner {
            max-width: 100%
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

    .searchbar-ui {
        background: #f9f9f9;
        margin: 0px auto;
        width: 100%;
        /* box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1); */
        z-index: 1000;
        position: absolute;
        left: 0;
        display: none;
        max-height: 100vh;
        overflow-y: auto;

    }

    .searchbar-inner input::placeholder {
        color: #aaa;
        font-size: 18px;
        font-weight: 300;
        font-size: 21px;
        letter-spacing: 2px;
        padding: 18px 14px 9px;
    }

    .searchbar-inner {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        gap: 1px;
        padding: 10px;
    }

    .searchbar-inner input {
        flex: 1;
        border: none;
        font-size: 18px;
        padding: 12px 8px;
        outline: none;
        background: transparent;
        color: #333;
    }

    .search-icon,
    .close-icon {
        font-size: 24px;
        color: #aaa;
        cursor: pointer;
    }

    .logo-wrapper {
        position: absolute;
        top: 10px;
        left: 40px;
        z-index: 1001;
        background: #fff;
        padding: 4px 10px 0;
        border-bottom-right-radius: 8px;
        height: auto;
    }

    .logo-wrapper img {
        height: 65px;
        object-fit: contain;
    }

    .submenu-product-link {
        text-decoration: none;
    }

    .nav-link {
        position: relative;
        color: white;
        text-decoration: none;
        padding-bottom: 10px;
        display: inline-block;
        cursor: pointer;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -24%;
        width: 0%;
        height: 3px;
        background-color: white;
        transition: width 0.3s ease, left 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-link:hover::after {
        width: 70%;
    }

    #popularSearches {
        opacity: 0;
        transition: opacity 0.4s ease;
        max-height: 80vh;
        overflow-y: auto;
    }

    #popularSearches.show {
        opacity: 1;
    }

    #popularSearches {
        width: 100%;
        position: absolute;
        left: 0;
        background-color: #fff;
        border: 1px solid #ddd;
        z-index: 10;
        display: none;
        padding: 1rem;
    }

    /* Desktop (≥ 992px) */
    @media (min-width: 992px) {
        #popularSearches {
            top: 131px;
            padding: 1.5rem 2rem 2rem;
        }

        .search-results {
            top: 131px;
            padding: 1.5rem 2rem 2rem;
        }
    }

    /* Tablet */
    @media (min-width: 768px) and (max-width: 991.98px) {
        #popularSearches {
            top: 129px;
            padding: 1.25rem 1.5rem;
        }

        .search-results {
            top: 129px;
            padding: 1.25rem 1.5rem;
        }
    }

    /* Mobile (≤ 767px) */
    @media (max-width: 767.98px) {
        #popularSearches {
            top: 118px;
            padding: 1rem 1rem;
        }

        #popularSearches .row>.col-6 {
            width: 100%;
        }

        #popularSearches .btn {
            width: 100%;
            text-align: left;
            margin-bottom: 0.5rem;
        }

        .search-results {
            top: 118px;
            padding: 1rem 1rem;
        }
    }

    .search-results {
        width: 100%;
        position: absolute;
        left: 0;
        background-color: #fff;
        border: 1px solid #ddd;
        z-index: 15;
        padding: 1rem 2rem;
        max-height: 80vh;
        overflow-y: auto;
        display: none;
    }

    .search-results-container {
        display: flex;
        gap: 2rem;
    }

    .search-left {
        flex: 2;
        min-width: 180px;
        border-right: 1px solid #eee;
        padding-right: 1rem;
    }

    .search-left,
    .search-right {
        box-sizing: border-box;
        padding-left: 1rem;
    }

    .search-left h6 {
        text-transform: uppercase;
        color: #79b0a6;
        font-weight: bold;
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    .left-item {
        padding: 0.4rem 0;
        color: #333;
        cursor: pointer;
    }

    .left-item:hover {
        color: #7a001c;
        font-weight: 500;
    }

    .search-right {
        flex: 2.5;
        display: flex;
        flex-direction: column;
        gap: 1.2rem;
    }

    .product-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        border-bottom: 1px solid #eee;
        padding-bottom: 1rem;
    }

    .product-item img {
        width: 60px;
        height: auto;
        object-fit: contain;
    }

    .product-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        font-size: 0.95rem;
    }

    .product-info strong {
        color: #7a001c;
        font-size: 0.95rem;
        margin-bottom: 0.3rem;
    }

    .discounted {
        color: #e60000;
        font-weight: bold;
        margin-bottom: 0.2rem;
    }

    .original-price {
        color: #888;
        font-size: 0.85rem;
        text-decoration: line-through;
    }

    .left-link,
    .product-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .left-link:hover .left-item {
        color: #7a001c;
        font-weight: 500;
    }

    .product-link:hover {
        background-color: #f8f8f8;
        border-radius: 4px;
    }

    .left-section-title {
        text-transform: uppercase;
        color: #79b0a6;
        font-weight: bold;
        font-size: 0.9rem;
        margin-bottom: 0;
        padding: 10px 0;
        border-bottom: 1px solid #e0e0e0;
    }

    .left-section-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
    }

    @media (max-width: 991.98px) {
        .search-results-container {
            flex-direction: column;
            gap: 1.5rem;
        }

        .search-left,
        .search-right {
            padding: 0;
            border: none;
            width: 100%;
        }

        .search-left {
            border-bottom: 1px solid #eee;
            padding-bottom: 1rem;
        }

        .search-right {
            gap: 1rem;
        }

        .left-section-title::after {
            left: 0;
        }
    }

    @media (max-width: 767.98px) {
        .search-results {
            padding: 1rem;
            max-height: 75vh;
        }

        .product-item {
            gap: 0.8rem;
            padding-bottom: 0.8rem;
        }

        .product-item img {
            width: 50px;
        }

        .discounted,
        .left-item,
        .product-info strong {
            font-size: 0.9rem;
        }

        .original-price {
            font-size: 0.8rem;
        }

        .left-section-title {
            font-size: 0.85rem;
        }
    }

    .no-results {
        text-align: center;
        color: #999;
        font-size: 1rem;
        padding: 2rem 1rem;
    }
</style>

<div class="topbar">Life Made Easier, Since 1919!</div>

<header class="header">
    <div class="header-left">
        <div class="logo-container">
            <a href="index.php">
                <img src="assets/images/logos/Logo.jpg" alt="Fackelmann Logo" class="logo-img" />
            </a>
        </div>
        <nav class="nav">
            <a href="index.php" class="nav-link">HOME</a>
            <a href="product-listing.php" class="nav-link" data-submenu="productsSubmenu"
                onmouseenter="showProductsSubmenu()" onmouseleave="scheduleHideProductsSubmenu()">Products</a>
            <a href="sustainability.php" class="nav-link">SUSTAINABILITY</a>
            <a href="global-brands.php" class="nav-link" data-submenu="brandsSubmenu" onmouseenter="showBrandsSubmenu()"
                onmouseleave="scheduleHideBrandsSubmenu()">Global Brands</a>
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
                    <i class="material-icons">Bundles & Sets</i>
                    <span>Kitchen Tools & Gadgets</span>
                </div>
                <div class="mega-menu-item">
                    <i class="material-icons">Bundles & Sets</i>
                    <span>Bundles & Sets</span>
                </div>
            </div>
        </div>
    </div>
    <div class="header-right">
        <div class="custom-search-wrapper">
            <button class="custom-search-button" type="button" onclick="toggleSearchBar()"><span
                    class="custom-search-text">Search</span></button>
        </div>
        <i class="mobile-search-icon material-icons" onclick="toggleSearchBar()">search</i>
        <a href="contact-us.php" style="display: grid; place-items: center; text-decoration: none"><span
                class="material-icons icon">call</span></a>

        <span class="material-icons icon" onclick="toggleNav(true)">menu</span>
    </div>

    <div class="sub-cat" id="productsSubmenu" onmouseenter="clearTimeout(productsHoverTimeout)"
        onmouseleave="scheduleHideProductsSubmenu()">

        <div class="w-100">
            <div class="sub-cat-row">
                <div class="sub-categories-option" onclick="toggleCategorySubmenu('cookware-submenu')">
                    <img src="assets/images/icon/cookware_1.png" class="sub-category-icon" alt="cookware">
                    COOKWARE
                    <i class='bx bx-chevron-down dropdown-icon-sub-categories'></i>
                </div>
                <div class="sub-categories-option" onclick="toggleCategorySubmenu('bakeware-submenu')">
                    <i class='bx bx-cake sub-category-icon'></i> BAKEWARE
                    <i class='bx bx-chevron-down dropdown-icon-sub-categories'></i>
                </div>
                <div class="sub-categories-option" onclick="toggleCategorySubmenu('kitchenware-submenu')">
                    <i class='bx bx-restaurant sub-category-icon'></i>Kitchen Tools & Gadgets
                    <i class='bx bx-chevron-down dropdown-icon-sub-categories'></i>
                </div>
                <div class="sub-categories-option" onclick="toggleCategorySubmenu('bundlessets-submenu')">
                    <i class='bx bx-package sub-category-icon'></i>Bundles & Sets
                    <i class='bx bx-chevron-down dropdown-icon-sub-categories'></i>
                </div>
                <div class="sub-categories-option" onclick="toggleCategorySubmenu('newexclusives-submenu')">
                    <img src="assets/images/icon/new_and_exclusives.png" class="sub-category-icon"
                        alt="Category Icon">New &
                    Exclusives
                    <i class='bx bx-chevron-down dropdown-icon-sub-categories'></i>
                </div>
                <div class="close-btn" onclick="hideSubmenu()">
                    <i class='bx bx-x'></i>
                </div>
            </div>
            <div>
                <div class="category-submenu cookware-submenu" style="display: none;">
                    <div class="category-submenu-inner">
                        <a href="product-listing.php" class="submenu-product-link">
                            <div class="category-item">
                                <div class="category-heading">
                                    <img src="assets/images/icon/cookware/kadai_3.png" class="category-heading-icon"
                                        alt="Kadai Icon"> Kadai
                                </div>

                            </div>
                        </a>
                        <a href="#" class="submenu-product-link">
                            <div class="category-item">
                                <div class="category-heading">
                                    <img src="assets/images/icon/cookware/frying_pan.png" class="category-heading-icon"
                                        alt="Frying pan Icon"> Fry Pan
                                </div>
                                <ul class="category-sub-items">
                                    <li></li>
                                </ul>
                            </div>
                        </a>


                        <a href="#" class="submenu-product-link">
                            <div class="category-item">
                                <div class="category-heading">
                                    <img src="assets/images/icon/cookware/tawa_1.png" class="category-heading-icon"
                                        alt="Tawa Icon"> Tawa
                                </div>

                            </div>
                        </a>

                        <a href="#" class="submenu-product-link">
                            <div class="category-item">
                                <div class="category-heading">
                                    <img src="assets/images/icon/cookware/cooker_1.png" class="category-heading-icon"
                                        alt="Cooker Icon"> Pressure Cooker
                                </div>
                            </div>
                        </a>

                        <a href="#" class="submenu-product-link">
                            <div class="category-item">
                                <div class="category-heading">
                                    <img src="assets/images/icon/cookware/casserole.png" class="category-heading-icon"
                                        alt="Casserole Icon"> Casserole

                                </div>
                            </div>
                        </a>

                        <a href="#" class="submenu-product-link">
                            <div class="category-item">
                                <div class="category-heading">
                                    <img src="assets/images/icon/cookware/casserole.png" class="category-heading-icon"
                                        alt="Tope Icon"> Tope
                                </div>
                            </div>
                        </a>

                        <a href="#" class="submenu-product-link">
                            <div class="category-item">
                                <div class="category-heading">
                                    <img src="assets/images/icon/cookware/pan.png" class="category-heading-icon"
                                        alt="Pan Icon"> Tadka Pan

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="category-submenu bakeware-submenu" style="display: none;">
                    <div class="category-submenu-inner">
                        <a href="#" class="submenu-product-link">
                            <div class="category-item">
                                <div class="category-heading">
                                    <img src="assets/images/icon/bakeware/bake.png" class="category-heading-icon"
                                        alt="Baking Moulds Icon"> Baking Moulds
                                </div>
                                <ul class="category-sub-items">
                                    <li></li>
                                </ul>
                            </div>
                        </a>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="assets/images/icon/bakeware/brush.png" class="category-heading-icon"
                                    alt="Baking Brushes Icon"> Baking Brushes
                            </div>
                            <ul class="category-sub-items">
                                <li></li>
                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="" class="category-heading-icon" alt="Baking Paper Icon"> Baking Paper
                            </div>
                            <ul class="category-sub-items">
                                <li></li>
                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="" class="category-heading-icon" alt="Decorative Tools Icon"> Decorative
                                Tools
                            </div>
                            <ul class="category-sub-items">
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="category-submenu kitchenware-submenu" style="display: none;">
                    <div class="category-submenu-inner">
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="assets/images/icon/kitchenware/cutlery.png" class="category-heading-icon"
                                    alt="Category Icon"> Cutlery
                            </div>
                            <ul class="category-sub-items">
                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="assets/images/icon/kitchenware/cutting-board.png"
                                    class="category-heading-icon" alt="Category Icon"> Cutting Tools
                            </div>
                            <ul class="category-sub-items">

                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="assets/images/icon/kitchenware/knife.png" class="category-heading-icon"
                                    alt="Category Icon"> Knives
                            </div>
                            <ul class="category-sub-items">
                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="assets/images/icon/kitchenware/lighter.png" class="category-heading-icon"
                                    alt="Category Icon"> Lighters
                            </div>
                            <ul class="category-sub-items">
                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="assets/images/icon/kitchenware/serve.png" class="category-heading-icon"
                                    alt="Category Icon"> Serving Tools
                            </div>
                            <ul class="category-sub-items">

                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="assets/images/icon/kitchenware/strainer.png" class="category-heading-icon"
                                    alt="Category Icon"> Strainers
                            </div>
                            <ul class="category-sub-items">

                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="assets/images/icon/kitchenware/bottle-opener.png"
                                    class="category-heading-icon" alt="Category Icon"> Opener / Barware
                            </div>
                            <ul class="category-sub-items">

                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="" class="category-heading-icon" alt="Category Icon"> Gadgets
                            </div>
                            <ul class="category-sub-items">

                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="" class="category-heading-icon" alt="Category Icon"> Accessories
                            </div>
                            <ul class="category-sub-items">

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="category-submenu bundlessets-submenu" style="display: none;">
                    <div class="category-submenu-inner">
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="assets/images/icon/bundels_and_sets/rice_cooker.png"
                                    class="category-heading-icon" alt="Category Icon"> Pressure Cooker Combos
                            </div>
                            <ul class="category-sub-items">

                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="" class="category-heading-icon" alt="Category Icon"> 3 Colonge 3pcs Set
                            </div>
                            <ul class="category-sub-items">

                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="" class="category-heading-icon" alt="Category Icon"> DGP 1 & 2
                            </div>
                            <ul class="category-sub-items">

                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="assets/images/icon/bundels_and_sets/kitchen_tools.png"
                                    class="category-heading-icon" alt="3in1 Kitchen Utility Combo"> 3in1 Kitchen
                                Utility
                                Combo
                            </div>
                            <ul class="category-sub-items">

                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <img src="assets/images/icon/bundels_and_sets/cutlery_kitchen_set.png"
                                    class="category-heading-icon" alt="Cutlery sets Icon"> Cutlery sets
                            </div>
                            <ul class="category-sub-items">

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="category-submenu newexclusives-submenu" style="display: none;">
                    <div class="category-submenu-inner">
                        <div class="category-item">
                            <div class="category-heading">
                                <i class="material-icons">home</i> Gift Ideas
                            </div>
                            <ul class="category-sub-items">
                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <i class="material-icons">cleaning_services</i> Best-Selling
                            </div>
                            <ul class="category-sub-items">
                            </ul>
                        </div>
                        <div class="category-item">
                            <div class="category-heading">
                                <i class="material-icons">lightbulb</i> Trending Designs
                            </div>
                            <ul class="category-sub-items">
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="sub-cat-brands" id="brandsSubmenu" onmouseenter="clearTimeout(brandsHoverTimeout)"
        onmouseleave="scheduleHideBrandsSubmenu()">

        <div class="brands-container">
            <div class="brand-item">
                <a href="https://www.fackelmann.de/marken/fackelmann" target="_blank"><img
                        src="assets/images/brands/fm_200x125.jpg" alt="Fackelmann"></a>
                <div class="brand-desc">
                    <p>Popular kitchen helpers & diverse household items</p>
                </div>
            </div>
            <div class="brand-item">
                <a href="https://www.fackelmann.de/marken/paris-hilton" target="_blank"><img
                        src="assets/images/brands/paris-hilton_200x125.jpg" alt="Paris Hilton"></a>
                <div class="brand-desc">
                    <p>Glamour for the kitchen with Paris Hilton Cookware.</p>
                </div>
            </div>
            <div class="brand-item">
                <a href="https://www.fackelmann.de/marken/stanley-rogers" target="_blank"><img
                        src="assets/images/brands/zenker_200x125.jpg" alt="Stanley Rogers"></a>
                <div class="brand-desc">
                    <p>Zenker baking tins – great baking results for every occasion</p>
                </div>
            </div>
            <div class="brand-item">
                <a href="https://www.fackelmann.de/marken/tasty?m=c6,t16" target="_blank"><img
                        src="assets/images/brands/tasty_200x125.jpg" alt="Tasty"></a>

                <div class="brand-desc">
                    <p>Creative & versatile colorful kitchen tools from Tasty.</p>
                </div>
            </div>
            <div class="brand-item">
                <a href="https://www.fackelmann.de/marken/chefkoch-trifft-fackelmann?m=c6,t7" target="_blank"><img
                        src="assets/images/brands/cktfm_200x125.jpg" alt="Chefkoch Fackelmann"></a>
                <div class="brand-desc">
                    <p>Chef meets Fackelmann You can cook anything with this.</p>
                </div>
            </div>
            <div class="brand-item">
                <a href="https://www.fackelmann.de/marken/chefkoch-trifft-fackelmann?m=c6,t7" target="_blank"><img
                        src="assets/images/brands/oetker_200x125.jpg" alt="Chefkoch Fackelmann"></a>
                <div class="brand-desc">
                    <p>Chef meets Fackelmann You can cook anything with this.</p>
                </div>
            </div>
            <!-- <a class="brand-item show-more" href="global-brands.php" style="text-decoration: none;">
                <div class="brand-desc">
                    <p>Show More</p>
                </div>
            </a> -->
        </div>
        <div class="close-btn-brands" onclick="hideSubmenu()">
            <i class='bx bx-x'></i>
        </div>
    </div>

    <div class="searchbar-ui" id="searchbarUI" style="display: none;">
        <div class="searchbar-inner">
            <i class="material-icons search-icon">search</i>
            <input type="text" placeholder="Search Term ..." />
            <i class="material-icons close-icon" onclick="toggleSearchBar()">close</i>
        </div>
    </div>
    <div id="popularSearches" style="display: none;">
        <h6 class="mb-3 text-uppercase text-muted">Popular Searches</h6>
        <div class="row gx-2 gy-2 mb-3">
            <div class="col-auto">
                <button class="btn btn-outline-secondary btn-sm">Nonstick Cookware</button>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-secondary btn-sm">Cake Moulds</button>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-secondary btn-sm">Chef Knife</button>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-secondary btn-sm">Baking Set</button>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-secondary btn-sm">Kitchen Tools</button>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-6 col-md-3">
                <div class="card border-0">
                    <img src="assets/images/search/popular_1.jpg" class="img-top-search " alt="Cookware">
                    <!-- <div class="card-body text-center p-1">
                        <p class="card-text mb-0 small">Cookware</p>
                    </div> -->
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card border-0">
                    <img src="assets/images/search/popular_1.jpg" class="img-top-search" alt="Bakeware">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card border-0">
                    <img src="assets/images/search/popular_1.jpg" class="img-top-search" alt="Knives">
                </div>
            </div>
        </div>
    </div>

    <div id="searchResults" class="search-results" style="display: none;">
        <div class="no-results" id="noResults">No search results found.</div>
        <div class="search-results-container" id="searchResultsContainer">
            <!-- Left Column -->
            <div class="search-left">
                <h6 class="left-section-title">Series</h6>
                <a href="/series/chelsea" class="left-link">
                    <div class="left-item">Chelsea</div>
                </a>

                <h6 class="left-section-title">Search Suggestions</h6>
                <a href="/search?q=Stanley+Rogers+Chelsea" class="left-link">
                    <div class="left-item">Stanley Rogers Chelsea</div>
                </a>
            </div>

            <!-- Right Column -->
            <div class="search-right">
                <a href="javascript:void(0)" class="product-link">
                    <div class="product-item">
                        <img src="assets/images/home_page/our_highlights/highlight_2.jpeg" alt="Set">
                        <div class="product-info">
                            <strong>Cutlery set "Chelsea", stainless steel, 24 pieces</strong>
                            <span class="discounted">-30% 90,99 €</span>
                            <span class="original-price">129,99 €</span>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)" class="product-link">
                    <div class="product-item">
                        <img src="assets/images/home_page/our_highlights/highlight_2.jpeg" alt="Set">
                        <div class="product-info">
                            <strong>Cutlery set "Chelsea", stainless steel, 56 pieces</strong>
                            <span class="discounted">-24% 189,99 €</span>
                            <span class="original-price">249,99 €</span>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)" class=" product-link">
                    <div class="product-item">
                        <img src="assets/images/home_page/our_highlights/highlight_2.jpeg" alt="Set">
                        <div class="product-info">
                            <strong>Steak knife set "Chelsea", stainless steel, 4 pieces</strong>
                            <span class="discounted">-20% 30,39 €</span>
                            <span class="original-price">37,99 €</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</header>

<div class="search-overlay" id="searchOverlay"></div>

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
                <li><span><i class="material-icons" style="margin-right:10px;">kitchen</i>Kitchen Tools &
                        Gadgets</span><i class="material-icons">chevron_right</i></li>
                <li><span><i class="material-icons" style="margin-right:10px;">home</i>Bundles & Sets</span><i
                        class="material-icons">chevron_right</i></li>
                <li><span><i class="material-icons" style="margin-right:10px;">home</i>New & Exclusives</span><i
                        class="material-icons">chevron_right</i></li>
            </ul>
            <a href="index.php" class="sidenav-section-title">Home</a>
            <a href="about-us.php" class="sidenav-section-title">About Us</a>
            <a href="global-brands.php" class="sidenav-section-title">Global Brands</a>
            <a href="sustainability.php" class="sidenav-section-title">Sustainability</a>
            <a href="contact-us.php" class="sidenav-footer">
                <i class="material-icons">mail_outline</i> Contact form
            </a>
        </div>
        <div class="panel" id="submenuPanel">
            <div class="submenu-back" onclick="hideSidenavSubmenu()">
                <i class="material-icons">arrow_back</i> BACK
            </div>
            <div class="sidenav-section-title">Cookware</div>
            <ul class="sidenav-links">
                <li onclick="toggleAccordion(this)">
                    <span><i class="material-icons">kitchen</i> Fry Pan</span>
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
                    <span><i class="material-icons">restaurant</i> Kadai</span>
                    <i class="material-icons expand-icon">expand_more</i>
                </li>
                <ul class="submenu-items">
                    <li>Frying Pan</li>
                    <li>Grill Pan</li>
                    <li>Crepe Pan</li>
                </ul>
                <li onclick="toggleAccordion(this)">
                    <span><i class="material-icons">local_cafe</i> Tawa</span>
                    <i class="material-icons expand-icon">expand_more</i>
                </li>
                <ul class="submenu-items">
                    <li>Cast Iron Series</li>
                    <li>Induction Friendly</li>
                </ul>
                <li onclick="toggleAccordion(this)">
                    <span><i class="material-icons">local_cafe</i> Pressure Cooker</span>
                    <i class="material-icons expand-icon">expand_more</i>
                </li>
            </ul>
        </div>
    </div>
</div>


<script>
    function toggleNav(show) {
        const sidenav = document.getElementById("sidenav");
        const overlay = document.querySelector(".sidenav-overlay");
        const body = document.body;
        if (show) {
            sidenav.classList.add("active");
            overlay.style.display = "block";
            body.classList.add("no-scroll");
        } else {
            sidenav.classList.remove("active");
            overlay.style.display = "none";
            body.classList.remove("no-scroll");
            hideSidenavSubmenu();
        }
    }

    function showSubmenu() {
        document.getElementById("submenuPanel").classList.add("active");
        document.getElementById("mainMenu").classList.add("slide-out");
    }

    function hideSidenavSubmenu() {
        document.getElementById("submenuPanel").classList.remove("active");
        document.getElementById("mainMenu").classList.remove("slide-out");
        document.querySelectorAll('.sidenav-links li').forEach(li => li.classList.remove('active'));
        document.querySelectorAll('.submenu-items').forEach(el => el.style.display = 'none');
    }

    function hideSubmenu() {
        document.getElementById("productsSubmenu").style.display = "none";
        document.getElementById("brandsSubmenu").style.display = "none";
        document.querySelectorAll('.category-submenu').forEach(submenu => {
            submenu.style.display = 'none';
        });
        document.querySelectorAll('.sub-categories-option').forEach(option => {
            option.classList.remove('active');
        });
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
        event.stopPropagation();
        const targetSubmenuId = event.currentTarget.getAttribute("data-submenu");
        const productsSubmenu = document.getElementById("productsSubmenu");
        const brandsSubmenu = document.getElementById("brandsSubmenu");
        if (targetSubmenuId === "productsSubmenu") {
            productsSubmenu.style.display = productsSubmenu.style.display === "flex" ? "none" : "flex";
            brandsSubmenu.style.display = "none";
            document.querySelectorAll('.category-submenu').forEach(submenu => {
                submenu.style.display = 'none';
            });
            document.querySelectorAll('.sub-categories-option').forEach(option => {
                option.classList.remove('active');
            });
        } else if (targetSubmenuId === "brandsSubmenu") {
            brandsSubmenu.style.display = brandsSubmenu.style.display === "flex" ? "none" : "flex";
            productsSubmenu.style.display = "none";
        }
    }

    function toggleCategorySubmenu(submenuClass) {
        event.stopPropagation();
        const submenu = document.querySelector(`.${submenuClass}`);
        const isVisible = submenu.style.display === 'block';
        document.querySelectorAll('.category-submenu').forEach(otherSubmenu => {
            otherSubmenu.style.display = 'none';
        });
        document.querySelectorAll('.sub-categories-option').forEach(option => {
            option.classList.remove('active');
        });
        submenu.style.display = isVisible ? 'none' : 'block';
        document.querySelector(`[onclick="toggleCategorySubmenu('${submenuClass}')"]`).classList.toggle('active', !isVisible);
        document.getElementById("productsSubmenu").style.display = 'flex';
    }

    // search: input + popular

    // function toggleSearchBar() {
    //     const searchbar = document.getElementById("searchbarUI");
    //     const isVisible = searchbar.style.display === "block";
    //     searchbar.style.display = isVisible ? "none" : "block";
    // }

    // function toggleSearchBar() {
    //     const searchbar = document.getElementById("searchbarUI");
    //     const popularSearches = document.getElementById("popularSearches");
    //     const isVisible = searchbar.style.display === "block";

    //     if (isVisible) {
    //         searchbar.style.display = "none";
    //         if (popularSearches) popularSearches.style.display = "none";
    //     } else {
    //         searchbar.style.display = "block";
    //         if (popularSearches) {
    //             popularSearches.style.display = "none";
    //             setTimeout(() => {
    //                 popularSearches.classList.add("show");
    //                 popularSearches.style.display = "block";
    //             }, 1000);

    //         }
    //     }
    // }


    // function toggleSearchBar() {
    //     const searchbar = document.getElementById("searchbarUI");
    //     const popularSearches = document.getElementById("popularSearches");
    //     const overlay = document.getElementById("searchOverlay");
    //     const isVisible = searchbar.style.display === "block";

    //     if (isVisible) {
    //         searchbar.style.display = "none";
    //         document.body.classList.remove("noscroll");
    //         if (popularSearches) popularSearches.style.display = "none";
    //         if (overlay) overlay.style.display = "none";
    //     } else {
    //         searchbar.style.display = "block";
    //         document.body.classList.add("noscroll");
    //         if (overlay) overlay.style.display = "block";

    //         if (popularSearches) {
    //             popularSearches.style.display = "none";
    //             setTimeout(() => {
    //                 popularSearches.classList.add("show");
    //                 popularSearches.style.display = "block";
    //             }, 500);
    //         }
    //     }
    // }

    // function toggleSearchBar() {
    //     const searchbar = document.getElementById("searchbarUI");
    //     const popularSearches = document.getElementById("popularSearches");
    //     const overlay = document.getElementById("searchOverlay");
    //     const isVisible = searchbar.style.display === "block";

    //     const getScrollbarWidth = () => window.innerWidth - document.documentElement.clientWidth;

    //     if (isVisible) {
    //         searchbar.style.display = "none";
    //         document.body.classList.remove("noscroll");
    //         document.body.style.paddingRight = "";
    //         if (popularSearches) {
    //             popularSearches.classList.remove("show");
    //             popularSearches.style.display = "none";
    //         }
    //         if (overlay) overlay.style.display = "none";
    //     } else {
    //         const scrollbarWidth = getScrollbarWidth();
    //         document.body.style.paddingRight = `${scrollbarWidth}px`;
    //         document.body.classList.add("noscroll");

    //         searchbar.style.display = "block";
    //         if (overlay) overlay.style.display = "block";

    //         if (popularSearches) {
    //             popularSearches.style.display = "none";
    //             setTimeout(() => {
    //                 popularSearches.classList.add("show");
    //                 popularSearches.style.display = "block";
    //             }, 500);
    //         }
    //     }
    // }

    function toggleSearchBar() {
        const searchbar = document.getElementById("searchbarUI");
        const popularSearches = document.getElementById("popularSearches");
        const searchResults = document.getElementById("searchResults");
        const overlay = document.getElementById("searchOverlay");
        const isVisible = searchbar.style.display === "block";

        const getScrollbarWidth = () => window.innerWidth - document.documentElement.clientWidth;

        if (isVisible) {
            searchbar.style.display = "none";
            document.body.classList.remove("noscroll");
            document.body.style.paddingRight = "";
            if (popularSearches) {
                popularSearches.classList.remove("show");
                popularSearches.style.display = "none";
            }
            if (searchResults) searchResults.style.display = "none";
            if (overlay) overlay.style.display = "none";
        } else {
            const scrollbarWidth = getScrollbarWidth();
            document.body.style.paddingRight = `${scrollbarWidth}px`;
            document.body.classList.add("noscroll");

            searchbar.style.display = "block";
            if (overlay) overlay.style.display = "block";

            if (popularSearches) {
                popularSearches.style.display = "block";
                setTimeout(() => {
                    popularSearches.classList.add("show");
                }, 500);
            }
        }
    }




    document.addEventListener("click", function (event) {
        const productsSubmenu = document.getElementById("productsSubmenu");
        const brandsSubmenu = document.getElementById("brandsSubmenu");
        const nav = document.querySelector(".nav");
        const categorySubmenus = document.querySelectorAll(".category-submenu");
        let isClickInsideSubmenu = false;
        categorySubmenus.forEach(submenu => {
            if (submenu.contains(event.target)) {
                isClickInsideSubmenu = true;
            }
        });
        if (!nav.contains(event.target) && !productsSubmenu.contains(event.target) && !isClickInsideSubmenu) {
            productsSubmenu.style.display = "none";
            brandsSubmenu.style.display = "none";
            categorySubmenus.forEach(submenu => {
                submenu.style.display = 'none';
            });
            document.querySelectorAll('.sub-categories-option').forEach(option => {
                option.classList.remove('active');
            });
        }
    });

    // Hover effect 
    let productsHoverTimeout;
    let brandsHoverTimeout;

    function showProductsSubmenu() {
        clearTimeout(productsHoverTimeout);
        const productsSubmenu = document.getElementById("productsSubmenu");
        const brandsSubmenu = document.getElementById("brandsSubmenu");

        brandsSubmenu.style.display = "none";
        productsSubmenu.style.display = "flex";
    }

    function scheduleHideProductsSubmenu() {
        productsHoverTimeout = setTimeout(() => {
            const submenu = document.getElementById("productsSubmenu");
            submenu.style.display = "none";

            document.querySelectorAll('.category-submenu').forEach(el => el.style.display = 'none');
            document.querySelectorAll('.sub-categories-option').forEach(el => el.classList.remove('active'));
        }, 200);
    }

    function showBrandsSubmenu() {
        clearTimeout(brandsHoverTimeout);
        const brandsSubmenu = document.getElementById("brandsSubmenu");
        const productsSubmenu = document.getElementById("productsSubmenu");

        productsSubmenu.style.display = "none";
        brandsSubmenu.style.display = "flex";
    }

    function scheduleHideBrandsSubmenu() {
        brandsHoverTimeout = setTimeout(() => {
            document.getElementById("brandsSubmenu").style.display = "none";
        }, 200);
    }

    // search result
    // document.addEventListener('DOMContentLoaded', function () {
    //     const searchInput = document.querySelector('#searchbarUI input');
    //     const popularSearches = document.getElementById("popularSearches");
    //     const searchResults = document.getElementById("searchResults");

    //     if (!searchInput) return;

    //     searchInput.addEventListener('input', function (e) {
    //         const query = e.target.value.trim();

    //         if (query.length > 0) {
    //             if (popularSearches) {
    //                 popularSearches.classList.remove("show");
    //                 popularSearches.style.display = "none";
    //             }
    //             if (searchResults) {
    //                 searchResults.style.display = "block";
    //             }
    //         } else {
    //             if (popularSearches) {
    //                 popularSearches.style.display = "block";
    //                 setTimeout(() => {
    //                     popularSearches.classList.add("show");
    //                 }, 500);
    //             }
    //             if (searchResults) {
    //                 searchResults.style.display = "none";
    //             }
    //         }
    //     });
    // }); 


    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.querySelector('#searchbarUI input');
        const popularSearches = document.getElementById("popularSearches");
        const searchResults = document.getElementById("searchResults");
        const noResults = document.getElementById("noResults");
        const searchResultsContainer = document.getElementById("searchResultsContainer");

        if (!searchInput) return;

        searchInput.addEventListener('input', function (e) {
            const query = e.target.value.trim().toLowerCase();

            if (query.length > 0) {
                if (popularSearches) {
                    popularSearches.classList.remove("show");
                    popularSearches.style.display = "none";
                }
                if (searchResults) {
                    searchResults.style.display = "block";


                    const leftItems = document.querySelectorAll('.left-item');
                    const productItems = document.querySelectorAll('.product-info strong');
                    let hasResults = false;


                    const leftLinks = document.querySelectorAll('.left-link');
                    const productLinks = document.querySelectorAll('.product-link');
                    leftLinks.forEach(link => link.style.display = 'block');
                    productLinks.forEach(link => link.style.display = 'block');


                    leftItems.forEach(item => {
                        const text = item.textContent.toLowerCase();
                        const parentLink = item.closest('.left-link');
                        if (text.includes(query)) {
                            parentLink.style.display = 'block';
                            hasResults = true;
                        } else {
                            parentLink.style.display = 'none';
                        }
                    });


                    productItems.forEach(item => {
                        const text = item.textContent.toLowerCase();
                        const parentLink = item.closest('.product-link');
                        if (text.includes(query)) {
                            parentLink.style.display = 'block';
                            hasResults = true;
                        } else {
                            parentLink.style.display = 'none';
                        }
                    });


                    const seriesTitle = document.querySelector('.search-left .left-section-title:nth-of-type(1)');
                    const suggestionsTitle = document.querySelector('.search-left .left-section-title:nth-of-type(2)');
                    const seriesItems = document.querySelectorAll('.search-left .left-link:nth-of-type(1)');
                    const suggestionItems = document.querySelectorAll('.search-left .left-link:nth-of-type(2)');

                    seriesTitle.style.display = Array.from(seriesItems).some(item => item.style.display === 'block') ? 'block' : 'none';
                    suggestionsTitle.style.display = Array.from(suggestionItems).some(item => item.style.display === 'block') ? 'block' : 'none';


                    if (hasResults) {
                        noResults.style.display = "none";
                        searchResultsContainer.style.display = "flex";
                    } else {
                        noResults.style.display = "block";
                        searchResultsContainer.style.display = "none";
                    }
                }
            } else {
                if (popularSearches) {
                    popularSearches.style.display = "block";
                    setTimeout(() => {
                        popularSearches.classList.add("show");
                    }, 500);
                }
                if (searchResults) {
                    searchResults.style.display = "none";
                    noResults.style.display = "none";
                    searchResultsContainer.style.display = "flex";
                    document.querySelectorAll('.left-link, .product-link, .left-section-title').forEach(item => {
                        item.style.display = 'block';
                    });
                }
            }
        });
    });
</script>