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
  <title>เข้าสู่ระบบ | Koch Packaging and Packing Services</title>
    <!-- Path depth for i18n.js -->
    <script>window.KOCH_DEPTH = '../';</script>
    <script src="<?php echo $depth; ?>js/i18n.js" defer></script>

  <!-- Google SEO -->
  <meta name="robots" content="noindex, nofollow" />
  <link rel="canonical" href="https://koch-packaging-services.com/main/login.php" />

  <!-- Facebook Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="th_TH" />
  <meta property="og:site_name" content="Koch Packaging and Packing Services Co.,Ltd" />
  <meta property="og:title" content="เข้าสู่ระบบ | Koch Packaging and Packing Services" />
  <meta property="og:description" content="เข้าสู่ระบบสำหรับพนักงานและพันธมิตรของ Koch Packaging and Packing Services" />
  <meta property="og:url" content="https://koch-packaging-services.com/main/login.php" />
  <meta property="og:image" content="https://koch-packaging-services.com/img/company_logo/logo-2.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="../img/company_logo/logo-2.png" />

  <!-- Login Page Specific Styles & Script -->
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/script.js" defer></script>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBVVRC2H" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php include '../component/menubar.php'; ?>

  <!-- FontAwesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <div class="login-page-wrapper">
    <div class="login-container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form login-form">
            <h2 class="login-title" data-i18n="login.titleIn">เข้าสู่ระบบ</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" data-i18n-placeholder="login.username" placeholder="ชื่อผู้ใช้" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" data-i18n-placeholder="login.password" placeholder="รหัสผ่าน" />
            </div>
            <button type="submit" data-i18n="login.submitIn" class="login-btn solid">เข้าสู่ระบบ</button>
            <p class="social-text" data-i18n="login.socialInText">หรือเข้าสู่ระบบด้วยแพลตฟอร์มโซเชียล</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-line"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form login-form">
            <h2 class="login-title" data-i18n="login.titleUp">ลงทะเบียน</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" data-i18n-placeholder="login.username" placeholder="ชื่อผู้ใช้" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" data-i18n-placeholder="login.email" placeholder="อีเมล" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" data-i18n-placeholder="login.password" placeholder="รหัสผ่าน" />
            </div>
            <button type="submit" class="login-btn" data-i18n="login.submitUp">ลงทะเบียน</button>
            <p class="social-text" data-i18n="login.socialUpText">หรือลงทะเบียนด้วยแพลตฟอร์มโซเชียล</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-line"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3 data-i18n="login.newcomerTitle">เพิ่งมาใหม่ใช่ไหม?</h3>
            <p data-i18n="login.newcomerText">
              ยกระดับซัพพลายเชนของคุณ! เข้าร่วมเป็นพันธมิตรกับเรา และสัมผัสโซลูชันบรรจุภัณฑ์ที่ฉลาด รวดเร็ว และยั่งยืน
            </p>
            <button class="login-btn transparent" id="sign-up-btn" data-i18n="login.signUpBtn">
              ลงทะเบียน
            </button>
          </div>
          <img src="https://i.ibb.co/6HXL6q1/Privacy-policy-rafiki.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3 data-i18n="login.memberTitle">หนึ่งในสมาชิกที่ทรงคุณค่าของเรา</h3>
            <p data-i18n="login.memberText">
              ขอบคุณที่ไว้วางใจให้ Koch Packaging and Packing Services เป็นพันธมิตรด้านบรรจุภัณฑ์ของคุณ มาร่วมขับเคลื่อนนวัตกรรมไปด้วยกัน!
            </p>
            <button class="login-btn transparent" id="sign-in-btn" data-i18n="login.signInBtn">
              เข้าสู่ระบบ
            </button>
          </div>
          <img src="https://i.ibb.co/nP8H853/Mobile-login-rafiki.png" class="image" alt="" />
        </div>
      </div>
    </div>
  </div>



  <?php include '../component/footer.php'; ?>
</body>

</html>