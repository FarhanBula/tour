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
$pdf->Cell(47,7,'TABEL BOOKING',0,1,'C');


$pdf->SetFont('Arial','B',10);
$pdf->Cell(8,8,'NO',1,0,'C');
$pdf->Cell(35,8,'Kode Booking',1,0,'C');
$pdf->Cell(40,8,'Customer',1,0,'C');
$pdf->Cell(40,8,'Tanggal Booking',1,0,'C');
$pdf->Cell(38,8,'Status',1,0,'C');
$pdf->Cell(30,8,'Biaya',1,1,'C');

$pdf->SetFont('Arial','',10);

include '../phppdf/db_config.php';
$booking = mysqli_query($connect, "select * from booking");

$no = 1;
while ($row = mysqli_fetch_array($booking)){

    $pdf->Cell(8,8,$no,1,0,'C');
    $pdf->Cell(35,8,$row['booking_code'],1,0,'C');
    $pdf->Cell(40,8,$row['customer'],1,0,'C');
    $pdf->Cell(40,8,$row['booking_date'],1,0,'C'); 
    $pdf->Cell(38,8,$row['status'],1,0,'C');
    $pdf->Cell(30,8,$row['payment_status'],1,1,'C');  

    $no++;
}

$pdf->Output();
?>
