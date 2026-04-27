<?php $base = isset($depth) ? $depth : "../"; ?>
<header class="header" id="header">
    <nav class="nav">
        <!-- Logo -->
        <a href="<?php echo $base; ?>" class=" logo">
            <img src="<?php echo $base; ?>img/company_logo/tnb_logo.webp" alt="TNB" onerror="this.style.display='none'">
        </a>

        <!-- Navigation Menu -->
        <div class="nav-menu" id="navMenu">
            <ul class="nav-list">
                <!-- Dropdown 1: Services -->
                <li class="nav-item dropdown-item">
                    <div class="nav-link dropdown-toggle"><span data-i18n="nav.services">บริการของเรา</span> <span
                            class="arrow">▼</span></div>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $base; ?>service/domestic.php" class="dropdown-link"
                                data-i18n="nav_services.domestic">บริการขนส่งสินค้าในประเทศ</a></li>
                        <li><a href="<?php echo $base; ?>service/shuttle.php" class="dropdown-link"
                                data-i18n="nav_services.shuttle">บริการรถรับ–ส่งระหว่างคลังสินค้า</a></li>
                        <li><a href="<?php echo $base; ?>service/import-export.php" class="dropdown-link"
                                data-i18n="nav_services.import_export">บริการขนส่งตู้คอนเทนเนอร์นำเข้า–ส่งออก</a>
                        </li>
                        <li><a href="<?php echo $base; ?>service/container.php" class="dropdown-link"
                                data-i18n="nav_services.container">บริการจัดการตู้คอนเทนเนอร์และลานตู้สินค้า</a>
                        </li>
                        <li><a href="<?php echo $base; ?>service/nationwide.php" class="dropdown-link"
                                data-i18n="nav_services.nationwide">บริการกระจายสินค้าทั่วประเทศ</a></li>
                        <li><a href="<?php echo $base; ?>service/parking.php" class="dropdown-link"
                                data-i18n="nav_services.parking">บริการที่จอดรถบรรทุกและบริหารพื้นที่จอด</a></li>
                    </ul>
                </li>
                <!-- Dropdown 2: About -->
                <li class="nav-item dropdown-item">
                    <div class="nav-link dropdown-toggle"><span data-i18n="nav.about">เกี่ยวกับเรา</span> <span
                            class="arrow">▼</span></div>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $base; ?>about/company.php" class="dropdown-link"
                                data-i18n="nav_about.company">บริษัท TNB</a></li>
                        <li><a href="<?php echo $base; ?>about/expertise.php" class="dropdown-link"
                                data-i18n="nav_about.expertise">ความเชี่ยวชาญ</a></li>
                        <li><a href="<?php echo $base; ?>about/vision.php" class="dropdown-link"
                                data-i18n="nav_about.vision">วิสัยทัศน์</a></li>
                        <li><a href="<?php echo $base; ?>about/safety.php" class="dropdown-link"
                                data-i18n="nav_about.safety">มาตรฐานความปลอดภัย</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="<?php echo $base; ?>main/partners.php" class="nav-link"
                        data-i18n="nav.partners">พันธมิตร</a></li>
                <li class="nav-item"><a href="<?php echo $base; ?>main/trucktypes.php" class="nav-link"
                        data-i18n="nav.trucktypes">ประเภทรถ</a></li>
                <li class="nav-item"><a href="<?php echo $base; ?>main/technology.php" class="nav-link"
                        data-i18n="nav.technology">เทคโนโลยี</a></li>
                <li class="nav-item"><a href="<?php echo $base; ?>main/news.php" class="nav-link"
                        data-i18n="nav.news">ข่าวและกิจกรรม</a></li>
                <li class="nav-item"><a href="<?php echo $base; ?>main/contact.php" class="nav-link"
                        data-i18n="nav.contact">ติดต่อเรา</a></li>
                <!--<li class="nav-item"><a href="../main/contact.php" class="nav-link"
                            data-i18n="nav.contact_old">ติดต่อเรา</a></li>
                    -->
                <!--        
                    <li class="nav-item"><a href="../main/quotation.php" class="nav-link"
                            data-i18n="nav.quotation">ขอใบเสนอราคา</a></li>
                    -->
                <!-- Language Switcher -->
                <li class="nav-item dropdown-item tnb-lang-switcher login-item">
                    <div class="nav-link dropdown-toggle" id="tnbLangToggle" aria-label="Select language">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="margin-right:5px; vertical-align:middle;">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path
                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                            </path>
                        </svg>
                        <span id="tnbLangLabel">ไทย</span> <span class="arrow">▼</span>
                    </div>
                    <ul class="dropdown-menu tnb-lang-menu" style="min-width: 130px;">
                        <li>
                            <button class="dropdown-link tnb-lang-btn tnb-lang-btn--active" data-tnb-lang-btn="th"
                                onclick="window.tnbLang && window.tnbLang.setLang('th')">
                                <span class="tnb-lang-flag">🇹🇭</span> ไทย
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-link tnb-lang-btn" data-tnb-lang-btn="en"
                                onclick="window.tnbLang && window.tnbLang.setLang('en')">
                                <span class="tnb-lang-flag">🇬🇧</span> English
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-link tnb-lang-btn" data-tnb-lang-btn="zh"
                                onclick="window.tnbLang && window.tnbLang.setLang('zh')">
                                <span class="tnb-lang-flag">🇨🇳</span> 中文
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-link tnb-lang-btn" data-tnb-lang-btn="jp"
                                onclick="window.tnbLang && window.tnbLang.setLang('jp')">
                                <span class="tnb-lang-flag">🇯🇵</span> 日本語
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Close button for Mobile -->
            <div class="nav-close" id="navClose">✕</div>
        </div>

        <!-- Toggle Button (Hamburger) -->
        <div class="nav-toggle" id="navToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>

<!-- CSS ของ menubar อยู่ใน: css/style.css หัวข้อ "Menubar Component (component/menubar.php)" -->
<!-- JS ของ menubar อยู่ใน: js/script.js หัวข้อ "Menubar Component (component/menubar.php)" -->
<!-- i18n system: js/i18n.js | Language files: lang/th.json, en.json, zh.json, jp.json -->