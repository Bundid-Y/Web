<?php $depth = '../'; ?>
<!doctype html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title data-i18n="news_page.page_title">ข่าวและกิจกรรม | TNB Logistics</title>
        <!-- Google SEO -->
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://tnb-logistics.com/main/news.php" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tnb-logistics.com/main/news.php" />
    <meta property="og:title" content="TNB Logistics" />
    <meta property="og:description" content="บริการขนส่งและโลจิสติกส์ครบวงจร ทันสมัย และเครือข่ายจุดบริการยุทธศาสตร์ครอบคลุม" />
    <meta property="og:image" content="https://tnb-logistics.com/img/company_logo/tnb_logo.webp" />
    <meta property="og:site_name" content="TNB Logistics" />
    <meta property="og:locale" content="th_TH" />

    <link rel="icon" type="image/png" href="../img/company_logo/tnb_logo.webp" />
    <script>window.KOCH_DEPTH = '../';</script>
    <script src="../js/i18n.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sarabun:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/news.css">
    <script src="../js/script.js" defer></script>
</head>

<body>
    <?php include '../component/menubar.php'; ?>

    <div class="news-page-container">
        <div class="news-header">
            <h1 class="news-main-title" data-i18n="news_page.main_title">ข่าวและกิจกรรมล่าสุด</h1>
            <a href="#" class="news-see-all" data-i18n-html="news_page.see_all">ดูทั้งหมด &rarr;</a>
        </div>

        <div class="news-grid">
            <!-- News Card 1 -->
            <div class="news-card">
                <a href="news_detail.php?id=songkran" class="news-card-link">
                    <div class="news-card-img-wrapper">
                        <img src="../img/news/songkran/head_event.png?v=1" alt="กิจกรรม สืบสานประเพณีวันสงกรานต์">
                        <div class="news-card-border-bottom"></div>
                    </div>
                    <div class="news-card-content">
                        <div class="news-card-meta">
                            <span class="news-category" data-i18n="news_page.category_event">Event & Seminar</span>
                            <span class="news-meta-divider">|</span>
                            <span class="news-date">10.04.2026</span>
                        </div>
                        <h3 class="news-card-title" data-i18n="news_page.songkran_title">กิจกรรม สืบสานประเพณีวันสงกรานต์ เพื่อสิริมงคลแก่องค์กร</h3>
                        <div class="news-readmore" data-i18n-html="news_page.read_more">อ่านเพิ่มเติม &rarr;</div>
                    </div>
                </a>
            </div>

            <!-- You can add more cards here in the future -->
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>
