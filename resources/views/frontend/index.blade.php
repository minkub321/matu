<!DOCTYPE html>
<!--
Template name: Nova
Template author: FreeBootstrap.net
Author website: https://freebootstrap.net/
License: https://freebootstrap.net/license
-->
<html lang="en">

<!-- <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>D MAK 24 | เอเจนซี่ PR และ Creative Content ครบวงจร</title>

  <link rel="icon" type="image/png" href="{{ asset('assets/images/logoตู่.png') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">



  <link href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendors/aos/aos.css') }}" rel="stylesheet">



  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">



  <script>
    (function () {
      const storedTheme = localStorage.getItem('theme') || 'light';
      document.documentElement.setAttribute('data-bs-theme', storedTheme);
    })();
  </script>
</head> -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>D MAK 24 | เอเจนซี่ PR และ Creative Content ครบวงจร</title>

  <link rel="icon" type="image/png" href="/assets/images/logoตู่.png">

  <!-- ======= Google Font =======-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <!-- End Google Font-->

  <!-- ======= Styles =======-->
  <link href="/assets/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendors/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="/assets/vendors/glightbox/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/assets/vendors/aos/aos.css" rel="stylesheet">
  <!-- End Styles-->

  <!-- ======= Theme Style =======-->
  <link href="/assets/css/style.css" rel="stylesheet">
  <!-- End Theme Style-->

  <!-- ======= Apply theme =======-->
  <script>
    (function () {
      const storedTheme = localStorage.getItem('theme') || 'light';
      document.documentElement.setAttribute('data-bs-theme', storedTheme);
    })();
  </script>
</head>


