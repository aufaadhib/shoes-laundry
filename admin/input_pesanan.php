<?php
ob_start();
session_start();
$username = $_SESSION['username'];
if (!isset($username)) {
    header('location:index.php');
}
include "../koneksi.php";
$nama = "";
$paket = "";
$notelp = "";
$alamat = "";
$error = "";
$errorgakbalik = "";
$sukses = "";


if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
// FUNGSI UPDATE UNTUK MENGAMBIL DATA DARI TABLE MAHASISWA
if ($op == 'update') {
    $id         = $_GET['id'];
    $sql1       = "select * from pesanan where id_pesanan = '$id'";
    $q1         = mysqli_query($conn, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nama = isset($r1['nama']) ? $r1['nama'] : '';
    $notelp      = isset($r1['notelp']) ? $r1['notelp'] : '';
    $alamat  = isset($r1['alamat']) ? $r1['alamat'] : '';
    $paket  = isset($r1['paket']) ? $r1['paket'] : '';

    if ($id == '') {
        $error = "Data tidak ditemukan";
    }
}
//Create data
if (isset($_POST['submit'])) { //UNTUK CREATE DAN UPDATE
    // $id = $_GET['id'];
    $nama = $_POST['nama'];
    $paket = $_POST['id_paket'];
    $notelp = $_POST['notelp'];
    $alamat = $_POST['alamat'];

    if ($nama && $paket && $notelp && $alamat && $paket) {
        if ($op == 'update') { //FUNGSI UNTUK UPDATE
            $sql1 = "update pesanan set nama = '$nama', notelp ='$notelp', alamat ='$alamat',id_paket='$paket' where id_pesanan = '$id' ";
            $q1 = mysqli_query($conn, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error = "Data gagal diupdate";
            }
        } else { //FUNGSI UNTUK CREATE
            $sql1 = "insert into pesanan ( nama, id_paket, notelp, alamat) VALUES ( '" . $nama . "', '" . $paket . "', '" . $notelp . "', '" . $alamat . "')";
            $q1 = mysqli_query($conn, $sql1);
            if ($q1) {
                $sukses     = "Berhasil Memasukan Data Baru";
            } else {
                $errorgakbalik      = "Gagal Memasukan Data.";
            }
        }
    } else {
        $errorgakbalik = "Silahkan Masukan Semua Data";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 90px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            z-index: 99;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 11.5rem;
                padding: 0;
            }
        }

        .navbar {
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
        }

        @media (min-width: 767.98px) {
            .navbar {
                top: 0;
                position: sticky;
                z-index: 999;
            }
        }

        .sidebar .nav-link {
            color: #333;
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="#">
                Admin Dashboard
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Hello, Admin
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="dashboard.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span class="ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pesanan.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span class="ml-2">Pesanan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="paket.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span class="ml-2">Input Paket</span>
                            </a>
                            <a class="nav-link active" href="input_pesanan.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span class="ml-2">Input Pesanan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <h1 class="h2">Input Pesanan</h1>
                <div class="row">
                    <div class="col-10 col-xl mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Pesan Laundry</h5>
                            <!-- Ini Alert -->
                            <div class="container mt-3">
                                <?php
                                if ($error) {
                                ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error ?>
                                    </div>
                                <?php
                                    header("refresh:1;url=index.php");
                                }
                                ?>
                                <?php
                                if ($errorgakbalik) {
                                ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $errorgakbalik ?>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($sukses) {
                                ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $sukses ?>
                                    </div>
                                <?php
                                    header("refresh:1;url=pesanan.php");
                                }
                                ?>
                            </div>
                            <!-- Ini akhir Alert -->
                            <!-- Awal Form Pesanan -->
                            <section class=" text-dark p-5 p-lg-3">
                                <div class="container">
                                    <form class="row g-3" method="POST" action="">
                                        <div class="col-md-6">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama pelanggan" value="<?php echo $nama ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="notelp" class="form-label">No Telp</label>
                                            <input type="number" class="form-control" name="notelp" placeholder="Masukkan no telp pelanggan" value="<?php echo $notelp ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="textarea" class="form-control" name="alamat" placeholder="Masukkan alamat pelanggan" value="<?php echo $alamat ?>">
                                        </div>
                                        <div class="col-12">
                                            <label for="paket" class="form-label">Pilih Paket Laundry</label>
                                            <select name="id_paket" class="form-select" aria-label="Default select example" placeholder="Masukkan alamat pelanggan">
                                                <option disabled>Pilihan Paket</option>
                                                <?php
                                                include "./koneksi.php";
                                                $paket = mysqli_query($conn, "SELECT * from paket ORDER BY id_paket DESC");
                                                while ($r = mysqli_fetch_array($paket)) {
                                                ?>
                                                    <option value="<?php echo $r['id_paket'] ?>" <?php echo ($r['id_paket'] == $paket) ? 'selected' : ''; ?>><?php echo $r['nama_paket'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary" name="submit">Save</button>
                                        </div>
                                    </form>

                                </div>
                                <footer class="pt-5 d-flex justify-content-between">
                                    <span>Copyright © 2023 <a href="https://www.instagram.com/dimasasna/">BESHOES</a></span>
                                </footer>
                            </section>
                            <!-- Akhir Pesanan -->
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>