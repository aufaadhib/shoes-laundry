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
            <li><a href="">Services</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="">Testimonials</a></li>
            <li><a href="">Contact</a></li>
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
            <!-- Awal Produk -->
    <div class="container">
        <form action="index.php" method="get">
            <input name="search" class="form-control border border-3 border-dark mt-4 mb-4" list="datalistOptions" id="exampleDataList" placeholder="Masukan Nama Ruangan atau Kapasitas Ruangan">
        </form>
    </div>
    <div class="container mt-2">
        <h5>Produk Terbaru</h5>
    </div>

    <div class="container mb-5">
        <div class="row">
            <?php
            include "koneksi.php";
            if (isset($_GET['search'])) {
                $cari = $_GET['search'];
                //query pencarian biasa lah 
                $query = "SELECT  * FROM ruang WHERE id_ruang = '$cari' LIMIT 1";
            } else {
                // //jika tidak ada pencarian, default yang dijalankan query ini
                // $query = "SELECT * FROM ruang ORDER BY id_ruang ASC";
            }

            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-3">
                    <div class="card border border-dark border-3 mb-3" style="width: 20rem;">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nama_ruang']; ?></h5>
                            <p class="Card-text text-danger">Kapasitas <?php echo ($row['kapasitas']); ?></p>
                            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#testing<?php echo $row['id_ruang']; ?>">
                                Cek Rincian
                            </button>
                            <!-- Modal untuk deskripsi produk -->
                            <div class="modal fade" id="testing<?php echo $row['id_ruang']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row['nama_ruang']; ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><?php echo $row['desc_ruang']; ?></p>
                                            <p class="text-danger">Kapasitas <?php echo ($row['kapasitas']); ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal -->
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <!-- Akhir Produk -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

    </section>

    <!-- Status end -->


    <script type="text/javascript" src="script.js"></script>
</body>

</html>