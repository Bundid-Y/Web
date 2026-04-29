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
            --career-primary: #0d2d6b;
            --career-accent: #081f4d;
            --career-dark: #081f4d;
            --career-line: #b7c6e8;
            --career-soft: #f0f5ff;
            --career-text: #152033;
            --career-muted: #61728a;
            --career-border: #e6eaf0;
            background: #ffffff;
            color: var(--career-text);
        }
        .recruitment-shell { max-width: 1220px; margin: 0 auto; padding: 112px 22px 72px; }
        .page-recruitment,
        .recruitment-shell,
        .recruitment-board {
            overflow: visible !important;
        }
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
        .recruitment-board {
            position: relative;
            display: grid;
            grid-template-columns: 330px minmax(0, 1fr);
            gap: 34px;
            align-items: start;
        }
        .job-rail {
            position: sticky !important;
            top: 96px;
            align-self: start;
            max-height: calc(100vh - 116px);
            overflow-y: auto;
            scrollbar-width: thin;
            padding: 18px;
            border: 1px solid var(--career-border);
            border-radius: 14px;
            background: linear-gradient(180deg, #fff, #f8fbff);
            box-shadow: 0 18px 45px rgba(18, 31, 53, .07);
        }
        .rail-title { margin: 0 0 14px; color: var(--career-text); font-size: 18px; font-weight: 800; }
        .job-tab {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 28px;
            gap: 12px;
            align-items: center;
            border: 1px solid var(--career-border);
            border-left: 4px solid transparent;
            border-radius: 12px;
            background: #fff;
            padding: 14px;
            margin: 0 0 12px;
            color: var(--career-text);
            text-align: left;
            cursor: pointer;
            font: inherit;
            box-shadow: 0 10px 25px rgba(18, 31, 53, .05);
            transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease, background-color .18s ease;
        }
        .job-tab__title { display: block; font-size: 14px; line-height: 1.35; font-weight: 800; transition: color .18s ease; }
        .job-tab__meta { display: block; margin-top: 4px; color: var(--career-muted); font-size: 12px; line-height: 1.35; }
        .job-tab__arrow {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #c8d0dc;
            background: #f8fafc;
            font-size: 18px;
            line-height: 1;
            text-align: right;
            transition: color .18s ease, background-color .18s ease, transform .18s ease;
        }
        .job-tab:hover { transform: translateY(-2px); box-shadow: 0 16px 34px rgba(18, 31, 53, .09); border-color: rgba(13, 45, 107, .22); }
        .job-tab:hover .job-tab__title,
        .job-tab.is-active .job-tab__title,
        .job-tab.is-active .job-tab__arrow { color: var(--career-primary); }
        .job-tab:hover .job-tab__arrow,
        .job-tab.is-active .job-tab__arrow { background: var(--career-soft); transform: translateX(2px); }
        .job-tab.is-active {
            border-color: rgba(13, 45, 107, .34);
            border-left-color: var(--career-primary);
            background: linear-gradient(135deg, #fff, var(--career-soft));
        }
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
        .contact-apply {
            border-top: 1px solid var(--career-border);
            margin-top: 26px;
            padding-top: 22px;
        }
        .contact-apply__title { margin: 0 0 10px; color: var(--career-text); font-size: 15px; font-weight: 800; }
        .contact-apply__department { margin: 0 0 10px; color: #111827; font-size: 14px; font-weight: 400; }
        .contact-apply__lines { margin: 0; color: #111827; line-height: 1.8; font-size: 14px; font-weight: 400; }
        .contact-apply__lines a { color: #111827; text-decoration: none; font-weight: 400; }
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
        .form-field textarea:focus { border-color: var(--career-primary); box-shadow: 0 0 0 3px rgba(13, 45, 107, .12); }
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
        .submit-row .career-btn { width: 100%; }
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
        .mobile-job-modal { display: none; }
        @media (max-width: 980px) {
            .recruitment-top { grid-template-columns: 1fr; }
            .recruitment-board {
                grid-template-columns: minmax(250px, 320px) minmax(0, 1fr);
                gap: 22px;
                align-items: start;
            }
            .company-badge { justify-items: start; text-align: left; }
            .job-rail {
                position: sticky !important;
                top: 90px;
                align-self: start;
                max-height: calc(100vh - 108px);
            }
            .detail-meta { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 14px 0; }
            .meta-item:nth-child(odd) { padding-left: 0; border-left: 0; }
        }
        @media (max-width: 560px) {
            .recruitment-board { grid-template-columns: 1fr; }
            .job-rail {
                position: static !important;
                max-height: none;
                overflow: visible;
            }
        }
        @media (max-width: 640px) {
            .recruitment-shell { padding: 96px 16px 56px; }
            .career-title, .detail-title { font-size: 25px; }
            .recruitment-board { grid-template-columns: 1fr; }
            .job-rail {
                position: static !important;
                max-height: none;
                overflow: visible;
            }
            .content-panel { display: none; }
            .detail-meta, .form-grid { grid-template-columns: 1fr; }
            .meta-item { padding: 0; border-left: 0; border-top: 1px solid var(--career-border); padding-top: 12px; }
            .meta-item:first-child { border-top: 0; padding-top: 0; }
            .submit-row .career-btn { width: 100%; }
            .mobile-job-modal {
                position: fixed;
                inset: 0;
                z-index: 9999;
                display: none;
                background: #fff;
                color: var(--career-text);
                overflow-y: auto;
                padding: 20px 16px 34px;
            }
            .mobile-job-modal.is-open { display: block; }
            .mobile-modal-back {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 38px;
                padding: 0 14px;
                margin-bottom: 18px;
                border: 1px solid var(--career-border);
                border-radius: 999px;
                background: #fff;
                color: var(--career-primary);
                font: inherit;
                font-weight: 800;
            }
            .mobile-modal-body .detail-panel {
                display: block;
            }
            .mobile-modal-body .detail-head {
                padding-bottom: 18px;
                margin-bottom: 18px;
            }
            .mobile-modal-body .detail-meta {
                display: grid;
                grid-template-columns: 1fr;
                gap: 0;
            }
            .mobile-modal-body .meta-item {
                padding: 14px 0;
                border-left: 0;
                border-top: 1px solid var(--career-border);
            }
            .mobile-modal-body .meta-item:first-child {
                border-top: 0;
                padding-top: 0;
            }
            .mobile-modal-body .application-block {
                display: block;
                margin-top: 28px;
                padding-top: 22px;
                border-top: 1px solid var(--career-border);
            }
            .mobile-modal-body .form-grid {
                grid-template-columns: 1fr;
            }
            .mobile-modal-body .submit-row .career-btn {
                width: 100%;
            }
            body.mobile-modal-open { overflow: hidden; }
        }
    </style>
</head>

<body class="page-recruitment">
    <?php include '../component/menubar.php'; ?>

    <main class="recruitment-shell">
        <header class="recruitment-top">
            <div>
                <h1 class="career-title">ตำแหน่งที่เปิดรับสมัคร</h1>
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
                            <div class="meta-item"><span>สถานที่ปฏิบัติงาน</span><strong>ชลบุรี (ศรีราชา)</strong></div>
                            <div class="meta-item"><span>ประเภทการจ้างงาน</span><strong>ประจำ</strong></div>
                            <div class="meta-item"><span>เงินเดือน</span><strong>ตามโครงสร้างบริษัทฯ</strong></div>
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
                            <li>ต้องมีใบอนุญาตขับรถประเภท ท.2 และหากขับรถหัวลาก/รถพ่วง ต้องมีใบอนุญาตขับรถประเภท ท.3</li>
                            <li>หากมีประสบการณ์ด้านงานขนส่งตู้สินค้าในท่าเรือ จะพิจารณาเป็นพิเศษ</li>
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
                            <div class="meta-item"><span>สถานที่ปฏิบัติงาน</span><strong>อ.เมืองชลบุรี จ.ชลบุรี</strong></div>
                            <div class="meta-item"><span>ประเภทการจ้างงาน</span><strong>ประจำ</strong></div>
                            <div class="meta-item"><span>เงินเดือน</span><strong>ตามโครงสร้างบริษัทฯ</strong></div>
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
                            <div class="meta-item"><span>สถานที่ปฏิบัติงาน</span><strong>อ.ศรีราชา จ.ชลบุรี</strong></div>
                            <div class="meta-item"><span>ประเภทการจ้างงาน</span><strong>ประจำ</strong></div>
                            <div class="meta-item"><span>เงินเดือน</span><strong>ตามโครงสร้างบริษัทฯ</strong></div>
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
                            <li>สามารถรับแรงกดดันได้ดี</li>
                            <li>สามารถแก้ปัญหาเฉพาะหน้าได้ดี</li>
                            <li>สามารถเริ่มงานได้ทันทีจะพิจารณาเป็นพิเศษ</li>
                        </ol>
                    </div>
                </div>

                <div class="detail-section benefits-section">
                    <h3 class="detail-heading">สวัสดิการ</h3>
                    <ol class="detail-list">
                        <li>ประกันสังคม</li>
                        <li>ยูนิฟอร์ม</li>
                        <li>ท่องเที่ยวประจำปี</li>
                        <li>งานเลี้ยงประจำปี</li>
                        <li>งานเลี้ยงประจำแผนก</li>
                        <li>ตรวจสุขภาพประจำปี</li>
                    </ol>
                </div>

                <section class="detail-section contact-apply">
                    <h3 class="detail-heading contact-apply__title">ติดต่อสมัครงาน</h3>
                    <p class="contact-apply__department">ฝ่ายทรัพยากรบุคคล</p>
                    <p class="contact-apply__lines">
                        เบอร์: 085-8799795, 090-9542354<br>
                        อีเมล: <a href="mailto:wachira.o@tnb-logistics.com">wachira.o@tnb-logistics.com</a>
                    </p>
                </section>

                <section class="application-block" id="application-form">
                    <h2 class="application-title">สมัครงาน</h2>
                    <form class="application-form" action="#" method="post" enctype="multipart/form-data">
                        <div class="form-grid">
                            <div class="form-field form-field--full">
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
                        <div class="submit-row">
                            <button class="career-btn" type="submit">สมัครงาน</button>
                        </div>
                    </form>
                </section>
            </section>
        </div>
    </main>

    <div class="mobile-job-modal" id="mobile-job-modal" aria-hidden="true">
        <button class="mobile-modal-back" type="button">← กลับ</button>
        <div class="mobile-modal-body"></div>
    </div>

    <?php include '../component/footer.php'; ?>

    <script>
        (function () {
            const tabs = document.querySelectorAll('.job-tab');
            const panels = document.querySelectorAll('.detail-panel');
            const position = document.getElementById('position');
            const mobileQuery = window.matchMedia('(max-width: 640px)');
            const modal = document.getElementById('mobile-job-modal');
            const modalBody = modal ? modal.querySelector('.mobile-modal-body') : null;
            const modalBack = modal ? modal.querySelector('.mobile-modal-back') : null;
            const benefits = document.querySelector('.benefits-section');
            const contactApply = document.querySelector('.contact-apply');
            const applicationBlock = document.querySelector('.application-block');

            function selectJob(jobId) {
                const activePanel = document.getElementById(jobId);
                tabs.forEach((tab) => tab.classList.toggle('is-active', tab.dataset.job === jobId));
                panels.forEach((panel) => panel.classList.toggle('is-active', panel.id === jobId));
                if (position && activePanel) {
                    position.value = activePanel.dataset.title;
                }
            }

            function openMobileModal(jobId) {
                const activePanel = document.getElementById(jobId);
                if (!activePanel || !modal || !modalBody) return;
                selectJob(jobId);
                modalBody.innerHTML = '';
                modalBody.appendChild(activePanel.cloneNode(true));
                if (benefits) {
                    modalBody.appendChild(benefits.cloneNode(true));
                }
                if (contactApply) {
                    modalBody.appendChild(contactApply.cloneNode(true));
                }
                if (applicationBlock) {
                    modalBody.appendChild(applicationBlock.cloneNode(true));
                }
                modal.classList.add('is-open');
                modal.setAttribute('aria-hidden', 'false');
                document.body.classList.add('mobile-modal-open');
                modal.scrollTop = 0;
            }

            function closeMobileModal() {
                if (!modal || !modalBody) return;
                modal.classList.remove('is-open');
                modal.setAttribute('aria-hidden', 'true');
                document.body.classList.remove('mobile-modal-open');
                modalBody.innerHTML = '';
            }

            tabs.forEach((tab) => {
                tab.addEventListener('click', () => {
                    if (mobileQuery.matches) {
                        openMobileModal(tab.dataset.job);
                        return;
                    }
                    selectJob(tab.dataset.job);
                });
            });

            if (modalBack) {
                modalBack.addEventListener('click', closeMobileModal);
            }

            window.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') {
                    closeMobileModal();
                }
            });

            mobileQuery.addEventListener('change', (event) => {
                if (!event.matches) {
                    closeMobileModal();
                }
            });
        })();
    </script>
</body>

</html>
