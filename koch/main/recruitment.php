<?php $depth = "../"; ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตำแหน่งที่เปิดรับสมัคร | Koch Packaging and Packing Services</title>
    <meta name="description" content="สมัครงานกับ Koch Packaging and Packing Services ดูตำแหน่งงาน รายละเอียดงาน คุณสมบัติ และกรอกใบสมัครได้ในหน้าเดียว" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://koch-packaging-services.com/main/recruitment.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ตำแหน่งที่เปิดรับสมัคร | Koch Packaging and Packing Services" />
    <meta property="og:description" content="ดูตำแหน่งงาน รายละเอียดงาน คุณสมบัติ และสมัครงานกับ Koch Packaging and Packing Services ได้ในหน้าเดียว" />
    <meta property="og:image" content="https://koch-packaging-services.com/img/company_logo/logo-2.png" />
    <link rel="icon" type="image/png" href="../img/company_logo/logo-2.png" />
    <script>window.KOCH_DEPTH = '../';</script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/i18n.js" defer></script>
    <script src="../js/script.js" defer></script>
    <style>
        .page-recruitment {
            --career-primary: #f04438;
            --career-accent: #d92d20;
            --career-dark: #7a1b17;
            --career-line: #f0b5b0;
            --career-soft: #fff5f4;
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
            align-self: start;
            max-height: calc(100vh - 116px);
            overflow-y: auto;
            scrollbar-width: thin;
            padding: 18px;
            border: 1px solid var(--career-border);
            border-radius: 14px;
            background: linear-gradient(180deg, #fff, #fffafa);
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
        .job-tab:hover { transform: translateY(-2px); box-shadow: 0 16px 34px rgba(18, 31, 53, .09); border-color: rgba(240, 68, 56, .22); }
        .job-tab:hover .job-tab__title,
        .job-tab.is-active .job-tab__title,
        .job-tab.is-active .job-tab__arrow { color: var(--career-primary); }
        .job-tab:hover .job-tab__arrow,
        .job-tab.is-active .job-tab__arrow { background: var(--career-soft); transform: translateX(2px); }
        .job-tab.is-active {
            border-color: rgba(240, 68, 56, .34);
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
        .form-field textarea:focus { border-color: var(--career-primary); box-shadow: 0 0 0 3px rgba(240, 68, 56, .12); }
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
        @media (max-width: 980px) {
            .recruitment-top,
            .recruitment-board { grid-template-columns: 1fr; }
            .company-badge { justify-items: start; text-align: left; }
            .job-rail { max-height: calc(100vh - 116px); }
            .detail-meta { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 14px 0; }
            .meta-item:nth-child(odd) { padding-left: 0; border-left: 0; }
        }
        @media (max-width: 640px) {
            .recruitment-shell { padding: 96px 16px 56px; }
            .career-title, .detail-title { font-size: 25px; }
            .recruitment-board { grid-template-columns: 1fr; }
            .job-rail {
                position: static;
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
                <button class="job-tab is-active" type="button" data-job="purchasing-manager">
                    <span>
                        <span class="job-tab__title">Purchasing Assistant Manager / Manager</span>
                        <span class="job-tab__meta">อ.เมืองชลบุรี จ.ชลบุรี</span>
                    </span>
                    <span class="job-tab__arrow">→</span>
                </button>
                <button class="job-tab" type="button" data-job="strategic-planning">
                    <span>
                        <span class="job-tab__title">Strategic Planning (CEO Office)</span>
                        <span class="job-tab__meta">จ.ชลบุรี</span>
                    </span>
                    <span class="job-tab__arrow">→</span>
                </button>
                <button class="job-tab" type="button" data-job="qa-qc-staff-packaging">
                    <span>
                        <span class="job-tab__title">QA/QC Staff - Packaging</span>
                        <span class="job-tab__meta">เหมือง, ชลบุรี</span>
                    </span>
                    <span class="job-tab__arrow">→</span>
                </button>
            </aside>

            <section class="content-panel">
                <div class="detail-panel is-active" id="purchasing-manager" data-title="Purchasing Assistant Manager / Manager">
                    <div class="detail-head">
                        <h2 class="detail-title">Purchasing Assistant Manager / Manager</h2>
                        <div class="detail-meta">
                            <div class="meta-item"><span>สถานที่ปฏิบัติงาน</span><strong>อ.เมืองชลบุรี จ.ชลบุรี</strong></div>
                            <div class="meta-item"><span>ประเภทการจ้างงาน</span><strong>ประจำ</strong></div>
                            <div class="meta-item"><span>เงินเดือน</span><strong>ตามโครงสร้างบริษัทฯ</strong></div>
                        </div>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">รายละเอียดงาน</h3>
                        <ol class="detail-list">
                            <li>วางแผนและดำเนินกลยุทธ์ด้านการจัดซื้อให้สอดคล้องกับเป้าหมายของบริษัท</li>
                            <li>ดูแลกระบวนการจัดซื้อแบบครบวงจร ตั้งแต่การค้นหาและคัดเลือกซัพพลายเออร์ ไปจนถึงการออกใบสั่งซื้อและติดตามการส่งมอบสินค้า</li>
                            <li>เจรจาเงื่อนไข ราคา และสัญญากับผู้ขายหรือซัพพลายเออร์ เพื่อให้บริษัทได้รับความคุ้มค่า คุณภาพ และประโยชน์สูงสุด</li>
                            <li>ติดตามและประเมินผลการดำเนินงานของซัพพลายเออร์ แก้ไขปัญหาที่เกิดขึ้น และรักษาความสัมพันธ์ที่ดีกับคู่ค้า</li>
                            <li>วิเคราะห์แนวโน้มตลาด เพื่อหาโอกาสในการลดต้นทุนและปรับปรุงกระบวนการทำงานให้มีประสิทธิภาพมากขึ้น</li>
                            <li>ประสานงานกับหน่วยงานภายใน เช่น ฝ่ายผลิต ฝ่ายการเงิน ฝ่ายโลจิสติกส์ และหน่วยงานที่เกี่ยวข้อง เพื่อคาดการณ์ความต้องการและวางแผนการจัดซื้อ</li>
                            <li>ตรวจสอบให้การดำเนินงานเป็นไปตามนโยบายของบริษัทและข้อกำหนดทางกฎหมาย</li>
                            <li>จัดทำและวิเคราะห์รายงานด้านการจัดซื้อ เช่น ต้นทุน คุณภาพ ระยะเวลาการส่งมอบ และตัวชี้วัดอื่น ๆ ที่เกี่ยวข้อง</li>
                            <li>ดูแล ให้คำแนะนำ และพัฒนาทีมงานจัดซื้อให้ทำงานได้อย่างมีประสิทธิภาพ</li>
                            <li>บริหารระดับสินค้าคงคลัง และสนับสนุนแนวทางการปรับปรุงการจัดการสต็อกสินค้าให้เหมาะสม</li>
                        </ol>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">คุณสมบัติผู้สมัคร</h3>
                        <ol class="detail-list">
                            <li>อายุ 25-30 ปี</li>
                            <li>สำเร็จการศึกษาระดับปริญญาตรี สาขาบริหารธุรกิจ การจัดการซัพพลายเชน หรือสาขาอื่นที่เกี่ยวข้อง</li>
                            <li>มีประสบการณ์ด้านการจัดซื้อหรือการจัดการซัพพลายเชนอย่างน้อย 3-5 ปี โดยต้องมีประสบการณ์ในตำแหน่งหัวหน้างานอย่างน้อย 3 ปี</li>
                            <li>มีทักษะการเจรจาต่อรอง การสื่อสาร และภาวะผู้นำที่ดี</li>
                            <li>มีความสามารถในการวิเคราะห์และแก้ไขปัญหาได้อย่างมีประสิทธิภาพ</li>
                            <li>มีความรู้เกี่ยวกับกฎหมาย ระเบียบข้อบังคับ และแนวปฏิบัติที่ดีด้านการจัดซื้อ</li>
                            <li>มีความละเอียดรอบคอบ และสามารถจัดการงานอย่างเป็นระบบได้ดี</li>
                        </ol>
                    </div>
                </div>

                <div class="detail-panel" id="strategic-planning" data-title="Strategic Planning (CEO Office)">
                    <div class="detail-head">
                        <h2 class="detail-title">Strategic Planning (CEO Office)</h2>
                        <div class="detail-meta">
                            <div class="meta-item"><span>สถานที่ปฏิบัติงาน</span><strong>กรุงเทพมหานคร</strong></div>
                            <div class="meta-item"><span>ประเภทการจ้างงาน</span><strong>ประจำ</strong></div>
                            <div class="meta-item"><span>เงินเดือน</span><strong>ตามโครงสร้างบริษัทฯ</strong></div>
                        </div>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">รายละเอียดงาน</h3>
                        <ol class="detail-list">
                            <li>พัฒนาและบริหารแผนกลยุทธ์ของบริษัท ทั้งระยะสั้น ระยะกลาง และระยะยาว</li>
                            <li>แปลงทิศทางและนโยบายจากผู้บริหาร ให้เป็นแผนปฏิบัติงานที่ชัดเจน พร้อมกำหนดผู้รับผิดชอบและระยะเวลาดำเนินงาน</li>
                            <li>ติดตามผลการดำเนินงานตามตัวชี้วัด KPI ของทุกฝ่าย เพื่อให้เกิดความรับผิดชอบและการดำเนินงานที่เป็นไปตามเป้าหมาย</li>
                            <li>วิเคราะห์ช่องว่างในการดำเนินงาน ความไม่มีประสิทธิภาพ และต้นทุนที่สูญเสียโดยไม่จำเป็น พร้อมผลักดันแนวทางแก้ไข</li>
                            <li>จัดทำโครงสร้างและกระบวนการสำหรับแผนงานด้านธุรกิจ การดำเนินงาน และโครงการปรับปรุงประสิทธิภาพ</li>
                            <li>สนับสนุนผู้บริหารในการตัดสินใจ “ดำเนินการต่อ / ไม่ดำเนินการต่อ” โดยอ้างอิงจากข้อมูล ผลการดำเนินงาน และการวิเคราะห์ความเป็นไปได้</li><br>
                        </ol>
                        <h3 class="detail-heading">ผลลัพธ์ที่คาดหวัง</h3>
                        <ol class="detail-list">
                            <li>บริษัทสามารถมองเห็นภาพรวมผลการดำเนินงานได้อย่างชัดเจนเป็นรายสัปดาห์</li>
                            <li>ทุกหน่วยงานมีวินัยในการดำเนินงาน และมีความรับผิดชอบต่อเป้าหมายที่ได้รับมอบหมายมากขึ้น</li>
                            <li>ลดความไม่มีประสิทธิภาพในการดำเนินงาน และลดต้นทุนที่สูญเสียโดยไม่จำเป็น</li>
                            <li>ผู้บริหารสามารถตัดสินใจได้รวดเร็วและแม่นยำมากขึ้น โดยอ้างอิงจากข้อมูลจริง</li>
                            <li>มีโครงสร้างการวางแผนและการบริหารโครงการที่ชัดเจน เพื่อรองรับการเติบโตอย่างยั่งยืนของบริษัท</li>
                        </ol>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">คุณสมบัติผู้สมัคร</h3>
                        <ol class="detail-list">
                            <li>มีบุคลิกภาพดี ดูเป็นมืออาชีพ และมีความน่าเชื่อถือในระดับผู้บริหาร</li>
                            <li>เปิดรับทุกเพศ</li>
                            <li>มีทักษะภาษาอังกฤษดีเยี่ยม ทั้งการเขียนและการพูด</li>
                            <li>หากสามารถสื่อสารภาษาจีนกลางได้จะพิจารณาเป็นพิเศษ</li>
                            <li>มีประสบการณ์ในการสนับสนุนหรือมีส่วนร่วมด้านการวางแผนธุรกิจร่วมกับผู้บริหารระดับสูง</li>
                            <li>สามารถและยินดีเดินทางไปต่างประเทศได้บ่อยครั้ง</li>
                            <li>มีความคล่องตัวและความยืดหยุ่นสูงในการทำงาน สามารถปรับตัวกับเวลาการทำงานที่ยืดหยุ่น</li>
                            <li>การทำงานนอกเวลาปกติ และตารางการเดินทางได้อย่างเหมาะสม</li>
                        </ol>
                    </div>
                </div>

                <div class="detail-panel" id="qa-qc-staff-packaging" data-title="QA/QC Staff - Packaging">
                    <div class="detail-head">
                        <h2 class="detail-title">QA/QC Staff - Packaging</h2>
                        <div class="detail-meta">
                            <div class="meta-item"><span>สถานที่ปฏิบัติงาน</span><strong>เหมือง, ชลบุรี</strong></div>
                            <div class="meta-item"><span>ประเภทการจ้างงาน</span><strong>ประจำ</strong></div>
                            <div class="meta-item"><span>เงินเดือน</span><strong>ตามโครงสร้างบริษัทฯ</strong></div>
                        </div>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">รายละเอียดงาน</h3>
                        <ol class="detail-list">
                            <li>ตรวจสอบคุณภาพทั้งกระบวนการ RM, WIP และ FG</li>
                            <li>สรุปปัญหาและรายงานต่อผู้บังคับบัญชา</li>
                            <li>ดำเนินการแก้ไขปัญหาตามแผนที่กำหนด</li>
                        </ol>
                    </div>
                    <div class="detail-section">
                        <h3 class="detail-heading">คุณสมบัติผู้สมัคร</h3>
                        <ol class="detail-list">
                            <li>เพศชาย อายุไม่เกิน 30 ปี</li>
                            <li>จบการศึกษา ปวช./ปวส./ป.ตรี สาขาที่เกี่ยวข้อง</li>
                            <li>ใช้โปรแกรม Microsoft Office เบื้องต้นได้ดี (Word, Excel)</li>
                            <li>มีความรับผิดชอบในงานที่ได้รับมอบหมาย</li>
                            <li>เริ่มงานได้ทันที จะพิจารณาเป็นพิเศษ</li>
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
                        เบอร์: 089-5423996, 062-6392499<br>
                        อีเมล: <a href="mailto:salesteam@koch-packaging.com">salesteam@koch-packaging.com</a>
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
                            <p class="application-note">ข้าพเจ้าให้ความยินยอมแก่ บริษัท Koch Packaging and Packing Services Co., Ltd. ในการเก็บ และใช้ ข้อมูลส่วนบุคคล ของข้าพเจ้าเพื่อติดต่อกลับข้าพเจ้า หรือส่งต่อไปยังผู้เกี่ยวข้องเพื่อดำเนินการตามวัตถุประสงค์ *</p>
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
