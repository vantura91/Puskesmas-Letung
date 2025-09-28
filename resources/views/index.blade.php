<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Medilab Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com">contact@example.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center me-auto">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h4 class="sitename">Puskemas Letung</h4>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home<br></a></li>
                        <li><a href="#about">Profil</a></li>
                        <li><a href="#services">Layanan</a></li>
                        <li><a href="#departments">Departments</a></li>
                        <li><a href="#doctors">Doctors</a></li>
                        <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>
                                        <li><a href="#">Deep Dropdown 2</a></li>
                                        <li><a href="#">Deep Dropdown 3</a></li>
                                        <li><a href="#">Deep Dropdown 4</a></li>
                                        <li><a href="#">Deep Dropdown 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                {{-- <a class="cta-btn d-none d-sm-block" href="#appointment">Admin</a> --}}

            </div>

        </div>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

            <div class="container position-relative">

                <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                    <h2>Web Puskemas Letung</h2>
                </div><!-- End Welcome -->

                <div class="content row gy-4">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                            <h3>Jam Operasional</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center align-middle">
                                    <thead class="table-success">
                                        <tr>
                                            <th>Hari</th>
                                            <th>Pendaftaran</th>
                                            <th>Pelayanan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Senin - Kamis</strong></td>
                                            <td>08.00 - 12.00 WIB</td>
                                            <td>08.00 - 14.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Jum’at</strong></td>
                                            <td>08.00 - 11.00 WIB</td>
                                            <td>08.00 - 11.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sabtu</strong></td>
                                            <td>08.00 - 12.00 WIB</td>
                                            <td>08.00 - 12.00 WIB</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="alert alert-success text-center mt-3" role="alert">
                                <strong>Minggu dan Tanggal Merah</strong><br>
                                Persalinan dan UGD buka <span class="text-danger">24 Jam</span>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="row gy-4">

                                <div class="col-xl-6 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                        <i class="bi bi-clipboard-data"></i>
                                        <h4>VISI</h4>
                                        <p>Menjadikan Puskesmas Dengan
                                            Pelayanan Prima Menuju Masyarakat
                                            Jemaja Yang Sehat</p>
                                    </div>
                                </div><!-- End Icon Box -->

                                <div class="col-xl-6 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                        <i class="bi bi-gem"></i>
                                        <h4>MISI</h4>
                                        <p>1.Memberikan Pelayanan Kesehatan Yang
                                            Bermutu, Mudah, Cepat, Dan Tepat. <br>
                                            2.Menyelenggarakan Pelayanan
                                            Administrasi Dan Manajemen Yang
                                            Berkualitas. <br>
                                            3.Meningkatkan Pemberdayaan dan Peran
                                            Aktif Masyarakat Dalam Pembangunan
                                            Kesehatan</p>
                                    </div>
                                </div><!-- End Icon Box -->

                            </div>
                        </div>
                    </div>
                </div><!-- End  Content-->

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4 gx-5">

                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/maklumat.png" class="img-fluid" alt="">
                        {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                            class="glightbox pulsating-play-btn"></a> --}}
                    </div>

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Profil</h3>
                        <p>
                            MOTTO :<br>
                            Prima Dalam Pelayanan, Berhasil Dalam
                            Pemberdayaan. <br>
                            TATA NILAI : <br>
                            “SINCERE” <br>
                            Senyum : Melayani Dengan Senyuman
                            Inovatif :
                            Mampu Mencipkan Ide Baru Dalam Meningkatkan
                            Mulu Pelayanan
                            Nyaman : Mewujudkan Pelayanan Kesehatan Yang Nyaman
                            Cekatan : Lincah Dan Cepat Dalam Tindakan
                            Energik : Bersemangat Dalam Bekerja
                            Ramah : Memiliki Sikap Yang Sopan Dan Santun
                            Empati : Bersikap Perduli Dan Welas Asih

                        </p>
                        {{-- <ul>
                            <li>
                                <i class="fa-solid fa-vial-circle-check"></i>
                                <div>
                                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-pump-medical"></i>
                                <div>
                                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna
                                        pasata redi</p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-heart-circle-xmark"></i>
                                <div>
                                    <h5>Voluptatem et qui exercitationem</h5>
                                    <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime
                                        veniam</p>
                                </div>
                            </li>
                        </ul> --}}
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-user-doctor"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Doctors</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-regular fa-hospital"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Departments</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-flask"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Research Labs</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-award"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Awards</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Layanan Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <!-- Layanan Administrasi -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#layananModal">
                                <h3>Layanan Tata Usaha</h3>
                            </a>
                            <p>1. Pelayanan Surat Keterangan Sakit <br>
                                2. Pelayanan Surat Keterangan <br>
                                Kesehatan
                                3. Pelayanan Surat Keterangan <br>
                                Kehamilan
                                4. Pelayanan Surat Pemeriksaan Calon Penganten <br>
                                5. Surat Keterangan Kelahiran <br>
                                6. Surat Keterangan kematian <br>
                                7. Surat Keterangan Visum <br>
                                8. Surat Rujukan</p>
                        </div>
                    </div>
                    <div class="modal fade" id="layananModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Tata Usaha</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/img/tatausaha.png') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/layananadministrasi.pdf" type="application/pdf"
                                        width="100%" height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan poli umum -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#poliumumModal">
                                <h3>Layanan Poli Umum</h3>
                            </a>
                            <p>1. Mendapatkan Pemeriksaan dan
                                Penjelasan tentanf penyakit <br>
                                2. Mendapatkan tindakan/penunjang
                                yang diperlukan <br>
                                3. Mendapat resep obat oleh dokter
                                sesuai diagnosis <br>
                                4. Mendapatkan surat keterangan
                                berobat/istirahat apabila diperlukan <br>
                                5. Mendapat rujukan bila diperlukan</p>
                        </div>
                    </div>
                    <div class="modal fade" id="poliumumModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Poli Umum</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/poliumum.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan Rawat Inap -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#rawatinapModal">
                                <h3>Layanan Rawat Inap</h3>
                            </a>
                            <p>1. Pelayanan dokumen rekammedik <br>
                                2. Pelayanan Obat dan Bahan Habis Pakai <br>
                                3. Pelayanan fasilitas rawat inap <br>
                                4. Pelayanan visite dokter <br>
                                5. Pelayanan asuhan keperawatan <br>
                                6. Pelayanan penunjang diagnostik <br>
                                7. Pelayanan cucian/linen <br>
                                8. Pelayanan gizi pasien</p>
                        </div>
                    </div>
                    <div class="modal fade" id="rawatinapModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Rawat Inap</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/img/rawatinap.png') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/rawatinap.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan Gigi Mulut -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#gigimulutModal">
                                <h3>Layanan Gigi & Mulut</h3>
                            </a>
                            <p>1. Pelayanan dokumen rekammedik <br>
                                2. Pelayanan Obat dan Bahan Habis Pakai <br>
                                3. Pelayanan fasilitas rawat inap <br>
                                4. Pelayanan visite dokter <br>
                                5. Pelayanan asuhan keperawatan <br>
                                6. Pelayanan penunjang diagnostik <br>
                                7. Pelayanan cucian/linen <br>
                                8. Pelayanan gizi pasien</p>
                        </div>
                    </div>
                    <div class="modal fade" id="gigimulutModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Gigi & Mulut</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/layanangigimulut.pdf" type="application/pdf"
                                        width="100%" height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan UGD -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#ugdModal">
                                <h3>Layanan UGD</h3>
                            </a>
                            <p>.1. Pelayanan dokumen rekammedik <br>
                                2. Pelayanan Obat dan Bahan Habis Pakai <br>
                                3. Pelayanan fasilitas rawat inap <br>
                                4. Pelayanan visite dokter <br>
                                5. Pelayanan asuhan keperawatan <br>
                                6. Pelayanan penunjang diagnostik <br>
                                7. Pelayanan cucian/linen</p>
                        </div>
                    </div>
                    <div class="modal fade" id="ugdModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan UGD</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/igd.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan balita -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#balitaModal">
                                <h3>Layanan Terpadu Balita</h3>
                            </a>
                            <p>.1. Pelayanan MTBS/MTBM
                                sesuai standar <br>
                                2. Tindakan medis yang
                                tepat sesuai indikasi <br>
                                3. KIE dan informasi medis
                                tentang hasil pemeriksaan <br>
                                4. Peresepan <br>
                                5. Surat rujukan sesuai
                                indikasi <br>
                                6. Surat keterangan sakit</p>
                        </div>
                    </div>
                    <div class="modal fade" id="balitaModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Terpadu Balita</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/balita.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan labor -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#laborModal">
                                <h3>Layanan Laboratorium</h3>
                            </a>
                            <p>1. Pemeriksaan Hematologi <br>
                                2. Pemeriksaan Kimia Darah <br>
                                3. Pemeriksaan Urinalisis <br>
                                4. Pemeriksaan Imunologi-Serologi <br>
                                5. Pemeriksaan Mikrobiologi</p>
                        </div>
                    </div>
                    <div class="modal fade" id="laborModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Laboratorium</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/labor.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan keswa -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#keswaModal">
                                <h3>Layanan Kesehatan Jiwa</h3>
                            </a>
                            <p>1. Pelayanan Kesehatan jiwa (KESWA)
                                sesuai standar <br>
                                2. Tindakan medis yang tepat sesuai
                                indikasi <br>
                                3. Informasi medis tentang hasil
                                pemeriksaan <br>
                                4. Peresepan <br>
                                5. Surat rujukan sesuai indikasi</p>
                        </div>
                    </div>
                    <div class="modal fade" id="keswaModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Kesehatan Jiwa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/keswa.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan iva -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#ivaModal">
                                <h3>Layanan IVA</h3>
                            </a>
                            <p>1. Pelayanan IVA test dan SADANIS sesuai
                                standar <br>
                                2. Tindakan medis yang tepat sesuai
                                indikasi <br>
                                3. KIE dan informasi medis tentang hasil
                                pemeriksaan <br>
                                4. Peresepan <br>
                                5. Surat rujukan sesuai indikasi <br>
                                6. Surat keterangan sakit</p>
                        </div>
                    </div>
                    <div class="modal fade" id="ivaModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan IVA</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/iva.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan konselor asi -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#asiModal">
                                <h3>Layanan Konselor ASI</h3>
                            </a>
                            <p>1. Pelayanan Konselor sesuai
                                standar <br>
                                2. Tindakan medis yang tepat
                                sesuai indikasi <br>
                                3. KIE dan informasi medis
                                tentang hasil pemeriksaan <br>
                                4. Peresepan <br>
                                5. Surat rujukan sesuai indikasi</p>
                        </div>
                    </div>
                    <div class="modal fade" id="asiModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Konselor ASI</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/asi.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan KB -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#kbModal">
                                <h3>Layanan KB</h3>
                            </a>
                            <p>1. Pelayanan KB sesuai standar <br>
                                2. Tindakan medis yang tepat sesuai
                                indikasi <br>
                                3. KIE dan informasi medis tentang
                                hasil pemeriksaan <br>
                                4. Peresepan <br>
                                5. Surat rujukan sesuai indikasi.</p>
                        </div>
                    </div>
                    <div class="modal fade" id="kbModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan KB</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/kb.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan kia -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#kiaModal">
                                <h3>Layanan KIA</h3>
                            </a>
                            <p>1. Pelayanan KIA sesuai
                                standar <br>
                                2. Tindakan medis yang tepat
                                sesuai indikasi <br>
                                3. KIE dan informasi medis
                                tentang hasil pemeriksaan <br>
                                4. Peresepan <br>
                                5. Surat rujukan sesuai
                                indikasi</p>
                        </div>
                    </div>
                    <div class="modal fade" id="kiaModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan KIA</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/kia.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan poli lansia -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#polilansiaModal">
                                <h3>Layanan Poli Lansia</h3>
                            </a>
                            <p>.Pemeriksaan Poli Lansia</p>
                        </div>
                    </div>
                    <div class="modal fade" id="polilansiaModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Poli Lansia</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/polilansia.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan aduan -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#aduanModal">
                                <h3>Layanan Aduan</h3>
                            </a>
                            <p>Pelayanan aduan masyarakat atau
                                pasien.</p>
                        </div>
                    </div>
                    <div class="modal fade" id="aduanModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Aduan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/aduan.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan rekam medis -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#loketModal">
                                <h3>Layanan Rekam Medis</h3>
                            </a>
                            <p>Pelayanan rekam medis.</p>
                        </div>
                    </div>
                    <div class="modal fade" id="loketModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Rekam Medis</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/loket.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan Kefarmasian -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#kefarmasianModal">
                                <h3>Layanan Kefarmasian</h3>
                            </a>
                            <p>1. Pelayanan resep obat <br>
                                2. Pelayanan informasi obat <br>
                                3. Pelayanan konseling kefarmasian</p>
                        </div>
                    </div>
                    <div class="modal fade" id="kefarmasianModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Kefarmasian</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- gambar -->
                                    {{-- <img src="{{ asset('assets/img/kefarmasian.png') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- PDF -->
                                    <embed src="assets/pdf/kefarmasian.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan gizi -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#giziModal">
                                <h3>Layanan Gizi</h3>
                            </a>
                            <p>1. Pelayanan Konseling Gizi <br>
                                2. Intervensi Gizi</p>
                        </div>
                    </div>
                    <div class="modal fade" id="giziModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Gizi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/gizi.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan rujukan -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#rujukanModal">
                                <h3>Layanan Rujukan</h3>
                            </a>
                            <p>Pelayanan Rujukan</p>
                        </div>
                    </div>
                    <div class="modal fade" id="rujukanModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Rujukan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/rujukan.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan poli tuberkolosis -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#tuberkolosisModal">
                                <h3>Layanan Poli Tuberkolosis</h3>
                            </a>
                            <p>1. Pelayanan Pemeriksaan TB <br>
                                2. Pelayanan Pengambilan OAT</p>
                        </div>
                    </div>
                    <div class="modal fade" id="tuberkolosisModal" tabindex="-1"
                        aria-labelledby="layananModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan Poli Tuberkolosis</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/tuberkolosis.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Layanan perkesmas -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <!-- Trigger Modal -->
                            <a href="#" class="stretched-link" data-bs-toggle="modal"
                                data-bs-target="#perkesmasModal">
                                <h3>Layanan PERKESMAS</h3>
                            </a>
                            <p>Perawatan Kesehatan Masyarakat</p>
                        </div>
                    </div>
                    <div class="modal fade" id="perkesmasModal" tabindex="-1" aria-labelledby="layananModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="layananModalLabel">Layanan PERKESMAS</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <!-- Bisa gambar -->
                                    {{-- <img src="{{ asset('assets/pdf/layanangigimulut.pdf') }}" class="img-fluid"
                                        alt="Info Layanan"> --}}


                                    <!-- Atau PDF -->
                                    <embed src="assets/pdf/perkesmas.pdf" type="application/pdf" width="100%"
                                        height="500px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Appointment Section -->
        <section id="appointment" class="appointment section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Appointment</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="tel" class="form-control" name="phone" id="phone"
                                placeholder="Your Phone" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="datetime-local" name="date" class="form-control datepicker"
                                id="date" placeholder="Appointment Date" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="department" id="department" class="form-select" required="">
                                <option value="">Select Department</option>
                                <option value="Department 1">Department 1</option>
                                <option value="Department 2">Department 2</option>
                                <option value="Department 3">Department 3</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="doctor" id="doctor" class="form-select" required="">
                                <option value="">Select Doctor</option>
                                <option value="Doctor 1">Doctor 1</option>
                                <option value="Doctor 2">Doctor 2</option>
                                <option value="Doctor 3">Doctor 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                    </div>
                    <div class="mt-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                        <div class="text-center"><button type="submit">Make an Appointment</button></div>
                    </div>
                </form>

            </div>

        </section><!-- /Appointment Section -->

        <!-- Departments Section -->
        <section id="departments" class="departments section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Departments</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab"
                                    href="#departments-tab-1">Cardiology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Neurology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Hepatology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Pediatrics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Eye Care</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="departments-tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Cardiology</h3>
                                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente
                                            dila parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint.
                                            Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est
                                            repellat minima eveniet eius et quis magni nihil. Consequatur dolorem
                                            quaerat quos qui similique accusamus nostrum rem vero</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Et blanditiis nemo veritatis excepturi</h3>
                                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente
                                            dila parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et
                                            reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et
                                            velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto
                                            madirna desera vafle de nideran pal</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                                        <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non
                                            enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat
                                            perferendis aut</p>
                                        <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis
                                            quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima
                                            molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam.
                                            Soluta et harum voluptatem optio quae</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                        <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure
                                            voluptas iure porro quis delectus</p>
                                        <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam
                                            necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in
                                            consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam
                                            quia a laborum inventore</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro
                                            quia.</p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis
                                            recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui
                                            quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Departments Section -->

        <!-- Doctors Section -->
        <section id="doctors" class="doctors section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Doctors</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Medical Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Anesthesiologist</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Cardiology</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Neurosurgeon</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Doctors Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                                <div class="faq-content">
                                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                        rhoncus dolor purus non.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                        suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                        convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                                <div class="faq-content">
                                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse
                                        in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                                <div class="faq-content">
                                    <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed
                                        in suscipit sequi. Distinctio ipsam dolore et.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                </div>

            </div>

        </section><!-- /Faq Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                        <h3>Testimonials</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident.
                        </p>
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-1.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Saul Goodman</h3>
                                                <h4>Ceo &amp; Founder</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora
                                                entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam
                                                eget nibh et. Maecen aliquam, risus at semper.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-2.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Sara Wilsson</h3>
                                                <h4>Designer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-3.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Jena Karlis</h3>
                                                <h4>Store Owner</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum
                                                nulla quem veniam duis minim tempor labore quem eram duis noster aute
                                                amet eram fore quis sint minim.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-4.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Matt Brandon</h3>
                                                <h4>Freelancer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos
                                                export minim fugiat minim velit minim dolor enim duis veniam ipsum anim
                                                magna sunt elit fore quem dolore labore illum veniam.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-5.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>John Larson</h3>
                                                <h4>Entrepreneur</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam
                                                tempor noster veniam enim culpa labore duis sunt culpa nulla illum
                                                cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Gallery</h2>
                <p>Beberapa kegiatan yang dilaksanakan oleh Puskesmas Letung</p>
            </div><!-- End Section Title -->

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('assets/img/gallery/bayi.jpeg') }}" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="{{ asset('assets/img/gallery/bayi.jpeg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/bias.jpeg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/bias.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/caraqiver.jpeg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/caraqiver.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/ibubalita.jpeg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/ibubalita.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/imunisasi.jpeg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/imunisasi.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/kebugarananak.jpeg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/kebugarananak.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/ptm.jpeg" class="glightbox" data-gallery="images-gallery">
                                <img src="assets/img/gallery/ptm.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/sikatgigi.jpeg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/sikatgigi.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                </div>

            </div>

        </section><!-- /Gallery Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Lokasi</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7968.68992860245!2d105.68158497770999!3d3.001494700000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c3abe428c3621b%3A0x2a719e5757371b9b!2sUPT%20PUSKESMAS%20LETUNG!5e0!3m2!1sid!2sid!4v1759049631073!5m2!1sid!2sid"
                    width="100%" height="270" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div><!-- End Google Maps -->

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer light-background">


        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Medilab</strong> <span>All Rights
                    Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="#">PuskesmasLetung</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
