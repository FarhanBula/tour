<?php
// memanggil library FPDF
include '../phppdf/fpdf.php';
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('times','B',16);
// mencetak string 
$pdf->Cell(190,7,'PEMESANAN TIKET PESAWAT DAN TIKET KERETA API',0,1,'C');
$pdf->Cell(190,7,'Created By :Kelompok 3',0,1,'C');


// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,10,'',0,1);
$pdf->Cell(52,7,'TABEL CUSTOMER',0,1,'C');


$pdf->SetFont('Arial','B',10,5);
$pdf->Cell(8,8,'NO',1,0,'C');
$pdf->Cell(45,8,'Nama Lengkap',1,0,'C');
$pdf->Cell(50,8,'Email',1,0,'C');
$pdf->Cell(48,8,'Kota',1,0,'C');
$pdf->Cell(45,8,'Negara',1,1,'C');

$pdf->SetFont('Arial','',9);

include '../phppdf/db_config.php';
$booking = mysqli_query($connect, "select * from customer");

$no = 1;
while ($row = mysqli_fetch_array($booking)){

    $pdf->Cell(8,8,$no,1,0,'C');
    $pdf->Cell(45,8,$row['name'],1,0,'C');
    $pdf->Cell(50,8,$row['email'],1,0,'C');
    $pdf->Cell(48,8,$row['city'],1,0,'C'); 
    $pdf->Cell(45,8,$row['county'],1,1,'C');

    $no++;
}

$pdf->Output();
?>