<body>



  <!-- ======= Site Wrap =======-->
  <div class="site-wrap">


    <!-- ======= Header =======-->

    @include('frontend.layout.navbar')
    <!-- End Header-->

    <!-- ======= Main =======-->
    <main>


      <!-- ======= Hero =======-->
      <section class="hero__v6 section " id="home">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div class="row">
                <div class="col-lg-11"> <span class="hero-subtitle text-uppercase" data-aos="fade-up"
                    data-aos-delay="0">
                    เอเจนซี่ครีเอทีฟกรุงเทพฯ
                  </span>
                  <h1 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="100">
                    สร้างแบรนด์ด้วยกลยุทธ์ พีอาร์ และงานดีไซน์
                  </h1>
                  <p class="hero-description mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="200">
                    เราช่วยให้แบรนด์ของคุณเป็นที่จดจำ ด้วยการสื่อสารที่ทรงพลัง และผลงานสร้างสรรค์ที่เข้าถึงผู้คน
                  </p>
                  <div class="cta d-flex gap-2 mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="300">
                    <a class="btn cta-btn-outline" href="#services">
                      ดูบริการทั้งหมด
                      <svg class="lucide lucide-arrow-up-right ms-2" xmlns="http://www.w3.org/2000/svg" width="18"
                        height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 7h10v10"></path>
                        <path d="M7 17L17 7"></path>
                      </svg>
                    </a>
                  </div>

                  <div class="logos mb-4" data-aos="fade-up" data-aos-delay="400"><a href="#mama"><span
                        class=" logos-title text-uppercase mb-4 d-block">ลูกค้าที่ไว้วางใจเรา</span></a>



                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6" style="user-select: none;" id="unlockImage">
              <div class="hero-img cursor-pointer">
                <!-- <img src="{{ asset('assets/images/ตู่กาเฟ.jpg') }}" alt="Hero Image"
                  class="img-main img-fluid rounded-4" style="width: 550px; height: 450px; object-fit: cover;"
                  oncontextmenu="return false" draggable="false"> -->
                  <img src="{{ asset('assets/images/ตู่กาเฟ.jpg') }}" alt="Hero Image"
                  class="img-main img-fluid rounded-4" style="width: 550px; height: 450px; object-fit: cover;"
                  oncontextmenu="return false" draggable="false">
              </div>
            </div>

          </div>
        </div>
        <!-- End Hero-->
      </section>
      <!-- End Hero-->

      <!-- ======= About =======-->
      <section class="about__v4 section" id="about">
        <div class="container">
          <div class="row">
            <!-- เนื้อหาเกี่ยวกับเรา -->
            <div class="col-md-6 order-md-2">
              <div class="row justify-content-end">
                <div class="col-md-11 mb-4 mb-md-0">
                  <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">เกี่ยวกับเรา</span>
                  <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100">
                    เราคือเอเจนซี่สร้างสรรค์ที่เชื่อในพลังของการสื่อสาร
                  </h2>
                  <div data-aos="fade-up" data-aos-delay="200">
                    <p>
                      D MAK 24 มีประสบการณ์มากกว่า 25 ปีในวงการการตลาด พีอาร์ และอีเวนต์
                      เรามุ่งมั่นที่จะยกระดับแบรนด์ของลูกค้าผ่านงานดีไซน์ กลยุทธ์ และการสื่อสารที่มีประสิทธิภาพ
                    </p>
                    <p>
                      เราเชื่อว่าเบื้องหลังแบรนด์ที่ประสบความสำเร็จ คือเรื่องราวที่สื่อสารได้อย่างมีพลัง
                      และทีมงานที่เข้าใจหัวใจของผู้คน
                    </p>
                  </div>
                  <h4 class="small fw-bold mt-4 mb-3" data-aos="fade-up" data-aos-delay="300">
                    ค่านิยมและวิสัยทัศน์ของเรา
                  </h4>
                  <ul class="d-flex flex-row flex-wrap list-unstyled gap-3 features" data-aos="fade-up"
                    data-aos-delay="400">
                    <li class="d-flex align-items-center gap-2">
                      <span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span
                        class="text">ความคิดสร้างสรรค์</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                      <span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span
                        class="text">ความเชื่อมั่นในทีม</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                      <span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span
                        class="text">การสื่อสารที่จริงใจ</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                      <span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span
                        class="text">การทำงานร่วมกับแบรนด์</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                      <span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span><span
                        class="text">คุณภาพเหนือปริมาณ</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- ภาพและข้อความวิสัยทัศน์ -->
            <div class="col-md-6">
              <div class="img-wrap position-relative">

                <div class="mission-statement p-4 rounded-4 d-flex gap-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="mission-icon text-center rounded-circle"><i class="bi bi-lightbulb fs-4"></i></div>
                  <div>
                    <h3 class="text-uppercase fw-bold">วิสัยทัศน์ของเรา</h3>
                    <p class="fs-5 mb-0">
                      เราตั้งเป้าเป็นผู้นำด้านการสื่อสารการตลาดที่สร้างผลลัพธ์จริงให้แบรนด์อย่างยั่งยืน
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- End About-->

      <!-- ======= Features =======-->
      <section class="section features__v2" id="features">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="d-lg-flex p-5 rounded-4 content" data-aos="fade-in" data-aos-delay="0">
                <div class="row">
                  <!-- ด้านซ้ายข้อความหลัก -->
                  <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                    <div class="row">
                      <div class="col-lg-11">
                        <div class="h-100 flex-column justify-content-between d-flex">
                          <div>
                            <h2 class="mb-4">ทำไมต้องเลือก D MAK 24</h2>
                            <p class="mb-5">
                              เพราะเราไม่ใช่แค่เอเจนซี่ แต่คือพาร์ตเนอร์ที่เข้าใจแบรนด์ของคุณ
                              เรานำเสนอแนวคิดสร้างสรรค์ที่ตอบโจทย์เป้าหมายจริง
                              พร้อมทีมงานมืออาชีพที่พร้อมลุยทุกแพลตฟอร์ม
                            </p>
                          </div>
                          <!--  <div class="align-self-start">
                            <a class="glightbox btn btn-play d-inline-flex align-items-center gap-2"
                              href="https://www.youtube.com/watch?v=DQx96G4yHd8" data-gallery="video">
                              <i class="bi bi-play-fill"></i> ดูวิดีโอแนะนำ
                            </a>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- ด้านขวา icon features -->
                  <div class="col-lg-7">
                    <div class="row justify-content-end">
                      <div class="col-lg-11">
                        <div class="row">
                          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="0">
                            <div class="icon text-center mb-4"><i class="bi bi-stars fs-4"></i></div>
                            <h3 class="fs-6 fw-bold mb-3">สร้างสรรค์แบบมือโปร</h3>
                            <p>ทุกงานออกแบบมีแนวคิด ไม่ใช่แค่สวย แต่ต้องใช้งานได้จริง</p>
                          </div>
                          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon text-center mb-4"><i class="bi bi-megaphone fs-4"></i></div>
                            <h3 class="fs-6 fw-bold mb-3">เข้าใจการสื่อสาร</h3>
                            <p>กลั่นข้อความให้ชัดเจน ตรงกลุ่มเป้าหมาย เห็นผลจริง</p>
                          </div>
                          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon text-center mb-4"><i class="bi bi-people fs-4"></i></div>
                            <h3 class="fs-6 fw-bold mb-3">ทีมงานพร้อมลุย</h3>
                            <p>ประสบการณ์กว่า 25 ปีในวงการ พร้อมแก้ปัญหาให้แบรนด์คุณ</p>
                          </div>
                          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon text-center mb-4"><i class="bi bi-lightning fs-4"></i></div>
                            <h3 class="fs-6 fw-bold mb-3">ตอบสนองรวดเร็ว</h3>
                            <p>เราทำงานไว แต่ไม่ลวก ชัดเจนทุกขั้นตอน</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div> <!-- end row -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- End Features-->

      <!-- ======= Pricing =======-->
      <section class="section pricing__v2" id="pricing">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-6 mx-auto text-center">
              <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">แพ็กเกจบริการ</span>
              <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">เลือกแพ็กเกจที่เหมาะกับแบรนด์ของคุณ</h2>
              <p data-aos="fade-up" data-aos-delay="200">
                ไม่ว่าคุณจะเป็นแบรนด์ขนาดเล็กหรือองค์กรระดับประเทศ D MAK 24 พร้อมดูแลทุกขั้นตอนอย่างมืออาชีพ
              </p>
            </div>
          </div>

          <div class="row">
            <!-- แพ็กเกจเริ่มต้น -->
            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="300">
              <div class="p-5 rounded-4 price-table h-100 text-white"
                style="background: #2c2c2c; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);">
                <h3 class="fw-bold mb-3">เริ่มต้น (Starter)</h3>
                <p class="mb-3 text-white-50">เหมาะสำหรับธุรกิจขนาดเล็ก หรือแบรนด์ที่เริ่มต้นทำการตลาด</p>
                <div class="price mb-4">
                  <strong style="font-size: 1.5rem;">เริ่มต้น 50,000฿</strong><span class="text-white-50"> /
                    โปรเจกต์</span>
                </div>
                <div>
                  <a class="btn btn-outline-light rounded-pill px-4 py-2 fw-semibold" href="#contact">ติดต่อเรา</a>
                </div>
              </div>
            </div>


            <!-- แพ็กเกจองค์กร -->
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <div class="p-5 rounded-4 price-table popular h-100">
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="mb-3">องค์กร (Corporate)</h3>
                    <p>เหมาะสำหรับบริษัทที่ต้องการแคมเปญครบวงจร พร้อมการดูแลระดับพรีเมียม</p>
                    <div class="price mb-4"><strong class="me-1">เริ่มต้น 100,000฿</strong><span> / โปรเจกต์</span>
                    </div>
                    <div><a class="btn btn-white hover-outline" href="#contact">ขอใบเสนอราคา</a></div>
                  </div>
                  <div class="col-md-6 pricing-features">
                    <h4 class="text-uppercase fw-bold mb-3">สิ่งที่คุณจะได้รับ</h4>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                      <li class="d-flex gap-2 align-items-start mb-0">
                        <span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span>
                        <span>วางกลยุทธ์การตลาดเฉพาะแบรนด์</span>
                      </li>
                      <li class="d-flex gap-2 align-items-start mb-0">
                        <span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span>
                        <span>ออกแบบกราฟิกและสื่อทุกช่องทาง</span>
                      </li>
                      <li class="d-flex gap-2 align-items-start mb-0">
                        <span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span>
                        <span>จัดอีเวนต์และพีอาร์แบบครบวงจร</span>
                      </li>
                      <li class="d-flex gap-2 align-items-start mb-0">
                        <span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span>
                        <span>ทีมซัพพอร์ตดูแลตลอดทั้งแคมเปญ</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ======= How it works =======-->
      <section class="section howitworks__v1" id="how-it-works">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-8 text-center mx-auto">
              <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">ขั้นตอนการทำงาน</span>
              <h2 data-aos="fade-up" data-aos-delay="100">เริ่มต้นโปรเจกต์กับ D MAK 24</h2>
              <p data-aos="fade-up" data-aos-delay="200">
                ทำงานกับเราง่ายมาก! เรามีขั้นตอนที่ชัดเจน เพื่อให้ทุกงานเดินหน้าได้อย่างราบรื่น และตรงเป้าหมายของคุณ
              </p>
            </div>
          </div>

          <div class="row g-md-5">
            <!-- Step 1 -->
            <div class="col-md-6 col-lg-3">
              <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative"
                data-aos="fade-up" data-aos-delay="0">
                <div data-aos="fade-right" data-aos-delay="500">
                  <img class="arch-line" src="{{ asset('assets/images/arch-line.svg') }}" alt="">
                </div>
                <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">1</span>
                <div>
                  <h3 class="fs-5 mb-4">ติดต่อเรา</h3>
                  <p>ทักมาคุยเลย! ทางไลน์ เฟซบุ๊ก หรือแบบฟอร์มหน้าเว็บ เพื่อแจ้งความต้องการเบื้องต้น</p>
                </div>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
              <div
                class="step-card reverse text-center h-100 d-flex flex-column justify-content-start position-relative">
                <div data-aos="fade-right" data-aos-delay="1100">
                  <img class="arch-line reverse" src="{{ asset('assets/images/arch-line-reverse.svg') }}" alt="">
                </div>
                <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">2</span>
                <h3 class="fs-5 mb-4">นัดประชุมสรุปไอเดีย</h3>
                <p>เราจะนัดประชุมเพื่อฟังรายละเอียดและเป้าหมายของคุณ ก่อนเริ่มวางกลยุทธ์และนำเสนอแนวคิด</p>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="1200">
              <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative">
                <div data-aos="fade-right" data-aos-delay="1700">
                  <img class="arch-line" src="{{ asset('assets/images/arch-line.svg') }}" alt="">
                </div>
                <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">3</span>
                <h3 class="fs-5 mb-4">เริ่มผลิตงาน</h3>
                <p>หลังตกลงรายละเอียด ทีมของเราจะเริ่มลงมือผลิตงาน พร้อมอัปเดตความคืบหน้าให้คุณเสมอ</p>
              </div>
            </div>

            <!-- Step 4 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="1800">
              <div class="step-card last text-center h-100 d-flex flex-column justify-content-start position-relative">
                <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">4</span>
                <div>
                  <h3 class="fs-5 mb-4">ส่งมอบ & เผยแพร่</h3>
                  <p>เราจะส่งมอบงานที่สมบูรณ์ พร้อมแนะนำช่องทางเผยแพร่ที่เหมาะสม เพื่อให้เข้าถึงกลุ่มเป้าหมายได้สูงสุด
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- End How it works-->

      <!-- <section class="stats__v3 section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="d-flex flex-wrap content rounded-4" data-aos="fade-up" data-aos-delay="0">
                <div class="rounded-borders">
                  <div class="rounded-border-1"></div>
                  <div class="rounded-border-2"></div>
                  <div class="rounded-border-3"></div>
                </div>


                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="100">
                  <div class="stat-item">
                    <h3 class="fs-1 fw-bold">
                      <span class="purecounter" data-purecounter-start="0" data-purecounter-end="50"
                        data-purecounter-duration="2">0</span><span>+</span>
                    </h3>
                    <p class="mb-0">แบรนด์ที่เคยร่วมงาน</p>
                  </div>
                </div>


                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="200">
                  <div class="stat-item">
                    <h3 class="fs-1 fw-bold">
                      <span class="purecounter" data-purecounter-start="0" data-purecounter-end="30"
                        data-purecounter-duration="2">0</span><span>+</span>
                    </h3>
                    <p class="mb-0">โปรเจกต์จริงที่ส่งมอบแล้ว</p>
                  </div>
                </div>


                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-up" data-aos-delay="300">
                  <div class="stat-item">
                    <h3 class="fs-1 fw-bold">
                      <span class="purecounter" data-purecounter-start="0" data-purecounter-end="97"
                        data-purecounter-duration="2">0</span><span>%</span>
                    </h3>
                    <p class="mb-0">ความพึงพอใจจากลูกค้าจริง</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section> -->

      <!-- PureCounter Library -->
      <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

      <!-- ======= Services =======-->
      <section class="section services__v3" id="services">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
              <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">OUR SERVICES</span>
              <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">การสื่อสารแบรนด์อย่างสร้างสรรค์ ครบวงจรทุกมิติ
              </h2>
            </div>
          </div>
          <div class="row g-4">

            <!-- PR & Event -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div>
                  <span class="icon mb-4"><i class="bi bi-megaphone fs-1 text-primary"></i></span>
                  <h3 class="fs-5 mb-3">PR & Event</h3>
                  <p class="mb-4">วางแผน จัดกิจกรรม เปิดตัวแบรนด์ พร้อมเชิญสื่อ-อินฟลูเอนเซอร์
                    ให้เข้าถึงกลุ่มเป้าหมายได้ตรงจุดและทรงพลัง</p>
                </div>
                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">

                </a>
              </div>
            </div>

            <!-- Branding & Identity -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div>
                  <span class="icon mb-4"><i class="bi bi-award fs-1 text-warning"></i></span>
                  <h3 class="fs-5 mb-3">Branding & Communication</h3>
                  <p class="mb-4">พัฒนากลยุทธ์แบรนด์ วิเคราะห์คู่แข่ง ระบุกลุ่มเป้าหมาย
                    พร้อมสื่อสารอย่างสร้างสรรค์ให้แบรนด์ชัดเจนยิ่งขึ้น</p>
                </div>
                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">

                </a>
              </div>
            </div>

            <!-- Marketing & Online -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div>
                  <span class="icon mb-4"><i class="bi bi-globe2 fs-1 text-success"></i></span>
                  <h3 class="fs-5 mb-3">Marketing & Online</h3>
                  <p class="mb-4">สร้างแคมเปญออนไลน์ คอนเทนต์เจาะลึก
                    พร้อมบริหารช่องทางโซเชียลมีเดียให้แบรนด์ของคุณมีตัวตนบนโลกดิจิทัล</p>
                </div>
                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">

                </a>
              </div>
            </div>

            <!-- Video & Photo Production -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div>
                  <span class="icon mb-4"><i class="bi bi-camera-reels fs-1 text-danger"></i></span>
                  <h3 class="fs-5 mb-3">Video & Photo Production</h3>
                  <p class="mb-4">ถ่ายทำวิดีโอ-ภาพนิ่งทั้งงานโฆษณา โปรโมตสินค้า งานอีเวนต์
                    และวิดีโอโปรไฟล์องค์กรด้วยคุณภาพระดับมืออาชีพ</p>
                </div>
                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">

                </a>
              </div>
            </div>

            <!-- Art & Design -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div>
                  <span class="icon mb-4"><i class="bi bi-palette2 fs-1 text-info"></i></span>
                  <h3 class="fs-5 mb-3">Art & Design</h3>
                  <p class="mb-4">สร้างผลงานศิลป์ทั้ง 2D / 3D, Key Visual และโลโก้
                    เพื่อสะท้อนภาพลักษณ์แบรนด์อย่างมืออาชีพและมีเอกลักษณ์</p>
                </div>
                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">

                </a>
              </div>
            </div>

            <!-- Strategy & Communication -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div>
                  <span class="icon mb-4"><i class="bi bi-diagram-3 fs-1 text-secondary"></i></span>
                  <h3 class="fs-5 mb-3">Strategy & Communication</h3>
                  <p class="mb-4">วางแผนกลยุทธ์ สื่อสารตรงกลุ่มเป้าหมาย
                    และออกแบบการตลาดที่มีเป้าหมายชัดเจนเพื่อให้แบรนด์เติบโตอย่างยั่งยืน</p>
                </div>
                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">

                </a>
              </div>
            </div>

          </div>
        </div>
      </section>
      <style>
        .service-card {
          background-color: rgba(255, 255, 255, 0.05);
          /* ให้ดูโปร่งเล็กน้อย */
          border: 2px solid rgba(255, 255, 255, 0.15);
          /* กรอบขาวแบบกึ่งโปร่ง */
          color: white;
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
          transition: all 0.3s ease-in-out;
        }

        .service-card:hover {
          border-color: white;
          background-color: rgba(255, 255, 255, 0.1);
          transform: translateY(-4px);
        }

        .service-card h3,
        .service-card p,
        .service-card i {
          color: white !important;
        }

        .service-card .icon {
          display: inline-block;
          background-color: rgba(255, 255, 255, 0.08);
          padding: 12px;
          border-radius: 12px;
        }
      </style>

      <!-- End Services Section -->

      <!-- first -->
      <section class="section works__v1 py-5 bg-Gray" id="works">
        <div class="container">
          <div class="text-center mb-5">
            <h2 class="fw-bold mb-2">ผลงานของเรา</h2>
            <p class="text-muted text-while">รวมโปรเจกต์จริงที่ลูกค้าไว้วางใจ</p>
          </div>

          <div class="row g-4" id="worksGallery"></div>

          <div class="text-center mt-4" id="worksPaginationWrapper">
            <nav>
              <ul class="pagination justify-content-center" id="pagination"></ul>
            </nav>
          </div>
        </div>
      </section>

      <!-- Modal with Carousel -->
      <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content border-0 rounded-4 shadow-lg overflow-hidden">
            <div class="modal-header bg-white border-bottom-0 py-3 px-4">
              <h5 class="modal-title fw-bold text-dark" id="modalTitle">ชื่อผลงาน</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="ปิด"></button>
            </div>
            <div class="modal-body bg-glass p-0 position-relative">
              <div id="carouselWorks" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators" id="carouselIndicators"></div>
                <div class="carousel-inner" id="carouselInner"></div>
                <button class="carousel-control-prev custom-carousel-btn" type="button" data-bs-target="#carouselWorks"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next custom-carousel-btn" type="button" data-bs-target="#carouselWorks"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
              </div>
              <p id="modalDescription" class="text-muted small mt-3 text-center px-3 py-2"></p>
            </div>
          </div>
        </div>
      </div>

      <style>
        .project-image {
          height: 200px;
          object-fit: cover;
          width: 100%;
          border-radius: 1rem 1rem 0 0;
        }

        .modal-dialog {
          max-width: 90vw;
          height: 500px;
          margin-top: 100px;
        }

        .modal-content {
          background: rgba(255, 255, 255, 0.95);
          backdrop-filter: blur(16px);
          border-radius: 1rem;
          box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }

        .bg-glass {
          background: rgba(255, 255, 255, 0.85);
          backdrop-filter: blur(12px);
        }

        .carousel-inner img {
          max-height: 60vh;
          width: auto;
          max-width: 100%;
          margin: auto;
          object-fit: contain;
        }

        .custom-carousel-btn {
          background-color: rgba(0, 0, 0, 0.5);
          width: 2.2rem;
          height: 2.2rem;
          border-radius: 50%;
          top: 50%;
          transform: translateY(-50%);
          opacity: 1;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
          background-size: 1.4rem 1.4rem;
          filter: invert(1);
        }

        .carousel-control-prev {
          left: 0.8rem;
        }

        .carousel-control-next {
          right: 0.8rem;
        }

        .carousel-indicators {
          position: absolute;
          bottom: 8px;
          z-index: 2;
        }

        .carousel-indicators [data-bs-target] {
          width: 10px;
          height: 10px;
          border-radius: 50%;
          background-color: rgba(0, 0, 0, 0.4);
          margin: 0 4px;
        }

        .carousel-indicators .active {
          background-color: #007bff;
        }

        .empty-message {
          text-align: center;
          padding: 2rem 1rem;
          font-size: 1.1rem;
          color: #666;
          opacity: 0.8;
        }

        .empty-message i {
          font-size: 1.8rem;
          color: #ccc;
          display: block;
          margin-bottom: 0.8rem;
        }

        @media (max-width: 576px) {
          .custom-carousel-btn {
            width: 2rem;
            height: 2rem;
          }

          .carousel-indicators [data-bs-target] {
            width: 8px;
            height: 8px;
            margin: 0 3px;
          }
        }

        @media (min-width: 992px) {
          .carousel-inner img {
            max-height: 55vh;
            /* จาก 60 เป็น 55 พอดีจอ */
            object-fit: contain;
            border-radius: 0.75rem;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
          }

          .custom-carousel-btn {
            background-color: rgba(0, 0, 0, 0.4);
            width: 2.4rem;
            height: 2.4rem;
            border-radius: 50%;
            border: none;
            transition: 0.2s ease;
          }

          .custom-carousel-btn:hover {
            background-color: rgba(0, 123, 255, 0.3);
          }

          .carousel-control-prev-icon,
          .carousel-control-next-icon {
            background-size: 1.8rem 1.8rem;
            filter: invert(1);
          }

          .carousel-indicators {
            bottom: 12px;
          }

          .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            margin: 0 5px;
            background-color: rgba(0, 0, 0, 0.35);
          }

          .carousel-indicators .active {
            background-color: #007bff;
            transform: scale(1.1);
          }
        }
      </style>





      <!-- end -->
      <!-- ======= FAQ =======-->
      <section class="section faq__v2 py-5" id="faq">
        <div class="container">
          <div class="row mb-4 text-center">
            <div class="col-lg-8 mx-auto">
              <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">FAQ</span>
              <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">คำถามที่พบบ่อยเกี่ยวกับ D MAK 24</h2>
              <p class="text-muted" data-aos="fade-up" data-aos-delay="100">ตอบทุกข้อสงสัยเกี่ยวกับการสร้างแบรนด์
                การจัดอีเวนต์ และงานสื่อสารการตลาดแบบครบวงจร</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto" data-aos="fade-up" data-aos-delay="200">
              <div class="accordion custom-accordion" id="accordionFAQ">

                <!-- Q1 -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1"
                      aria-expanded="true" aria-controls="faq1">
                      D MAK 24 มีบริการอะไรบ้าง?
                    </button>
                  </h2>
                  <div id="faq1" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                      เราให้บริการแบบครบวงจร ตั้งแต่ PR, การจัดอีเวนต์, สร้างแบรนด์, วางแผนกลยุทธ์การสื่อสาร,
                      ผลิตวิดีโอ-ภาพนิ่ง, ออกแบบงานศิลป์ ไปจนถึงการตลาดออนไลน์ ทั้งหมดภายใต้ทีมมืออาชีพ
                    </div>
                  </div>
                </div>

                <!-- Q2 -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                      ต้องใช้ระยะเวลากี่วันในการวางแผนและจัดงานอีเวนต์?
                    </button>
                  </h2>
                  <div id="faq2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      ระยะเวลาจะแตกต่างกันตามขนาดของโปรเจกต์ โดยทั่วไปเราจะใช้เวลาในการวางแผนประมาณ 2–4 สัปดาห์ล่วงหน้า
                      เพื่อให้แน่ใจว่างานจะออกมามีคุณภาพและตรงวัตถุประสงค์
                    </div>
                  </div>
                </div>

                <!-- Q3 -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                      สามารถจ้างเฉพาะบริการผลิตวิดีโอหรือภาพนิ่งได้ไหม?
                    </button>
                  </h2>
                  <div id="faq3" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      ได้แน่นอน! เรามีทีมโปรดักชันสำหรับทั้ง Video Branding, Content Online, ถ่ายทำภาพนิ่ง และงาน
                      Creative Visual ที่คุณสามารถเลือกใช้แยกเฉพาะบริการได้ตามต้องการ
                    </div>
                  </div>
                </div>

                <!-- Q4 -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                      D MAK 24 มีประสบการณ์ในงานประเภทไหนบ้าง?
                    </button>
                  </h2>
                  <div id="faq4" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      เราเคยดูแลงานให้องค์กรและแบรนด์ระดับประเทศ เช่น S2O, Ducati, Central, Hoegaarden,
                      และแบรนด์แฟชั่นไฮสตรีทมากมาย รวมถึงงานอีเวนต์ระดับเทศกาลและแคมเปญภาครัฐ
                    </div>
                  </div>
                </div>

                <!-- Q5 -->
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                      ถ้าอยากเริ่มต้นทำแบรนด์กับ D MAK 24 ต้องทำยังไง?
                    </button>
                  </h2>
                  <div id="faq5" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      แค่ติดต่อเราผ่านอีเมล, โทรศัพท์ หรือช่องทางโซเชียล แล้วเราจะนัดคุยเพื่อเข้าใจเป้าหมายของคุณ
                      ก่อนวางกลยุทธ์และเสนอแผนงานให้เหมาะกับแบรนด์ของคุณที่สุด
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- End FAQ-->

      <!-- ======= Contact =======-->
      <section class="section contact__v2 py-5 text-white" id="contact"
        style="background: linear-gradient(145deg, #808080);">
        <div class="container">

          <!-- Heading -->
          <div class="row mb-5 text-center">
            <div class="col-lg-8 mx-auto">
              <h2 class="fw-bold mb-3 display-6 text-white">ติดต่อทีมงาน D MAK 24</h2>
              <p class="fs-5 text-light">ไม่ว่าจะโปรเจกต์เล็กหรือใหญ่ เราพร้อมช่วยคุณสร้างแบรนด์ให้โดดเด่นเหนือใคร</p>
            </div>
          </div>

          <!-- Contact Info -->
          <div class="row g-4 justify-content-center">

            <!-- Phone -->
            <div class="col-sm-6 col-lg-4">
              <div class="contact-card-glass">
                <div class="icon"><i class="bi bi-telephone-fill text-info"></i></div>
                <div>
                  <h6 class="fw-bold text-white mb-1">โทรศัพท์</h6>
                  <p class="text-white-50 mb-0">064-462-8961</p>
                </div>
              </div>
            </div>

            <!-- Email -->
            <div class="col-sm-6 col-lg-4">
              <div class="contact-card-glass">
                <div class="icon"><i class="bi bi-envelope-fill text-danger"></i></div>
                <div>
                  <h6 class="fw-bold text-white mb-1">อีเมล</h6>
                  <p class="text-white-50 mb-0">info.dmak24@gmail.com</p>
                </div>
              </div>
            </div>

            <!-- Address -->
            <div class="col-sm-6 col-lg-4">
              <div class="contact-card-glass">
                <div class="icon"><i class="bi bi-geo-alt-fill text-success"></i></div>
                <div>
                  <h6 class="fw-bold text-white mb-1">ที่อยู่สำนักงาน</h6>
                  <p class="text-white-50 mb-0">129/82 หมู่บ้าน Dream Place<br>แขวงมหาสวัสดิ์ เขตบางกรวย<br>นนทบุรี
                    11130</p>
                </div>
              </div>
            </div>

            <!-- Facebook -->
            <div class="col-sm-6 col-lg-4">
              <div class="contact-card-glass">
                <div class="icon"><i class="bi bi-facebook text-primary"></i></div>
                <div>
                  <h6 class="fw-bold text-white mb-1">Facebook</h6>
                  <a href="https://www.facebook.com/profile.php?id=61551918896593&locale=th_TH"
                    class="text-white-50 text-decoration-none" target="_blank">D MAK 24 Official</a>
                </div>
              </div>
            </div>

            <!-- Instagram -->
            <div class="col-sm-6 col-lg-4">
              <div class="contact-card-glass">
                <div class="icon"><i class="bi bi-instagram text-danger"></i></div>
                <div>
                  <h6 class="fw-bold text-white mb-1">Instagram</h6>
                  <a href="https://www.instagram.com/dmak24" class="text-white-50 text-decoration-none"
                    target="_blank">@dmak24</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <style>
        .contact-card-glass {
          background: rgba(255, 255, 255, 0.05);
          backdrop-filter: blur(16px);
          -webkit-backdrop-filter: blur(16px);
          border-radius: 1rem;
          padding: 1.5rem;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
          height: 100%;
          display: flex;
          align-items: start;
          gap: 1rem;
          transition: all 0.3s ease;
          border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .contact-card-glass:hover {
          background: rgba(255, 255, 255, 0.08);
          transform: translateY(-5px);
          box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }

        .contact-card-glass .icon {
          font-size: 2rem;
          width: 40px;
          text-align: center;
        }

        .contact-card-glass a:hover {
          color: #fff !important;
          text-decoration: underline;
        }
      </style>


      @include('frontend.layout.footer')


    </main>
  </div>


  <button id="back-to-top"><i class="bi bi-arrow-up-short"></i></button>


      <script>
  const worksGrouped = {
    @foreach($works->sortByDesc('created_at')->groupBy('title') as $title => $group)
      @json($title): {
        desc: @json($group->first()->description),
        time: @json($group->first()->created_at->format('d M Y เวลา H:i น.') . ' (' . $group->first()->created_at->diffForHumans() . ')'),
        images: [
          @foreach($group as $work)
            @json(asset('storage/works/' . $work->image))@if (!$loop->last),@endif
          @endforeach
        ]
      }@if (!$loop->last),@endif
    @endforeach
  };

  const itemsPerPage = 3;
  let currentPage = 1;
  const titles = Object.keys(worksGrouped);
  const worksGallery = document.getElementById('worksGallery');
  const pagination = document.getElementById('pagination');
  const paginationWrapper = document.getElementById('worksPaginationWrapper');

  function renderWorks(page) {
    worksGallery.innerHTML = '';

    if (titles.length === 0) {
      paginationWrapper.style.display = "none";
      worksGallery.innerHTML = `
      <div class="col-12">
        <div class="empty-message">
          <i class="bi bi-image"></i>
          ขณะนี้ยังไม่มีผลงานแสดง
        </div>
      </div>`;
      return;
    }

    paginationWrapper.style.display = "block";
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const pagedTitles = titles.slice(start, end);

    pagedTitles.forEach(title => {
      const work = worksGrouped[title];
      const firstImg = work.images[0];

      worksGallery.innerHTML += `
        <div class="col-md-6 col-lg-4 work-item">
          <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
            <a href="javascript:void(0)"
               class="d-block text-decoration-none preview-work"
               data-title="${title}"
               data-desc="${work.desc}"
               data-images='${JSON.stringify(work.images)}'>
              <img src="${firstImg}" class="img-fluid project-image" alt="${title}">
              <div class="text-center bg-light text-muted small py-2 border-top">
                🕒 ${work.time}
              </div>
            </a>
          </div>
        </div>`;
    });

    attachModalEvents();
  }

  function renderPagination() {
    pagination.innerHTML = '';
    const totalPages = Math.ceil(titles.length / itemsPerPage);
    for (let i = 1; i <= totalPages; i++) {
      pagination.innerHTML += `
        <li class="page-item ${i === currentPage ? 'active' : ''}">
          <a class="page-link" href="#">${i}</a>
        </li>`;
    }

    document.querySelectorAll('.page-item a').forEach((el, index) => {
      el.addEventListener('click', function (e) {
        e.preventDefault();
        currentPage = index + 1;
        renderWorks(currentPage);
        renderPagination();
      });
    });
  }

  function attachModalEvents() {
    document.querySelectorAll('.preview-work').forEach(el => {
      el.addEventListener('click', () => {
        const title = el.dataset.title;
        const desc = el.dataset.desc;
        const images = JSON.parse(el.dataset.images);

        document.getElementById('modalTitle').textContent = title;
        document.getElementById('modalDescription').textContent = desc || '';

        const carouselInner = document.getElementById('carouselInner');
        const carouselIndicators = document.getElementById('carouselIndicators');

        carouselInner.innerHTML = '';
        carouselIndicators.innerHTML = '';

        images.forEach((src, index) => {
          carouselInner.innerHTML += `
            <div class="carousel-item ${index === 0 ? 'active' : ''}">
              <img src="${src}" class="d-block w-100 rounded" style="max-height: 500px; object-fit: contain;" alt="">
            </div>`;
          carouselIndicators.innerHTML += `
            <button type="button" data-bs-target="#carouselWorks" data-bs-slide-to="${index}"
              class="${index === 0 ? 'active' : ''}" aria-current="${index === 0 ? 'true' : 'false'}" aria-label="Slide ${index + 1}"></button>`;
        });

        new bootstrap.Modal(document.getElementById('galleryModal')).show();
      });
    });
  }


  renderWorks(currentPage);
  renderPagination();
</script>

  @include('frontend.layout.script')

</body>

</html>
