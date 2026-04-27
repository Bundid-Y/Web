<?php $depth = '../'; ?>
<!doctype html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title data-i18n="news_detail.page_title">กิจกรรม สืบสานประเพณีวันสงกรานต์ | Koch Packaging and Packing Services
    </title>
    <link rel="icon" type="image/png" href="../img/company_logo/logo-2.png" />
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

    <div class="news-detail-container">
        <a href="news.php" class="back-to-news" data-i18n-html="news_detail.back">&larr; กลับไปหน้า ข่าวและกิจกรรม</a>

        <div class="news-detail-header">
            <h1 class="news-detail-title" data-i18n="news_detail.songkran_title">กิจกรรม สืบสานประเพณีวันสงกรานต์</h1>
            <div class="news-detail-meta">
                <span data-i18n="news_detail.category_event">Event & Seminar</span>
                <span>|</span>
                <span>10.04.2026</span>
            </div>
        </div>

        <img src="../img/news/songkran/head_event.webp?v=1" alt="กิจกรรม สืบสานประเพณีวันสงกรานต์"
            class="news-detail-main-img">

        <div class="news-detail-content">
            <p data-i18n="news_detail.songkran_p1">เมื่อวันที่ 10 เมษายน 2569 เวลา 08:30 น. บริษัท Koch Packaging and
                Packing Services & TNB นำโดย
                นายมงคล ระลิ่ว เป็นประธานในพิธี
                พร้อมด้วยคณะผู้บริหารได้นำพนักงานร่วมสักการะองค์ปู่ศรีสุทโธ สิ่งศักดิ์สิทธิ์ประจำบริษัท
                ซึ่งเป็นที่เคารพศรัทธาของชาว Koch Packaging and Packing Services & TNB
                เพื่อขอพรให้องค์กรและบุคลากรมีความเจริญรุ่งเรือง
                ประสบความสำเร็จในภารกิจต่าง ๆ</p>
            <p data-i18n="news_detail.songkran_p2">จากนั้น นายมงคล
                ได้ให้เกียรติเป็นประธานในพิธีสรงน้ำพระพุทธรูปประจำบริษัท
                โดยมีพนักงานเข้าร่วมสรงน้ำพระอย่างพร้อมเพรียงกัน บรรยากาศเต็มไปด้วยความอบอุ่นและความเป็นสิริมงคล
                ซึ่งกิจกรรมในครั้งนี้จัดขึ้นเพื่ออนุรักษ์สืบสานประเพณีอันดีงามของไทย
                และเป็นการเสริมสร้างความสัมพันธ์อันดีภายในองค์กร ก่อนช่วงวันหยุดยาวเทศกาลสงกรานต์</p>
        </div>

        <h3 style="text-align: center; font-size: 1.5rem; color: #1c1c1c; margin-top: 40px;"
            data-i18n="news_detail.gallery_title">ประมวลภาพกิจกรรม</h3>
        <div class="news-gallery">
            <img src="../img/news/songkran/S__22634509_0.webp?v=1" alt="ภาพกิจกรรม 1"
                data-i18n-alt="news_detail.gallery_alt" loading="lazy">
            <img src="../img/news/songkran/S__36847645.jpg" alt="ภาพกิจกรรม 2" data-i18n-alt="news_detail.gallery_alt"
                loading="lazy">
            <img src="../img/news/songkran/S__22634523_0.jpg" alt="ภาพกิจกรรม 3" data-i18n-alt="news_detail.gallery_alt"
                loading="lazy">
            <img src="../img/news/songkran/S__22634526_0.jpg" alt="ภาพกิจกรรม 4" data-i18n-alt="news_detail.gallery_alt"
                loading="lazy">
            <img src="../img/news/songkran/S__22634532_0.jpg" alt="ภาพกิจกรรม 5" data-i18n-alt="news_detail.gallery_alt"
                loading="lazy">
            <img src="../img/news/songkran/S__22634544_0.jpg" alt="ภาพกิจกรรม 6" data-i18n-alt="news_detail.gallery_alt"
                loading="lazy">
        </div>
    </div>

    <?php include '../component/footer.php'; ?>

    <!-- Lightbox Modal -->
    <div class="news-lightbox-overlay" id="newsLightbox">
        <span class="news-lightbox-close" id="newsLightboxClose">&times;</span>
        <img src="" alt="Popup Image" class="news-lightbox-img" id="newsLightboxImg">
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const galleryImgs = document.querySelectorAll('.news-gallery img');
            const lightbox = document.getElementById('newsLightbox');
            const lightboxImg = document.getElementById('newsLightboxImg');
            const lightboxClose = document.getElementById('newsLightboxClose');

            galleryImgs.forEach(img => {
                img.addEventListener('click', () => {
                    lightboxImg.src = img.src;
                    lightbox.classList.add('active');
                });
            });

            lightboxClose.addEventListener('click', () => {
                lightbox.classList.remove('active');
            });

            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) {
                    lightbox.classList.remove('active');
                }
            });

            // Allow closing with escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                    lightbox.classList.remove('active');
                }
            });
        });
    </script>
</body>

</html>