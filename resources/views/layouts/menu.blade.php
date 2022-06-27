<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <!-- <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo me-auto"><img src="{{asset('assets/img/logo.jpg')}}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="active" href="/">Home</a></li>
                <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ URL::to('sejarah') }}">Sejarah</a></li>
                        <li><a href="{{ URL::to('visimisi') }}">Visi Misi</a></li>
                        <li><a href="{{ URL::to('tujuan') }}">Tujuan Kompetensi Keahlian</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kesiswaan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ URL::to('prestasi') }}">Prestasi</a></li>
                        <li><a href="{{ URL::to('ekskul') }}">Ekstrakurikuler</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Dokumentasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ URL::to('perpisahan') }}">Perpisahan</a></li>
                        <li><a href="{{ URL::to('ekstrakurikuler') }}">Ekstrakurikuler</a></li>
                        <li><a href="{{ URL::to('ekskul') }}">Lomba Kreatifitas Siswa</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <!-- <a href="courses.html" class="get-started-btn">Get Started</a> -->

    </div>
</header><!-- End Header -->