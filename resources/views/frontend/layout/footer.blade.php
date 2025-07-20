<footer class="footer pt-5 pb-5 bg-gray-800 text-white mt-24">


  <div class="container">

    <!-- หัวข้อ -->
    <div class="row mb-5 pb-4">
      <div class="col text-center">
        <h3 class="fw-bold">ลูกค้าที่ไว้ใจเรา</h3>
      </div>
    </div>

    <!-- โลโก้ลูกค้า -->
    <div class="row mb-5 justify-content-center" id="mama">
      <div class="col-12">
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
          @for ($i = 1; $i <= 47; $i++)
            <img class="img-fluid logo-img" src="{{ asset('assets/images/' . $i . '.jpg') }}" alt="Company {{ $i }}">
          @endfor
        </div>
      </div>
    </div>

    <style>
        footer {
    color: white;
  }

  footer a {
    color: white !important;
    text-decoration: none;
  }

  footer a:hover {
    color: #f0f0f0 !important;
    text-decoration: underline;
  }

  footer h3,
  footer p,
  footer span,
  footer i {
    color: white;
  }
      .logo-img {
        max-height: 60px;
        width: auto;
        object-fit: contain;
      }
      .logo-grid img {
        transition: transform 0.2s ease;
      }
      .logo-grid img:hover {
        transform: scale(1.05);
      }
    </style>

    <!-- ข้อมูลเกี่ยวกับ -->
    <div class="row justify-content-between mb-5 g-xl-5">
      <div class="col-md-4 mb-5 mb-lg-0">
        <h3 class="mb-3">เกี่ยวกับเรา</h3>
        <p>D MAK 24 คือเอเจนซี่สร้างสรรค์ด้าน PR, อีเวนต์ และคอนเทนต์ครบวงจร
          เรามุ่งมั่นสร้างสรรค์งานที่แตกต่างอย่างมืออาชีพ เพื่อให้แบรนด์ของคุณโดดเด่นในทุกมิติ</p>
      </div>

      <div class="col-md-4 col-lg-3 mb-4 mb-lg-0 ">
        <h3 class="mb-3">ลิงก์</h3>
        <ul class="list-unstyled">
          <li><a href="#home">หน้าแรก</a></li>
          <li><a href="#about">เกี่ยวกับเรา</a></li>
          <li><a href="#services">บริการของเรา</a></li>
          <li><a href="#works">ผลงาน</a></li>
          <li><a href="#contact">ติดต่อเรา</a></li>
        </ul>
      </div>

      <div class="col-md-4 col-lg-4">
        <h3 class="mb-3">ติดต่อ บริษัท ดีมาก 24 จำกัด</h3>
        <p class="d-flex mb-3"><i class="bi bi-geo-alt-fill me-3"></i><span>129/82 หมู่บ้าน Dream Place, แขวงมหาสวัสดิ์ เขตบางกรวย, นนทบุรี 11130</span></p>
        <a class="d-flex mb-3" href="mailto:info.dmak24@gmail.com"><i class="bi bi-envelope-fill me-3"></i><span>info.dmak24@gmail.com</span></a>
        <a class="d-flex mb-3" href="tel:0644628961"><i class="bi bi-telephone-fill me-3"></i><span>064-462-8961</span></a>
        <div class="socials mt-3">
          <a href="https://www.facebook.com/profile.php?id=61551918896593&locale=th_TH" target="_blank">Facebook: D MAK 24 Official</a><br>
          <a href="https://www.instagram.com/dmak24" target="_blank">Instagram: @dmak24</a>
        </div>
      </div>
    </div>

    <!-- แถบล่าง -->
    <div class="row credits pt-3 border-top pt-4">
      <div class="col-xl-8 text-center text-xl-start mb-3 mb-xl-0">
        <p>&copy; {{ date('Y') }} Copyright © D MAK 24. All rights reserved.</p>
      </div>
    </div>

  </div>
</footer>
@php
  $adminHash = Crypt::encryptString('admin.login');
@endphp

<script>
  document.addEventListener('keydown', function (e) {
    // ถ้ากด Ctrl + Alt + L
    if (e.ctrlKey && e.altKey && e.key.toLowerCase() === 'l') {
      e.preventDefault();
      // เด้งไป URL ปลอมที่ hash แล้ว
      window.location.href = "/go/{{ $adminHash }}";
    }
  });
</script>





