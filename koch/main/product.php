<?php $depth = "../"; ?>
<!DOCTYPE html>
<html lang="th">

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-41HK58LVGX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-41HK58LVGX');
    </script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KBVVRC2H');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สินค้าบรรจุภัณฑ์ | Koch Packaging and Packing Services - กล่องกระดาษ, ไม้, พลาสติก, เหล็ก</title>
    <!-- Path depth for i18n.js -->
    <script>window.KOCH_DEPTH = '../';</script>
    <script src="<?php echo $depth; ?>js/i18n.js" defer></script>

    <!-- Google SEO -->
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://koch-packaging-services.com/main/product.php" />
    <link rel="alternate" hreflang="th" href="https://koch-packaging-services.com/main/product.php" />
    <link rel="alternate" hreflang="en" href="https://koch-packaging-services.com/main/product.php?lang=en" />
    <link rel="alternate" hreflang="x-default" href="https://koch-packaging-services.com/main/product.php" />

    <!-- Facebook Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="th_TH" />
    <meta property="og:site_name" content="Koch Packaging and Packing Services Co.,Ltd" />
    <meta property="og:title" content="สินค้าบรรจุภัณฑ์ | Koch Packaging and Packing Services" />
    <meta property="og:description"
        content="สินค้าบรรจุภัณฑ์ครบวงจรจาก Koch Packaging and Packing Services - กล่องกระดาษลูกฟูก, บรรจุภัณฑ์ไม้, พลาสติก, และเหล็ก สำหรับอุตสาหกรรมยานยนต์" />
    <meta property="og:url" content="https://koch-packaging-services.com/main/product.php" />
    <meta property="og:image" content="https://koch-packaging-services.com/img/company_logo/logo-2.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="สินค้าบรรจุภัณฑ์ | Koch Packaging and Packing Services" />
    <meta name="twitter:description" content="สินค้าบรรจุภัณฑ์ครบวงจร - กล่องกระดาษลูกฟูก, ไม้, พลาสติก, เหล็ก" />
    <meta name="twitter:image" content="https://koch-packaging-services.com/img/company_logo/logo-2.png" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../img/company_logo/logo-2.png" />

    <!-- Custom CSS & JS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBVVRC2H" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include '../component/menubar.php'; ?>

    <main>
        <!-- PRODUCT CATEGORY MENU SECTION -->
        <section class="product-category-section layout_padding" style="padding-top: 100px; padding-bottom: 90px;">
            <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                <!-- Heading -->
                <h2 class="anim-fade-up" style="width: 100%; float: left; font-size: 40px; color: #111111; text-align: center; font-weight: bold; font-family: 'Sarabun', sans-serif; margin-top: 0px; margin-bottom: 15px;"
                    data-i18n="product.title">
                    ประเภทสินค้า
                </h2>
                <p class="anim-fade-up" style="width: 100%; float: left; font-size: 16px; color: #242424; text-align: center; font-family: 'Sarabun', sans-serif; margin-top: 0px; margin-bottom: 40px;"
                    data-i18n="product.desc">
                    ครอบคลุมวัสดุหลากหลายประเภท เช่น กระดาษ ไม้ พลาสติก และเหล็ก
                </p>

                <!-- Menu Bar -->
                <div class="category-menu-container" style="width: 100%; float: left; margin-bottom: 40px;">
                    <ul class="category-menu">
                        <li><a href="#all" class="active" onclick="filterCategory('all', event)"
                                data-i18n="product.catAll">ทั้งหมด</a></li>
                        <li><a href="#mail" onclick="filterCategory('mail', event)"
                                data-i18n="product.catPaper">กล่องกระดาษ</a></li>
                        <li><a href="#corrugated" onclick="filterCategory('corrugated', event)"
                                data-i18n="product.catWooden">บรรจุภัณฑ์ไม้</a></li>
                        <li><a href="#diecut" onclick="filterCategory('diecut', event)"
                                data-i18n="product.catPlastic">บรรจุภัณฑ์พลาสติก</a></li>
                        <li><a href="#accessory" onclick="filterCategory('accessory', event)"
                                data-i18n="product.catSteel">บรรจุภัณฑ์เหล็ก</a></li>
                    </ul>
                </div>

                <!-- Product Grid Contents -->
                <div class="product-grid">
                    <!-- Row 1: Mix for ALL -->
                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/rsc.png" alt="RSC Box">
                        <div class="product-overlay"><span class="product-title">RSC Box</span></div>
                    </div>
                    <div class="product-grid-item" data-category="corrugated">
                        <img src="../img/products/Wooden/wooden_crates.png" alt="Wooden Crates">
                        <div class="product-overlay"><span class="product-title">Wooden Crates</span></div>
                    </div>
                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/plastic_container.png" alt="Plastic Container">
                        <div class="product-overlay"><span class="product-title">Plastic Container</span></div>
                    </div>
                    <div class="product-grid-item" data-category="accessory">
                        <img src="../img/products/Steel/steel_rack.png" alt="Steel Rack">
                        <div class="product-overlay"><span class="product-title">Steel Rack</span></div>
                    </div>

                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/die-cut.png" alt="Die-Cut Box">
                        <div class="product-overlay"><span class="product-title">Die-Cut Box</span></div>
                    </div>
                    <div class="product-grid-item" data-category="corrugated">
                        <img src="../img/products/Wooden/wooden_pallet.png" alt="Wooden Pallet">
                        <div class="product-overlay"><span class="product-title">Wooden Pallet</span></div>
                    </div>
                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/pp_box.png" alt="PP Box">
                        <div class="product-overlay"><span class="product-title">PP Box</span></div>
                    </div>
                    <div class="product-grid-item" data-category="accessory">
                        <img src="../img/products/Steel/steel_rack2.png" alt="Steel Rack 2">
                        <div class="product-overlay"><span class="product-title">Steel Rack 2</span></div>
                    </div>

                    <!-- Rest of items -->
                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/ftd.png" alt="FTD Box">
                        <div class="product-overlay"><span class="product-title">FTD Box</span></div>
                    </div>
                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/osc.png" alt="OSC Box">
                        <div class="product-overlay"><span class="product-title">OSC Box</span></div>
                    </div>
                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/pallet.png" alt="Cardboard Pallet">
                        <div class="product-overlay"><span class="product-title">Cardboard Pallet</span></div>
                    </div>
                    <div class="product-grid-item" data-category="mail">
                        <img src="../img/products/box/fit_ser.png" alt="Fitting Box Service">
                        <div class="product-overlay"><span class="product-title">Fitting Box Service</span></div>
                    </div>

                    <div class="product-grid-item" data-category="corrugated">
                        <img src="../img/products/Wooden/wooden_case.png" alt="Wooden Case">
                        <div class="product-overlay"><span class="product-title">Wooden Case</span></div>
                    </div>

                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/plastic_pallet.png" alt="Plastic Pallet">
                        <div class="product-overlay"><span class="product-title">Plastic Pallet</span></div>
                    </div>
                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/pp_box_esd.png" alt="PP Box ESD">
                        <div class="product-overlay"><span class="product-title">PP Box ESD</span></div>
                    </div>
                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/pp_box_partition.png" alt="PP Box Partition">
                        <div class="product-overlay"><span class="product-title">PP Box Partition</span></div>
                    </div>
                    <div class="product-grid-item" data-category="diecut">
                        <img src="../img/products/Plastic/pp_box_partition2.png" alt="PP Box Partition 2">
                        <div class="product-overlay"><span class="product-title">PP Box Partition 2</span></div>
                    </div>

                    <div class="product-grid-item" data-category="accessory">
                        <img src="../img/products/Steel/steel_rack3.png" alt="Steel Rack 3">
                        <div class="product-overlay"><span class="product-title">Steel Rack 3</span></div>
                    </div>
                </div>

            </div>

            <!-- CSS and JS for Product Page has been moved to ../css/style.css and ../js/script.js respectively -->
        </section>
    </main>

    <?php include '../component/footer.php'; ?>
</body>

</html>