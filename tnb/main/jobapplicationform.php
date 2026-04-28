<?php $depth = "../"; ?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กรอกใบสมัคร | TNB Logistics</title>
    <meta name="description" content="แบบฟอร์มสมัครงาน TNB Logistics Co., Ltd." />
    <link rel="icon" type="image/png" href="../img/company_logo/tnb_logo.webp" />
    <script>window.TNB_DEPTH = '../';</script>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <script src="../js/i18n.js" defer></script>
    <script src="../js/script.js?v=<?php echo time(); ?>" defer></script>
    <style>
        .page-job-application {
            --app-primary: #0d2d6b;
            --app-dark: #081f4d;
            --app-soft: #f0f5ff;
            --app-text: #17202a;
            --app-muted: #667085;
            background: #f6f7f9;
            color: var(--app-text);
        }
        .application-wrap { max-width: 1120px; margin: 0 auto; padding: 0 20px; }
        .application-hero {
            padding: 112px 0 38px;
            background: linear-gradient(135deg, var(--app-dark), var(--app-primary));
            color: #fff;
        }
        .application-kicker { margin: 0 0 8px; font-size: 14px; font-weight: 800; text-transform: uppercase; letter-spacing: .06em; opacity: .84; }
        .application-title { margin: 0; font-size: 38px; line-height: 1.2; font-weight: 800; letter-spacing: 0; }
        .application-summary { max-width: 780px; margin: 12px 0 0; font-size: 16px; line-height: 1.8; opacity: .92; }
        .application-main { padding: 34px 0 78px; }
        .application-grid { display: grid; grid-template-columns: minmax(0, 1fr) 320px; gap: 24px; align-items: start; }
        .application-panel,
        .application-side {
            background: #fff;
            border: 1px solid #e7eaf0;
            border-radius: 8px;
            box-shadow: 0 16px 42px rgba(18, 31, 53, .06);
        }
        .application-panel { padding: 26px; }
        .application-heading { margin: 0 0 18px; font-size: 24px; font-weight: 800; }
        .application-form { display: grid; gap: 18px; }
        .form-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px; }
        .form-field { display: grid; gap: 8px; }
        .form-field--full { grid-column: 1 / -1; }
        .form-field label { color: #344054; font-size: 14px; font-weight: 800; }
        .form-field input,
        .form-field select,
        .form-field textarea {
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #d9dee8;
            border-radius: 8px;
            padding: 12px 14px;
            color: var(--app-text);
            background: #fff;
            font: inherit;
            outline: none;
        }
        .form-field textarea { min-height: 118px; resize: vertical; }
        .form-field input:focus,
        .form-field select:focus,
        .form-field textarea:focus {
            border-color: var(--app-primary);
            box-shadow: 0 0 0 3px rgba(13, 45, 107, .12);
        }
        .application-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 0 18px;
            border-radius: 8px;
            border: 1px solid var(--app-primary);
            background: var(--app-primary);
            color: #fff;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
        }
        .application-btn:hover { background: var(--app-dark); color: #fff; }
        .application-note { margin: 0; color: var(--app-muted); line-height: 1.8; font-size: 14px; }
        .application-side { position: sticky; top: 104px; overflow: hidden; }
        .side-block { padding: 22px; border-bottom: 1px solid #e7eaf0; }
        .side-block:last-child { border-bottom: 0; }
        .side-title { margin: 0 0 12px; font-size: 18px; font-weight: 800; }
        .side-lines { margin: 0; color: #475467; line-height: 1.8; font-size: 15px; }
        @media (max-width: 900px) {
            .application-grid { grid-template-columns: 1fr; }
            .application-side { position: static; }
        }
        @media (max-width: 640px) {
            .application-hero { padding-top: 96px; }
            .application-title { font-size: 28px; }
            .application-panel { padding: 20px; }
            .form-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body class="page-job-application">
    <?php include '../component/menubar.php'; ?>

    <header class="application-hero">
        <div class="application-wrap">
            <h1 class="application-title">กรอกใบสมัคร</h1>
            <p class="application-summary">ส่งข้อมูลเบื้องต้นเพื่อสมัครงานกับ TNB Logistics Co., Ltd. ทีมทรัพยากรบุคคลจะตรวจสอบข้อมูลและติดต่อกลับตามช่องทางที่ระบุไว้</p>
        </div>
    </header>

    <main class="application-main">
        <div class="application-wrap application-grid">
            <section class="application-panel">
                <h2 class="application-heading">ข้อมูลผู้สมัคร</h2>
                <form class="application-form" action="#" method="post" enctype="multipart/form-data">
                    <div class="form-grid">
                        <div class="form-field">
                            <label for="position">ตำแหน่งที่สมัคร</label>
                            <select id="position" name="position" required>
                                <option value="">เลือกตำแหน่ง</option>
                                <option>พนักงานขับรถบรรทุก / รถหัวลาก</option>
                                <option>CS Transportation / Manager Transportation</option>
                                <option>ช่างยนต์ และ ช่างไฟ (รถบรรทุก & รถหัวลาก)</option>
                            </select>
                        </div>
                        <div class="form-field">
                            <label for="fullname">ชื่อ-นามสกุล</label>
                            <input id="fullname" name="fullname" type="text" required>
                        </div>
                        <div class="form-field">
                            <label for="phone">เบอร์โทรศัพท์</label>
                            <input id="phone" name="phone" type="tel" required>
                        </div>
                        <div class="form-field">
                            <label for="email">อีเมล</label>
                            <input id="email" name="email" type="email">
                        </div>
                        <div class="form-field">
                            <label for="age">อายุ</label>
                            <input id="age" name="age" type="number" min="18" max="70">
                        </div>
                        <div class="form-field">
                            <label for="license">ประเภทใบขับขี่</label>
                            <input id="license" name="license" type="text">
                        </div>
                        <div class="form-field form-field--full">
                            <label for="address">ที่อยู่ปัจจุบัน</label>
                            <textarea id="address" name="address"></textarea>
                        </div>
                        <div class="form-field form-field--full">
                            <label for="experience">ประสบการณ์ขับรถ / เส้นทางที่คุ้นเคย</label>
                            <textarea id="experience" name="experience"></textarea>
                        </div>
                        <div class="form-field form-field--full">
                            <label for="resume">แนบเอกสารสมัครงาน</label>
                            <input id="resume" name="resume" type="file" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                        </div>
                    </div>
                    <button class="application-btn" type="submit">ส่งใบสมัคร</button>
                    <p class="application-note">หมายเหตุ: แบบฟอร์มนี้ใช้สำหรับจัดเตรียมหน้ารับสมัครงานบนเว็บไซต์ หากต้องการเชื่อมต่อระบบส่งข้อมูลจริงสามารถเพิ่ม backend ภายหลังได้</p>
                </form>
            </section>

            <aside class="application-side">
                <div class="side-block">
                    <h2 class="side-title">ติดต่อฝ่ายบุคคล</h2>
                    <p class="side-lines">
                        TNB Logistics Co., Ltd.<br>
                        18/2 หมู่ 5 ตำบลเหมือง อำเภอเมืองชลบุรี จังหวัดชลบุรี 20130<br>
                        โทร: 085-8799795, 090-9542354<br>
                        อีเมล: wachira.o@tnb-logistics.com
                    </p>
                </div>
                <div class="side-block">
                    <h2 class="side-title">เอกสารประกอบ</h2>
                    <p class="side-lines">ประวัติส่วนตัว สำเนาบัตรประชาชน สำเนาทะเบียนบ้าน สำเนาใบขับขี่ และเอกสารรับรองประสบการณ์ทำงานถ้ามี</p>
                </div>
            </aside>
        </div>
    </main>

    <?php include '../component/footer.php'; ?>
</body>

</html>
