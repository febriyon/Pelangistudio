@extends('layouts.app')

@section('title')
    Pelangi Studio
@endsection

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(frontend/assets/img/slide/9.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to</h2>
              <h2 class="animate__animated animate__fadeInDown">Pelangi Dinamika Persada & Pelangi Dinamika Cipta</h2>
              <p class="animate__animated animate__fadeInUp">•	Design Arsitektur, interior & exhibition</p>
              <p>•	Design Kawasan perumahan dan real estate</p>
              <p>•	Design Infrastruktur perindustrian</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(frontend/assets/img/slide/13.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">PHILOSOPY</h2>
              <p class="animate__animated animate__fadeInUp">Kami adalah sebuah perusahaan yang hadir dengan desain yang unik dan diakhiri dengan ketelitian. Diikuti dengan kesempurnaan dalam hasil akhir dalam melakukan pelayanan terbaik. Kami menguasai seni dan bisnis, yang salah satu nya adalah kemampuan terbesar kami. Bisnis yang berarti untuk mengejar citra seni kami.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(frontend/assets/img/slide/15.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">OPTIMISME</h2>
              <p class="animate__animated animate__fadeInUp">•	Berpengalaman dan mempunyai kualifikasi profesionalisme yang baik.</p>
              <p>•	Didukung dengan infrastruktur dan metodologi kinerja.</p>
              <p>•	Pelayanan yang efektif dan terintegrasi sehingga mudah dan praktis.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="frontend/assets/img/pp.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Pelangi Dinamika Persada & Pelangi Dinamika Cipta</h3>
            <p data-aos="fade-up">
              Adalah perusahan arsitektur yang sedang berkembang dengan sangat cepat yang menyediakan konsep-konsep desain special, baru dan memberikan solusi praktis untuk kebutuhan anda dalam bidang seperti
            </p>
            <div class="icon-box" data-aos="fade-up">
              <i class="icofont-architecture"></i>
              <h4>Arsitektur, interior & exhibition</h4>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-home-alt"></i>
              <h4>Rumah tinggal pribadi</h4>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bxs-factory"></i>
              <h4>Komplek wisata dan villa</h4>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="icofont-industries-4"></i>
              <h4>Infrastruktur perindustrian</h4>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-arch"></i>
              <h4>Daerah komersil dan fasilitas umum</h4>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bxs-business"></i>
              <h4>Kawasan perumahan dan real estate</h4>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box1">
              <h4 class="mr-5"><a href="{{ route('infrastruktur') }}">Infrastruktur perindustrian</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box2">
              <h4 class="mr-5"><a href="{{ route('rumah') }}">Rumah tinggal pribadi</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box3">
              <h4 class="mr-5"><a href="{{ route('komplek') }}">Komplek wisata dan villa</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box4">
              <h4><a href="{{ route('arsitektur') }}">Arsitektur, interior & exhibition</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box5">
              <h4><a href="{{ route('komersil') }}">Daerah komersil dan fasilitas umum</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box6">
              <h4><a href="{{ route('real_estate') }}">Kawasan perumahan dan real estate</a></h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/4.png" data-gall="portfolioGallery" class="venobox" title="Hotel"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/5.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/5.png" data-gall="portfolioGallery" class="venobox" title="Cafe"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/6.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/6.png" data-gall="portfolioGallery" class="venobox" title="Poli Gigi"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/7.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/7.png" data-gall="portfolioGallery" class="venobox" title="Koperasi Simpan Pinjam"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/8.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/8.png" data-gall="portfolioGallery" class="venobox" title="Hotel"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/9.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/9.png" data-gall="portfolioGallery" class="venobox" title="Residence"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/10.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/10.png" data-gall="portfolioGallery" class="venobox" title="Cafe"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/11.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/11.png" data-gall="portfolioGallery" class="venobox" title="Koperasi Simpan Pinjam"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="frontend/assets/img/portfolio/12.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="frontend/assets/img/portfolio/12.png" data-gall="portfolioGallery" class="venobox" title="Office"><i class="bx bx-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title mt-5" data-aos="fade-up">
          <h2>Contact</h2>
           <p>Contact Us</p>
        </div>

        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>JL. Lengkong Gudang Timur II No.21 Serpong – Tangerang Selatan</p>
              </div>

              <div class="email mt-4">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone mt-4">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-4 d-flex align-items-stretch">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14030.743989802051!2d106.67701001488122!3d-6.293208735080578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fad0e0470ba5%3A0xdc4c0824031fc01f!2sJl.%20Lengkong%20Gudang%20Tim.%20II%20No.21%2C%20Lengkong%20Gudang%20Tim.%2C%20Kec.%20Serpong%2C%20Kota%20Tangerang%20Selatan%2C%20Banten%2015318!5e0!3m2!1sen!2sid!4v1601458378485!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
