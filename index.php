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
            <li><a href="#home">Home</a> </li>
            <li><a href="#search">Status</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Contact</a></li>
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

        <div class="row">
            <div class="about-img">
                <img src="assets/img/logo.png" alt="">
            </div>
            <div class="content">

                <form action="#">
                    <h5>Masukan Kode Invoice</h5>
                    <div class="input-group">
                        <span class="input-group-text" id="addon-wrapping">#</span>
                        <input type="text" class="form-control" placeholder="Unique Code" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <div class="col-auto p-3">
                        <button type="submit" class="btn btn-primary mb-3">Check Status</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Status end -->
    <script type="text/javascript" src="script.js"></script>
</body>

</html>