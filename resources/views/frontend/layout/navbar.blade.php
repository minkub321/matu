
<header class="fbs__net-navbar navbar navbar-expand-lg while" aria-label="D MAK 24 navbar">
  <div class="container d-flex align-items-center justify-content-between">

    <!-- Start Logo -->
    <a class="navbar-brand w-auto" href="{{ url('/') }}">
      <img class="logo while img-fluid" src="{{ asset('assets/images/logoตู่.png') }}" alt="โลโก้ D MAK 24" style="width: 80px;">
    </a>
    <!-- End Logo -->

    <!-- Start offcanvas -->
    <div class="offcanvas offcanvas-start w-75" id="fbs__net-navbars" tabindex="-1" aria-labelledby="fbs__net-navbarsLabel">
      <div class="offcanvas-header">
        <div class="offcanvas-header-logo">
          <a class="logo-link" id="fbs__net-navbarsLabel" href="{{ url('/') }}">
            <img class="logo light img-fluid" src="{{ asset('assets/images/logoตู่.png') }}" alt="โลโก้ D MAK 24 (โหมดมืด)">
          </a>
        </div>
        <button class="btn-close btn-close-black" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body align-items-lg-center">
        <ul class="navbar-nav nav me-auto ps-lg-5 mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link scroll-link active" href="#home">หน้าแรก</a></li>
          <li class="nav-item"><a class="nav-link scroll-link" href="#about">เกี่ยวกับเรา</a></li>
          <li class="nav-item"><a class="nav-link scroll-link" href="#services">บริการของเรา</a></li>
          <li class="nav-item"><a class="nav-link scroll-link" href="#works">ผลงาน</a></li>
          <li class="nav-item"><a class="nav-link scroll-link" href="#faq">คำถามที่พบบ่อย</a></li>
          <li class="nav-item"><a class="nav-link scroll-link" href="#contact">ติดต่อ</a></li>

          <!-- 🔐 ปุ่มลับสำหรับแอดมิน -->
          <li class="nav-item d-none" id="secretAdminBtn">
            <a class="nav-link text-danger small" href="{{ route('admin.login') }}">
              เข้าสู่ระบบแอดมิน
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- End offcanvas -->

    <!-- ปุ่มขวาสุด -->
    <div class="ms-auto w-auto">
      <div class="header-social d-flex align-items-center gap-1">
        <a class="btn btn-primary py-2 " href="#pricing">เริ่มต้นโปรเจกต์</a>

        <button class="fbs__net-navbar-toggler justify-content-center align-items-center ms-auto"
          data-bs-toggle="offcanvas" data-bs-target="#fbs__net-navbars" aria-controls="fbs__net-navbars"
          aria-label="Toggle navigation" aria-expanded="false">
          <svg class="fbs__net-icon-menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="21" x2="3" y1="6" y2="6"></line>
            <line x1="15" x2="3" y1="12" y2="12"></line>
            <line x1="17" x2="3" y1="18" y2="18"></line>
          </svg>
          <svg class="fbs__net-icon-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
    </div>

  </div>
</header>

<!-- 🖼 รูปกลางที่ใช้แตะเพื่อปลดล็อก -->


<!-- 🔐 JS ปลดล็อกปุ่มลับเมื่อแตะรูป 5 ครั้ง -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    let tapCount = 0;
    let tapTimeout;

    const unlockImage = document.getElementById('unlockImage');
    const secretBtn = document.getElementById('secretAdminBtn');

    if (unlockImage && secretBtn) {
      unlockImage.addEventListener('click', () => {
        tapCount++;

        clearTimeout(tapTimeout);
        tapTimeout = setTimeout(() => tapCount = 0, 1500); // รีเซ็ตภายใน 1.5 วิ

        if (tapCount >= 5) {
          secretBtn.classList.remove('d-none');
          alert('ปุ่มลับแอดมินถูกปลดล็อกแล้ว');
          tapCount = 0;
        }
      });
    }
  });
</script>
