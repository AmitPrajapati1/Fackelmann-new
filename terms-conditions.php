<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Shop by Categories - Flexbox Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        * {
            box-sizing: border-box;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .container-flex {
            display: flex;
            flex-direction: column;
            height: 100vh;
            padding: 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 10px;
            margin-left: 39px;
            margin-right: 39px;
        }

        .header h2 {
            font-size: 18px;
            margin: 0 0 4px;
        }

        .header p {
            font-size: 13px;
            margin: 0;
            color: #555;
        }

        .view-all {
            font-size: 13px;
            font-weight: 500;
            color: #bf0019;
            text-decoration: underline;
            white-space: nowrap;
        }

        .content-flex {
            display: flex;
            gap: 10px;
            flex: 1;
            height: 100%;
            min-height: 0;
            padding: 25px 40px;
        }

        .cookware {
            flex: 1 1 50%;
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            min-height: 0;
        }

        .right-flex {
            display: flex;
            flex-direction: column;
            gap: 10px;
            flex: 1 1 50%;
            min-height: 0;
            height: 100%;
        }

        .right-top {
            display: flex;
            gap: 10px;
            flex: 2 0 auto;
            min-height: 0;
        }

        .kitchen-tools,
        .cutlery {
            flex: 1 1 50%;
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            min-height: 0;
        }

        .sinks {
            flex: 1 1 auto;
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            min-height: 0;
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .category-card {
            position: relative;
            height: 100%;
        }

        .category-label {
            color: #bf0019;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
            pointer-events: none;
            position: absolute;
            bottom: 12px;
            left: 12px;
            background: #fff;
            border-radius: 4px;
            display: inline-block;
            padding: 7px 20px;
            font-size: 15px;
            font-style: normal;
            font-weight: 600;
            line-height: 30px;
            height: auto;
            width: 150px;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .category-label {
                padding: 3px 11px;
                font-size: 14px;
                width: 120px;

            }
        }


        @media (max-width: 768px) {
            .content-flex {
                flex-wrap: wrap;
                flex-direction: row;
                padding: 1px 1px;
            }

            .right-flex {
                flex: 1 1 100% !important;
                display: contents;
            }

            .right-top {
                display: contents;
            }

            .category-card {
                flex: 1 1 48%;
                height: 200px;
                margin-bottom: 10px;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
                margin: 10px 0px;
            }

            .header>div,
            .header>a.view-all {
                width: 100%;
            }

            .category-label {
                left: 6px;
                padding: 8px 20px;
                font-size: 12px;
                line-height: 1.1;
                width: 114px;
            }

            .container-flex {
                padding: 17px;
            }
        }
    </style>
</head>

<body>

    <div class="container-flex">

        <div class="header">
            <div>
                <h2>Shop by categories</h2>
                <p>Fresh styles just in! Elevate your look.</p>
            </div>
            <a href="#" class="view-all" style="text-decoration: none">VIEW ALL CATEGORIES</a>
        </div>

        <div class="content-flex">

            <div class="category-card cookware">
                <img src="assets/images/home_page/our_categories/cat_9.jpg" alt="Cookware" />
                <div class="category-label">Cookware</div>
            </div>

            <div class="right-flex">

                <div class="right-top">
                    <div class="category-card kitchen-tools">
                        <img src="assets/images/home_page/our_categories/cat_10.jpg" alt="Bakeware" />
                        <div class="category-label">Bakeware</div>
                    </div>

                    <div class="category-card cutlery">
                        <img src="assets/images/home_page/our_categories/cat_11.jpg" alt="Knives" />
                        <div class="category-label">Knives</div>
                    </div>
                </div>

                <div class="category-card sinks">
                    <img src="assets/images/home_page/our_categories/cat_12.jpg" alt="Kitchen Tools" />
                    <div class="category-label">Kitchen Tools</div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>