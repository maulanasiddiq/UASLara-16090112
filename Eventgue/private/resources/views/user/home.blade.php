<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('public/favicon.ico')}}" type="image/x-icon">
    <!-- Author Meta -->
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>EventGue</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">

    <!--
CSS
============================================= -->

    <link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css')}}">

</head>

<body>

    <!-- Start header section -->
    <header class="header-area" id="header-area">
        <div class="dope-nav-container breakpoint-off">
            <div class="container">
                <div class="row">
                    <!-- dope Menu -->
                    <nav class="dope-navbar justify-content-between" id="dopeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="{{ url('/') }}">
                            <img src="{{ asset('public/frontend/img/logo.png')}}" alt="">
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="dope-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>

                        <!-- Menu -->
                        <div class="dope-menu">

                            <!-- close btn -->
                            <div class="dopecloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>

                            <!-- Nav Start -->
                            <div class="dopenav">
                                <ul id="nav">
                                    <li>
                                        <a href="#banner-section">Home</a>
                                    </li>
                                    <li>
                                        <a href="#event-section">Event</a>
                                    </li>
                                    <li>
                                        <a href="#feature-section">Fitur</a>
                                    </li>
                                    <li>
                                        <a href="#testimonial-section">Testimoni</a>
                                    </li>
                                    <li>
                                        <a href="#category-section">Kategori</a>
                                    </li>
                                    <li>
                                        @guest
                                            <a href="{{ url('/login')}}">Login</a>
                                        @else
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">Logout</a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                        @endguest
                                    </li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Start header section -->

    <!-- Start banner section -->
    <section class="banner-section relative section-gap-full" id="banner-section">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 banner-left">
                    <h1 class="text-uppercase">Temukan event favoritmu di EventGue</h1>
                    <p>EventGue adalah platform global untuk pengalaman langsung yang memungkinkan
                        siapa pun untuk membuat, berbagi, menemukan, dan menghadiri berbagai event.
                        Misi kami adalah untuk menyatukan dunia melalui pengalaman hidup. </p>
                    <a class="video-btn primary-btn" href="{{ url('/')}}">About More</a>
                </div>
                <div class="col-md-6 banner-right text-center">
                    <img class="img-fluid" src="{{ asset('public/frontend/img/isometric.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="wave">
            <svg class="nectar-shape-divider" fill="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300"
                preserveAspectRatio="none">
                <path d="M 1000 299 l 2 -279 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -232 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path>
                <path d="M 1000 286 l 2 -252 c -157 -43 -302 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -145.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 10.61 v 22.39 z"></path>
                <path d="M 1000 300 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path>
            </svg>
        </div>
    </section>
    <!-- End banner section -->

    <!-- Start featured section -->
    <section class="service-section section-gap-full" id="event-section">
            <!-- Start service section -->
            <div class="container">
                    <div class="section-title">
                            <h2 class="text-center">Event Terbaru</h2>
                        </div>
                <div class="row">
                    @for($i=0;$i<6;$i++)
                        <div class="col-lg-4  col-md-6 pb-30">
                            <div class="single-service">
                                <img class="card-img-top" src="{{ url('public/frontend/img/thumb.png')}}" alt="">
                                {{-- <i class="ti-user"></i> --}}
                                <div class="card-body">
                                    <h4>Executive Admin</h4>
                                    <p><small>Jum'at, 28 April 2019</small></p>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid vel ipsum voluptas
                                        molestias.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endfor


                </div>
            </div>
    </section>
    <!-- End featured section -->

    <!-- Start feature section -->
    <section class="feature-section section-gap-full" id="feature-section">
        <div class="container">
            <div class="row align-items-center feature-wrap">
                <div class="col-lg-4 header-left">
                    <h1>
                        Kami sedang menyiapkan panggung dunia untuk pengalaman langsung
                    </h1>
                    <a class="primary-btn" href="{{ url('/')}}">Pelajari Lebih Lanjut
                        <span class="ti-arrow-right"></span>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="row features-wrap">
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-time"></span>
                                <h3>Mulai dalam beberapa menit</h3>
                                <p>
                                    Buat halaman daftar acara yang indah dengan pemrosesan pembayaran,
                                    analitik, dan dukungan bawaan.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-settings"></span>
                                <h3>Kemudahan mengontrol</h3>
                                <p>
                                    Kelola dan lacak penjualan Anda dengan pelaporan dan analisis
                                    real-time dari perangkat apa pun secara bersamaan.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-stats-up"></span>
                                <h3>Tinggikan brand Anda</h3>
                                <p>
                                    Promosikan merek unik Anda dengan halaman yang dirancang dengan
                                    indah yang memungkinkan penemuan mudah dan pembelian tiket.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-feature relative">
                                <div class="overlay overlay-bg"></div>
                                <span class="ti-share"></span>
                                <h3>Kumpulkan temanmu</h3>
                                <p>
                                    Perluas jangkauan Anda dan temukan audiens Anda di mana mereka
                                    menemukan pengalaman di situs mitra seperti Facebook, Instagram
                                    dan Spotify.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature section -->

    <!-- Start testimonial section -->
    <section class="testimonial-section section-gap-full" id="testimonial-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 testimonial-left">
                    <h2>Testimoni Pengguna</h2>
                    <p>
                        Berikut beberapa testimoni dari pengguna EventGue.
                    </p>
                </div>
                <div class="col-lg-8 testimonial-right">
                    <div class="testimonial-carusel owl-carousel" id="testimonial-carusel">
                        <div class="single-testimonial item">
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('public/frontend/img/fredy.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <h4>Fredy Nur Apriyanto</h4>
                                    <p>CTO of International Office</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('public/frontend/img/putri.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <h4>Putri Luthfi</h4>
                                    <p>Female Geek</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('public/frontend/img/angga.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <h4>Angga Dwiyono Putra</h4>
                                    <p>UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('public/frontend/img/asep.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <h4>Septian Rizaldi</h4>
                                    <p>Business Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('public/frontend/img/rizky.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <h4>Rizky Wibowo</h4>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial item">
                            <p>
                                “Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam.”
                            </p>
                            <div class="user-details d-flex flex-row align-items-center">
                                <div class="img-wrap">
                                    <img src="{{ asset('public/frontend/img/sanny.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <h4>Maulana Abdul Siddiq</h4>
                                    <p>Cybereye Community</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial section -->

    <!-- Start screenshot section -->
    <section class="screenshot-section section-gap-full" id="category-section">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Jelajahi Berbagai Kategori Event</h2>
            </div>
            <div class="row">
                <div class="screenshot_slider owl-carousel" id="screenshot-carusel">
                    <div class="item">
                        <img src="{{ asset('public/frontend/img/screen/music.jpg')}}" alt="" title="">
                        <p class="text-category">Musik</p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/frontend/img/screen/arts.jpg')}}" alt="" title="">
                        <p class="text-category">Seni</p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/frontend/img/screen/bisnis.jpg')}}" alt="" title="">
                        <p class="text-category">Bisnis</p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/frontend/img/screen/pesta.jpg')}}" alt="" title="">
                        <p class="text-category">Pesta</p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/frontend/img/screen/kelas.jpg')}}" alt="" title="">
                        <p class="text-category">Kelas</p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/frontend/img/screen/olahraga.jpg')}}" alt="" title="">
                        <p class="text-category">Olahraga & Kesehatan</p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/frontend/img/screen/makanan.jpg')}}" alt="" title="">
                        <p class="text-category">Food & drink</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End screenshot section -->

    <!-- Start faq section -->
    <section class="home-faq-section faq-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <h2>Frequently Asked Question</h2>
                    <p>
                        Beberapa pertanyaan yang sering ditanyakan oleh pengguna EventGue.
                    </p>
                    <p>
                        Silahkan hubungi kontak kami jika masih ada pertanyaan mengenai EventGue secara mendetail.
                    </p>
                </div>
                <div class="col-lg-7">
                    <dl class="accordion">
                        <dt>
                            <a href="#" class="active">Apa itu EventGue?</a>
                        </dt>
                        <dd>
                                EventGue adalah platform global untuk pengalaman langsung yang memungkinkan siapa pun
                                untuk membuat, berbagi, menemukan, dan menghadiri berbagai event. Misi kami adalah
                                untuk menyatukan dunia melalui pengalaman hidup.
                        </dd>
                        <dt>
                            <a href="#" class="active">Bisakah saya menggunakan Eventbrite untuk acara gratis?</a>
                        </dt>
                        <dd>
                                Gratis bagi penyelenggara untuk menggunakan Eventbrite jika Anda tidak mengenakan
                                biaya untuk tiket! Tidak ada biaya bulanan, biaya pendaftaran, atau biaya pemasangan.
                                Jika Anda membebankan biaya untuk penjualan tiket, biaya kami bervariasi berdasarkan
                                paket.
                        </dd>
                        <dt>
                            <a href="#">Bagaimana cara memasang iklan event saya?</a>
                        </dt>
                        <dd>
                            Dengan cara mendaftarkan akun Anda pada EventGue. Kemudian lengkapi informasi diri Anda
                            untuk bisa memasang iklan event secara gratis.
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <!-- End faq section -->

    <!-- Start download section -->
    <section class="download-section section-gap-full" id="download-section">
        <div class="container">
            <div class="row download-wrap justify-items-between align-items-center">
                <div class="col-lg-6">
                    <h1>Mulai iklankan event Anda secara gratis</h1>
                    <p>
                        Daftarkan akun Anda untuk bisa mulai mengiklankan event Anda secara gratis disini
                    </p>
                </div>
                <div class="col-lg-6 dload-btn">
                    <a href="{{ url('register')}}" class="primary-btn">
                        <span>Daftar Sekarang</span>
                        <svg><i class="fa fa-user"></i></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End download section -->

    <!-- Start footer section -->
    <footer class="footer-section section-gap-half">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 footer-left">
                    <a href="#">
                        <img src="{{ asset('public/frontend/img/logo.png')}}" alt="">
                    </a>
                    <p class="copyright-text">&copy; 2019 Design With
                        <i class="fa fa-heart" aria-hidden="true"></i> By
                        <a href="https://www.instagram.com/maulanaabdulsiddiq/" target="_blank">Maulana Abdul Siddiq</a>
                    </p>
                </div>
                <div class="col-lg-7">
                    <ul id="social">
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="footer-menu">
                        <li>
                            <a href="#">Affiliate Program</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditionss</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Refund Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer section -->

    <div class="scroll-top">
        <i class="ti-angle-up"></i>
    </div>

    <!--
JS
============================================= -->
    <script src="{{ asset('public/frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/vendor/popper.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('public/frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/jquery.parallax-scroll.js')}}"></script>
    <script src="{{ asset('public/frontend/js/dopeNav.js')}}"></script>
    <script src="{{ asset('public/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('public/frontend/js/main.js')}}"></script>
</body>

</html>
