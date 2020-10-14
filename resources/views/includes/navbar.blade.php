
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ route('home') }}"><img src="frontend/assets/img/p.jpg" alt=""></a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('home') }}#about">About</a></li>
          <li><a href="{{ route('home') }}#services">Services</a></li>
          <li><a href="{{ route('home') }}#portfolio">Portfolio</a></li>
          <li class="drop-down"><a>Project Result</a>
            <ul>              
              <li><a href="{{ route('arsitektur') }}">Arsitektur, interior & exhibition</a></li>
              <li><a href="{{ route('rumah') }}">Rumah tinggal pribadi</a></li>
              <li><a href="{{ route('komplek') }}">Komplek wisata dan villa</a></li>
              <li><a href="{{ route('infrastruktur') }}">Infrastruktur perindustrian</a></li>
              <li><a href="{{ route('komersil') }}">Daerah komersil dan fasilitas umum</a></li>
              <li><a href="{{ route('real_estate') }}">Kawasan perumahan dan real estate</a></li>
            </ul>
          </li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{ route('home') }}#contact" class="get-started-btn">Contact Us</a>

    </div>
  </header><!-- End Header -->