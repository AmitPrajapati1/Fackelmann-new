<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

<style>
body {
    background-color: #f5f5f5;
    font-weight: 300 !important;
}

.heading {
    color: #bf0019 !important;
    font-weight: bold;
    font-size: 2rem;
    margin-bottom: 30px !important;
}

.content p,
.content address,
a {
    color: #555;
    line-height: 1.6;
    margin-bottom: 8px;
}

.parallax {
    background-image: url("assets/images/banners/Imprint-4.webp");
    /* width: 100%; */
    /* background-attachment: fixed; */
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    aspect-ratio: 64 / 13;
}
</style>
<div class="parallax"></div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8 col-lg-6">
            <div class="content">
                <p class="heading">Imprint</p>
                <p><strong>Corporate Office:</strong></p>
                <p style="font-weight: bold">Fackelmann India Kitchenware Pvt. Ltd.</p>
                <address style="margin-bottom: 20px;">
                    7th Floor, Building No 5, Tower- A, DLF Cyber City,<br>
                    DLF Phase- 3, Gurugram - 122002,<br>
                    Haryana
                </address>
                <p>Mail: <a style="text-decoration: none"
                        href="mailto:consumer@fackelmann.co.in">consumer@fackelmann.co.in</a></p>
                <p style="margin-bottom: 10px;">CIN: U25207HR2007PTC047419</p>
                <p>Managing Director: Mr. Dhirender Singh</p>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>