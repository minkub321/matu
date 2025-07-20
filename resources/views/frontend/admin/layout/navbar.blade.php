<header class="fbs__net-navbar navbar navbar-expand-lg dark" aria-label="D MAK 24 navbar">
  <div class="container d-flex align-items-center justify-content-between">

    <!-- Start Logo -->
    <a class="navbar-brand w-auto" href="{{ route('admin.dashboard') }}">
      <img class="logo dark img-fluid" src="{{ asset('assets/images/logoตู่.png') }}" alt="โลโก้ D MAK 24"
        style="width: 80px;">
    </a>
    <!-- End Logo -->

    <!-- Hamburger Button (มือถือ) -->
    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#fbs__net-navbars" aria-controls="fbs__net-navbars" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Start offcanvas -->
    <div class="offcanvas offcanvas-start w-75" id="fbs__net-navbars" tabindex="-1"
      aria-labelledby="fbs__net-navbarsLabel">
      <div class="offcanvas-header">
        <div class="offcanvas-header-logo">
          <a class="logo-link" id="fbs__net-navbarsLabel" href="{{ route('admin.dashboard') }}">
            <img class="logo light img-fluid" src="{{ asset('assets/images/logoตู่.png') }}" alt="โลโก้ D MAK 24 (โหมดมืด)">
          </a>
        </div>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-lg-between w-100">
        <!-- เมนูหลัก -->
        <ul class="navbar-nav nav ps-3 ps-lg-5 mb-4 mb-lg-0 w-100 w-lg-auto">
          <li class="nav-item"><a class="nav-link scroll-link active" href="{{ route('admin.dashboard') }}">หน้าการโพสต์</a></li>
          <li class="nav-item"><a class="nav-link scroll-link pointer-events-none cursor-not-allowed" href="#about">เกี่ยวกับเรา</a></li>
          <li class="nav-item"><a class="nav-link scroll-link pointer-events-none cursor-not-allowed" href="#services">บริการของเรา</a></li>
          <li class="nav-item"><a class="nav-link scroll-link pointer-events-none cursor-not-allowed" href="#works">ผลงาน</a></li>
          <li class="nav-item"><a class="nav-link scroll-link pointer-events-none cursor-not-allowed" href="#faq">คำถามที่พบบ่อย</a></li>
          <li class="nav-item"><a class="nav-link scroll-link pointer-events-none cursor-not-allowed" href="#contact">ติดต่อ</a></li>
        </ul>

        <!-- กล่องเตือน + Logout -->
        <div class="d-flex flex-column align-items-start align-items-lg-end w-100 w-lg-auto ms-lg-auto" style="max-width: 350px;">
          <div class="bg-yellow-100 text-yellow-800 text-sm p-3 rounded-lg border border-yellow-300 shadow mb-2 w-100">
            ⚠️ <strong>กรุณาออกจากระบบ</strong><br>
            คุณจะไม่สามารถใช้งานหน้าแรกได้เพื่อความปลอดภัย
          </div>

          <form action="{{ route('admin.logout') }}" method="POST" class="w-100 text-end" onsubmit="return confirm('ออกจากระบบ?')">
            @csrf
            <button class="bg-red-500 hover:bg-red-600 text-white font-semibold px-5 py-2 rounded-lg shadow transition w-100">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 me-2 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7" />
              </svg>
              ออกจากระบบ
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- End offcanvas -->

  </div>
</header>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>