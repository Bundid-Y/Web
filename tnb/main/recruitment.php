<?php $depth = "../"; ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตำแหน่งที่เปิดรับสมัคร | TNB Logistics</title>
    <meta name="description" content="ร่วมงานกับ TNB Logistics ติดตามตำแหน่งที่เปิดรับสมัคร สวัสดิการ และช่องทางการสมัครงาน" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://tnb-logistics.com/main/recruitment.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ตำแหน่งที่เปิดรับสมัคร | TNB Logistics" />
    <meta property="og:description" content="ร่วมงานกับ TNB Logistics ติดตามตำแหน่งที่เปิดรับสมัคร สวัสดิการ และช่องทางการสมัครงาน" />
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
            --career-dark: #081f4d;
            --career-soft: #f0f5ff;
            --career-text: #17202a;
            --career-muted: #667085;
            background: #f6f7f9;
            color: var(--career-text);
        }
        .career-wrap { max-width: 1180px; margin: 0 auto; padding: 0 20px; }
        .career-hero {
            padding: 104px 0 34px;
            background: linear-gradient(135deg, var(--career-dark), var(--career-primary));
            color: #fff;
        }
        .career-hero__panel {
            max-width: 860px;
            text-align: center;
        }
        .career-kicker { font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; opacity: .82; margin: 0 0 8px; }
        .career-title { font-size: 38px; line-height: 1.18; margin: 0 0 10px; font-weight: 800; letter-spacing: 0; }
        .career-summary { max-width: 760px; margin: 0 auto; font-size: 16px; line-height: 1.8; opacity: .93; }
        .career-main { padding: 34px 0 78px; }
        .career-grid { display: grid; grid-template-columns: minmax(0, 1fr) 330px; gap: 24px; align-items: start; }
        .career-section, .career-sidebar {
            background: #fff;
            border: 1px solid #e7eaf0;
            border-radius: 8px;
            box-shadow: 0 16px 42px rgba(18, 31, 53, .06);
        }
        .career-section { padding: 26px; margin-bottom: 22px; }
        .career-section__head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 20px;
        }
        .career-heading { font-size: 24px; margin: 0; font-weight: 800; color: var(--career-text); }
        .career-pill { color: var(--career-primary); background: var(--career-soft); border-radius: 999px; padding: 7px 12px; font-size: 13px; font-weight: 700; white-space: nowrap; }
        .company-copy { margin: 0; color: #475467; line-height: 1.85; font-size: 16px; }
        .benefit-list { display: flex; flex-wrap: wrap; gap: 10px; padding: 0; margin: 18px 0 0; list-style: none; }
        .benefit-list li { background: #f8fafc; border: 1px solid #e7eaf0; border-radius: 999px; padding: 8px 12px; color: #344054; font-size: 14px; }
        .job-list { display: grid; gap: 14px; }
        .job-card {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 18px;
            padding: 18px;
            border: 1px solid #e7eaf0;
            border-left: 4px solid var(--career-primary);
            border-radius: 8px;
            background: #fff;
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
        }
        .job-card:hover { transform: translateY(-3px); box-shadow: 0 14px 34px rgba(18, 31, 53, .09); border-color: rgba(13, 45, 107, .34); }
        .job-card__title { margin: 0 0 10px; font-size: 19px; line-height: 1.35; color: var(--career-text); font-weight: 800; }
        .job-meta { display: flex; flex-wrap: wrap; gap: 8px; margin: 0; padding: 0; list-style: none; color: var(--career-muted); font-size: 14px; }
        .job-meta li { background: #f8fafc; border-radius: 999px; padding: 6px 10px; }
        .job-action { display: flex; flex-direction: column; align-items: flex-end; justify-content: space-between; gap: 14px; }
        .job-date { color: var(--career-muted); font-size: 13px; white-space: nowrap; }
        .career-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 42px;
            padding: 0 16px;
            border-radius: 8px;
            background: var(--career-primary);
            color: #fff;
            text-decoration: none;
            font-weight: 800;
            font-size: 14px;
            border: 1px solid var(--career-primary);
        }
        .career-btn:hover { background: var(--career-dark); color: #fff; }
        .career-btn--light { background: #fff; color: var(--career-primary); }
        .career-btn--light:hover { background: var(--career-soft); color: var(--career-dark); }
        .career-sidebar .career-btn { width: 100%; box-sizing: border-box; }
        .career-sidebar { position: sticky; top: 104px; overflow: hidden; }
        .sidebar-block { padding: 22px; border-bottom: 1px solid #e7eaf0; }
        .sidebar-block:last-child { border-bottom: 0; }
        .sidebar-title { margin: 0 0 12px; font-size: 18px; font-weight: 800; }
        .contact-lines { margin: 0; color: #475467; line-height: 1.8; font-size: 15px; }
        .step-list { padding: 0; margin: 0; list-style: none; display: grid; gap: 12px; }
        .step-list li { display: grid; grid-template-columns: 28px 1fr; gap: 10px; align-items: start; color: #475467; line-height: 1.6; }
        .step-list span { width: 28px; height: 28px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; background: var(--career-soft); color: var(--career-primary); font-weight: 800; font-size: 13px; }
        @media (max-width: 900px) {
            .career-grid { grid-template-columns: 1fr; }
            .career-sidebar { position: static; }
        }
        @media (max-width: 640px) {
            .career-hero { padding-top: 96px; }
            .career-title { font-size: 28px; }
            .career-section { padding: 20px; }
            .career-section__head, .job-card, .job-action { display: block; }
            .career-pill, .job-date, .job-action .career-btn { margin-top: 12px; }
            .job-action .career-btn { width: 100%; }
        }
    </style>
</head>

<body class="page-recruitment">
    <?php include '../component/menubar.php'; ?>

    <header class="career-hero">
        <div class="career-wrap career-hero__panel">
            <div>
                <h1 class="career-title">ตำแหน่งที่เปิดรับสมัคร</h1>
                <p class="career-summary">
                    TNB Logistics Co., Ltd. ให้บริการโลจิสติกส์และการขนส่งที่เชื่อถือได้
                    ครอบคลุมงานขนส่งในประเทศ งานตู้คอนเทนเนอร์ และการบริหารเครือข่ายสาขาในพื้นที่อุตสาหกรรมสำคัญ
                </p>
            </div>
        </div>
    </header>

    <main class="career-main">
        <div class="career-wrap career-grid">
            <div>
                <section class="career-section">
                    <div class="career-section__head">
                        <h2 class="career-heading">ข้อมูลบริษัท</h2>
                    </div>
                    <p class="company-copy">
                        TNB Logistics มุ่งพัฒนาระบบขนส่งที่มั่นคง ตรงเวลา และตอบโจทย์ลูกค้าอุตสาหกรรม
                        ทีมงานของเราทำงานร่วมกันตั้งแต่งานวางแผนเส้นทาง ประสานงานปฏิบัติการ ดูแลรถและพนักงานขับรถ
                        ไปจนถึงการบริการลูกค้า เพื่อส่งมอบโซลูชันโลจิสติกส์ที่มีคุณภาพ
                    </p>
                </section>

                <section class="career-section">
                    <div class="career-section__head">
                        <h2 class="career-heading">สวัสดิการ</h2>
                    </div>
                    <ul class="benefit-list">
                        <li>ประกันสังคม</li>
                        <li>ยูนิฟอร์ม</li>
                        <li>ตรวจสุขภาพประจำปี</li>
                        <li>งานเลี้ยงประจำปี</li>
                        <li>สภาพแวดล้อมการทำงานเป็นทีม</li>
                        <li>โอกาสเติบโตในสายงานโลจิสติกส์</li>
                    </ul>
                </section>

                <section class="career-section" id="positions">
                    <div class="career-section__head">
                        <h2 class="career-heading">งานทั้งหมด</h2>
                    </div>
                    <div class="job-list">
                        <article class="job-card">
                            <div>
                                <h3 class="job-card__title">พนักงานขับรถบรรทุก / รถหัวลาก</h3>
                            </div>
                            <div class="job-action">
                                <a class="career-btn" href="../main/recruitment_details.php?job=truck-driver">รายละเอียด</a>
                            </div>
                        </article>
                        <article class="job-card">
                            <div>
                                <h3 class="job-card__title">CS Transportation / Manager Transportation</h3>
                            </div>
                            <div class="job-action">
                                <a class="career-btn" href="../main/recruitment_details.php?job=cs-transportation">รายละเอียด</a>
                            </div>
                        </article>
                        <article class="job-card">
                            <div>
                                <h3 class="job-card__title">ช่างยนต์ และ ช่างไฟ (รถบรรทุก & รถหัวลาก)</h3>
                            </div>
                            <div class="job-action">
                                <a class="career-btn" href="../main/recruitment_details.php?job=truck-mechanic">รายละเอียด</a>
                            </div>
                        </article>
                    </div>
                </section>
            </div>

            <aside class="career-sidebar">
                <div class="sidebar-block">
                    <h2 class="sidebar-title">ติดต่อสมัครงาน</h2>
                    <p class="contact-lines">
                        ฝ่ายทรัพยากรบุคคล<br>
                        TNB Logistics Co., Ltd.<br>
                        18/2 หมู่ 5 ตำบลเหมือง อำเภอเมืองชลบุรี จังหวัดชลบุรี 20130<br>
                        โทร: 085-8799795, 090-9542354<br>
                        อีเมล: wachira.o@tnb-logistics.com
                    </p>
                </div>
                <div class="sidebar-block">
                    <h2 class="sidebar-title">วิธีการสมัคร</h2>
                    <ul class="step-list">
                        <li><span>1</span>เลือกตำแหน่งงานที่สนใจ</li>
                        <li><span>2</span>เตรียมประวัติส่วนตัวและเอกสารประกอบ</li>
                        <li><span>3</span>ติดต่อฝ่ายทรัพยากรบุคคลผ่านโทรศัพท์หรืออีเมล</li>
                    </ul>
                </div>
                <div class="sidebar-block">
                    <a class="career-btn" href="../main/jobapplicationform.php">กรอกใบสมัคร</a>
                </div>
            </aside>
        </div>
    </main>

    <?php include '../component/footer.php'; ?>
</body>

</html>
