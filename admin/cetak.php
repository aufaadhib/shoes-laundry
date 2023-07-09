<?php 
include '../koneksi.php';

$query = mysqli_query($conn, "SELECT pesanan.id_pesanan, pesanan.nama, pesanan.notelp, paket.nama_paket, pesanan.tgl_pesan, paket.harga, paket.deskripsi  FROM pesanan, paket where paket.id_paket = pesanan.id_paket and id_pesanan = '".$_GET['id']."'");
$out = mysqli_fetch_array($query);
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
// Logo
$pdf->Image('../assets/img/logo.png', 42, 12, 10);

// Judul
$pdf->Cell(0, 15, '  BShoes Laundry', 1, 1, 'C');

// Garis pemisah
$pdf->Line(10, 30, $pdf->GetPageWidth() - 10, 30);

// Membuat ruang kosong setelah header
$pdf->Cell(10, 10, '', 0, 1);

$pdf->SetTextColor(0,0,0);
$pdf->Cell(100 ,10,'Data Diri Peminjam',0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(130 ,10,'Nama     : '.$out['nama'],0,1);
$pdf->Cell(130 ,10,'No Telp  : '.$out['nama'],0,1);
$pdf->Cell(130 ,10,'Alamat   : '.$out['nama'],0,1);
$pdf->Output();
?>
