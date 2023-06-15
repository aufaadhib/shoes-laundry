<?php
session_start();
$username = $_SESSION['username'];
$level = $_SESSION['level'];
if (!isset($username)) {
    header('location:index.php');
}
if ($level != 'ADMIN') {
    echo '<script type ="text/JavaScript">';
    echo 'alert("Akses ditolak")';
    echo '</script>';
    header('location:index.php');
}
include "koneksi.php";
$namapeminjam = "";
$namaruang = "";
$tglpinjam = "";
$tglkembali = "";
$notelp = "";
$error = "";
$errorgakbalik = "";
$sukses = "";
// mengambil data op di update dan delete
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
// fungsi delete mengambil dari variable op yang dikirim lewat url
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "delete from pesanan where id_pesanan = '$id'";
    $q1 = mysqli_query($conn, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error = "Gagal hapus data";
    }
}
// FUNGSI UPDATE UNTUK MENGAMBIL DATA DARI TABLE MAHASISWA
if ($op == 'update') {
    $id         = $_GET['id'];
    $sql1       = "select * from pesanan where id_pesanan = '$id'";
    $q1         = mysqli_query($conn, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $namapeminjam = isset($r1['nama_peminjam']) ? $r1['nama_peminjam'] : '';
    $namaruang  = isset($r1['id_ruang']) ? $r1['id_ruang'] : '';
    $notelp     = isset($r1['notelp']) ? $r1['notelp'] : '';
    $tglpinjam     = isset($r1['tanggal_pinjam']) ? $r1['tanggal_pinjam'] : '';
    $tglkembali     = isset($r1['tanggal_kembali']) ? $r1['tanggal_kembali'] : '';

    if ($id == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['submit'])) { //UNTUK CREATE DAN UPDATE
    $namapeminjam = $_POST['nama'];
    $notelp = $_POST['notelp'];
    $tglpinjam = $_POST['tglpinjam'];
    $tglkembali = $_POST['tglkembali'];
    $namaruang = $_POST['selectruang'];

    if ($namapeminjam && $notelp && $tglpinjam && $namaruang && $tglkembali) {
        if ($op == 'update') { //FUNGSI UNTUK UPDATE
            $sql1 = "update pesanan set nama_peminjam = '$namapeminjam', notelp ='$notelp', tanggal_pinjam ='$tglpinjam', id_ruang = '$namaruang', tanggal_kembali = '$tglkembali' where id_pesanan = '$id' ";
            $q1 = mysqli_query($conn, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error = "Data gagal diupdate";
            }
        } else { //FUNGSI UNTUK CREATE
            $sql1 = "insert into pesanan (nama_peminjam, notelp, tanggal_pinjam, id_ruang, tanggal_kembali) VALUES ( '" . $namapeminjam . "', '" . $notelp . "', '" . $tglpinjam . "', '" . $namaruang . "', '" . $tglkembali . "')";
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
</head>

<body>
    <!-- Ini Awal Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-4">
        <div class="container">
            <a class="navbar-brand" href="#"><b>PEMINJAMAN RUANGAN</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="user.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="pesanan.php"><b>Pesanan</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="logout.php"><b>Logout</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <!-- Ini akhir Navbar -->
        <header>
        <a href="#home" class="logo"><i class="ri-water-flash-fill"></i><span>Beshoes</span></a>
        <ul class="navbar-navi">
            <li><a href="#home">Home</a> </li>
            <li><a href="pesanan.php">Pesanan</a></li>
            <li><a href="logout.php">Logout</a></li>
            <!-- <li><a href="">Gallery</a></li>
            <li><a href="">Testimonials</a></li>
            <li><a href="">Contact</a></li> -->
        </ul>
        <div class="navbar-extra">
            <div class="navbar-extra-menu" id="hamburger-menu"><i class="ri-menu-line"></i></div>
        </div>
    </header>
    <!-- Navbar End -->
    <!-- Ini Alert -->
    <div class="container mt-3">
        <?php
        if ($error) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error ?>
            </div>
        <?php
            header("refresh:1;url=pesanan.php");
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
    <section class=" text-dark pd-10 p-lg-3">
        <div class="container">
            <nav class="navbar text-white" style="background-color: #0d6efd">
                &nbsp;&nbsp; Formulir Peminjaman
            </nav><br>
            <form class="row g-3" method="POST" action="">
                <div class="col-md-6">
                    <label for="inputnim" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $namapeminjam ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputnama" class="form-label">No Telp</label>
                    <input type="number" class="form-control" name="notelp" value="<?php echo $notelp ?>">
                </div>
                <div class="col-6">
                    <label for="inputalamat" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control" name="tglpinjam" placeholder="1234 Main St" value="<?php echo $tglpinjam ?>">
                </div>
                <div class="col-6">
                    <label for="inputalamat" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control" name="tglkembali" placeholder="1234 Main St" value="<?php echo $tglkembali ?>">
                </div>
                <div class="col-12">
                    <label for="inputemail" class="form-label">Pilih Ruang</label>
                    <select name="selectruang" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <?php
                        include "koneksi.php";
                        $namaruangan = mysqli_query($conn, "SELECT * from ruang ORDER BY id_ruang DESC");
                        while ($r = mysqli_fetch_array($namaruangan)) {
                        ?>
                            <option value="<?php echo $r['id_ruang'] ?>" <?php echo ($r['id_ruang'] == $namaruang) ? 'selected' : ''; ?>><?php echo $r['nama_ruang'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="submit">Pesan</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Akhir Pesanan -->

    <div class="container mb-5">
        <nav class="navbar text-white" style="background-color: #0d6efd">
            &nbsp;&nbsp; Daftar Peminjaman
        </nav><br>
        <div class="table-responsive">
            <?php
            include 'koneksi.php';
            echo "<table class='table table-striped table-hover'>";
            echo "<thead>";
            echo "<tr class='table-primary'>";
            echo "<th scope='col'>No</th>";
            echo "<th scope='col'>Nama</th>";
            echo "<th scope='col'>No Telp</th>";
            echo "<th scope='col'>Ruangan</th>";
            echo "<th scope='col'>Tanggal Pinjam</th>";
            echo "<th scope='col'>Tanggal Kembali</th>";
            echo "<th scope='col'>Status</th>";
            echo "<th style='width:20%' scope='col'>Action</th>";
            echo "</tr>";
            echo "</thead>";
            include "koneksi.php";
            $tampil = mysqli_query($conn, "SELECT pesanan.id_pesanan, pesanan.nama_peminjam, pesanan.tanggal_pinjam, pesanan.tanggal_kembali, pesanan.notelp, ruang.nama_ruang, pesanan.status from pesanan, ruang where ruang.id_ruang = pesanan.id_ruang");
            $i = 1;
            echo "<tbody>";
            foreach ($tampil as $row) {
                echo "<tr>";
                echo "<th scope='row'>" . $i++ . "</th>";
                echo "<td>" . $row["nama_peminjam"] . "</td>";
                echo "<td>" . $row["notelp"] . "</td>";
                echo "<td>" . $row["nama_ruang"] . "</td>";
                echo "<td>" . $row["tanggal_pinjam"] . "</td>";
                echo "<td>" . $row["tanggal_kembali"] . "</td>";
                if($row['status']=='Disetujui'){
                    echo "<td> <span class='badge text-bg-success'>DISETUJUI</span></td>";
                }elseif($row['status']=='Ditolak'){
                    echo "<td> <span class='badge text-bg-danger'>DITOLAK</span></td>";
                }else{
                    echo "<td> <span class='badge text-bg-warning'>PENDING</span></td>";
                }
                echo "<td><a class='btn btn-primary' href='pesanan.php?op=update&id=$row[id_pesanan]'>Update</a> <a class='btn btn-danger' href='pesanan.php?op=delete&id=$row[id_pesanan]'>Delete</a> 
                <a class='btn btn-info text-white' href='cetak.php?id=$row[id_pesanan]'>Cetak</a></td>" ;
                
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            ?>
        </div>
    </div>
</body>

</html>