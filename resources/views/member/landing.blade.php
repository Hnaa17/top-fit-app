
<!doctype html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-sidebar-size="lg" data-sidebar="light" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Landing | Top Fit Gym</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Top Fit Gym" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    {{-- <img src="assets/images/logo-dark.png" class="card-logo card-logo-dark" alt="logo dark" height="17">
                    <img src="assets/images/logo-light.png" class="card-logo card-logo-light" alt="logo light" height="17"> --}}

                    <a class="fs-1" href="/" style="color: #f7ea39c7;font-weight: bold">TopFitGym</a>
                </a>

                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        {{-- <li class="nav-item">
                            <a class="nav-link fs-14 fw-semibold active" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14 fw-semibold" href="#wallet">Wallet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14 fw-semibold" href="#marketplace">Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14 fw-semibold" href="#categories">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14 fw-semibold" href="#creators">Creators</a>
                        </li> --}}
                    </ul>

                    <div class="">
                        <a href="{{ url('member') }}" style="color: #f7ea39c7">
                            <i class="ri-account-circle-fill align-middle display-5"></i> <span class="fs-20">Masuk</span>
                        </a>
                    </div>
                </div>

            </div>
        </nav>
            <div class="bg-overlay bg-overlay-pattern"></div>
        <!-- end navbar -->

        <!-- start hero section -->
        <section class="section nft-hero" id="hero">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="">
                            <h1 class="display-4 fw-bold mb-4 lh-base" style="color: #f7ea39c7">Top Fit Gym <br/>
                                Training Center</h1>
                            <p class="lead text-white lh-base mb-4 pb-2">Selamat datang di Top Fit Gym Training Center - Solusi terbaik untuk mencapai kebugaran tubuh dan gaya hidup sehat. Raih kebugaran maksimal dengan panduan dari para ahli kebugaran kami. Temukan berbagai program latihan yang efektif dan terukur, panduan nutrisi, dan alat pelacak kemajuan yang dirancang untuk membantu Anda menjadi versi terbaik dari diri Anda. </p>
                        </div>
                    </div><!--end col-->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hero section -->

        <!-- start programs -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-3">
                            <h1 class="fw-bold lh-base">Program Kami</h1>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <h5 class="mt-4">Beginner Fitness</h5>
                                <p class="text-muted fs-14">Program yang dirancang untuk mereka yang baru memulai latihan kebugaran. Latihan dasar dengan beban ringan dan fokus pada teknik yang benar. Aktivitas kardio ringan dan peregangan.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <h5 class="mt-4">Bodybuilding</h5>
                                <p class="text-muted fs-14">Berfokus pada latihan beban untuk meningkatkan massa otot. Menggunakan latihan seperti bench press, squats, deadlifts, bicep curls, dan lat pulldowns.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <h5 class="mt-4">Fat Loss</h5>
                                <p class="text-muted fs-14">Kombinasi latihan kardio dan latihan kekuatan. Latihan kardio seperti lari, bersepeda, dan menggunakan mesin eliptikal. Latihan kekuatan dengan beban yang lebih ringan dan repetisi lebih tinggi untuk menjaga massa otot.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <h5 class="mt-4">General Fitness</h5>
                                <p class="text-muted fs-14">Campuran latihan kardio, kekuatan, dan fleksibilitas. Termasuk aktivitas seperti treadmill, latihan kekuatan dasar, dan latihan peregangan.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <h5 class="mt-4">Strength Training</h5>
                                <p class="text-muted fs-14">Berfokus pada peningkatan kekuatan otot dan daya tahan. Latihan beban dengan beban berat dan repetisi rendah. Latihan seperti deadlifts, squats, bench press, dan overhead press.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <h5 class="mt-4">Program Yoga dan Pilates</h5>
                                <p class="text-muted fs-14">Fokus pada fleksibilitas, keseimbangan, dan kekuatan inti. Latihan yoga melibatkan pose dan peregangan. Pilates menekankan kontrol tubuh dan latihan inti.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <h5 class="mt-4">Cardio Training</h5>
                                <p class="text-muted fs-14">Latihan untuk meningkatkan kesehatan jantung dan paru-paru. Aktivitas seperti berlari, bersepeda, berenang, dan menggunakan mesin kardio seperti treadmill dan eliptikal.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <h5 class="mt-4">Rehabilitation Training</h5>
                                <p class="text-muted fs-14">Latihan yang dirancang untuk mereka yang pulih dari cedera. Fokus pada pemulihan, fleksibilitas, dan penguatan otot yang terkena cedera. Latihan yang disesuaikan dengan kebutuhan medis dan kemampuan individu.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!-- end container -->
        </section><!-- end programs -->

        <!-- start mission -->
        <section class="section bg-dark">
            <div class="container">
                <div class="row justify-content-center" style="align-items: center">
                    <div class="col-lg-6">
                        <h1 class="fw-bolder mb-4" style="color: #f7ea39c7">Misi Kami</h1>
                        <p class="text-white">Misi kami adalah memberikan akses kepada semua orang untuk mencapai kesehatan dan kebugaran yang lebih baik. <br/> Melalui program latihan yang inovatif, pelatihan dari para ahli, panduan nutrisi yang tepat, dan dukungan komunitas yang inspiratif. Kami berdedikasi untuk membantu Anda mencapai tujuan kebugaran Anda dengan cara yang efektif, menyenangkan, dan berkelanjutan.
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <video width="500" height="500" autoplay loop muted>
                            <source src="assets/videos/gym-video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section><!-- end mission -->

        <!-- start stories -->
        <section class="section">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-bold lh-base">Kisah Keberhasilan Peserta</h2>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Swiper -->
                        <div class="swiper mySwiper pb-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card text-center border shadow-none">
                                        <div class="card-body py-5 px-4">
                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image mb-3 pb-2">
                                            <h5>Kevin</h5>
                                            <p class="text-muted pb-1">Saya berhasil mencapai target maksimal kebugaran saya, menambah massa otot, dan meningkatkan kepercayaan diri saya melalui program latihan di gym.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card text-center border shadow-none">
                                        <div class="card-body py-5 px-4">
                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image mb-3 pb-2">
                                            <h5>Cindy</h5>
                                            <p class="text-muted pb-1">Setelah mengikuti kelas gym selama tiga bulan, saya berhasil menurunkan 10 kg berat badan saya & merasa lebih bugar daripada sebelumnya.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card text-center border shadow-none">
                                        <div class="card-body py-5 px-4">
                                            <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image mb-3 pb-2">
                                            <h5>Faisal</h5>
                                            <p class="text-muted pb-1">Saya berhasil berlari maraton pertama saya setelah mengikuti program latihan ketahanan di gym selama enam bulan.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card text-center border shadow-none">
                                        <div class="card-body py-5 px-4">
                                            <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image mb-3 pb-2">
                                            <h5>Yulia</h5>
                                            <p class="text-muted pb-1">Kelas gym membantu saya mengatasi stres dan mencapai keseimbangan hidup yang lebih baik melalui rutinitas latihan yang teratur.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="card text-center border shadow-none">
                                        <div class="card-body py-5 px-4">
                                            <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image mb-3 pb-2">
                                            <h5>Bram</h5>
                                            <p class="text-muted pb-1">Dengan bimbingan pelatih pribadi di gym, saya mampu mengubah gaya hidup saya menjadi lebih sehat dan berenergi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-dark"></div>
                        </div>
                        <!-- end Swiper -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end stories -->

        {{-- start trainer --}}
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h2 class="fw-bold lh-base">Para Pelatih Kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm object-cover rounded" />
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="">
                                            <h5 class="mb-1">Timothy Smith</h5>
                                        </a>
                                        <p class="text-muted mb-0">Personal Trainer</p>
                                    </div>
                                    {{-- <div>
                                        <div class="dropdown float-end">
                                            <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle fs-16"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="#!" data-bs-toggle="modal">Report</a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-sm object-cover rounded">
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="">
                                            <h5 class="mb-1">Alexis Clarke</h5>
                                        </a>
                                        <p class="text-muted mb-0">Rehabilitation Trainer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm object-cover rounded">
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="">
                                            <h5 class="mb-1">Glen Matney</h5>
                                        </a>
                                        <p class="text-muted mb-0">Cardio Instructor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-sm object-cover rounded">
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="">
                                            <h5 class="mb-1">Herbert Stokes</h5>
                                        </a>
                                        <p class="text-muted mb-0">Yoga Instructor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="assets/images/users/avatar-9.jpg" alt="" class="avatar-sm object-cover rounded">
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="">
                                            <h5 class="mb-1">Michael Morris</h5>
                                        </a>
                                        <p class="text-muted mb-0">Personal Trainer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shink-0">
                                        <img src="assets/images/nft/img-05.jpg" alt="" class="avatar-sm object-cover rounded">
                                    </div>
                                    <div class="ms-3 flex-grow-1">
                                        <a href="">
                                            <h5 class="mb-1">James Morris</h5>
                                        </a>
                                        <p class="text-muted mb-0">Strength and Conditioning Coach</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div>
        </section>
        {{-- end trainer --}}

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <div>
                                <a class="fs-1 text-white" href="" style="font-weight: bold">TopFitGym</a>
                            </div>
                            <div class="mt-4">
                                <p>Top Fit Gym Training Center</p>
                                <p>Solusi terbaik untuk mencapai kebugaran tubuh dan gaya hidup sehat.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 ms-lg-auto">
                        {{-- <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Company</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-15">
                                        <li><a href="pages-profile.html">About Us</a></li>
                                        <li><a href="pages-gallery.html">Gallery</a></li>
                                        <li><a href="apps-projects-overview.html">Projects</a></li>
                                        <li><a href="pages-timeline.html">Timeline</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Apps Pages</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-15">
                                        <li><a href="pages-pricing.html">Calendar</a></li>
                                        <li><a href="apps-mailbox.html">Mailbox</a></li>
                                        <li><a href="apps-chat.html">Chat</a></li>
                                        <li><a href="apps-crm-deals.html">Deals</a></li>
                                        <li><a href="apps-tasks-kanban.html">Kanban Board</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Support</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-15">
                                        <li><a href="pages-faqs.html">FAQ</a></li>
                                        <li><a href="pages-faqs.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-3">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                <script> document.write(new Date().getFullYear()) </script> © Top Fit Gym
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-warning btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->


    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/pages/nft-landing.init.js"></script>
</body>

</html>

