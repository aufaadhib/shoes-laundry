<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="title" content="BSHOES LAUNDRY">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSHOES LAUNDRY</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <header>
        <a href="#home" class="logo"><i class="ri-water-flash-fill"></i><span>Beshoes</span></a>
        <ul class="navbar-navi">
            <li><a href="#home" class="active">Home</a> </li>
            <li><a href="#search">Status</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#testimonial">Testimonials</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="navbar-extra">
            <div class="navbar-extra-menu" id="hamburger-menu"><i class="ri-menu-line"></i></div>
        </div>
    </header>
    <!-- Navbar End -->

    <!-- Landing Page Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1 class="premium">BESHOES</h1>
            <h1>Premium Laundry Shoes</h1>
        </main>
    </section>
    <!-- Landing Page End -->

    <!-- Status Start -->
    <section class="search" id="search">
        <h1> <span>CLEANING</span> STATUS</h1>
        <hr>
        <div class="row">
            <div class="about-img">
                <img src="assets/img/logo.png" alt="">
            </div>
            <div class="content">
                <form action="index.php" method="GET">
                    <h5>Masukan Kode Invoice</h5>
                    <div class="input-group">
                        <span class="input-group-text" id="addon-wrapping">#</span>
                        <input name="track" type="text" class="form-control" placeholder="Unique Code" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <div class="col-auto p-3">
                        <button type="submit" class="btn btn-primary mb-3">Check Status</button>
                    </div>
                </form>
                
                <div class="card pb-5">
                    <div class="row mt-5">
                        <div class="order-tracking completed">
                            <span class="is-complete"></span>
                            <p>Dalam Antrian</p>
                        </div>
                        <div class="order-tracking completed">
                            <span class="is-complete"></span>
                            <p>Sedang Diproses</p>
                        </div>
                        <div class="order-tracking">
                            <span class="is-complete"></span>
                            <p>Selesai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Status end -->

    <!-- Service Start -->
    <section class="service" id="service">
        <h1>SHOES <span>SERVICES</span> </h1>
        <hr>
        <p>Kami telah mencuci lebih dari 1000 pasang sepatu, dan akan terus bertambah! </p>
        <p> Jasa yang kami tawarkan:</p>
        <div class="row">
            <div class="service-card">
                <img src="assets/img/menu4.png" alt="Repair">
                <img src="assets/img/menu1.png" alt="Repair">
                <img src="assets/img/menu5.png" alt="Repair">
                <img src="assets/img/menu6.png" alt="Repair">
                <img src="assets/img/menu2.png" alt="Repair">
                <img src="assets/img/menu7.png" alt="Repair">
                <img src="assets/img/menu8.png" alt="Repair">
                <img src="assets/img/menu3.png" alt="Repair">
                <img src="assets/img/menu9.png" alt="Repair">
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Gallery Start -->
    <section class="gallery" id="gallery">
        <h1>GALLERY</h1>
        <hr>
        <div class="row">
            <div class="gallery-card">
                <img src="assets/img/galeri1.png" alt="Repair">
                <img src="assets/img/galeri2.png" alt="Repair">
                <img src="assets/img/galeri3.png" alt="Repair">
                <img src="assets/img/galeri4.jpg" alt="Repair">
                <img src="assets/img/galeri5.jpg" alt="Repair">
                <img src="assets/img/galeri6.jpg" alt="Repair">
                <img src="assets/img/galeri7.jpg" alt="Repair">
                <img src="assets/img/galeri8.jpg" alt="Repair">
                <img src="assets/img/galeri9.jpg" alt="Repair">
            </div>
        </div>
    </section>
    <!-- Gallery End -->

    <!-- Testimonial Start -->
    <section class="testimonial" id="testimonial">
        <h1>TESTI<span>MONIALS</span></h1>
        <hr>
        <div id="carouselTestimonial" class="carousel carousel-testimonial slide text-center" data-bs-ride="carousel">
            <div class="carousel-inner mb-10">
                <div class="carousel-item text-center text-wrap active">
                    <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">@edwinbaskara</strong></h5>
                    <p class="m-0 pt-3 text-wrap">Solusi sepatu kotor anda, Bersih, Wangi, Like a New.</p>
                </div>
                <div class="carousel-item text-center">
                    <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">@assitanurbaiti</strong></h5>
                    <p class="m-0 pt-3 text-wrap">Engga tau ini hasil tangan manusia yang mana dan yang seperti apa. Nice job af. Thankioo, Enggak nyesel samsek.</p>
                </div>
                <div class="carousel-item text-center">
                    <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">@yayaas</strong></h5>
                    <p class="m-0 pt-3">untuk membersihkan langkah-langkah kita dari masa lalu yang kelam, sepatu kita juga harus bersih! Jangan bimbang,
                        <br> ini buktinya cek @beshoescucisepatu.
                    </p>
                </div>
                <div class="carousel-item text-center">
                    <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">@rickysnggh</strong></h5>
                    <p class="m-0 pt-3">terima kasih. tempat cuci sepatu yang affordable, for sure clean bisa COD lagi atat drop your address nanti
                        <br> dijemput sama admin.
                    </p>
                </div>
                <div class="carousel-item text-center">
                    <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">@widarwatii_</strong></h5>
                    <p class="m-0 pt-3">thx u bestie sudah bikin sepatuku kayak baru lagi.</p>
                </div>
                <div class="carousel-item text-center">
                    <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">@agus_kempling</strong></h5>
                    <p class="m-0 pt-3">Sepatu lama terlihat baru kembali.</p>
                </div>
            </div>
            <div class="container p-3">
                <ol class="carousel-indicators position-static">
                    <li data-bs-target="#carouselTestimonial" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselTestimonial" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselTestimonial" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carouselTestimonial" data-bs-slide-to="3"></li>
                    <li data-bs-target="#carouselTestimonial" data-bs-slide-to="4"></li>
                    <li data-bs-target="#carouselTestimonial" data-bs-slide-to="5"></li>
                </ol>
            </div>
            <a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselTestimonial" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>

    </section>
    <!-- Testimonial Start -->

    <!-- Contact Start -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.215649314796!2d110.4215421!3d-7.659948299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5f827c13e841%3A0x475894f89a802320!2sBeshoes%20Cuci%20Sepatu!5e0!3m2!1sid!2sid!4v1688752811328!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-5">
                    <center>
                        <h4>Contact Us</h4>
                    </center>
                    <div class="mt-5">
                        <div class="d-flex">
                            <i class="ri-map-pin-line"></i>
                            <p>Address: Jl Kaliurang Km 17,5 ruko no 3 selatan SMP N 1 Pakem Sleman</p>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <i class="ri-phone-fill"></i>
                            <p>Contact: 0856-4362-0742</p>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <i class="ri-time-fill"></i>
                            <p>Open: Mon - Sat : 10.00 - 18.00 WIB</p>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <i class="ri-instagram-fill"></i>
                            <p>Instagram: @beshoescucisepatu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact end -->

    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="ri-google-fill"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="ri-instagram-fill"></i></a>

                <!-- Whatsapp -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="ri-whatsapp-fill"></i></a>

                <!-- Map -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="ri-map-pin-fill"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">BESHOES</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>