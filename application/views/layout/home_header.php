<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>S I M A K</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets_index/') ?>img/favicon.png" rel="icon">
    <link href="<?= base_url('assets_index/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets_index/') ?>vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets_index/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets_index/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets_index/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets_index/') ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets_index/') ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets_index/') ?>css/style.css" rel="stylesheet">

    <style>
        @media (max-width: 768px) {
            #hero .carousel-content h2 {
                font-size: 26px;
                line-height: 1.3;
            }
            #hero .carousel-content p {
                font-size: 14px;
                line-height: 1.5;
            }
            .btn-get-started {
                font-size: 13px !important;
                padding: 8px 18px !important;
                margin-bottom: 6px;
            }
        }
        @media (max-width: 576px) {
            #header .logo h1 {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>
    <section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(<?= base_url('assets_index/') ?>img/slide/Slide-01.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>S I M A K</span></h2>
                            <p class="animate__animated animate__fadeInUp">Sistem Informasi Manajemen Kurikulum & Kelompok Bidang Keahlian. Platform terintegrasi bagi para dosen dan pengajar dalam menyelaraskan kurikulum berbasis kompetensi, merencanakan riset terapan, dan mengelola pendanaan akademik prodi.</p>
                            <div class="d-flex justify-content-center flex-wrap gap-2 gap-sm-3 mt-3">
                                <a href="<?= base_url('Dashboard') ?>" class="btn-get-started animate__animated animate__fadeInUp" style="background: linear-gradient(310deg, #17ad37 0%, #98ec2d 100%); border: none;"><i class="bi bi-grid-fill me-1"></i> Masuk Dashboard</a>
                                <a href="#funfact" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pelajari KBK</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <!-- <div class="carousel-item" style="background-image: url(<?= base_url('assets_index/') ?>img/slide/Slide-02.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                        </div>
                    </div>
                </div> -->

                <!-- Slide 3 -->
                <!-- <div class="carousel-item" style="background-image: url(<?= base_url('assets_index/') ?>img/slide/Slide-03.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                        </div>
                    </div>
                </div> -->

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section>
<!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="index.html"><span>S I M A K</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="<?= base_url('assets_index/') ?>img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#funfact">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#event">Event</a></li>
                    <li><a class="nav-link scrollto" href="#dana">Dana</a></li>
                    <li><a class="nav-link scrollto" href="#riset">Riset</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                    <li><a class="getstarted scrollto" href="<?= base_url('Dashboard') ?>"><i class="bi bi-grid-fill me-1"></i> Masuk ke Dashboard</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->