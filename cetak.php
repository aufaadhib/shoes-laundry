<?php 
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT pesanan.id_pesanan, pesanan.nama_peminjam, pesanan.tanggal_pinjam, ruang.nama_ruang, pesanan.notelp, pesanan.tanggal_kembali, pesanan.tgl_pesan, ruang.kapasitas, pesanan.status  FROM pesanan, ruang where ruang.id_ruang = pesanan.id_ruang and id_pesanan = '".$_GET['id']."'");
$out = mysqli_fetch_array($query);
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();

//set font jadi arial, bold, 14pt
$pdf->SetFont('Arial','B',14);
if($out['status'])
//Cell(width , height , text , border , end line , [align] ) isi dari cell tersebut

if($out['status']=='Disetujui'){
    $pdf->SetTextColor(0,255,0);
    $pdf->Cell(188 ,10,'[DISETUJUI]',1,1,'C');
    $pdf->Cell(10, 10, '', 0, 1);
}elseif($out['status']=='Pending'){
    $pdf->SetTextColor(252,165,3);
    $pdf->Cell(188 ,10,'[PENDING]',1,1,'C');
    $pdf->Cell(10, 10, '', 0, 1);
    } else {
        $pdf->SetTextColor(255, 0, 0);
        $pdf->Cell(188, 10, '[DITOLAK]', 1, 1, 'C');
        $pdf->Cell(10, 10, '', 0, 1);
    }


$pdf->SetTextColor(0,0,0);
$pdf->Cell(130 ,5,'PEMINJAMAN RUANGAN',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);//end of line

//set font jadi arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'[Kampus]',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'[Universitas Ahmad Dahlan]',0,0);
$pdf->Cell(25 ,5,'Date',0,0);
$pdf->Cell(34 ,5,$out['tgl_pesan'],0,1);//end of line

$pdf->Cell(130 ,5,'Phone [+62xxxxxxx]',0,0);
$pdf->Cell(25 ,5,'Invoice #',0,0);
$pdf->Cell(34 ,5,$out['id_pesanan'],0,1);//end of line


//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//alamat billing 
$pdf->Cell(100 ,5,'Identitas Peminjam',0,1);//end of line

//tambah dummy cell di awal untuk indentasi
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'[' .$out['nama_peminjam'] .']',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'[' .$out['notelp'] .']',0,1);
 
//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice 
$pdf->SetFont('Arial','B',12);

$pdf->Cell(60 ,7,'Nama Ruangan',1,0);
$pdf->Cell(25 ,7,'Kapasitas',1,0);
$pdf->Cell(45 ,7,'Tanggal Pinjam',1,0);
$pdf->Cell(45 ,7,'Tanggal Kembali',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Angka diratakan kanan, jadi kita beri property 'R' untuk align

$pdf->Cell(60 ,7,$out['nama_ruang'],1,0);
$pdf->Cell(25 ,7,$out['kapasitas'],1,0);
$pdf->Cell(45 ,7,$out['tanggal_pinjam'],1,0);
$pdf->Cell(45 ,7,$out['tanggal_kembali'],1,1,);//end of line

$pdf->Output();
?>