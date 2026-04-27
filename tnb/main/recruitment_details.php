<?php
$depth = "../";
$theme = [
    "primary" => "#0d2d6b",
    "dark" => "#081f4d",
    "soft" => "#f0f5ff",
    "company" => "TNB Logistics Co., Ltd.",
    "contact" => "ฝ่ายทรัพยากรบุคคล",
    "address" => "18/2 หมู่ 5 ตำบลเหมือง อำเภอเมืองชลบุรี จังหวัดชลบุรี 20130",
    "email" => "wachira.o@tnb-logistics.com",
    "phone" => "085-8799795, 090-9542354"
];

$job = [
    "title" => "พนักงานขับรถบรรทุก / รถหัวลาก",
    "type" => "Transport Operations",
    "location" => "ชลบุรี และพื้นที่ให้บริการ",
    "salary" => "ตามประสบการณ์",
    "vacancy" => "เปิดรับสมัคร",
    "description" => [
        "ขับรถบรรทุกหรือรถหัวลากตามแผนงานขนส่งของบริษัท",
        "ตรวจเช็กสภาพรถเบื้องต้นก่อนและหลังปฏิบัติงาน",
        "ดูแลความปลอดภัยของสินค้า รถ และเอกสารประกอบการขนส่ง",
        "ประสานงานกับทีมปฏิบัติการเมื่อต้องรับ-ส่งสินค้า หรือเข้าพื้นที่ลูกค้า",
        "ปฏิบัติงานอื่น ๆ ตามที่ได้รับมอบหมายจากหัวหน้างาน"
    ],
    "qualifications" => [
        "มีใบอนุญาตขับขี่ตามประเภทรถที่ใช้งาน",
        "มีประสบการณ์ขับรถบรรทุกหรือรถหัวลากจะพิจารณาเป็นพิเศษ",
        "รู้เส้นทางในพื้นที่ชลบุรี แหลมฉบัง หรือพื้นที่อุตสาหกรรมใกล้เคียง",
        "มีความรับผิดชอบ ตรงต่อเวลา และให้ความสำคัญกับความปลอดภัย",
        "สามารถทำงานตามรอบงานขนส่งและประสานงานกับทีมได้ดี"
    ]
];
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($job["title"]); ?> | TNB Careers</title>
    <meta name="description" content="<?php echo htmlspecialchars($job["title"]); ?> รายละเอียดงาน คุณสมบัติ และช่องทางสมัครงานกับ TNB Logistics" />
    <link rel="icon" type="image/png" href="../img/company_logo/tnb_logo.webp" />
    <script>window.TNB_DEPTH = '../';</script>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <script src="../js/i18n.js" defer></script>
    <script src="../js/script.js?v=<?php echo time(); ?>" defer></script>
    <style>
        .page-recruitment-detail { --career-primary: <?php echo $theme["primary"]; ?>; --career-dark: <?php echo $theme["dark"]; ?>; --career-soft: <?php echo $theme["soft"]; ?>; background:#f6f7f9; color:#17202a; }
        .detail-wrap { max-width:1120px; margin:0 auto; padding:0 20px; }
        .detail-hero { padding:132px 0 38px; background:linear-gradient(135deg,var(--career-dark),var(--career-primary)); color:#fff; }
        .detail-kicker { margin:0 0 8px; font-size:14px; font-weight:800; text-transform:uppercase; letter-spacing:.06em; opacity:.82; }
        .detail-title { margin:0; max-width:850px; font-size:38px; line-height:1.22; font-weight:800; letter-spacing:0; }
        .detail-meta { display:flex; flex-wrap:wrap; gap:10px; padding:0; margin:22px 0 0; list-style:none; }
        .detail-meta li { background:rgba(255,255,255,.16); border:1px solid rgba(255,255,255,.26); border-radius:999px; padding:8px 12px; font-weight:700; }
        .detail-main { padding:32px 0 78px; }
        .detail-grid { display:grid; grid-template-columns:minmax(0,1fr) 320px; gap:24px; align-items:start; }
        .detail-card { background:#fff; border:1px solid #e7eaf0; border-radius:8px; box-shadow:0 16px 42px rgba(18,31,53,.06); padding:26px; margin-bottom:22px; }
        .detail-heading { margin:0 0 16px; font-size:24px; font-weight:800; }
        .detail-list { margin:0; padding-left:22px; color:#475467; line-height:1.9; font-size:16px; }
        .detail-summary { display:grid; grid-template-columns:repeat(2,1fr); gap:12px; }
        .summary-item { border:1px solid #e7eaf0; border-radius:8px; padding:14px; background:#fbfcff; }
        .summary-item span { display:block; color:#667085; font-size:13px; margin-bottom:4px; }
        .summary-item strong { color:#17202a; font-size:16px; }
        .detail-sidebar { position:sticky; top:104px; background:#fff; border:1px solid #e7eaf0; border-radius:8px; box-shadow:0 16px 42px rgba(18,31,53,.06); overflow:hidden; }
        .sidebar-block { padding:22px; border-bottom:1px solid #e7eaf0; }
        .sidebar-block:last-child { border-bottom:0; }
        .sidebar-title { margin:0 0 12px; font-size:18px; font-weight:800; }
        .contact-lines { margin:0; color:#475467; line-height:1.8; }
        .detail-btn { display:inline-flex; align-items:center; justify-content:center; min-height:42px; padding:0 16px; border-radius:8px; background:var(--career-primary); color:#fff; text-decoration:none; font-weight:800; border:1px solid var(--career-primary); }
        .detail-btn:hover { background:var(--career-dark); color:#fff; }
        .detail-btn--light { background:#fff; color:var(--career-primary); margin-top:10px; }
        .detail-btn--light:hover { background:var(--career-soft); color:var(--career-dark); }
        @media (max-width:900px) { .detail-grid,.detail-summary { grid-template-columns:1fr; } .detail-sidebar { position:static; } }
        @media (max-width:640px) { .detail-hero { padding-top:112px; } .detail-title { font-size:28px; } .detail-card { padding:20px; } }
    </style>
</head>

<body class="page-recruitment-detail">
    <?php include '../component/menubar.php'; ?>
    <header class="detail-hero">
        <div class="detail-wrap">
            <p class="detail-kicker">Career Detail</p>
            <h1 class="detail-title"><?php echo htmlspecialchars($job["title"]); ?></h1>
            <ul class="detail-meta">
                <li><?php echo htmlspecialchars($job["type"]); ?></li>
                <li><?php echo htmlspecialchars($job["location"]); ?></li>
                <li><?php echo htmlspecialchars($job["salary"]); ?></li>
            </ul>
        </div>
    </header>
    <main class="detail-main">
        <div class="detail-wrap detail-grid">
            <div>
                <section class="detail-card">
                    <h2 class="detail-heading">สรุปตำแหน่งงาน</h2>
                    <div class="detail-summary">
                        <div class="summary-item"><span>สถานที่ปฏิบัติงาน</span><strong><?php echo htmlspecialchars($job["location"]); ?></strong></div>
                        <div class="summary-item"><span>เงินเดือน</span><strong><?php echo htmlspecialchars($job["salary"]); ?></strong></div>
                        <div class="summary-item"><span>อัตรา</span><strong><?php echo htmlspecialchars($job["vacancy"]); ?></strong></div>
                        <div class="summary-item"><span>ประเภทงาน</span><strong><?php echo htmlspecialchars($job["type"]); ?></strong></div>
                    </div>
                </section>
                <section class="detail-card">
                    <h2 class="detail-heading">รายละเอียดงาน</h2>
                    <ol class="detail-list">
                        <?php foreach ($job["description"] as $item): ?><li><?php echo htmlspecialchars($item); ?></li><?php endforeach; ?>
                    </ol>
                </section>
                <section class="detail-card">
                    <h2 class="detail-heading">คุณสมบัติผู้สมัคร</h2>
                    <ol class="detail-list">
                        <?php foreach ($job["qualifications"] as $item): ?><li><?php echo htmlspecialchars($item); ?></li><?php endforeach; ?>
                    </ol>
                </section>
            </div>
            <aside class="detail-sidebar">
                <div class="sidebar-block">
                    <h2 class="sidebar-title">ติดต่อสมัครงาน</h2>
                    <p class="contact-lines"><?php echo $theme["contact"]; ?><br><?php echo $theme["company"]; ?><br><?php echo $theme["address"]; ?><br>โทร: <?php echo $theme["phone"]; ?><br>อีเมล: <?php echo $theme["email"]; ?></p>
                </div>
                <div class="sidebar-block">
                    <h2 class="sidebar-title">วิธีการสมัคร</h2>
                    <p class="contact-lines">ส่งประวัติส่วนตัว สำเนาใบอนุญาตขับขี่ และเอกสารประกอบการสมัครมายังฝ่ายบุคคล หรือสอบถามรายละเอียดเพิ่มเติมผ่านช่องทางติดต่อของบริษัท</p>
                </div>
                <div class="sidebar-block">
                    <a class="detail-btn detail-btn--light" href="../main/recruitment.php">กลับหน้าตำแหน่งงาน</a>
                </div>
            </aside>
        </div>
    </main>
    <?php include '../component/footer.php'; ?>
</body>

</html>
