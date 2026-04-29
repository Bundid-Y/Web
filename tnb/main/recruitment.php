<?php $depth = "../"; ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตำแหน่งที่เปิดรับสมัคร | TNB Logistics</title>
    <meta name="description" content="สมัครงานกับ TNB Logistics ดูตำแหน่งงาน รายละเอียดงาน คุณสมบัติ และกรอกใบสมัครได้ในหน้าเดียว" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://tnb-logistics.com/main/recruitment.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ตำแหน่งที่เปิดรับสมัคร | TNB Logistics" />
    <meta property="og:description" content="ดูตำแหน่งงาน รายละเอียดงาน คุณสมบัติ และสมัครงานกับ TNB Logistics ได้ในหน้าเดียว" />
    <meta property="og:image" content="https://tnb-logistics.com/img/company_logo/tnb_logo.webp" />
    <link rel="icon" type="image/png" href="../img/company_logo/tnb_logo.webp" />
    <script>window.TNB_DEPTH = '../';</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Sarabun:wght@300;400;500;600;700;800&family=Noto+Sans+SC:wght@400;500;700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <script src="../js/i18n.js" defer></script>
    <script src="../js/script.js?v=<?php echo time(); ?>" defer></script>
    <style>
        .page-recruitment {
            --career-primary: #0057ff;
            --career-accent: #0d2d6b;
            --career-dark: #081f4d;
            --career-line: #9ab4ff;
            --career-soft: #f0f5ff;
            --career-text: #152033;
            --career-muted: #61728a;
            --career-border: #e6eaf0;
            background: #ffffff;
            color: var(--career-text);
        }
        .recruitment-shell { max-width: 1220px; margin: 0 auto; padding: 112px 22px 72px; }
        .recruitment-top {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 22px;
            align-items: end;
            padding-bottom: 18px;
            border-bottom: 2px solid var(--career-primary);
            margin-bottom: 24px;
        }
        .career-kicker { margin: 0 0 6px; color: var(--career-primary); font-weight: 800; font-size: 13px; text-transform: uppercase; letter-spacing: .06em; }
        .career-title { margin: 0; color: var(--career-primary); font-size: 32px; line-height: 1.2; font-weight: 800; letter-spacing: 0; }
        .career-summary { max-width: 760px; margin: 10px 0 0; color: var(--career-muted); line-height: 1.75; font-size: 15px; }
        .company-badge {
            display: grid;
            justify-items: end;
            gap: 4px;
            color: var(--career-muted);
            font-size: 13px;
            text-align: right;
        }
        .company-badge strong { color: var(--career-text); font-size: 16px; }
        .recruitment-board { display: grid; grid-template-columns: 330px minmax(0, 1fr); gap: 34px; align-items: start; }
        .job-rail {
            position: sticky;
            top: 96px;
            max-height: calc(100vh - 116px);
            overflow-y: auto;
            scrollbar-width: thin;
            padding-right: 6px;
        }
        .rail-title { margin: 0 0 14px; color: var(--career-text); font-size: 18px; font-weight: 800; }
        .job-tab {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 28px;
            gap: 12px;
            align-items: center;
            border: 0;
            border-bottom: 1px solid var(--career-line);
            background: transparent;
            padding: 14px 0;
            color: var(--career-text);
            text-align: left;
            cursor: pointer;
            font: inherit;
        }
        .job-tab__title { display: block; font-size: 14px; line-height: 1.35; font-weight: 800; }
        .job-tab__meta { display: block; margin-top: 4px; color: var(--career-muted); font-size: 12px; line-height: 1.35; }
        .job-tab__arrow { color: #c8d0dc; font-size: 22px; line-height: 1; text-align: right; }
        .job-tab:hover .job-tab__title,
        .job-tab.is-active .job-tab__title,
        .job-tab.is-active .job-tab__arrow { color: var(--career-primary); }
        .job-tab.is-active { border-bottom-color: var(--career-primary); }
        .content-panel { min-width: 0; }
        .detail-panel { display: none; }
        .detail-panel.is-active { display: block; }
        .detail-head { border-bottom: 1px solid var(--career-border); padding-bottom: 18px; margin-bottom: 20px; }
        .detail-title { margin: 0; color: var(--career-primary); font-size: 28px; line-height: 1.25; font-weight: 800; letter-spacing: 0; }
        .detail-meta {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 0;
            margin-top: 18px;
        }
        .meta-item { padding: 0 18px; border-left: 1px solid var(--career-border); min-height: 54px; }
        .meta-item:first-child { padding-left: 0; border-left: 0; }
        .meta-item span { display: block; color: var(--career-muted); font-size: 12px; margin-bottom: 4px; }
        .meta-item strong { display: block; color: var(--career-text); font-size: 13px; line-height: 1.4; font-weight: 700; }
        .detail-section { margin-top: 22px; }
        .detail-heading { margin: 0 0 10px; color: var(--career-text); font-size: 15px; font-weight: 800; }
        .detail-list { margin: 0; padding-left: 20px; color: #46566e; line-height: 1.8; font-size: 14px; }
        .application-block { border-top: 1px solid var(--career-border); margin-top: 26px; padding-top: 22px; }
        .application-title { margin: 0 0 14px; color: var(--career-primary); font-size: 22px; font-weight: 800; }
        .application-form { display: grid; gap: 12px; }
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px 16px; }
        .form-field { display: grid; gap: 6px; }
        .form-field--full { grid-column: 1 / -1; }
        .form-field label { color: #344054; font-size: 12px; font-weight: 800; }
        .form-field input,
        .form-field select,
        .form-field textarea {
            width: 100%;
            min-height: 42px;
            box-sizing: border-box;
            border: 1px solid var(--career-border);
            border-radius: 3px;
            background: #fff;
            color: var(--career-text);
            padding: 10px 12px;
            font: inherit;
            outline: none;
        }
        .form-field textarea { min-height: 48px; resize: vertical; }
        .form-field input:focus,
        .form-field select:focus,
        .form-field textarea:focus { border-color: var(--career-primary); box-shadow: 0 0 0 3px rgba(0, 87, 255, .12); }
        .file-field { position: relative; }
        .file-field input { padding-right: 90px; }
        .file-hint { position: absolute; right: 12px; bottom: 11px; color: var(--career-primary); font-size: 12px; font-weight: 800; pointer-events: none; }
        .consent-field { display: grid; grid-template-columns: 16px 1fr; gap: 9px; align-items: start; margin-top: 2px; }
        .consent-field input { width: 16px; height: 16px; margin-top: 4px; accent-color: var(--career-primary); }
        .application-note { margin: 0; color: #475467; line-height: 1.65; font-size: 12px; }
        .verify-box {
            display: inline-grid;
            grid-template-columns: 20px 1fr;
            gap: 10px;
            align-items: center;
            width: min(260px, 100%);
            min-height: 54px;
            border: 1px solid var(--career-border);
            background: #fafafa;
            padding: 10px;
            color: #344054;
            font-size: 12px;
        }
        .verify-box input { width: 18px; height: 18px; accent-color: var(--career-primary); }
        .submit-row { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
        .career-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 40px;
            padding: 0 22px;
            border: 1px solid var(--career-primary);
            border-radius: 4px;
            background: var(--career-primary);
            color: #fff;
            text-decoration: none;
            font-weight: 800;
            cursor: pointer;
        }
        .career-btn:hover { background: var(--career-accent); color: #fff; }
        @media (max-width: 980px) {
            .recruitment-top,
            .recruitment-board { grid-template-columns: 1fr; }
            .company-badge { justify-items: start; text-align: left; }
            .job-rail { position: static; max-height: none; padding-right: 0; }
            .detail-meta { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 14px 0; }
            .meta-item:nth-child(odd) { padding-left: 0; border-left: 0; }
        }
        @media (max-width: 640px) {
            .recruitment-shell { padding: 96px 16px 56px; }
            .career-title, .detail-title { font-size: 25px; }
            .detail-meta, .form-grid { grid-template-columns: 1fr; }
            .meta-item { padding: 0; border-left: 0; border-top: 1px solid var(--career-border); padding-top: 12px; }
            .meta-item:first-child { border-top: 0; padding-top: 0; }
            .submit-row .career-btn { width: 100%; }
        }
    </style>
</head>

<body class="page-recruitment">
    <?php include '../component/menubar.php'; ?>

    <main class="recruitment-shell">
        <header class="recruitment-top">
            <div>
                <h1 class="career-title">ตำแหน่งที่เปิดรับสมัคร</h1>
                <p class="career-summary">รวมข้อมูลบริษัท สวัสดิการ รายละเอียดตำแหน่งงาน คุณสมบัติ และแบบฟอร์มสมัครงานไว้ในหน้าเดียว เพื่อให้สมัครงานได้สะดวกโดยไม่ต้องเข้าออกหลายหน้า</p>
            </div>
            <div class="company-badge">
                <strong>TNB Logistics Co., Ltd.</strong>
                <span>ฝ่ายทรัพยากรบุคคล</span>
            </div>
        </header>

        <div class="recruitment-board">
            <aside class="job-rail" aria-label="รายการตำแหน่งงาน">
                <h2 class="rail-title">ตำแหน่งงาน</h2>
                <button class="job-tab is-active" type="button" data-job="truck-driver">
                    <span>
                        <span class="job-tab__title">พนักงานขับรถบรรทุก / รถหัวลาก</span>
                        <span class="job-tab__meta">ชลบุรี และพื้นที่ให้บริการ</span>
                    </span>
                    <span class="job-tab__arrow">→</span>
                </button>
                <button class="job-tab" type="button" data-job="cs-transportation">
                    <span>
                        <span class="job-tab__title">CS Transportation / Manager Transportation</span>
                        <span class="job-tab__meta">ชลบุรี และพื้นที่ให้บริการ</span>
                    </span>
                    <span class="job-tab__arrow">→</span>
                </button>
                <button class="job-tab" type="button" data-job="truck-mechanic">
                    <span>
                        <span class="job-tab__title">ช่างยนต์ และ ช่างไฟ (รถบรรทุก & รถหัวลาก)</span>
                        <span class="job-tab__meta">อ.ศรีราชา จ.ชลบุรี</span>
                    </span>
                    <span class="job-tab__arrow">→</span>
                </button>
            </aside>

            <section class="content-panel">
                <div class="detail-panel is-active" id="truck-driver" data-title="พนักงานขับรถบรรทุก / รถหัวลาก">
                    <div class="detail-head">
                        <h2 class="detail-title">พนักงานขับรถบรรทุก / รถหัวลาก</h2>
                        <div class="detail-meta">
                            <div class="meta-item"><span>By Department</span><strong>Transport Operations</strong></div>
                            <div class="meta-item"><span>By Location</span><strong>ชลบุรี และพื้นที่ให้บริการ</strong></div>
                            <div class="meta-item"><span>By Employment Type</span><strong>Fulltime</strong></div>
                            <div class="meta-item"><span>Salary</span><strong>ตามประสบการณ์</strong></div>
                        </div>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">รายละเอียดงาน</h3>
                        <ol class="detail-list">
                            <li>ขับรถบรรทุกหรือรถหัวลากตามแผนงานขนส่งของบริษัท</li>
                            <li>ตรวจเช็กสภาพรถเบื้องต้นก่อนและหลังปฏิบัติงาน</li>
                            <li>ดูแลความปลอดภัยของสินค้า รถ และเอกสารประกอบการขนส่ง</li>
                            <li>ประสานงานกับทีมปฏิบัติการเมื่อต้องรับ-ส่งสินค้า หรือเข้าพื้นที่ลูกค้า</li>
                            <li>ปฏิบัติงานอื่น ๆ ตามที่ได้รับมอบหมายจากหัวหน้างาน</li>
                        </ol>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">คุณสมบัติผู้สมัคร</h3>
                        <ol class="detail-list">
                            <li>มีใบอนุญาตขับขี่ตามประเภทรถที่ใช้งาน</li>
                            <li>มีประสบการณ์ขับรถบรรทุกหรือรถหัวลากจะพิจารณาเป็นพิเศษ</li>
                            <li>รู้เส้นทางในพื้นที่ชลบุรี แหลมฉบัง หรือพื้นที่อุตสาหกรรมใกล้เคียง</li>
                            <li>มีความรับผิดชอบ ตรงต่อเวลา และให้ความสำคัญกับความปลอดภัย</li>
                            <li>สามารถทำงานตามรอบงานขนส่งและประสานงานกับทีมได้ดี</li>
                        </ol>
                    </div>
                </div>

                <div class="detail-panel" id="cs-transportation" data-title="CS Transportation / Manager Transportation">
                    <div class="detail-head">
                        <h2 class="detail-title">CS Transportation / Manager Transportation</h2>
                        <div class="detail-meta">
                            <div class="meta-item"><span>By Department</span><strong>CS Transportation</strong></div>
                            <div class="meta-item"><span>By Location</span><strong>ชลบุรี และพื้นที่ให้บริการ</strong></div>
                            <div class="meta-item"><span>By Employment Type</span><strong>Fulltime</strong></div>
                            <div class="meta-item"><span>Salary</span><strong>ตามประสบการณ์</strong></div>
                        </div>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">รายละเอียดงาน</h3>
                        <ol class="detail-list">
                            <li>ประสานงานขนส่งกับลูกค้า พนักงานขับรถ และทีมปฏิบัติการ</li>
                            <li>วางแผนและติดตามสถานะงานขนส่งให้เป็นไปตามกำหนดเวลา</li>
                            <li>ตรวจสอบเอกสารขนส่งและสรุปรายงานการให้บริการประจำวัน</li>
                            <li>แก้ไขปัญหาเฉพาะหน้าและประสานงานกับหน่วยงานที่เกี่ยวข้อง</li>
                            <li>ดูแลคุณภาพการให้บริการและสนับสนุนการบริหารทีม Transportation</li>
                        </ol>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">คุณสมบัติผู้สมัคร</h3>
                        <ol class="detail-list">
                            <li>มีประสบการณ์ด้านประสานงานขนส่ง โลจิสติกส์ หรือ Customer Service</li>
                            <li>มีทักษะการสื่อสารและการติดตามงานที่เป็นระบบ</li>
                            <li>สามารถใช้โปรแกรมสำนักงานและจัดทำรายงานได้ดี</li>
                            <li>มีความรับผิดชอบ ทำงานภายใต้เวลาที่กำหนด และแก้ไขปัญหาเฉพาะหน้าได้</li>
                            <li>มีประสบการณ์บริหารทีมขนส่งจะพิจารณาเป็นพิเศษ</li>
                        </ol>
                    </div>
                </div>

                <div class="detail-panel" id="truck-mechanic" data-title="ช่างยนต์ และ ช่างไฟ (รถบรรทุก & รถหัวลาก)">
                    <div class="detail-head">
                        <h2 class="detail-title">ช่างยนต์ และ ช่างไฟ (รถบรรทุก & รถหัวลาก)</h2>
                        <div class="detail-meta">
                            <div class="meta-item"><span>By Department</span><strong>ช่างเทคนิค</strong></div>
                            <div class="meta-item"><span>By Location</span><strong>อ.ศรีราชา จ.ชลบุรี</strong></div>
                            <div class="meta-item"><span>By Employment Type</span><strong>Fulltime</strong></div>
                            <div class="meta-item"><span>Salary</span><strong>ตามตกลง</strong></div>
                        </div>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">รายละเอียดงาน</h3>
                        <ol class="detail-list">
                            <li>ตรวจสอบการซ่อมบำรุงรถบรรทุกและรถหัวลาก</li>
                            <li>ประสานงานการซ่อมตามระยะเวลาและติดตามสถานะงานซ่อม</li>
                            <li>ควบคุมค่าใช้จ่ายด้านซ่อมบำรุงให้อยู่ในกรอบที่กำหนด</li>
                        </ol>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">คุณสมบัติผู้สมัคร</h3>
                        <ol class="detail-list">
                            <li>เพศชาย อายุ 30-45 ปี</li>
                            <li>มีประสบการณ์การบำรุงรักษารถ 6W / Trailer</li>
                            <li>มีความรับผิดชอบ ขยัน และอดทนต่องาน</li>
                            <li>สามารถรับแรงกดดันและแก้ปัญหาเฉพาะหน้าได้ดี</li>
                            <li>สามารถเริ่มงานได้ทันทีจะพิจารณาเป็นพิเศษ</li>
                        </ol>
                    </div>
                </div>

                <div class="detail-section">
                    <h3 class="detail-heading">สวัสดิการ</h3>
                    <ol class="detail-list">
                            <li>ประกันสังคม</li>
                            <li>ยูนิฟอร์ม</li>
                            <li>ตรวจสุขภาพประจำปี</li>
                            <li>งานเลี้ยงประจำปี</li>
                            <li>สภาพแวดล้อมการทำงานเป็นทีม</li>
                            <li>โอกาสเติบโตในสายงานโลจิสติกส์</li>
                    </ol>
                </div>

                <section class="application-block" id="application-form">
                    <h2 class="application-title">สมัครงานตำแหน่งนี้</h2>
                    <form class="application-form" action="#" method="post" enctype="multipart/form-data">
                        <div class="form-grid">
                            <div class="form-field form-field--full">
                                <label for="position">ตำแหน่งที่สมัคร*</label>
                                <select id="position" name="position" required>
                                    <option>พนักงานขับรถบรรทุก / รถหัวลาก</option>
                                    <option>CS Transportation / Manager Transportation</option>
                                    <option>ช่างยนต์ และ ช่างไฟ (รถบรรทุก & รถหัวลาก)</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="fullname">ชื่อ-สกุล*</label>
                                <input id="fullname" name="fullname" type="text" required>
                            </div>
                            <div class="form-field">
                                <label for="email">อีเมล*</label>
                                <input id="email" name="email" type="email" required>
                            </div>
                            <div class="form-field">
                                <label for="phone">หมายเลขโทรศัพท์*</label>
                                <input id="phone" name="phone" type="tel" required>
                            </div>
                            <div class="form-field">
                                <label for="license">ประเภทใบขับขี่</label>
                                <input id="license" name="license" type="text">
                            </div>
                            <div class="form-field form-field--full file-field">
                                <label for="resume">เรซูเม่ / ประวัติการทำงาน*</label>
                                <input id="resume" name="resume" type="file" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" required>
                                <span class="file-hint">อัปโหลด</span>
                            </div>
                        </div>
                        <label class="consent-field" for="privacy-consent">
                            <input id="privacy-consent" name="privacy_consent" type="checkbox" required>
                            <p class="application-note">ข้าพเจ้าให้ความยินยอมแก่ บริษัท TNB Logistics Co., Ltd. ในการเก็บ และใช้ ข้อมูลส่วนบุคคล ของข้าพเจ้าเพื่อติดต่อกลับข้าพเจ้า หรือส่งต่อไปยังผู้เกี่ยวข้องเพื่อดำเนินการตามวัตถุประสงค์ *</p>
                        </label>
                        <label class="verify-box">
                            <input name="human_confirm" type="checkbox">
                            <span>ฉันไม่ใช่โปรแกรมอัตโนมัติ</span>
                        </label>
                        <div class="submit-row">
                            <button class="career-btn" type="submit">สมัครงาน</button>
                        </div>
                    </form>
                </section>
            </section>
        </div>
    </main>

    <?php include '../component/footer.php'; ?>

    <script>
        (function () {
            const tabs = document.querySelectorAll('.job-tab');
            const panels = document.querySelectorAll('.detail-panel');
            const position = document.getElementById('position');

            function selectJob(jobId) {
                const activePanel = document.getElementById(jobId);
                tabs.forEach((tab) => tab.classList.toggle('is-active', tab.dataset.job === jobId));
                panels.forEach((panel) => panel.classList.toggle('is-active', panel.id === jobId));
                if (position && activePanel) {
                    position.value = activePanel.dataset.title;
                }
            }

            tabs.forEach((tab) => {
                tab.addEventListener('click', () => selectJob(tab.dataset.job));
            });
        })();
    </script>
</body>

</html>
